<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;


class WorkLocation extends Remote\Object {

    /**
     * Street address of the work location (max length = 400)
     *
     * @property string StreetAddress
     */

    /**
     * The city name of the address (max length = 50)
     *
     * @property string City
     */

    /**
     * The state name of the address
     *
     * @property string State
     */

    /**
     * The latitude of the address
     *
     * @property string Latitude
     */

    /**
     * The longitude of the address
     *
     * @property string Longitude
     */

    /**
     * Xero identifier for a work location
     *
     * @property string WorkLocationID
     */

    /**
     * Suite or apartment or unit information (max length = 50)
     *
     * @property string SuitOrAptOrUnit
     */

    /**
     * Set to true to make this the primary work location
     *
     * @property string IsPrimary
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Worklocations';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'WorkLocation';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'WorkLocationID';
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
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_GET
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
            'StreetAddress' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'City' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'State' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Latitude' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Longitude' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'WorkLocationID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'SuitOrAptOrUnit' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'IsPrimary' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getStreetAddress() {
        return isset($this->_data['StreetAddress']) ? $this->_data['StreetAddress'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setStreetAddress($value) {
        $this->propertyUpdated('StreetAddress', $value);
        $this->_data['StreetAddress'] = $value;
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
     * @return WorkLocation
     */
    public function setCity($value) {
        $this->propertyUpdated('City', $value);
        $this->_data['City'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getState() {
        return isset($this->_data['State']) ? $this->_data['State'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setState($value) {
        $this->propertyUpdated('State', $value);
        $this->_data['State'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude() {
        return isset($this->_data['Latitude']) ? $this->_data['Latitude'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setLatitude($value) {
        $this->propertyUpdated('Latitude', $value);
        $this->_data['Latitude'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude() {
        return isset($this->_data['Longitude']) ? $this->_data['Longitude'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setLongitude($value) {
        $this->propertyUpdated('Longitude', $value);
        $this->_data['Longitude'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkLocationID() {
        return isset($this->_data['WorkLocationID']) ? $this->_data['WorkLocationID'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setWorkLocationID($value) {
        $this->propertyUpdated('WorkLocationID', $value);
        $this->_data['WorkLocationID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuitOrAptOrUnit() {
        return isset($this->_data['SuitOrAptOrUnit']) ? $this->_data['SuitOrAptOrUnit'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setSuitOrAptOrUnit($value) {
        $this->propertyUpdated('SuitOrAptOrUnit', $value);
        $this->_data['SuitOrAptOrUnit'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsPrimary() {
        return isset($this->_data['IsPrimary']) ? $this->_data['IsPrimary'] : null;
    }

    /**
     * @param string $value
     * @return WorkLocation
     */
    public function setIsPrimary($value) {
        $this->propertyUpdated('IsPrimary', $value);
        $this->_data['IsPrimary'] = $value;
        return $this;
    }


}