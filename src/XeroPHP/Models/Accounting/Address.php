<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class Address extends Remote\Object {

    /**
     * 
     *
     * @property string AddressType
     */

    /**
     *  max length = 500
     *
     * @property string AddressLine1
     */

    /**
     *  max length = 500
     *
     * @property string AddressLine2
     */

    /**
     *  max length = 500
     *
     * @property string AddressLine3
     */

    /**
     *  max length = 500
     *
     * @property string AddressLine4
     */

    /**
     *  max length = 255
     *
     * @property string City
     */

    /**
     *  max length = 255
     *
     * @property string Region
     */

    /**
     *  max length = 50
     *
     * @property string PostalCode
     */

    /**
     *  max length = 50
     *
     * @property string Country
     */

    /**
     *  max length = 255
     *
     * @property string AttentionTo
     */


    const ADDRESS_TYPE_POBOX    = 'POBOX';
    const ADDRESS_TYPE_STREET   = 'STREET';
    const ADDRESS_TYPE_DELIVERY = 'DELIVERY';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Addresses';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Address';
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
            'AddressType' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'AddressLine1' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AddressLine2' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AddressLine3' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AddressLine4' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'City' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Region' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PostalCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Country' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AttentionTo' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getAddressType() {
        return isset($this->_data['AddressType']) ? $this->_data['AddressType'] : null;
    }

    /**
     * @param string $value
     * @return Address
     */
    public function setAddressType($value) {
        $this->propertyUpdated('AddressType', $value);
        $this->_data['AddressType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1() {
        return isset($this->_data['AddressLine1']) ? $this->_data['AddressLine1'] : null;
    }

    /**
     * @param string $value
     * @return Address
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
     * @return Address
     */
    public function setAddressLine2($value) {
        $this->propertyUpdated('AddressLine2', $value);
        $this->_data['AddressLine2'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine3() {
        return isset($this->_data['AddressLine3']) ? $this->_data['AddressLine3'] : null;
    }

    /**
     * @param string $value
     * @return Address
     */
    public function setAddressLine3($value) {
        $this->propertyUpdated('AddressLine3', $value);
        $this->_data['AddressLine3'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine4() {
        return isset($this->_data['AddressLine4']) ? $this->_data['AddressLine4'] : null;
    }

    /**
     * @param string $value
     * @return Address
     */
    public function setAddressLine4($value) {
        $this->propertyUpdated('AddressLine4', $value);
        $this->_data['AddressLine4'] = $value;
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
     * @return Address
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
     * @return Address
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
     * @return Address
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
     * @return Address
     */
    public function setCountry($value) {
        $this->propertyUpdated('Country', $value);
        $this->_data['Country'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttentionTo() {
        return isset($this->_data['AttentionTo']) ? $this->_data['AttentionTo'] : null;
    }

    /**
     * @param string $value
     * @return Address
     */
    public function setAttentionTo($value) {
        $this->propertyUpdated('AttentionTo', $value);
        $this->_data['AttentionTo'] = $value;
        return $this;
    }


}