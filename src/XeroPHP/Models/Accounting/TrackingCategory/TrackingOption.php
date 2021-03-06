<?php

namespace XeroPHP\Models\Accounting\TrackingCategory;

use XeroPHP\Remote;


class TrackingOption extends Remote\Object {

    /**
     * The Xero identifier for a tracking optione.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     *
     * @property string TrackingOptionID
     */

    /**
     * The name of the tracking option e.g. Marketing, East
     *
     * @property string Name
     */

    /**
     * The status of a tracking option
     *
     * @property string Status
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'TrackingOptions';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TrackingOption';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'TrackingOptionID';
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
            'TrackingOptionID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getTrackingOptionID() {
        return isset($this->_data['TrackingOptionID']) ? $this->_data['TrackingOptionID'] : null;
    }

    /**
     * @param string $value
     * @return TrackingOption
     */
    public function setTrackingOptionID($value) {
        $this->propertyUpdated('TrackingOptionID', $value);
        $this->_data['TrackingOptionID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }

    /**
     * @param string $value
     * @return TrackingOption
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return isset($this->_data['Status']) ? $this->_data['Status'] : null;
    }

    /**
     * @param string $value
     * @return TrackingOption
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }


}