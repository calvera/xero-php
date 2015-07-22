<?php

namespace XeroPHP\Models\PayrollAU\Employee;

use XeroPHP\Remote;


class HomeAddress extends Remote\Object {

    /**
     * Address line 1 for employee home address (max length = 50)
     *
     * @property string AddressLine1
     */

    /**
     * Address line 2 for employee home address (max length = 50)
     *
     * @property string AddressLine2
     */

    /**
     * Suburb for employee home address (max length = 50)
     *
     * @property string City
     */

    /**
     * State abbreviation for employee home address
     *
     * @property string Region
     */

    /**
     * PostCode for employee home address (max length = 4)
     *
     * @property string PostalCode
     */

    /**
     * Country of HomeAddress
     *
     * @property string Country
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'HomeAddress';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'HomeAddress';
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
        return Remote\URL::API_PAYROLL;
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
            'AddressLine1' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AddressLine2' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'City' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Region' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'PostalCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Country' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getAddressLine1() {
        return isset($this->_data['AddressLine1']) ? $this->_data['AddressLine1'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setAddressLine1($value) {
        $this->propertyUpdated('AddressLine1', $value);
        $this->_data['AddressLine1'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2() {
        return isset($this->_data['AddressLine2']) ? $this->_data['AddressLine2'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setAddressLine2($value) {
        $this->propertyUpdated('AddressLine2', $value);
        $this->_data['AddressLine2'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() {
        return isset($this->_data['City']) ? $this->_data['City'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setCity($value) {
        $this->propertyUpdated('City', $value);
        $this->_data['City'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion() {
        return isset($this->_data['Region']) ? $this->_data['Region'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setRegion($value) {
        $this->propertyUpdated('Region', $value);
        $this->_data['Region'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() {
        return isset($this->_data['PostalCode']) ? $this->_data['PostalCode'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setPostalCode($value) {
        $this->propertyUpdated('PostalCode', $value);
        $this->_data['PostalCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry() {
        return isset($this->_data['Country']) ? $this->_data['Country'] : null;
    }

    /**
     * @param string $value
     * @return HomeAddress
     */
    public function setCountry($value) {
        $this->propertyUpdated('Country', $value);
        $this->_data['Country'] = $value;
        return $this;
    }


}