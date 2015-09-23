<?php

namespace XeroPHP\Remote;

use XeroPHP\Application;
use XeroPHP\Models\Files\Object;
use XeroPHP\Remote\Exception\NotAvailableException;
use XeroPHP\Remote\Exception\RateLimitExceededException;
use XeroPHP\Sleeper;

class Query {

    const ORDER_ASC  = 'ASC';
    const ORDER_DESC = 'DESC';

    /**
     * @var Application
     */
    private $app;

    /**
     * @var ObjectInterface $from_class
     */
    private $from;
    private $where;
    private $order;
    private $modifiedAfter;
    private $page;
    private $offset;

    /**
     * @var bool|null
     */
    private $includeArchived = null;

    /**
     * @var mixed[]
     */
    private $parameters = [];

    public function __construct(Application $app) {
        $this->app = $app;
        $this->where = array();
        $this->order = null;
        $this->modifiedAfter = null;
        $this->page = null;
        $this->offset = null;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function from($class) {

        $this->from = $this->app->validateModelClass($class);

        return $this;
    }

    /**
     * @param string $where
     * @param mixed|null $value
     * @return $this
     */
    public function where($where, $value = null) {
        if ($where && $value) {
            $parameterName = sha1($value);
            $this->where[] = sprintf('%s==%s', $where, ":$parameterName");
            $this->setParameter($parameterName, $value);
        } else {
            $this->where[] = $where;
        }

        return $this;
    }

    /**
     * @param string $where
     * @param mixed|null $value
     * @return $this
     */
    public function andWhere($where, $value = null) {
        return $this->where($where, $value);
    }

    /**
     * @return string
     */
    public function getWhere() {
        return implode(' AND ', array_map(function($where) {
            return "($where)";
        }, $this->where));
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setParameter($key, $value)
    {
        $this->parameters[$key] = $value;

        return $this;
    }

    /**
     * @param mixed[] $values
     * @return $this
     */
    public function setParameters($values)
    {
        $this->parameters = [];
        foreach ($values as $key => $value) {
            $this->setParameter($key, $value);
        }

        return $this;
    }

    /**
     * @param string $order
     * @param string $direction
     * @return $this
     */
    public function orderBy($order, $direction = self::ORDER_ASC) {
        $this->order = sprintf('%s %s', $order, $direction);

        return $this;
    }

    /**
     * @param \DateTime|null $modifiedAfter
     * @return $this
     */
    public function modifiedAfter(\DateTime $modifiedAfter = null) {
        if($modifiedAfter === null) {
            $modifiedAfter = new \DateTime('@0'); // since ever
        }

        $this->modifiedAfter = $modifiedAfter->format('c');

        return $this;
    }

    /**
     * @param int|null $page
     * @return $this
     */
    public function page($page = 1) {
        $this->page = intval($page);

        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function offset($offset = 0) {
        $this->offset = intval($offset);

        return $this;
    }

    /**
     * @param bool|null $includeArchived
     * @return $this
     */
    public function includeArchived($includeArchived = true) {
        if ($includeArchived == true) {
            $this->includeArchived = true;
        } else {
            $this->includeArchived = null;
        }

        return $this;
    }

    /**
     * @param int $sleptTimes
     * @return array
     * @throws \XeroPHP\Exception
     */
    public function execute($sleptTimes = 0) {

        try {
            /** @var ObjectInterface $from_class */
            $from_class = $this->from;
            $request = $this->getRequest();
            $request->send();

            $elements = array();
            foreach ($request->getResponse()->getElements() as $element) {
                /** @var \XeroPHP\Models\Files\Object $built_element */
                $built_element = new $from_class($this->app);
                $built_element->fromStringArray($element);
                $elements[] = $built_element;
            }

            return $elements;
        } catch (RateLimitExceededException $e) {
            Sleeper::sleepUntilNextMinute();

            return $this->execute();
        } catch (NotAvailableException $e) {
            Sleeper::sleepUntilNextMinute();

            return $this->execute();
        }
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        $from_class = $this->from;
        $url = new URL($this->app, $from_class::getResourceURI());
        $request = new Request($this->app, $url, Request::METHOD_GET);

        $where = $this->getParsedWhere();
        if(!empty($where)) {
            $request->setParameter('where', $where);
        }

        if($this->order !== null) {
            $request->setParameter('order', $this->order);
        }

        if($this->modifiedAfter !== null) {
            $request->setHeader('If-Modified-Since', $this->modifiedAfter);
        }

        if($this->page !== null) {
            $request->setParameter('page', $this->page);
        }

        if($this->offset !== null) {
            $request->setParameter('offset', $this->offset);
        }

        if($this->includeArchived) {
            $request->setParameter('includeArchived', true);
        }

        return $request;
    }

    /**
     * @return string
     */
    private function getParsedWhere()
    {
        return preg_replace_callback('/:[_a-zA-Z0-9]+/', function($matches) {
            $parameterKey = ltrim($matches[0], ':');
            $parameterValue = $this->parameters[$parameterKey];

            return $this->convertPHPValueToXeroQuery($parameterValue);
        }, $this->getWhere());
    }

    /**
     * @param string $value
     * @return string
     */
    private function convertPHPValueToXeroQuery($value)
    {
        if ($value instanceof \DateTime) {
            return sprintf('DateTime(%s)', $value->format('Y,m,d'));
        } else if (is_int($value) || is_float($value)) {
            return $value;
        } else if ($value === true) {
            return 'true';
        } else if ($value === false) {
            return 'false';
        }

        return sprintf('"%s"', addslashes($value)); // TODO improve string escaping
    }

    public function getFrom() {
        return $this->from;
    }
}
