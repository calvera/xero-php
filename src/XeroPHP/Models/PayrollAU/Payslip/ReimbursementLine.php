<?php

namespace XeroPHP\Models\PayrollAU\Payslip;

use XeroPHP\Remote;


class ReimbursementLine extends Remote\Object {

    /**
     * Xero identifier for payroll reimbursement type
     *
     * @property string ReimbursementTypeID
     */

    /**
     * Reimbursement lines description (max length 50)
     *
     * @property string Description
     */

    /**
     * Reimbursement expense account. For posted pay run you should be able to see expense account code
     *
     * @property string ExpenseAccount
     */

    /**
     * Reimbursement amount
     *
     * @property float Amount
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ReimbursementLine';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ReimbursementLine';
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
            'ReimbursementTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ExpenseAccount' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getReimbursementTypeID() {
        return isset($this->_data['ReimbursementTypeID']) ? $this->_data['ReimbursementTypeID'] : null;
    }

    /**
     * @param string $value
     * @return ReimbursementLine
     */
    public function setReimbursementTypeID($value) {
        $this->propertyUpdated('ReimbursementTypeID', $value);
        $this->_data['ReimbursementTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return isset($this->_data['Description']) ? $this->_data['Description'] : null;
    }

    /**
     * @param string $value
     * @return ReimbursementLine
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseAccount() {
        return isset($this->_data['ExpenseAccount']) ? $this->_data['ExpenseAccount'] : null;
    }

    /**
     * @param string $value
     * @return ReimbursementLine
     */
    public function setExpenseAccount($value) {
        $this->propertyUpdated('ExpenseAccount', $value);
        $this->_data['ExpenseAccount'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount() {
        return isset($this->_data['Amount']) ? $this->_data['Amount'] : null;
    }

    /**
     * @param float $value
     * @return ReimbursementLine
     */
    public function setAmount($value) {
        $this->propertyUpdated('Amount', $value);
        $this->_data['Amount'] = $value;
        return $this;
    }


}