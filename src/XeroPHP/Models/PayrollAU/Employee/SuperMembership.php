<?php

namespace XeroPHP\Models\PayrollAU\Employee;

use XeroPHP\Remote;


class SuperMembership extends Remote\Object {

    /**
     * Xero identifier for super fund
     *
     * @property string SuperFundID
     */

    /**
     * The memberhsip number assigned to the employee by the super fund.
     *
     * @property string EmployeeNumber
     */

    /**
     * Xero unique identifier for Super membership
     *
     * @property string SuperMembershipID
     */

    /**
     * You can specify an individual record by appending the value to the endpoint, i.e. GET
     * https://…/Employees/{identifier} This will return all employee information as well as employee’s
     * Bank Account, Opening Balance, Pay Template and super membership
     *
     * @property string Recordfilter
     */

    /**
     * The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @property string EmployeeID
     */

    /**
     * The ModifiedAfter filter is actually an HTTP header: ‘If-Modified-Since‘. A UTC timestamp
     * (yyyy-mm-ddThh:mm:ss) . Only employees created or modified since this timestamp will be returned
     * e.g. 2009-11-12T00:00:00
     *
     * @property \DateTime ModifiedAfter
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'SuperMembership';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'SuperMembership';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'SuperMembershipID';
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
            'SuperFundID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'SuperMembershipID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Recordfilter' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ModifiedAfter' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false)
        );
    }


    /**
     * @return string
     */
    public function getSuperFundID() {
        return isset($this->_data['SuperFundID']) ? $this->_data['SuperFundID'] : null;
    }

    /**
     * @param string $value
     * @return SuperMembership
     */
    public function setSuperFundID($value) {
        $this->propertyUpdated('SuperFundID', $value);
        $this->_data['SuperFundID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeNumber() {
        return isset($this->_data['EmployeeNumber']) ? $this->_data['EmployeeNumber'] : null;
    }

    /**
     * @param string $value
     * @return SuperMembership
     */
    public function setEmployeeNumber($value) {
        $this->propertyUpdated('EmployeeNumber', $value);
        $this->_data['EmployeeNumber'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuperMembershipID() {
        return isset($this->_data['SuperMembershipID']) ? $this->_data['SuperMembershipID'] : null;
    }

    /**
     * @param string $value
     * @return SuperMembership
     */
    public function setSuperMembershipID($value) {
        $this->propertyUpdated('SuperMembershipID', $value);
        $this->_data['SuperMembershipID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordfilter() {
        return isset($this->_data['Recordfilter']) ? $this->_data['Recordfilter'] : null;
    }

    /**
     * @param string $value
     * @return SuperMembership
     */
    public function setRecordfilter($value) {
        $this->propertyUpdated('Recordfilter', $value);
        $this->_data['Recordfilter'] = $value;
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
     * @return SuperMembership
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAfter() {
        return isset($this->_data['ModifiedAfter']) ? $this->_data['ModifiedAfter'] : null;
    }

    /**
     * @param \DateTime $value
     * @return SuperMembership
     */
    public function setModifiedAfter(\DateTime $value) {
        $this->propertyUpdated('ModifiedAfter', $value);
        $this->_data['ModifiedAfter'] = $value;
        return $this;
    }


}