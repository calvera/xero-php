<?php

namespace XeroPHP\Models\PayrollUS\PayItem;

use XeroPHP\Remote;


class BenefitType extends Remote\Object {

    /**
     * Name of the benefit type (max length = 100)
     *
     * @property BenefitType BenefitType
     */

    /**
     * The category defines the tax implications of the benefit type so it is taxed properly. See
     * BenefitCategory
     *
     * @property string BenefitCategory
     */

    /**
     * The account to which the amount of the benefit is to be credited
     *
     * @property string LiabilityAccountCode
     */

    /**
     * The account to which the amount of the benefit is to be debited.
     *
     * @property string ExpenseAccountCode
     */

    /**
     * Xero identifier
     *
     * @property string BenefitTypeID
     */

    /**
     * This is a default amount you can set for all employees assigned to this benefit type
     *
     * @property float StandardAmount
     */

    /**
     * The company max is the maximum amount set as a default amount for that particular benefit type for
     * all employees assigned this benefit type in a single year
     *
     * @property float CompanyMax
     */

    /**
     * This is a default percentage you can set for all employees assigned to this benefit type
     *
     * @property string Percentage
     */

    /**
     * Set this to true if you want this benefit item amount and YTD balance will show on the employee’s
     * paystubs
     *
     * @property float ShowBalanceOnPaystub
     */


    const BENEFITCATEGORY_AFTERTAXBENEFIT                = 'AFTERTAXBENEFIT';
    const BENEFITCATEGORY_DEPENDENTCARE                  = 'DEPENDENTCARE';
    const BENEFITCATEGORY_FLEXIBLESPENDINGACCOUNT        = 'FLEXIBLESPENDINGACCOUNT';
    const BENEFITCATEGORY_HEALTHSAVINGSACCOUNTSINGLEPLAN = 'HEALTHSAVINGSACCOUNTSINGLEPLAN';
    const BENEFITCATEGORY_HEALTHSAVINGSACCOUNTFAMILYPLAN = 'HEALTHSAVINGSACCOUNTFAMILYPLAN';
    const BENEFITCATEGORY_ROTH401KREITREMENTPLAN         = 'ROTH401KREITREMENTPLAN';
    const BENEFITCATEGORY_ROTH403BRETIREMENTPLAN         = 'ROTH403BRETIREMENTPLAN';
    const BENEFITCATEGORY_SECTION125PLAN                 = 'SECTION125PLAN';
    const BENEFITCATEGORY_SIMPLEIRARETIREMENTPLAN        = 'SIMPLEIRARETIREMENTPLAN';
    const BENEFITCATEGORY_401KRETIREMENTPLAN             = '401KRETIREMENTPLAN';
    const BENEFITCATEGORY_403BRETIREMENTPLAN             = '403BRETIREMENTPLAN';
    const BENEFITCATEGORY_457RETIREMENTPLAN              = '457RETIREMENTPLAN';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'BenefitTypes';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'BenefitType';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'BenefitTypeID';
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
            'BenefitType' => array (true, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\BenefitType', false, false),
            'BenefitCategory' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'LiabilityAccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'ExpenseAccountCode' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'BenefitTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'StandardAmount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'CompanyMax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Percentage' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ShowBalanceOnPaystub' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
        );
    }


    /**
     * @return BenefitType
     */
    public function getBenefitType() {
        return isset($this->_data['BenefitType']) ? $this->_data['BenefitType'] : null;
    }

    /**
     * @param BenefitType $value
     * @return BenefitType
     */
    public function setBenefitType(BenefitType $value) {
        $this->propertyUpdated('BenefitType', $value);
        $this->_data['BenefitType'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBenefitCategory() {
        return isset($this->_data['BenefitCategory']) ? $this->_data['BenefitCategory'] : null;
    }

    /**
     * @param string $value
     * @return BenefitType
     */
    public function setBenefitCategory($value) {
        $this->propertyUpdated('BenefitCategory', $value);
        $this->_data['BenefitCategory'] = $value;
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
     * @return BenefitType
     */
    public function setLiabilityAccountCode($value) {
        $this->propertyUpdated('LiabilityAccountCode', $value);
        $this->_data['LiabilityAccountCode'] = $value;
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
     * @return BenefitType
     */
    public function setExpenseAccountCode($value) {
        $this->propertyUpdated('ExpenseAccountCode', $value);
        $this->_data['ExpenseAccountCode'] = $value;
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
     * @return BenefitType
     */
    public function setBenefitTypeID($value) {
        $this->propertyUpdated('BenefitTypeID', $value);
        $this->_data['BenefitTypeID'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getStandardAmount() {
        return isset($this->_data['StandardAmount']) ? $this->_data['StandardAmount'] : null;
    }

    /**
     * @param float $value
     * @return BenefitType
     */
    public function setStandardAmount($value) {
        $this->propertyUpdated('StandardAmount', $value);
        $this->_data['StandardAmount'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompanyMax() {
        return isset($this->_data['CompanyMax']) ? $this->_data['CompanyMax'] : null;
    }

    /**
     * @param float $value
     * @return BenefitType
     */
    public function setCompanyMax($value) {
        $this->propertyUpdated('CompanyMax', $value);
        $this->_data['CompanyMax'] = $value;
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
     * @return BenefitType
     */
    public function setPercentage($value) {
        $this->propertyUpdated('Percentage', $value);
        $this->_data['Percentage'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getShowBalanceOnPaystub() {
        return isset($this->_data['ShowBalanceOnPaystub']) ? $this->_data['ShowBalanceOnPaystub'] : null;
    }

    /**
     * @param float $value
     * @return BenefitType
     */
    public function setShowBalanceOnPaystub($value) {
        $this->propertyUpdated('ShowBalanceOnPaystub', $value);
        $this->_data['ShowBalanceOnPaystub'] = $value;
        return $this;
    }


}