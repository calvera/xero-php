<?php

namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;

class TrackingCategory extends Remote\Object {

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return '';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TrackingCategory';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return '';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties() {
        return array(
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Option' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
        );
    }


    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption() {
        return isset($this->_data['Option']) ? $this->_data['Option'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setOption($value) {
        $this->propertyUpdated('Option', $value);
        $this->_data['Option'] = $value;
        return $this;
    }

    public function toStringArray() {
        return [
            'TrackingCategory' => [
                'Name' => $this->getName(),
                'Option' => $this->getOption(),
            ]
        ];
    }
}
