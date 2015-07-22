<?php

namespace XeroPHP\Models\PayrollUS\PayItem;

use XeroPHP\Remote;


class TimeOffType extends Remote\Object {

    /**
     * Name of the time off type (max length = 50)
     *
     * @property TimeOffType TimeOffType
     */

    /**
     * Select Unpaid Time Off to indicate that an employee will not get paid when taking this time off
     * type.
If Paid Time Off is selected the employee will get paid when taking this time off type and you
     * can accrue the liability on the Balance Sheet
     *
     * @property string TimeOffCategory
     */

    /**
     * The account to which the amount of the time off is to be debited. Only applies for TimeOffCategory
     * of PAIDTIMEOFF
     *
     * @property string ExpenseAccountCode
     */

    /**
     * The computed amount of the time off is credited to this account
     *
     * @property string LiabilityAccountCode
     */

    /**
     * Xero identifier
     *
     * @property string TimeOffTypeID
     */

    /**
     * Set it to true if you want the balance for this time off type to show on the employee’s paystub
     * and in the employee’s My Payroll account.
     *
     * @property string ShowBalanceToEmployee
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'TimeOffTypes';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TimeOffType';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'TimeOffTypeID';
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
            'TimeOffType' => array (true, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\TimeOffType', false, false),
            'TimeOffCategory' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'ExpenseAccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LiabilityAccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'TimeOffTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ShowBalanceToEmployee' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return TimeOffType
     */
    public function getTimeOffType() {
        return isset($this->_data['TimeOffType']) ? $this->_data['TimeOffType'] : null;
    }

    /**
     * @param TimeOffType $value
     * @return TimeOffType
     */
    public function setTimeOffType(TimeOffType $value) {
        $this->propertyUpdated('TimeOffType', $value);
        $this->_data['TimeOffType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeOffCategory() {
        return isset($this->_data['TimeOffCategory']) ? $this->_data['TimeOffCategory'] : null;
    }

    /**
     * @param string $value
     * @return TimeOffType
     */
    public function setTimeOffCategory($value) {
        $this->propertyUpdated('TimeOffCategory', $value);
        $this->_data['TimeOffCategory'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseAccountCode() {
        return isset($this->_data['ExpenseAccountCode']) ? $this->_data['ExpenseAccountCode'] : null;
    }

    /**
     * @param string $value
     * @return TimeOffType
     */
    public function setExpenseAccountCode($value) {
        $this->propertyUpdated('ExpenseAccountCode', $value);
        $this->_data['ExpenseAccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiabilityAccountCode() {
        return isset($this->_data['LiabilityAccountCode']) ? $this->_data['LiabilityAccountCode'] : null;
    }

    /**
     * @param string $value
     * @return TimeOffType
     */
    public function setLiabilityAccountCode($value) {
        $this->propertyUpdated('LiabilityAccountCode', $value);
        $this->_data['LiabilityAccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeOffTypeID() {
        return isset($this->_data['TimeOffTypeID']) ? $this->_data['TimeOffTypeID'] : null;
    }

    /**
     * @param string $value
     * @return TimeOffType
     */
    public function setTimeOffTypeID($value) {
        $this->propertyUpdated('TimeOffTypeID', $value);
        $this->_data['TimeOffTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getShowBalanceToEmployee() {
        return isset($this->_data['ShowBalanceToEmployee']) ? $this->_data['ShowBalanceToEmployee'] : null;
    }

    /**
     * @param string $value
     * @return TimeOffType
     */
    public function setShowBalanceToEmployee($value) {
        $this->propertyUpdated('ShowBalanceToEmployee', $value);
        $this->_data['ShowBalanceToEmployee'] = $value;
        return $this;
    }


}