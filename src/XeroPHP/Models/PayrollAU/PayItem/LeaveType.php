<?php

namespace XeroPHP\Models\PayrollAU\PayItem;

use XeroPHP\Remote;


class LeaveType extends Remote\Object {

    /**
     * Name of the leave type (max length = 50)
     *
     * @property string Name
     */

    /**
     * The type of units by which leave entitlements are normally tracked. These are typically the same as
     * the type of units used for the employee’s ordinary earnings rate
     *
     * @property float[] TypeOfUnits
     */

    /**
     * Set this to indicate that an employee will be paid when taking this type of leave
     *
     * @property string IsPaidLeave
     */

    /**
     * Set this if you want a balance for this leave type to be shown on your employee’s payslips
     *
     * @property string ShowOnPayslip
     */

    /**
     * Xero identifier
     *
     * @property string LeaveTypeID
     */

    /**
     * The number of units the employee is entitled to each year
     *
     * @property string NormalEntitlement
     */

    /**
     * Enter an amount here if your organisation pays an additional percentage on top of ordinary earnings
     * when your employees take leave (typically 17.5%)
     *
     * @property float LeaveLoadingRate
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'LeaveTypes';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'LeaveType';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'LeaveTypeID';
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
            'TypeOfUnits' => array (true, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'IsPaidLeave' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'ShowOnPayslip' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeaveTypeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'NormalEntitlement' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeaveLoadingRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
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
     * @return LeaveType
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getTypeOfUnits() {
        return isset($this->_data['TypeOfUnits']) ? $this->_data['TypeOfUnits'] : null;
    }

    /**
     * @param float $value
     * @return LeaveType
     */
    public function addTypeOfUnit($value) {
        $this->propertyUpdated('TypeOfUnits', $value);
        $this->_data['TypeOfUnits'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsPaidLeave() {
        return isset($this->_data['IsPaidLeave']) ? $this->_data['IsPaidLeave'] : null;
    }

    /**
     * @param string $value
     * @return LeaveType
     */
    public function setIsPaidLeave($value) {
        $this->propertyUpdated('IsPaidLeave', $value);
        $this->_data['IsPaidLeave'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getShowOnPayslip() {
        return isset($this->_data['ShowOnPayslip']) ? $this->_data['ShowOnPayslip'] : null;
    }

    /**
     * @param string $value
     * @return LeaveType
     */
    public function setShowOnPayslip($value) {
        $this->propertyUpdated('ShowOnPayslip', $value);
        $this->_data['ShowOnPayslip'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeaveTypeID() {
        return isset($this->_data['LeaveTypeID']) ? $this->_data['LeaveTypeID'] : null;
    }

    /**
     * @param string $value
     * @return LeaveType
     */
    public function setLeaveTypeID($value) {
        $this->propertyUpdated('LeaveTypeID', $value);
        $this->_data['LeaveTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getNormalEntitlement() {
        return isset($this->_data['NormalEntitlement']) ? $this->_data['NormalEntitlement'] : null;
    }

    /**
     * @param string $value
     * @return LeaveType
     */
    public function setNormalEntitlement($value) {
        $this->propertyUpdated('NormalEntitlement', $value);
        $this->_data['NormalEntitlement'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeaveLoadingRate() {
        return isset($this->_data['LeaveLoadingRate']) ? $this->_data['LeaveLoadingRate'] : null;
    }

    /**
     * @param float $value
     * @return LeaveType
     */
    public function setLeaveLoadingRate($value) {
        $this->propertyUpdated('LeaveLoadingRate', $value);
        $this->_data['LeaveLoadingRate'] = $value;
        return $this;
    }


}