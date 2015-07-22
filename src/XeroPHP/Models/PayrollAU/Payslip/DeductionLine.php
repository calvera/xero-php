<?php

namespace XeroPHP\Models\PayrollAU\Payslip;

use XeroPHP\Remote;


class DeductionLine extends Remote\Object {

    /**
     * Xero identifier for payroll earnings rate.
     *
     * @property string DeductionTypeID
     */

    /**
     * Rate per unit for earnings rate.
     *
     * @property float CalculationType
     */

    /**
     * The Percentage of the Deduction Line.
     *
     * @property string Percentage
     */

    /**
     * Earnings rate number of units
     *
     * @property float[] NumberOfUnits
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'DeductionLine';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'DeductionLine';
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
            'DeductionTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CalculationType' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Percentage' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'NumberOfUnits' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false)
        );
    }


    /**
     * @return string
     */
    public function getDeductionTypeID() {
        return isset($this->_data['DeductionTypeID']) ? $this->_data['DeductionTypeID'] : null;
    }

    /**
     * @param string $value
     * @return DeductionLine
     */
    public function setDeductionTypeID($value) {
        $this->propertyUpdated('DeductionTypeID', $value);
        $this->_data['DeductionTypeID'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCalculationType() {
        return isset($this->_data['CalculationType']) ? $this->_data['CalculationType'] : null;
    }

    /**
     * @param float $value
     * @return DeductionLine
     */
    public function setCalculationType($value) {
        $this->propertyUpdated('CalculationType', $value);
        $this->_data['CalculationType'] = $value;
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
     * @return DeductionLine
     */
    public function setPercentage($value) {
        $this->propertyUpdated('Percentage', $value);
        $this->_data['Percentage'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getNumberOfUnits() {
        return isset($this->_data['NumberOfUnits']) ? $this->_data['NumberOfUnits'] : null;
    }

    /**
     * @param float $value
     * @return DeductionLine
     */
    public function addNumberOfUnit($value) {
        $this->propertyUpdated('NumberOfUnits', $value);
        $this->_data['NumberOfUnits'][] = $value;
        return $this;
    }


}