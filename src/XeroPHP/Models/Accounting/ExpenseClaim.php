<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class ExpenseClaim extends Remote\Object {

    /**
     * Xero identifier
     *
     * @property string ExpenseClaimID
     */

    /**
     * See Users
     *
     * @property User User
     */

    /**
     * See Receipts
     *
     * @property Receipt[] Receipts
     */


    const EXPENSE_CLAIM_STATUS_SUBMITTED  = 'SUBMITTED';
    const EXPENSE_CLAIM_STATUS_AUTHORISED = 'AUTHORISED';
    const EXPENSE_CLAIM_STATUS_PAID       = 'PAID';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ExpenseClaims';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ExpenseClaim';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'ExpenseClaimID';
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
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_POST
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
            'ExpenseClaimID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'User' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\User', false, false),
            'Receipts' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Receipt', true, false)
        );
    }


    /**
     * @return string
     */
    public function getExpenseClaimID() {
        return isset($this->_data['ExpenseClaimID']) ? $this->_data['ExpenseClaimID'] : null;
    }

    /**
     * @param string $value
     * @return ExpenseClaim
     */
    public function setExpenseClaimID($value) {
        $this->propertyUpdated('ExpenseClaimID', $value);
        $this->_data['ExpenseClaimID'] = $value;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser() {
        return isset($this->_data['User']) ? $this->_data['User'] : null;
    }

    /**
     * @param User $value
     * @return ExpenseClaim
     */
    public function setUser(User $value) {
        $this->propertyUpdated('User', $value);
        $this->_data['User'] = $value;
        return $this;
    }

    /**
     * @return Receipt[]
     */
    public function getReceipts() {
        return isset($this->_data['Receipts']) ? $this->_data['Receipts'] : null;
    }

    /**
     * @param Receipt $value
     * @return ExpenseClaim
     */
    public function addReceipt(Receipt $value) {
        $this->propertyUpdated('Receipts', $value);
        $this->_data['Receipts'][] = $value;
        return $this;
    }


}