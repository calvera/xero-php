<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\Employee\HomeAddress;
use XeroPHP\Models\PayrollAU\Employee\BankAccount;
use XeroPHP\Models\PayrollAU\Employee\PayTemplate;
use XeroPHP\Models\PayrollAU\Employee\OpeningBalance;
use XeroPHP\Models\PayrollAU\Employee\SuperMembership;

class Employee extends Remote\Object {

    /**
     * First name of employee (max length = 35)
     *
     * @property string FirstName
     */

    /**
     * Last name of employee (max length = 35)
     *
     * @property string LastName
     */

    /**
     * Employee home address. See HomeAddress
     *
     * @property HomeAddress HomeAddress
     */

    /**
     * If you aren’t sure of the exact start date for an employee, you can just enter the start of the
     * current financial year (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * Title of the employee (max length = 10)
     *
     * @property string Title
     */

    /**
     * Middle name(s) of the employee (max length = 35)
     *
     * @property string[] MiddleNames
     */

    /**
     * The email address for the employee (max length = 100)
     *
     * @property string Email
     */

    /**
     * The employee’s gender (M or F)
     *
     * @property string Gender
     */

    /**
     * Employee mobile number (max length = 50)
     *
     * @property string Mobile
     */

    /**
     * Employee’s twitter name, entered as @twittername (max length = 50)
     *
     * @property string TwitterUserName
     */

    /**
     * Boolean (true / false) – set this to true if the employee is authorised to approve other
     * employees’ leave requests
     *
     * @property bool IsAuthorisedToApproveLeave
     */

    /**
     * Booelan – set this to true if the employee is authorised to approve timesheets
     *
     * @property bool IsAuthorisedToApproveTimesheets
     */

    /**
     * Occupation of the employee (max length = 50)
     *
     * @property string Occupation
     */

    /**
     * Employees under an award scheme will be covered by a modern award classification. If you record a
     * classification, it will be included on your payslips (max length = 100)
     *
     * @property string Classification
     */

    /**
     * Xero unique identifier for earnings rate
     *
     * @property string OrdinaryEarningsRateID
     */

    /**
     * Xero unique identifier for payroll calendar for the employee
     *
     * @property string PayrollCalendarID
     */

    /**
     * The Employee Group allows you to report on payroll expenses and liabilities for each group of
     * employees
     *
     * @property string EmployeeGroupName
     */

    /**
     * See BankAccount
     *
     * @property BankAccount[] BankAccounts
     */

    /**
     * See PayTemplate
     *
     * @property PayTemplate PayTemplate
     */

    /**
     * See OpeningBalances
     *
     * @property OpeningBalance[] OpeningBalances
     */

    /**
     * See SuperMemberships
     *
     * @property SuperMembership[] SuperMemberships
     */

    /**
     * Employee Termination Date (YYYY-MM-DD)
     *
     * @property \DateTime TerminationDate
     */

    /**
     * Xero unique identifier for an Employee
     *
     * @property string EmployeeID
     */

    /**
     * See Employee Status Types
     *
     * @property string Status
     */

    /**
     * Last modified timestamp
     *
     * @property \DateTime UpdatedDateUTC
     */


    const STATEABBREVIATION_ACT = 'ACT';
    const STATEABBREVIATION_NSW = 'NSW';
    const STATEABBREVIATION_NT  = 'NT';
    const STATEABBREVIATION_QLD = 'QLD';
    const STATEABBREVIATION_SA  = 'SA';
    const STATEABBREVIATION_TAS = 'TAS';
    const STATEABBREVIATION_VIC = 'VIC';
    const STATEABBREVIATION_WA  = 'WA';

    const STATUS_ACTIVE     = 'ACTIVE';
    const STATUS_TERMINATED = 'TERMINATED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Employees';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Employee';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'EmployeeID';
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
            'FirstName' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LastName' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'HomeAddress' => array (true, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Employee\\HomeAddress', false, false),
            'StartDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Title' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'MiddleNames' => array (false, self::PROPERTY_TYPE_STRING, null, true, false),
            'Email' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Gender' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Mobile' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TwitterUserName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'IsAuthorisedToApproveLeave' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'IsAuthorisedToApproveTimesheets' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'Occupation' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Classification' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'OrdinaryEarningsRateID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PayrollCalendarID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeGroupName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'BankAccounts' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Employee\\BankAccount', true, false),
            'PayTemplate' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Employee\\PayTemplate', false, false),
            'OpeningBalances' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Employee\\OpeningBalance', true, false),
            'SuperMemberships' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\Employee\\SuperMembership', true, false),
            'TerminationDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'EmployeeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false)
        );
    }


    /**
     * @return string
     */
    public function getFirstName() {
        return isset($this->_data['FirstName']) ? $this->_data['FirstName'] : null;
    }

    /**
     * @param string $value
     * @return Employee
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
     * @return Employee
     */
    public function setLastName($value) {
        $this->propertyUpdated('LastName', $value);
        $this->_data['LastName'] = $value;
        return $this;
    }

    /**
     * @return HomeAddress
     */
    public function getHomeAddress() {
        return isset($this->_data['HomeAddress']) ? $this->_data['HomeAddress'] : null;
    }

    /**
     * @param HomeAddress $value
     * @return Employee
     */
    public function setHomeAddress(HomeAddress $value) {
        $this->propertyUpdated('HomeAddress', $value);
        $this->_data['HomeAddress'] = $value;
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
     * @return Employee
     */
    public function setStartDate(\DateTime $value) {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
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
     * @return Employee
     */
    public function setTitle($value) {
        $this->propertyUpdated('Title', $value);
        $this->_data['Title'] = $value;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMiddleNames() {
        return isset($this->_data['MiddleNames']) ? $this->_data['MiddleNames'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function addMiddleName($value) {
        $this->propertyUpdated('MiddleNames', $value);
        $this->_data['MiddleNames'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() {
        return isset($this->_data['Email']) ? $this->_data['Email'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmail($value) {
        $this->propertyUpdated('Email', $value);
        $this->_data['Email'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender() {
        return isset($this->_data['Gender']) ? $this->_data['Gender'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setGender($value) {
        $this->propertyUpdated('Gender', $value);
        $this->_data['Gender'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile() {
        return isset($this->_data['Mobile']) ? $this->_data['Mobile'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setMobile($value) {
        $this->propertyUpdated('Mobile', $value);
        $this->_data['Mobile'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwitterUserName() {
        return isset($this->_data['TwitterUserName']) ? $this->_data['TwitterUserName'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setTwitterUserName($value) {
        $this->propertyUpdated('TwitterUserName', $value);
        $this->_data['TwitterUserName'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveLeave() {
        return isset($this->_data['IsAuthorisedToApproveLeave']) ? $this->_data['IsAuthorisedToApproveLeave'] : null;
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveLeave($value) {
        $this->propertyUpdated('IsAuthorisedToApproveLeave', $value);
        $this->_data['IsAuthorisedToApproveLeave'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAuthorisedToApproveTimesheets() {
        return isset($this->_data['IsAuthorisedToApproveTimesheets']) ? $this->_data['IsAuthorisedToApproveTimesheets'] : null;
    }

    /**
     * @param bool $value
     * @return Employee
     */
    public function setIsAuthorisedToApproveTimesheet($value) {
        $this->propertyUpdated('IsAuthorisedToApproveTimesheets', $value);
        $this->_data['IsAuthorisedToApproveTimesheets'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOccupation() {
        return isset($this->_data['Occupation']) ? $this->_data['Occupation'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setOccupation($value) {
        $this->propertyUpdated('Occupation', $value);
        $this->_data['Occupation'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getClassification() {
        return isset($this->_data['Classification']) ? $this->_data['Classification'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setClassification($value) {
        $this->propertyUpdated('Classification', $value);
        $this->_data['Classification'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrdinaryEarningsRateID() {
        return isset($this->_data['OrdinaryEarningsRateID']) ? $this->_data['OrdinaryEarningsRateID'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setOrdinaryEarningsRateID($value) {
        $this->propertyUpdated('OrdinaryEarningsRateID', $value);
        $this->_data['OrdinaryEarningsRateID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPayrollCalendarID() {
        return isset($this->_data['PayrollCalendarID']) ? $this->_data['PayrollCalendarID'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setPayrollCalendarID($value) {
        $this->propertyUpdated('PayrollCalendarID', $value);
        $this->_data['PayrollCalendarID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeGroupName() {
        return isset($this->_data['EmployeeGroupName']) ? $this->_data['EmployeeGroupName'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setEmployeeGroupName($value) {
        $this->propertyUpdated('EmployeeGroupName', $value);
        $this->_data['EmployeeGroupName'] = $value;
        return $this;
    }

    /**
     * @return BankAccount[]
     */
    public function getBankAccounts() {
        return isset($this->_data['BankAccounts']) ? $this->_data['BankAccounts'] : null;
    }

    /**
     * @param BankAccount $value
     * @return Employee
     */
    public function addBankAccount(BankAccount $value) {
        $this->propertyUpdated('BankAccounts', $value);
        $this->_data['BankAccounts'][] = $value;
        return $this;
    }

    /**
     * @return PayTemplate
     */
    public function getPayTemplate() {
        return isset($this->_data['PayTemplate']) ? $this->_data['PayTemplate'] : null;
    }

    /**
     * @param PayTemplate $value
     * @return Employee
     */
    public function setPayTemplate(PayTemplate $value) {
        $this->propertyUpdated('PayTemplate', $value);
        $this->_data['PayTemplate'] = $value;
        return $this;
    }

    /**
     * @return OpeningBalance[]
     */
    public function getOpeningBalances() {
        return isset($this->_data['OpeningBalances']) ? $this->_data['OpeningBalances'] : null;
    }

    /**
     * @param OpeningBalance $value
     * @return Employee
     */
    public function addOpeningBalance(OpeningBalance $value) {
        $this->propertyUpdated('OpeningBalances', $value);
        $this->_data['OpeningBalances'][] = $value;
        return $this;
    }

    /**
     * @return SuperMembership[]
     */
    public function getSuperMemberships() {
        return isset($this->_data['SuperMemberships']) ? $this->_data['SuperMemberships'] : null;
    }

    /**
     * @param SuperMembership $value
     * @return Employee
     */
    public function addSuperMembership(SuperMembership $value) {
        $this->propertyUpdated('SuperMemberships', $value);
        $this->_data['SuperMemberships'][] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTerminationDate() {
        return isset($this->_data['TerminationDate']) ? $this->_data['TerminationDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setTerminationDate(\DateTime $value) {
        $this->propertyUpdated('TerminationDate', $value);
        $this->_data['TerminationDate'] = $value;
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
     * @return Employee
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return isset($this->_data['Status']) ? $this->_data['Status'] : null;
    }

    /**
     * @param string $value
     * @return Employee
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Employee
     */
    public function setUpdatedDateUTC(\DateTime $value) {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
        return $this;
    }


}