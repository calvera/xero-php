<?php

namespace XeroPHP\Models\Accounting\ExpenseClaim;

use XeroPHP\Remote;


class ExpenseClaim extends Remote\Object {

    /**
     * Xero generated unique identifier for an expense claim
     *
     * @property string ExpenseClaimID
     */

    /**
     * Current status of an expense claim – see status types
     *
     * @property string Status
     */

    /**
     * Last modified date UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * The total of an expense claim being paid
     *
     * @property float Total
     */

    /**
     * The amount due to be paid for an expense claim
     *
     * @property float AmountDue
     */

    /**
     * The amount still to pay for an expense claim
     *
     * @property float AmountPaid
     */

    /**
     * The date when the expense claim is due to be paid YYYY-MM-DD
     *
     * @property \DateTime PaymentDueDate
     */

    /**
     * The date the expense claim will be reported in Xero YYYY-MM-DD
     *
     * @property \DateTime ReportingDate
     */

    /**
     * The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     *
     * @property string ReceiptID
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ExpenseClaim';
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
            'Status' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'AmountDue' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'AmountPaid' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'PaymentDueDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'ReportingDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'ReceiptID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false)
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
     * @return string
     */
    public function getStatus() {
        return isset($this->_data['Status']) ? $this->_data['Status'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }


    /**
     * @return float
     */
    public function getTotal() {
        return isset($this->_data['Total']) ? $this->_data['Total'] : null;
    }


    /**
     * @return float
     */
    public function getAmountDue() {
        return isset($this->_data['AmountDue']) ? $this->_data['AmountDue'] : null;
    }


    /**
     * @return float
     */
    public function getAmountPaid() {
        return isset($this->_data['AmountPaid']) ? $this->_data['AmountPaid'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getPaymentDueDate() {
        return isset($this->_data['PaymentDueDate']) ? $this->_data['PaymentDueDate'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getReportingDate() {
        return isset($this->_data['ReportingDate']) ? $this->_data['ReportingDate'] : null;
    }


    /**
     * @return string
     */
    public function getReceiptID() {
        return isset($this->_data['ReceiptID']) ? $this->_data['ReceiptID'] : null;
    }

    /**
     * @param string $value
     * @return ExpenseClaim
     */
    public function setReceiptID($value) {
        $this->propertyUpdated('ReceiptID', $value);
        $this->_data['ReceiptID'] = $value;
        return $this;
    }


}