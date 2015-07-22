<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;


class PayRun extends Remote\Object {

    /**
     * Xero Identifier for the Pay Schedule
     *
     * @property string PayScheduleID
     */

    /**
     * Pay run period end date. Needed if it is an unscheduled pay run
     *
     * @property \DateTime PayRunPeriodEndDate
     */

    /**
     * See Pay run status types
     *
     * @property string PayRunStatus
     */

    /**
     * Xero identifier for pay run
     *
     * @property string PayRunID
     */

    /**
     * Period Start Date for the PayRun
     *
     * @property \DateTime PayRunPeriodStartDate
     */

    /**
     * Payment Date for the PayRun
     *
     * @property \DateTime PaymentDate
     */

    /**
     * Total Earnings for the PayRun
     *
     * @property string[] Earnings
     */

    /**
     * Total Deduction for the PayRun
     *
     * @property string[] Deductions
     */

    /**
     * Total Reimbursement for the PayRun
     *
     * @property string Reimbursement
     */

    /**
     * Total NetPay for the PayRun
     *
     * @property string NetPay
     */

    /**
     * The update date for the PayRun
     *
     * @property \DateTime UpdateDateUTC
     */

    /**
     * See PayStubs
     *
     * @property string[] PayStubs
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'PayRuns';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'PayRun';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'PayRunID';
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
            'PayScheduleID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'PayRunPeriodEndDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'PayRunStatus' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'PayRunID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PayRunPeriodStartDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'PaymentDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Earnings' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'Deductions' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'Reimbursement' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'NetPay' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdateDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'PayStubs' => array (false, self::PROPERTY_TYPE_STRING, null, true, false)
        );
    }


    /**
     * @return string
     */
    public function getPayScheduleID() {
        return isset($this->_data['PayScheduleID']) ? $this->_data['PayScheduleID'] : null;
    }

    /**
     * @param string $value
     * @return PayRun
     */
    public function setPayScheduleID($value) {
        $this->propertyUpdated('PayScheduleID', $value);
        $this->_data['PayScheduleID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPayRunPeriodEndDate() {
        return isset($this->_data['PayRunPeriodEndDate']) ? $this->_data['PayRunPeriodEndDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return PayRun
     */
    public function setPayRunPeriodEndDate(\DateTime $value) {
        $this->propertyUpdated('PayRunPeriodEndDate', $value);
        $this->_data['PayRunPeriodEndDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayRunStatus() {
        return isset($this->_data['PayRunStatus']) ? $this->_data['PayRunStatus'] : null;
    }

    /**
     * @param string $value
     * @return PayRun
     */
    public function setPayRunStatus($value) {
        $this->propertyUpdated('PayRunStatus', $value);
        $this->_data['PayRunStatus'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayRunID() {
        return isset($this->_data['PayRunID']) ? $this->_data['PayRunID'] : null;
    }

    /**
     * @param string $value
     * @return PayRun
     */
    public function setPayRunID($value) {
        $this->propertyUpdated('PayRunID', $value);
        $this->_data['PayRunID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPayRunPeriodStartDate() {
        return isset($this->_data['PayRunPeriodStartDate']) ? $this->_data['PayRunPeriodStartDate'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getPaymentDate() {
        return isset($this->_data['PaymentDate']) ? $this->_data['PaymentDate'] : null;
    }


    /**
     * @return string[]
     */
    public function getEarnings() {
        return isset($this->_data['Earnings']) ? $this->_data['Earnings'] : null;
    }


    /**
     * @return string[]
     */
    public function getDeductions() {
        return isset($this->_data['Deductions']) ? $this->_data['Deductions'] : null;
    }


    /**
     * @return string
     */
    public function getReimbursement() {
        return isset($this->_data['Reimbursement']) ? $this->_data['Reimbursement'] : null;
    }


    /**
     * @return string
     */
    public function getNetPay() {
        return isset($this->_data['NetPay']) ? $this->_data['NetPay'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getUpdateDateUTC() {
        return isset($this->_data['UpdateDateUTC']) ? $this->_data['UpdateDateUTC'] : null;
    }


    /**
     * @return string[]
     */
    public function getPayStubs() {
        return isset($this->_data['PayStubs']) ? $this->_data['PayStubs'] : null;
    }



}