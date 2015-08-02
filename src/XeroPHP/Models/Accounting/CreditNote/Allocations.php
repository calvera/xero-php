<?php
namespace XeroPHP\Models\Accounting\CreditNote;

use XeroPHP\Exception;
use XeroPHP\Helpers;
use XeroPHP\Remote\Object;
use XeroPHP\Remote\Request;
use XeroPHP\Remote\URL;

class Allocations extends Object
{
    /**
     * @var string
     */
    private $creditNoteID;

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
        return $this->creditNoteID;
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
            'Allocations' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\CreditNote\\Allocation', true, false]
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
        return 'CreditNotes/%s/Allocations';
    }

    public static function getRootNodeName()
    {
        return 'Allocations';
    }

    /**
     * @param string $creditNoteID
     * @return $this
     */
    public function setCreditNoteID($creditNoteID)
    {
        $this->creditNoteID = $creditNoteID;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreditNoteID()
    {
        return $this->creditNoteID;
    }

    /**
     * @param Allocation $value
     * @return $this
     */
    public function addAllocation(Allocation $value)
    {
        $this->propertyUpdated('Allocations', $value);
        $this->setDirty('Allocations');
        $this->_data['Allocations'][] = $value;

        return $this;
    }

    /**
     * @return null|Allocation[]
     */
    public function getAllocations()
    {
        return isset($this->_data['Allocations']) ? $this->_data['Allocations'] : null;
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
            $uri = sprintf(self::getResourceURI(), $this->getCreditNoteID());

            if (!self::supportsMethod($method)) {
                throw new Exception('%s doesn\'t support [%s] via the API', get_class($this), $method);
            }
            //Put in an array with the first level containing only the 'root node'.
            $data = [self::getRootNodeName() => $this->toStringArray()];

            $url = new URL($this->_application, $uri);
            $request = new Request($this->_application, $url, $method);

            $request->setBody(Helpers::arrayToXML($data))->send();
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
        if (empty($this->getAllocations())) {
            return [];
        }

        $data = [];

        foreach ($this->getAllocations() as $allocation) {
            $data['Allocation'] = [
                'AppliedAmount' => $allocation->getAppliedAmount(),
                'Invoice' => [
                    'InvoiceID' => $allocation->getInvoice()->getInvoiceID(),
                ]
            ];
        }

        return $data;
    }
}
