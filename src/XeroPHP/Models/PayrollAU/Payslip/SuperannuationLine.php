<?php

namespace XeroPHP\Models\PayrollAU\Payslip;

use XeroPHP\Remote;


class SuperannuationLine extends Remote\Object {

    /**
     * Xero identifier for payroll super fund membership ID
     *
     * @property string SuperMembershipID
     */

    /**
     * Superannuation contribution type
     *
     * @property string ContributionType
     */

    /**
     * Superannuation calculation type
     *
     * @property string CalculationType
     */

    /**
     * Superannuation minimum monthly earnings
     *
     * @property string[] MinimumMonthlyEarnings
     */

    /**
     * Superannuation expense account code
     *
     * @property string ExpenseAccountCode
     */

    /**
     * Superannuation liability account code
     *
     * @property string LiabilityAccountCode
     */

    /**
     * Superannuation payment date for the current period (YYYY-MM-DD)
     *
     * @property \DateTime PaymentDateForThisPeriod
     */

    /**
     * Superannuation percentage
     *
     * @property string Percentage
     */

    /**
     * Superannuation amount
     *
     * @property float Amount
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'SuperannuationLine';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'SuperannuationLine';
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
            'SuperMembershipID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ContributionType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CalculationType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'MinimumMonthlyEarnings' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'ExpenseAccountCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LiabilityAccountCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PaymentDateForThisPeriod' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Percentage' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Amount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getSuperMembershipID() {
        return isset($this->_data['SuperMembershipID']) ? $this->_data['SuperMembershipID'] : null;
    }

    /**
     * @param string $value
     * @return SuperannuationLine
     */
    public function setSuperMembershipID($value) {
        $this->propertyUpdated('SuperMembershipID', $value);
        $this->_data['SuperMembershipID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContributionType() {
        return isset($this->_data['ContributionType']) ? $this->_data['ContributionType'] : null;
    }

    /**
     * @param string $value
     * @return SuperannuationLine
     */
    public function setContributionType($value) {
        $this->propertyUpdated('ContributionType', $value);
        $this->_data['ContributionType'] = $value;
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
     * @return SuperannuationLine
     */
    public function setCalculationType($value) {
        $this->propertyUpdated('CalculationType', $value);
        $this->_data['CalculationType'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMinimumMonthlyEarnings() {
        return isset($this->_data['MinimumMonthlyEarnings']) ? $this->_data['MinimumMonthlyEarnings'] : null;
    }

    /**
     * @param string $value
     * @return SuperannuationLine
     */
    public function addMinimumMonthlyEarning($value) {
        $this->propertyUpdated('MinimumMonthlyEarnings', $value);
        $this->_data['MinimumMonthlyEarnings'][] = $value;
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
     * @return SuperannuationLine
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
     * @return SuperannuationLine
     */
    public function setLiabilityAccountCode($value) {
        $this->propertyUpdated('LiabilityAccountCode', $value);
        $this->_data['LiabilityAccountCode'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentDateForThisPeriod() {
        return isset($this->_data['PaymentDateForThisPeriod']) ? $this->_data['PaymentDateForThisPeriod'] : null;
    }

    /**
     * @param \DateTime $value
     * @return SuperannuationLine
     */
    public function setPaymentDateForThisPeriod(\DateTime $value) {
        $this->propertyUpdated('PaymentDateForThisPeriod', $value);
        $this->_data['PaymentDateForThisPeriod'] = $value;
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
     * @return SuperannuationLine
     */
    public function setPercentage($value) {
        $this->propertyUpdated('Percentage', $value);
        $this->_data['Percentage'] = $value;
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
     * @return SuperannuationLine
     */
    public function setAmount($value) {
        $this->propertyUpdated('Amount', $value);
        $this->_data['Amount'] = $value;
        return $this;
    }


}