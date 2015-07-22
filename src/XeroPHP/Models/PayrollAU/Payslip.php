<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Payslip\EarningsLine;
use XeroPHP\Models\PayrollAU\Payslip\TimesheetEarningsLine;
use XeroPHP\Models\PayrollAU\Payslip\DeductionLine;
use XeroPHP\Models\PayrollAU\Payslip\LeaveAccrualLine;
use XeroPHP\Models\PayrollAU\Payslip\ReimbursementLine;
use XeroPHP\Models\PayrollAU\Payslip\SuperannuationLine;
use XeroPHP\Models\PayrollAU\Payslip\TaxLine;
use XeroPHP\Models\PayrollAU\Payslip\LeaveEarningsLine;

class Payslip extends Remote\Object {

    /**
     * Xero identifier for payroll employee
     *
     * @property string EmployeeID
     */

    /**
     * Xero identifier for payroll payslip
     *
     * @property string PayslipID
     */

    /**
     * See EarningsLine
     *
     * @property EarningsLine[] EarningsLines
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
     * See LeaveAccrualLine
     *
     * @property LeaveAccrualLine[] LeaveAccrualLines
     */

    /**
     * See ReimbursementLine – see PayItems
     *
     * @property ReimbursementLine[] ReimbursementLines
     */

    /**
     * See SuperannuationLine
     *
     * @property SuperannuationLine[] SuperannuationLines
     */

    /**
     * See TaxLine
     *
     * @property TaxLine[] TaxLines
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
     * Employee Group name
     *
     * @property string EmployeeGroup
     */

    /**
     * Last edited
     *
     * @property string LastEdited
     */

    /**
     * The Total Wages for the PayRun
     *
     * @property float[] Wages
     */

    /**
     * The Total Deductions for the PayRun
     *
     * @property float[] Deductions
     */

    /**
     * The Total NetPay for the PayRun
     *
     * @property float NetPay
     */

    /**
     * The Total Tax for the PayRun
     *
     * @property float Tax
     */

    /**
     * The Total Super for the PayRun
     *
     * @property float Super
     */

    /**
     * The Total Reimbursement for the PayRun
     *
     * @property float[] Reimbursements
     */

    /**
     * See LeaveEarningsLine
     *
     * @property LeaveEarningsLine[] LeaveEarningsLines
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Payslip';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Payslip';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'PayslipID';
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
            'PayslipID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\EarningsLine', true, false),
            'TimesheetEarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\TimesheetEarningsLine', true, false),
            'DeductionLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\DeductionLine', true, false),
            'LeaveAccrualLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\LeaveAccrualLine', true, false),
            'ReimbursementLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\ReimbursementLine', true, false),
            'SuperannuationLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\SuperannuationLine', true, false),
            'TaxLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\TaxLine', true, false),
            'FirstName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeGroup' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastEdited' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Wages' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'Deductions' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'NetPay' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Tax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Super' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Reimbursements' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'LeaveEarningsLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Payslip\\LeaveEarningsLine', true, false)
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
     * @return Payslip
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayslipID() {
        return isset($this->_data['PayslipID']) ? $this->_data['PayslipID'] : null;
    }

    /**
     * @param string $value
     * @return Payslip
     */
    public function setPayslipID($value) {
        $this->propertyUpdated('PayslipID', $value);
        $this->_data['PayslipID'] = $value;
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
     * @return Payslip
     */
    public function addEarningsLine(EarningsLine $value) {
        $this->propertyUpdated('EarningsLines', $value);
        $this->_data['EarningsLines'][] = $value;
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
     * @return Payslip
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
     * @return Payslip
     */
    public function addDeductionLine(DeductionLine $value) {
        $this->propertyUpdated('DeductionLines', $value);
        $this->_data['DeductionLines'][] = $value;
        return $this;
    }

    /**
     * @return LeaveAccrualLine[]
     */
    public function getLeaveAccrualLines() {
        return isset($this->_data['LeaveAccrualLines']) ? $this->_data['LeaveAccrualLines'] : null;
    }

    /**
     * @param LeaveAccrualLine $value
     * @return Payslip
     */
    public function addLeaveAccrualLine(LeaveAccrualLine $value) {
        $this->propertyUpdated('LeaveAccrualLines', $value);
        $this->_data['LeaveAccrualLines'][] = $value;
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
     * @return Payslip
     */
    public function addReimbursementLine(ReimbursementLine $value) {
        $this->propertyUpdated('ReimbursementLines', $value);
        $this->_data['ReimbursementLines'][] = $value;
        return $this;
    }

    /**
     * @return SuperannuationLine[]
     */
    public function getSuperannuationLines() {
        return isset($this->_data['SuperannuationLines']) ? $this->_data['SuperannuationLines'] : null;
    }

    /**
     * @param SuperannuationLine $value
     * @return Payslip
     */
    public function addSuperannuationLine(SuperannuationLine $value) {
        $this->propertyUpdated('SuperannuationLines', $value);
        $this->_data['SuperannuationLines'][] = $value;
        return $this;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines() {
        return isset($this->_data['TaxLines']) ? $this->_data['TaxLines'] : null;
    }

    /**
     * @param TaxLine $value
     * @return Payslip
     */
    public function addTaxLine(TaxLine $value) {
        $this->propertyUpdated('TaxLines', $value);
        $this->_data['TaxLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName() {
        return isset($this->_data['FirstName']) ? $this->_data['FirstName'] : null;
    }


    /**
     * @return string
     */
    public function getLastName() {
        return isset($this->_data['LastName']) ? $this->_data['LastName'] : null;
    }


    /**
     * @return string
     */
    public function getEmployeeGroup() {
        return isset($this->_data['EmployeeGroup']) ? $this->_data['EmployeeGroup'] : null;
    }


    /**
     * @return string
     */
    public function getLastEdited() {
        return isset($this->_data['LastEdited']) ? $this->_data['LastEdited'] : null;
    }


    /**
     * @return float[]
     */
    public function getWages() {
        return isset($this->_data['Wages']) ? $this->_data['Wages'] : null;
    }


    /**
     * @return float[]
     */
    public function getDeductions() {
        return isset($this->_data['Deductions']) ? $this->_data['Deductions'] : null;
    }


    /**
     * @return float
     */
    public function getNetPay() {
        return isset($this->_data['NetPay']) ? $this->_data['NetPay'] : null;
    }


    /**
     * @return float
     */
    public function getTax() {
        return isset($this->_data['Tax']) ? $this->_data['Tax'] : null;
    }


    /**
     * @return float
     */
    public function getSuper() {
        return isset($this->_data['Super']) ? $this->_data['Super'] : null;
    }


    /**
     * @return float[]
     */
    public function getReimbursements() {
        return isset($this->_data['Reimbursements']) ? $this->_data['Reimbursements'] : null;
    }


    /**
     * @return LeaveEarningsLine[]
     */
    public function getLeaveEarningsLines() {
        return isset($this->_data['LeaveEarningsLines']) ? $this->_data['LeaveEarningsLines'] : null;
    }



}