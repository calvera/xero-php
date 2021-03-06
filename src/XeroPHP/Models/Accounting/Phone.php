<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class Phone extends Remote\Object {

    /**
     * 
     *
     * @property string PhoneType
     */

    /**
     *  max length = 50
     *
     * @property string PhoneNumber
     */

    /**
     *  max length = 10
     *
     * @property string PhoneAreaCode
     */

    /**
     *  max length = 20
     *
     * @property string PhoneCountryCode
     */


    const PHONE_TYPE_DEFAULT = 'DEFAULT';
    const PHONE_TYPE_DDI     = 'DDI';
    const PHONE_TYPE_MOBILE  = 'MOBILE';
    const PHONE_TYPE_FAX     = 'FAX';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Phones';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Phone';
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
            'PhoneType' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'PhoneNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PhoneAreaCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PhoneCountryCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getPhoneType() {
        return isset($this->_data['PhoneType']) ? $this->_data['PhoneType'] : null;
    }

    /**
     * @param string $value
     * @return Phone
     */
    public function setPhoneType($value) {
        $this->propertyUpdated('PhoneType', $value);
        $this->_data['PhoneType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() {
        return isset($this->_data['PhoneNumber']) ? $this->_data['PhoneNumber'] : null;
    }

    /**
     * @param string $value
     * @return Phone
     */
    public function setPhoneNumber($value) {
        $this->propertyUpdated('PhoneNumber', $value);
        $this->_data['PhoneNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneAreaCode() {
        return isset($this->_data['PhoneAreaCode']) ? $this->_data['PhoneAreaCode'] : null;
    }

    /**
     * @param string $value
     * @return Phone
     */
    public function setPhoneAreaCode($value) {
        $this->propertyUpdated('PhoneAreaCode', $value);
        $this->_data['PhoneAreaCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneCountryCode() {
        return isset($this->_data['PhoneCountryCode']) ? $this->_data['PhoneCountryCode'] : null;
    }

    /**
     * @param string $value
     * @return Phone
     */
    public function setPhoneCountryCode($value) {
        $this->propertyUpdated('PhoneCountryCode', $value);
        $this->_data['PhoneCountryCode'] = $value;
        return $this;
    }


}