<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\AttachmentTrait;


class Account extends Remote\Object {

    use AttachmentTrait;

    /**
     * Customer defined alpha numeric account code e.g 200 or SALES
     *
     * @property string Code
     */

    /**
     * Name of account
     *
     * @property string Name
     */

    /**
     * See Account Types
     *
     * @property string Type
     */

    /**
     * Description of Account. All accounts except bank accounts return this element
     *
     * @property string Description
     */

    /**
     * See Tax Types
     *
     * @property string TaxType
     */

    /**
     * Boolean – describes whether account can have payments applied to it
     *
     * @property bool EnablePaymentsToAccount
     */

    /**
     * Boolean – describes whether account code is available for use with expense claims
     *
     * @property bool ShowInExpenseClaims
     */

    /**
     * The Xero identifier for an account – specified as a string following the endpoint name
e.g.
     * /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @property string AccountID
     */

    /**
     * Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     *
     * @property string Status
     */

    /**
     * See Account Class Types
     *
     * @property string Class
     */

    /**
     * If this is a system account then this element is returned. See System Account types
     *
     * @property string SystemAccount
     */

    /**
     * Shown for bank accounts only
     *
     * @property string BankAccountNumber
     */

    /**
     * Shown for bank accounts only
     *
     * @property string CurrencyCode
     */

    /**
     * Shown if set
     *
     * @property string ReportingCode
     */

    /**
     * Shown if set
     *
     * @property string ReportingCodeName
     */

    /**
     * boolean to indicate if an account has an attachment (read only)
     *
     * @property bool HasAttachments
     */


    const ACCOUNT_CLASS_TYPE_ASSET     = 'ASSET';
    const ACCOUNT_CLASS_TYPE_EQUITY    = 'EQUITY';
    const ACCOUNT_CLASS_TYPE_EXPENSE   = 'EXPENSE';
    const ACCOUNT_CLASS_TYPE_LIABILITY = 'LIABILITY';
    const ACCOUNT_CLASS_TYPE_REVENUE   = 'REVENUE';

    const ACCOUNT_TYPE_BANK                    = 'BANK';
    const ACCOUNT_TYPE_CURRENT                 = 'CURRENT';
    const ACCOUNT_TYPE_CURRLIAB                = 'CURRLIAB';
    const ACCOUNT_TYPE_DEPRECIATN              = 'DEPRECIATN';
    const ACCOUNT_TYPE_DIRECTCOSTS             = 'DIRECTCOSTS';
    const ACCOUNT_TYPE_EQUITY                  = 'EQUITY';
    const ACCOUNT_TYPE_EXPENSE                 = 'EXPENSE';
    const ACCOUNT_TYPE_FIXED                   = 'FIXED';
    const ACCOUNT_TYPE_INVENTORY               = 'INVENTORY';
    const ACCOUNT_TYPE_LIABILITY               = 'LIABILITY';
    const ACCOUNT_TYPE_NONCURRENT              = 'NONCURRENT';
    const ACCOUNT_TYPE_OTHERINCOME             = 'OTHERINCOME';
    const ACCOUNT_TYPE_OVERHEADS               = 'OVERHEADS';
    const ACCOUNT_TYPE_PREPAYMENT              = 'PREPAYMENT';
    const ACCOUNT_TYPE_REVENUE                 = 'REVENUE';
    const ACCOUNT_TYPE_SALES                   = 'SALES';
    const ACCOUNT_TYPE_TERMLIAB                = 'TERMLIAB';
    const ACCOUNT_TYPE_PAYGLIABILITY           = 'PAYGLIABILITY';
    const ACCOUNT_TYPE_SUPERANNUATIONEXPENSE   = 'SUPERANNUATIONEXPENSE';
    const ACCOUNT_TYPE_SUPERANNUATIONLIABILITY = 'SUPERANNUATIONLIABILITY';
    const ACCOUNT_TYPE_WAGESEXPENSE            = 'WAGESEXPENSE';
    const ACCOUNT_TYPE_WAGESPAYABLELIABILITY   = 'WAGESPAYABLELIABILITY';

    const ACCOUNT_STATUS_ACTIVE   = 'ACTIVE';
    const ACCOUNT_STATUS_ARCHIVED = 'ARCHIVED';

    const SYSTEM_ACCOUNT_DEBTORS                = 'DEBTORS';
    const SYSTEM_ACCOUNT_CREDITORS              = 'CREDITORS';
    const SYSTEM_ACCOUNT_BANKCURRENCYGAIN       = 'BANKCURRENCYGAIN';
    const SYSTEM_ACCOUNT_GST                    = 'GST';
    const SYSTEM_ACCOUNT_GSTONIMPORTS           = 'GSTONIMPORTS';
    const SYSTEM_ACCOUNT_HISTORICAL             = 'HISTORICAL';
    const SYSTEM_ACCOUNT_REALISEDCURRENCYGAIN   = 'REALISEDCURRENCYGAIN';
    const SYSTEM_ACCOUNT_RETAINEDEARNINGS       = 'RETAINEDEARNINGS';
    const SYSTEM_ACCOUNT_ROUNDING               = 'ROUNDING';
    const SYSTEM_ACCOUNT_TRACKINGTRANSFERS      = 'TRACKINGTRANSFERS';
    const SYSTEM_ACCOUNT_UNPAIDEXPCLM           = 'UNPAIDEXPCLM';
    const SYSTEM_ACCOUNT_UNREALISEDCURRENCYGAIN = 'UNREALISEDCURRENCYGAIN';
    const SYSTEM_ACCOUNT_WAGEPAYABLES           = 'WAGEPAYABLES';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Accounts';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Account';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'AccountID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_DELETE
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
            'Code' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Name' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Type' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EnablePaymentsToAccount' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'ShowInExpenseClaims' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'AccountID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Class' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'SystemAccount' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'BankAccountNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ReportingCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ReportingCodeName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getCode() {
        return isset($this->_data['Code']) ? $this->_data['Code'] : null;
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setCode($value) {
        $this->propertyUpdated('Code', $value);
        $this->_data['Code'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getType() {
        return isset($this->_data['Type']) ? $this->_data['Type'] : null;
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setType($value) {
        $this->propertyUpdated('Type', $value);
        $this->_data['Type'] = $value;
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
     * @return Account
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType() {
        return isset($this->_data['TaxType']) ? $this->_data['TaxType'] : null;
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setTaxType($value) {
        $this->propertyUpdated('TaxType', $value);
        $this->_data['TaxType'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEnablePaymentsToAccount() {
        return isset($this->_data['EnablePaymentsToAccount']) ? $this->_data['EnablePaymentsToAccount'] : null;
    }

    /**
     * @param bool $value
     * @return Account
     */
    public function setEnablePaymentsToAccount($value) {
        $this->propertyUpdated('EnablePaymentsToAccount', $value);
        $this->_data['EnablePaymentsToAccount'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowInExpenseClaims() {
        return isset($this->_data['ShowInExpenseClaims']) ? $this->_data['ShowInExpenseClaims'] : null;
    }

    /**
     * @param bool $value
     * @return Account
     */
    public function setShowInExpenseClaim($value) {
        $this->propertyUpdated('ShowInExpenseClaims', $value);
        $this->_data['ShowInExpenseClaims'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountID() {
        return isset($this->_data['AccountID']) ? $this->_data['AccountID'] : null;
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setAccountID($value) {
        $this->propertyUpdated('AccountID', $value);
        $this->_data['AccountID'] = $value;
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
     * @return Account
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass() {
        return isset($this->_data['Class']) ? $this->_data['Class'] : null;
    }


    /**
     * @return string
     */
    public function getSystemAccount() {
        return isset($this->_data['SystemAccount']) ? $this->_data['SystemAccount'] : null;
    }


    /**
     * @return string
     */
    public function getBankAccountNumber() {
        return isset($this->_data['BankAccountNumber']) ? $this->_data['BankAccountNumber'] : null;
    }


    /**
     * @return string
     */
    public function getCurrencyCode() {
        return isset($this->_data['CurrencyCode']) ? $this->_data['CurrencyCode'] : null;
    }


    /**
     * @return string
     */
    public function getReportingCode() {
        return isset($this->_data['ReportingCode']) ? $this->_data['ReportingCode'] : null;
    }


    /**
     * @return string
     */
    public function getReportingCodeName() {
        return isset($this->_data['ReportingCodeName']) ? $this->_data['ReportingCodeName'] : null;
    }


    /**
     * @return bool
     */
    public function getHasAttachments() {
        return isset($this->_data['HasAttachments']) ? $this->_data['HasAttachments'] : null;
    }

    public function toSaveStringArray()
    {
        $data = $this->toStringArray();
        $saveData = [];
        foreach (array_keys($this->_dirty) as $key) {
            if (isset($this->_dirty[$key])) {
                $saveData[$key] = $data[$key];
            }
        }

        return $saveData;
    }
}
