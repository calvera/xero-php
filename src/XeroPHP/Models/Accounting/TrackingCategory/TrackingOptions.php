<?php

namespace XeroPHP\Models\Accounting\TrackingCategory;

use XeroPHP\Exception;
use XeroPHP\Helpers;
use XeroPHP\Remote\Object;
use XeroPHP\Remote\Request;
use XeroPHP\Remote\URL;

class TrackingOptions extends Object
{
    /**
     * @var string
     */
    private $trackingCategoryId;

    /**
     * @return bool
     */
    public function hasGUID()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->trackingCategoryId;
    }

    /**
     * Get the GUID Property if it exists
     *
     * @return string|null
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get a list of properties
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'TrackingOptions' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\TrackingCategory\\TrackingOptions', true, false]
        ];
    }

    /**
     * Get a list of the supported HTTP Methods
     *
     * @return array
     */
    public static function getSupportedMethods()
    {
        return [
            Request::METHOD_PUT,
        ];
    }

    /**
     * return the URI of the resource (if any)
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'TrackingCategories/%s/Options';
    }

    public static function getRootNodeName()
    {
        return 'Options';
    }

    /**
     * @param string $trackingCategoryId
     * @return $this
     */
    public function setTrackingCategoryId($trackingCategoryId)
    {
        $this->trackingCategoryId = $trackingCategoryId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingCategoryId()
    {
        return $this->trackingCategoryId;
    }

    /**
     * @param TrackingOption $value
     * @return $this
     */
    public function addOption(TrackingOption $value)
    {
        $this->propertyUpdated('Options', $value);
        $this->setDirty('Options');
        $this->_data['Options'][] = $value;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function addActiveOption($name)
    {
        return $this->addOption(
            (new TrackingOption())
                ->setName($name)
                ->setStatus('ACTIVE')
        );
    }

    /**
     * @return null|TrackingOption[]
     */
    public function getOptions()
    {
        return isset($this->_data['Options']) ? $this->_data['Options'] : [];
    }

    /**
     * @return null
     * @throws Exception
     */
    public function save()
    {
        if ($this->_application === null){
            throw new Exception('->save() is only available on objects that have an injected application context.');
        }

        if ($this->isDirty()) {
            $this->validate();

            $method = Request::METHOD_PUT;
            $uri = sprintf(self::getResourceURI(), $this->getTrackingCategoryId());

            if (!self::supportsMethod($method)) {
                throw new Exception('%s doesn\'t support [%s] via the API', get_class($this), $method);
            }

            $response = null;

            if (empty($this->getOptions())) {
                return $response;
            }

            $body = '';
            foreach ($this->getOptions() as $option) {
                $body .= Helpers::arrayToXML([
                    'Option' => [
                        'Name' => $option->getName(),
                        'Status' => $option->getStatus(),
                    ]
                ]);
            }
            $body = "<Options>$body</Options>";
            $url = new URL($this->_application, $uri);
            $request = new Request($this->_application, $url, $method);

            $request->setBody($body)->send();
            $response = $request->getResponse();

            if (false !== $element = current($response->getElements())) {
                $this->fromStringArray($element);
            }

            //Mark the object as clean since no exception was thrown
            $this->setClean();

            return $response;
        }
    }

    /**
     * @return array
     */
    public function toStringArray()
    {
        if (empty($this->getOptions())) {
            return [];
        }

        $data = [];

        foreach ($this->getOptions() as $option) {
            $data['Option'] = [
                'Name' => $option->getName(),
                'Status' => $option->getStatus(),
            ];
        }

        return $data;
    }
}

