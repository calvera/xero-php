<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\Paystub\EarningsLine;
use XeroPHP\Models\PayrollUS\Paystub\LeaveEarningsLine;
use XeroPHP\Models\PayrollUS\Paystub\TimesheetEarningsLine;
use XeroPHP\Models\PayrollUS\Paystub\DeductionLine;
use XeroPHP\Models\PayrollUS\Paystub\ReimbursementLine;
use XeroPHP\Models\PayrollUS\Paystub\BenefitLine;
use XeroPHP\Models\PayrollUS\Paystub\TimeOffLine;

class Paystub extends Remote\Object {

    /**
     * Xero identifier for payroll employee
     *
     * @property string EmployeeID
     */

    /**
     * Xero identifier for payroll paystub
     *
     * @property string PaystubID
     */

    /**
     * 
     *
     * @property string PayRunID
     */

    /**
     * Employee first name
     *
     * @property string FirstName
     */

    /**
     * Employee last name
     *
     * @property string LastName
     */

    /**
     * Last edited
     *
     * @property string LastEdited
     */

    /**
     * The Total Earnings for the PayRun
     *
     * @property float[] Earnings
     */

    /**
     * The Total Deductions for the PayRun
     *
     * @property float[] Deductions
     */

    /**
     * The Total Tax for the PayRun
     *
     * @property float Tax
     */

    /**
     * The Total Reimbursement for the PayRun
     *
     * @property float[] Reimbursements
     */

    /**
     * The Total NetPay for the PayRun
     *
     * @property float NetPay
     */

    /**
     * 
     *
     * @property string UpdatedDateUTC
     */

    /**
     * See EarningsLine
     *
     * @property EarningsLine[] EarningsLines
     */

    /**
     * See LeaveEarningsLine
     *
     * @property LeaveEarningsLine[] LeaveEarningsLines
     */

    /**
     * See TimesheetEarningsLine
     *
     * @property TimesheetEarningsLine[] TimesheetEarningsLines
     */

    /**
     * See DeductionLine
     *
     * @property DeductionLine[] DeductionLines
     */

    /**
     * See ReimbursementLine
     *
     * @property ReimbursementLine[] ReimbursementLines
     */

    /**
     * See BenefitLine
     *
     * @property BenefitLine[] BenefitLines
     */

    /**
     * See TimeOffLine
     *
     * @property TimeOffLine[] TimeOffLines
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Paystubs';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Paystub';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'PaystubID';
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
            'EmployeeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PaystubID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PayRunID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'FirstName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastEdited' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Earnings' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'Deductions' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'Tax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Reimbursements' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'NetPay' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\EarningsLine', true, false),
            'LeaveEarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\LeaveEarningsLine', true, false),
            'TimesheetEarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\TimesheetEarningsLine', true, false),
            'DeductionLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\DeductionLine', true, false),
            'ReimbursementLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\ReimbursementLine', true, false),
            'BenefitLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\BenefitLine', true, false),
            'TimeOffLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\TimeOffLine', true, false)
        );
    }


    /**
     * @return string
     */
    public function getEmployeeID() {
        return isset($this->_data['EmployeeID']) ? $this->_data['EmployeeID'] : null;
    }

    /**
     * @param string $value
     * @return Paystub
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaystubID() {
        return isset($this->_data['PaystubID']) ? $this->_data['PaystubID'] : null;
    }

    /**
     * @param string $value
     * @return Paystub
     */
    public function setPaystubID($value) {
        $this->propertyUpdated('PaystubID', $value);
        $this->_data['PaystubID'] = $value;
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
     * @return Paystub
     */
    public function setPayRunID($value) {
        $this->propertyUpdated('PayRunID', $value);
        $this->_data['PayRunID'] = $value;
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
     * @return Paystub
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
     * @return Paystub
     */
    public function setLastName($value) {
        $this->propertyUpdated('LastName', $value);
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastEdited() {
        return isset($this->_data['LastEdited']) ? $this->_data['LastEdited'] : null;
    }

    /**
     * @param string $value
     * @return Paystub
     */
    public function setLastEdited($value) {
        $this->propertyUpdated('LastEdited', $value);
        $this->_data['LastEdited'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getEarnings() {
        return isset($this->_data['Earnings']) ? $this->_data['Earnings'] : null;
    }

    /**
     * @param float $value
     * @return Paystub
     */
    public function addEarning($value) {
        $this->propertyUpdated('Earnings', $value);
        $this->_data['Earnings'][] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getDeductions() {
        return isset($this->_data['Deductions']) ? $this->_data['Deductions'] : null;
    }

    /**
     * @param float $value
     * @return Paystub
     */
    public function addDeduction($value) {
        $this->propertyUpdated('Deductions', $value);
        $this->_data['Deductions'][] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTax() {
        return isset($this->_data['Tax']) ? $this->_data['Tax'] : null;
    }

    /**
     * @param float $value
     * @return Paystub
     */
    public function setTax($value) {
        $this->propertyUpdated('Tax', $value);
        $this->_data['Tax'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getReimbursements() {
        return isset($this->_data['Reimbursements']) ? $this->_data['Reimbursements'] : null;
    }

    /**
     * @param float $value
     * @return Paystub
     */
    public function addReimbursement($value) {
        $this->propertyUpdated('Reimbursements', $value);
        $this->_data['Reimbursements'][] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetPay() {
        return isset($this->_data['NetPay']) ? $this->_data['NetPay'] : null;
    }

    /**
     * @param float $value
     * @return Paystub
     */
    public function setNetPay($value) {
        $this->propertyUpdated('NetPay', $value);
        $this->_data['NetPay'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }

    /**
     * @param string $value
     * @return Paystub
     */
    public function setUpdatedDateUTC($value) {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }

    /**
     * @return EarningsLine[]
     */
    public function getEarningsLines() {
        return isset($this->_data['EarningsLines']) ? $this->_data['EarningsLines'] : null;
    }

    /**
     * @param EarningsLine $value
     * @return Paystub
     */
    public function addEarningsLine(EarningsLine $value) {
        $this->propertyUpdated('EarningsLines', $value);
        $this->_data['EarningsLines'][] = $value;
        return $this;
    }

    /**
     * @return LeaveEarningsLine[]
     */
    public function getLeaveEarningsLines() {
        return isset($this->_data['LeaveEarningsLines']) ? $this->_data['LeaveEarningsLines'] : null;
    }

    /**
     * @param LeaveEarningsLine $value
     * @return Paystub
     */
    public function addLeaveEarningsLine(LeaveEarningsLine $value) {
        $this->propertyUpdated('LeaveEarningsLines', $value);
        $this->_data['LeaveEarningsLines'][] = $value;
        return $this;
    }

    /**
     * @return TimesheetEarningsLine[]
     */
    public function getTimesheetEarningsLines() {
        return isset($this->_data['TimesheetEarningsLines']) ? $this->_data['TimesheetEarningsLines'] : null;
    }

    /**
     * @param TimesheetEarningsLine $value
     * @return Paystub
     */
    public function addTimesheetEarningsLine(TimesheetEarningsLine $value) {
        $this->propertyUpdated('TimesheetEarningsLines', $value);
        $this->_data['TimesheetEarningsLines'][] = $value;
        return $this;
    }

    /**
     * @return DeductionLine[]
     */
    public function getDeductionLines() {
        return isset($this->_data['DeductionLines']) ? $this->_data['DeductionLines'] : null;
    }

    /**
     * @param DeductionLine $value
     * @return Paystub
     */
    public function addDeductionLine(DeductionLine $value) {
        $this->propertyUpdated('DeductionLines', $value);
        $this->_data['DeductionLines'][] = $value;
        return $this;
    }

    /**
     * @return ReimbursementLine[]
     */
    public function getReimbursementLines() {
        return isset($this->_data['ReimbursementLines']) ? $this->_data['ReimbursementLines'] : null;
    }

    /**
     * @param ReimbursementLine $value
     * @return Paystub
     */
    public function addReimbursementLine(ReimbursementLine $value) {
        $this->propertyUpdated('ReimbursementLines', $value);
        $this->_data['ReimbursementLines'][] = $value;
        return $this;
    }

    /**
     * @return BenefitLine[]
     */
    public function getBenefitLines() {
        return isset($this->_data['BenefitLines']) ? $this->_data['BenefitLines'] : null;
    }

    /**
     * @param BenefitLine $value
     * @return Paystub
     */
    public function addBenefitLine(BenefitLine $value) {
        $this->propertyUpdated('BenefitLines', $value);
        $this->_data['BenefitLines'][] = $value;
        return $this;
    }

    /**
     * @return TimeOffLine[]
     */
    public function getTimeOffLines() {
        return isset($this->_data['TimeOffLines']) ? $this->_data['TimeOffLines'] : null;
    }

    /**
     * @param TimeOffLine $value
     * @return Paystub
     */
    public function addTimeOffLine(TimeOffLine $value) {
        $this->propertyUpdated('TimeOffLines', $value);
        $this->_data['TimeOffLines'][] = $value;
        return $this;
    }


}