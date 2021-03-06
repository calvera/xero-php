<?php

namespace XeroPHP\Models\Accounting\BankTransfer;

use XeroPHP\Remote;


class FromBankAccount extends Remote\Object {

    /**
     * The Account Code of the Bank Account
     *
     * @property string Code
     */

    /**
     * The ID of the Bank Account
     *
     * @property string AccountID
     */

    /**
     * The Name Bank Account
     *
     * @property string Name
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'FromBankAccount';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'FromBankAccount';
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
            'Code' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'AccountID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getCode() {
        return isset($this->_data['Code']) ? $this->_data['Code'] : null;
    }

    /**
     * @param string $value
     * @return FromBankAccount
     */
    public function setCode($value) {
        $this->propertyUpdated('Code', $value);
        $this->_data['Code'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountID() {
        return isset($this->_data['AccountID']) ? $this->_data['AccountID'] : null;
    }

    /**
     * @param string $value
     * @return FromBankAccount
     */
    public function setAccountID($value) {
        $this->propertyUpdated('AccountID', $value);
        $this->_data['AccountID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }



}