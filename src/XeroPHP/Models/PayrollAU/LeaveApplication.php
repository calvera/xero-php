<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\LeaveApplication\LeavePeriod;

class LeaveApplication extends Remote\Object {

    /**
     * Xero identifier
     *
     * @property string LeaveApplicationID
     */

    /**
     * The Xero identifier for Payroll Employee
     *
     * @property string EmployeeID
     */

    /**
     * The Xero identifier for Leave Type
     *
     * @property string LeaveTypeID
     */

    /**
     * The title of the leave (max length = 50)
     *
     * @property string Title
     */

    /**
     * Start date of the leave (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * End date of the leave (YYYY-MM-DD)
     *
     * @property \DateTime EndDate
     */

    /**
     * The Description of the Leave (max length = 200)
     *
     * @property string Description
     */

    /**
     * The leave period information
     *
     * @property LeavePeriod[] LeavePeriods
     */


    const LEAVE_PERIOD_STATUS_SCHEDULED = 'SCHEDULED';
    const LEAVE_PERIOD_STATUS_PROCESSED = 'PROCESSED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'LeaveApplications';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'LeaveApplication';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'LeaveApplicationID';
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
            'LeaveApplicationID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeaveTypeID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Title' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'StartDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'EndDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeavePeriods' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\LeaveApplication\\LeavePeriod', true, false)
        );
    }


    /**
     * @return string
     */
    public function getLeaveApplicationID() {
        return isset($this->_data['LeaveApplicationID']) ? $this->_data['LeaveApplicationID'] : null;
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setLeaveApplicationID($value) {
        $this->propertyUpdated('LeaveApplicationID', $value);
        $this->_data['LeaveApplicationID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeID() {
        return isset($this->_data['EmployeeID']) ? $this->_data['EmployeeID'] : null;
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
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
     * @return LeaveApplication
     */
    public function setLeaveTypeID($value) {
        $this->propertyUpdated('LeaveTypeID', $value);
        $this->_data['LeaveTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return isset($this->_data['Title']) ? $this->_data['Title'] : null;
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setTitle($value) {
        $this->propertyUpdated('Title', $value);
        $this->_data['Title'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return isset($this->_data['StartDate']) ? $this->_data['StartDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return LeaveApplication
     */
    public function setStartDate(\DateTime $value) {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return isset($this->_data['EndDate']) ? $this->_data['EndDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return LeaveApplication
     */
    public function setEndDate(\DateTime $value) {
        $this->propertyUpdated('EndDate', $value);
        $this->_data['EndDate'] = $value;
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
     * @return LeaveApplication
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return LeavePeriod[]
     */
    public function getLeavePeriods() {
        return isset($this->_data['LeavePeriods']) ? $this->_data['LeavePeriods'] : null;
    }

    /**
     * @param LeavePeriod $value
     * @return LeaveApplication
     */
    public function addLeavePeriod(LeavePeriod $value) {
        $this->propertyUpdated('LeavePeriods', $value);
        $this->_data['LeavePeriods'][] = $value;
        return $this;
    }


}