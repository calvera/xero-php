<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class User extends Remote\Object {

    /**
     * Xero identifier
     *
     * @property string UserID
     */

    /**
     * Email address of user
     *
     * @property string EmailAddress
     */

    /**
     * First name of user
     *
     * @property string FirstName
     */

    /**
     * Last name of user
     *
     * @property string LastName
     */

    /**
     * Timestamp of last change to user
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * Boolean to indicate if user is the subscriber
     *
     * @property bool IsSubscriber
     */

    /**
     * User role (see Types)
     *
     * @property string OrganisationRole
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Users';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'User';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'UserID';
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
            'UserID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmailAddress' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'FirstName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'IsSubscriber' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'OrganisationRole' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getUserID() {
        return isset($this->_data['UserID']) ? $this->_data['UserID'] : null;
    }

    /**
     * @param string $value
     * @return User
     */
    public function setUserID($value) {
        $this->propertyUpdated('UserID', $value);
        $this->_data['UserID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress() {
        return isset($this->_data['EmailAddress']) ? $this->_data['EmailAddress'] : null;
    }

    /**
     * @param string $value
     * @return User
     */
    public function setEmailAddress($value) {
        $this->propertyUpdated('EmailAddress', $value);
        $this->_data['EmailAddress'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName() {
        return isset($this->_data['FirstName']) ? $this->_data['FirstName'] : null;
    }

    /**
     * @param string $value
     * @return User
     */
    public function setFirstName($value) {
        $this->propertyUpdated('FirstName', $value);
        $this->_data['FirstName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return isset($this->_data['LastName']) ? $this->_data['LastName'] : null;
    }

    /**
     * @param string $value
     * @return User
     */
    public function setLastName($value) {
        $this->propertyUpdated('LastName', $value);
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }

    /**
     * @param \DateTime $value
     * @return User
     */
    public function setUpdatedDateUTC(\DateTime $value) {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSubscriber() {
        return isset($this->_data['IsSubscriber']) ? $this->_data['IsSubscriber'] : null;
    }

    /**
     * @param bool $value
     * @return User
     */
    public function setIsSubscriber($value) {
        $this->propertyUpdated('IsSubscriber', $value);
        $this->_data['IsSubscriber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganisationRole() {
        return isset($this->_data['OrganisationRole']) ? $this->_data['OrganisationRole'] : null;
    }

    /**
     * @param string $value
     * @return User
     */
    public function setOrganisationRole($value) {
        $this->propertyUpdated('OrganisationRole', $value);
        $this->_data['OrganisationRole'] = $value;
        return $this;
    }


}