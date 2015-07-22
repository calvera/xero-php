<?php

namespace XeroPHP\Models\PayrollUS\Employee;

use XeroPHP\Remote;


class PaymentMethod extends Remote\Object {

    /**
     * See PaymentMethodTypes
     *
     * @property string PaymentMethodType
     */

    /**
     * The Bank accounts for the employee. Only Applies when PaymentMethodType is DIRECTDEPOSIT
     *
     * @property BankAccount[] BankAccounts
     */


    const PAYMENT_METHOD_TYPE_CHECK         = 'CHECK';
    const PAYMENT_METHOD_TYPE_MANUAL        = 'MANUAL';
    const PAYMENT_METHOD_TYPE_DIRECTDEPOSIT = 'DIRECTDEPOSIT';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'PaymentMethod';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'PaymentMethod';
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
            'PaymentMethodType' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'BankAccounts' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollUS\\Employee\\BankAccount', true, false)
        );
    }


    /**
     * @return string
     */
    public function getPaymentMethodType() {
        return isset($this->_data['PaymentMethodType']) ? $this->_data['PaymentMethodType'] : null;
    }

    /**
     * @param string $value
     * @return PaymentMethod
     */
    public function setPaymentMethodType($value) {
        $this->propertyUpdated('PaymentMethodType', $value);
        $this->_data['PaymentMethodType'] = $value;
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
     * @return PaymentMethod
     */
    public function addBankAccount(BankAccount $value) {
        $this->propertyUpdated('BankAccounts', $value);
        $this->_data['BankAccounts'][] = $value;
        return $this;
    }


}