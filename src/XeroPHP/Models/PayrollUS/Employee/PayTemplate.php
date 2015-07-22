<?php

namespace XeroPHP\Models\PayrollUS\Employee;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\Paystub\DeductionLine;
use XeroPHP\Models\PayrollUS\Paystub\ReimbursementLine;
use XeroPHP\Models\PayrollUS\Paystub\BenefitLine;

class PayTemplate extends Remote\Object {

    /**
     * The earnings rate lines
     *
     * @property float[] EarningsLines
     */

    /**
     * The deduction type lines
     *
     * @property DeductionLine[] DeductionLines
     */

    /**
     * The reimbursement type lines
     *
     * @property ReimbursementLine[] ReimbursementLines
     */

    /**
     * The benefit type lines
     *
     * @property BenefitLine[] BenefitLines
     */

    /**
     * Xero earnings rate identifier
     *
     * @property string EarningsTypeID
     */

    /**
     * The Units or Hours for the earnings line
     *
     * @property string[] UnitsOrHours
     */

    /**
     * Rate per unit for the EarningsLine.
     *
     * @property float RatePerUnit
     */

    /**
     * The amount of the reimbursement type
     *
     * @property float Amount
     */

    /**
     * Xero deduction type identifier
     *
     * @property string DeductionTypeID
     */

    /**
     * See Benefit Line Calculation Type
     *
     * @property string CalculationType
     */

    /**
     * Maximum amount an employee can receive
     *
     * @property float EmployeeMax
     */

    /**
     * The percentage of deduction line
     *
     * @property string Percentage
     */

    /**
     * Xero identifier for reimbursement type
     *
     * @property string ReimbursementTypeID
     */

    /**
     * The description of the reimbursement line
     *
     * @property string Description
     */

    /**
     * Xero identifier for benefit type
     *
     * @property string BenefitTypeID
     */


    const DEDUCTION_LINE_CALCULATION_TYPE_FIXEDAMOUNT       = 'FIXEDAMOUNT';
    const DEDUCTION_LINE_CALCULATION_TYPE_STANDARDAMOUNT    = 'STANDARDAMOUNT';
    const DEDUCTION_LINE_CALCULATION_TYPE_PERCENTAGEOFGROSS = 'PERCENTAGEOFGROSS';

    const BENEFIT_LINE_CALCULATION_TYPE_FIXEDAMOUNT    = 'FIXEDAMOUNT';
    const BENEFIT_LINE_CALCULATION_TYPE_STANDARDAMOUNT = 'STANDARDAMOUNT';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'PayTemplate';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'PayTemplate';
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
            'EarningsLines' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'DeductionLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\DeductionLine', true, false),
            'ReimbursementLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\ReimbursementLine', true, false),
            'BenefitLines' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Paystub\\BenefitLine', true, false),
            'EarningsTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UnitsOrHours' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'RatePerUnit' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'DeductionTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CalculationType' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'EmployeeMax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Percentage' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ReimbursementTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'BenefitTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return float[]
     */
    public function getEarningsLines() {
        return isset($this->_data['EarningsLines']) ? $this->_data['EarningsLines'] : null;
    }

    /**
     * @param float $value
     * @return PayTemplate
     */
    public function addEarningsLine($value) {
        $this->propertyUpdated('EarningsLines', $value);
        $this->_data['EarningsLines'][] = $value;
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
     * @return PayTemplate
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
     * @return PayTemplate
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
     * @return PayTemplate
     */
    public function addBenefitLine(BenefitLine $value) {
        $this->propertyUpdated('BenefitLines', $value);
        $this->_data['BenefitLines'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEarningsTypeID() {
        return isset($this->_data['EarningsTypeID']) ? $this->_data['EarningsTypeID'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function setEarningsTypeID($value) {
        $this->propertyUpdated('EarningsTypeID', $value);
        $this->_data['EarningsTypeID'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUnitsOrHours() {
        return isset($this->_data['UnitsOrHours']) ? $this->_data['UnitsOrHours'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function addUnitsOrHour($value) {
        $this->propertyUpdated('UnitsOrHours', $value);
        $this->_data['UnitsOrHours'][] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getRatePerUnit() {
        return isset($this->_data['RatePerUnit']) ? $this->_data['RatePerUnit'] : null;
    }

    /**
     * @param float $value
     * @return PayTemplate
     */
    public function setRatePerUnit($value) {
        $this->propertyUpdated('RatePerUnit', $value);
        $this->_data['RatePerUnit'] = $value;
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
     * @return PayTemplate
     */
    public function setAmount($value) {
        $this->propertyUpdated('Amount', $value);
        $this->_data['Amount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeductionTypeID() {
        return isset($this->_data['DeductionTypeID']) ? $this->_data['DeductionTypeID'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function setDeductionTypeID($value) {
        $this->propertyUpdated('DeductionTypeID', $value);
        $this->_data['DeductionTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculationType() {
        return isset($this->_data['CalculationType']) ? $this->_data['CalculationType'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function setCalculationType($value) {
        $this->propertyUpdated('CalculationType', $value);
        $this->_data['CalculationType'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getEmployeeMax() {
        return isset($this->_data['EmployeeMax']) ? $this->_data['EmployeeMax'] : null;
    }

    /**
     * @param float $value
     * @return PayTemplate
     */
    public function setEmployeeMax($value) {
        $this->propertyUpdated('EmployeeMax', $value);
        $this->_data['EmployeeMax'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPercentage() {
        return isset($this->_data['Percentage']) ? $this->_data['Percentage'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function setPercentage($value) {
        $this->propertyUpdated('Percentage', $value);
        $this->_data['Percentage'] = $value;
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
     * @return PayTemplate
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
     * @return PayTemplate
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBenefitTypeID() {
        return isset($this->_data['BenefitTypeID']) ? $this->_data['BenefitTypeID'] : null;
    }

    /**
     * @param string $value
     * @return PayTemplate
     */
    public function setBenefitTypeID($value) {
        $this->propertyUpdated('BenefitTypeID', $value);
        $this->_data['BenefitTypeID'] = $value;
        return $this;
    }


}