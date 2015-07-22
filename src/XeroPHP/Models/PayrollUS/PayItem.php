<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\PayItem\EarningsType;
use XeroPHP\Models\PayrollUS\PayItem\BenefitType;
use XeroPHP\Models\PayrollUS\PayItem\DeductionType;
use XeroPHP\Models\PayrollUS\PayItem\ReimbursementType;
use XeroPHP\Models\PayrollUS\PayItem\TimeOffType;

class PayItem extends Remote\Object {

    /**
     * See EarningsTypes
     *
     * @property EarningsType[] EarningsTypes
     */

    /**
     * See BenefitTypes
     *
     * @property BenefitType[] BenefitTypes
     */

    /**
     * See DeductionTypes
     *
     * @property DeductionType[] DeductionTypes
     */

    /**
     * See ReimbursementTypes
     *
     * @property ReimbursementType[] ReimbursementTypes
     */

    /**
     * See TimeOffTypes
     *
     * @property TimeOffType[] TimeOffTypes
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'PayItems';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'PayItem';
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
            'EarningsTypes' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\EarningsType', true, false),
            'BenefitTypes' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\BenefitType', true, false),
            'DeductionTypes' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\DeductionType', true, false),
            'ReimbursementTypes' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\ReimbursementType', true, false),
            'TimeOffTypes' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\PayItem\\TimeOffType', true, false)
        );
    }


    /**
     * @return EarningsType[]
     */
    public function getEarningsTypes() {
        return isset($this->_data['EarningsTypes']) ? $this->_data['EarningsTypes'] : null;
    }

    /**
     * @param EarningsType $value
     * @return PayItem
     */
    public function addEarningsType(EarningsType $value) {
        $this->propertyUpdated('EarningsTypes', $value);
        $this->_data['EarningsTypes'][] = $value;
        return $this;
    }

    /**
     * @return BenefitType[]
     */
    public function getBenefitTypes() {
        return isset($this->_data['BenefitTypes']) ? $this->_data['BenefitTypes'] : null;
    }

    /**
     * @param BenefitType $value
     * @return PayItem
     */
    public function addBenefitType(BenefitType $value) {
        $this->propertyUpdated('BenefitTypes', $value);
        $this->_data['BenefitTypes'][] = $value;
        return $this;
    }

    /**
     * @return DeductionType[]
     */
    public function getDeductionTypes() {
        return isset($this->_data['DeductionTypes']) ? $this->_data['DeductionTypes'] : null;
    }

    /**
     * @param DeductionType $value
     * @return PayItem
     */
    public function addDeductionType(DeductionType $value) {
        $this->propertyUpdated('DeductionTypes', $value);
        $this->_data['DeductionTypes'][] = $value;
        return $this;
    }

    /**
     * @return ReimbursementType[]
     */
    public function getReimbursementTypes() {
        return isset($this->_data['ReimbursementTypes']) ? $this->_data['ReimbursementTypes'] : null;
    }

    /**
     * @param ReimbursementType $value
     * @return PayItem
     */
    public function addReimbursementType(ReimbursementType $value) {
        $this->propertyUpdated('ReimbursementTypes', $value);
        $this->_data['ReimbursementTypes'][] = $value;
        return $this;
    }

    /**
     * @return TimeOffType[]
     */
    public function getTimeOffTypes() {
        return isset($this->_data['TimeOffTypes']) ? $this->_data['TimeOffTypes'] : null;
    }

    /**
     * @param TimeOffType $value
     * @return PayItem
     */
    public function addTimeOffType(TimeOffType $value) {
        $this->propertyUpdated('TimeOffTypes', $value);
        $this->_data['TimeOffTypes'][] = $value;
        return $this;
    }


}