<?php

namespace XeroPHP\Models\PayrollAU\PayItem;

use XeroPHP\Remote;


class ReimbursementType extends Remote\Object {

    /**
     * Name of the reimbursement type (max length = 50)
     *
     * @property string Name
     */

    /**
     * See Accounts
     *
     * @property string AccountCode
     */

    /**
     * Xero identifier
     *
     * @property string ReimbursementTypeID
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ReimbursementTypes';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ReimbursementType';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'ReimbursementTypeID';
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
            'Name' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'AccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'ReimbursementTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
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
     * @return ReimbursementType
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode() {
        return isset($this->_data['AccountCode']) ? $this->_data['AccountCode'] : null;
    }

    /**
     * @param string $value
     * @return ReimbursementType
     */
    public function setAccountCode($value) {
        $this->propertyUpdated('AccountCode', $value);
        $this->_data['AccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReimbursementTypeID() {
        return isset($this->_data['ReimbursementTypeID']) ? $this->_data['ReimbursementTypeID'] : null;
    }

    /**
     * @param string $value
     * @return ReimbursementType
     */
    public function setReimbursementTypeID($value) {
        $this->propertyUpdated('ReimbursementTypeID', $value);
        $this->_data['ReimbursementTypeID'] = $value;
        return $this;
    }


}