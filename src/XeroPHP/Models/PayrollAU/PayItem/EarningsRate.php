<?php

namespace XeroPHP\Models\PayrollAU\PayItem;

use XeroPHP\Remote;


class EarningsRate extends Remote\Object {

    /**
     * Name of the earnings rate (max length = 100)
     *
     * @property string Name
     */

    /**
     * DisplayName of the earnings rate, this field is only accessible via the API.  The DisplayName is
     * shown on the employee’s Payslip. (max length = 50)
     *
     * @property string DisplayName
     */

    /**
     * See Accounts
     *
     * @property string AccountCode
     */

    /**
     * Type of units used to record earnings (max length = 50). Only When RateType is RATEPERUNIT
     *
     * @property string[] TypeOfUnits
     */

    /**
     * Most payments are subject to tax, so you should only set this value if you are sure that a payment
     * is exempt from PAYG withholding
     *
     * @property string IsExemptFromTax
     */

    /**
     * See the ATO website for details of which payments are exempt from SGC
     *
     * @property string IsExemptFromSuper
     */

    /**
     * See EarningsTypes
     *
     * @property string EarningsType
     */

    /**
     * Xero identifier
     *
     * @property string EarningsRateID
     */

    /**
     * See RateTypes
     *
     * @property string RateType
     */

    /**
     * Default rate per unit (optional). Only applicable if RateType is RATEPERUNIT.
     *
     * @property float RatePerUnit
     */

    /**
     * This is the multiplier used to calculate the rate per unit, based on the employee’s ordinary
     * earnings rate. For example, for time and a half enter 1.5. Only applicable if RateType is MULTIPLE
     *
     * @property float Multiplier
     */

    /**
     * Indicates that this earnings rate should accrue leave. Only applicable if RateType is MULTIPLE
     *
     * @property float AccrueLeave
     */

    /**
     * Option Amount for FIXEDAMOUNT RateType EarningsRate
     *
     * @property float Amount
     */


    const EARNINGSTYPE_FIXED                = 'FIXED';
    const EARNINGSTYPE_ORDINARYTIMEEARNINGS = 'ORDINARYTIMEEARNINGS';
    const EARNINGSTYPE_OVERTIMEEARNINGS     = 'OVERTIMEEARNINGS';
    const EARNINGSTYPE_ALLOWANCE            = 'ALLOWANCE';

    const RATETYPE_FIXEDAMOUNT = 'FIXEDAMOUNT';
    const RATETYPE_MULTIPLE    = 'MULTIPLE';
    const RATETYPE_RATEPERUNIT = 'RATEPERUNIT';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'EarningsRates';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'EarningsRate';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'EarningsRateID';
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
            'DisplayName' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'AccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'TypeOfUnits' => array (true, self::PROPERTY_TYPE_STRING, null, true, false),
            'IsExemptFromTax' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'IsExemptFromSuper' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'EarningsType' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'EarningsRateID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'RateType' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'RatePerUnit' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Multiplier' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'AccrueLeave' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
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
     * @return EarningsRate
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName() {
        return isset($this->_data['DisplayName']) ? $this->_data['DisplayName'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setDisplayName($value) {
        $this->propertyUpdated('DisplayName', $value);
        $this->_data['DisplayName'] = $value;
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
     * @return EarningsRate
     */
    public function setAccountCode($value) {
        $this->propertyUpdated('AccountCode', $value);
        $this->_data['AccountCode'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTypeOfUnits() {
        return isset($this->_data['TypeOfUnits']) ? $this->_data['TypeOfUnits'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function addTypeOfUnit($value) {
        $this->propertyUpdated('TypeOfUnits', $value);
        $this->_data['TypeOfUnits'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsExemptFromTax() {
        return isset($this->_data['IsExemptFromTax']) ? $this->_data['IsExemptFromTax'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setIsExemptFromTax($value) {
        $this->propertyUpdated('IsExemptFromTax', $value);
        $this->_data['IsExemptFromTax'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsExemptFromSuper() {
        return isset($this->_data['IsExemptFromSuper']) ? $this->_data['IsExemptFromSuper'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setIsExemptFromSuper($value) {
        $this->propertyUpdated('IsExemptFromSuper', $value);
        $this->_data['IsExemptFromSuper'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEarningsType() {
        return isset($this->_data['EarningsType']) ? $this->_data['EarningsType'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setEarningsType($value) {
        $this->propertyUpdated('EarningsType', $value);
        $this->_data['EarningsType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEarningsRateID() {
        return isset($this->_data['EarningsRateID']) ? $this->_data['EarningsRateID'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setEarningsRateID($value) {
        $this->propertyUpdated('EarningsRateID', $value);
        $this->_data['EarningsRateID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateType() {
        return isset($this->_data['RateType']) ? $this->_data['RateType'] : null;
    }

    /**
     * @param string $value
     * @return EarningsRate
     */
    public function setRateType($value) {
        $this->propertyUpdated('RateType', $value);
        $this->_data['RateType'] = $value;
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
     * @return EarningsRate
     */
    public function setRatePerUnit($value) {
        $this->propertyUpdated('RatePerUnit', $value);
        $this->_data['RatePerUnit'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getMultiplier() {
        return isset($this->_data['Multiplier']) ? $this->_data['Multiplier'] : null;
    }

    /**
     * @param float $value
     * @return EarningsRate
     */
    public function setMultiplier($value) {
        $this->propertyUpdated('Multiplier', $value);
        $this->_data['Multiplier'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getAccrueLeave() {
        return isset($this->_data['AccrueLeave']) ? $this->_data['AccrueLeave'] : null;
    }

    /**
     * @param float $value
     * @return EarningsRate
     */
    public function setAccrueLeave($value) {
        $this->propertyUpdated('AccrueLeave', $value);
        $this->_data['AccrueLeave'] = $value;
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
     * @return EarningsRate
     */
    public function setAmount($value) {
        $this->propertyUpdated('Amount', $value);
        $this->_data['Amount'] = $value;
        return $this;
    }


}