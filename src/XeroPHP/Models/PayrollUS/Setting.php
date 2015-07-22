<?php

namespace XeroPHP\Models\PayrollUS;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollUS\Setting\Account;
use XeroPHP\Models\PayrollUS\Setting\TrackingCategory;

class Setting extends Remote\Object {

    /**
     * Payroll Account details for Bank, WagesPayable and WagesExpense. See Accounts
     *
     * @property Account[] Accounts
     */

    /**
     * Tracking categories for Employees and Timesheets. See Tracking Categories
     *
     * @property TrackingCategory[] TrackingCategories
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Settings';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Setting';
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
            'Accounts' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Setting\\Account', true, false),
            'TrackingCategories' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Setting\\TrackingCategory', true, false)
        );
    }


    /**
     * @return Account[]
     */
    public function getAccounts() {
        return isset($this->_data['Accounts']) ? $this->_data['Accounts'] : null;
    }

    /**
     * @param Account $value
     * @return Setting
     */
    public function addAccount(Account $value) {
        $this->propertyUpdated('Accounts', $value);
        $this->_data['Accounts'][] = $value;
        return $this;
    }

    /**
     * @return TrackingCategory[]
     */
    public function getTrackingCategories() {
        return isset($this->_data['TrackingCategories']) ? $this->_data['TrackingCategories'] : null;
    }

    /**
     * @param TrackingCategory $value
     * @return Setting
     */
    public function addTrackingCategory(TrackingCategory $value) {
        $this->propertyUpdated('TrackingCategories', $value);
        $this->_data['TrackingCategories'][] = $value;
        return $this;
    }


}