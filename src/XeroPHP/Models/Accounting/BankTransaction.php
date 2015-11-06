<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\BankTransaction\LineItem;
use XeroPHP\Models\Accounting\BankTransaction\BankAccount;

class BankTransaction extends Remote\Object {

    use AttachmentTrait;

    /**
     * See Bank Transaction Types
     *
     * @property string Type
     */

    /**
     * See Contacts
     *
     * @property Contact Contact
     */

    /**
     * See LineItems
     *
     * @property LineItem[] LineItems
     */

    /**
     * Bank account for transaction. See BankAccount
     *
     * @property BankAccount BankAccount
     */

    /**
     * Boolean to show if transaction is reconciled
     *
     * @property bool IsReconciled
     */

    /**
     * Date of transaction – YYYY-MM-DD
     *
     * @property \DateTime Date
     */

    /**
     * reference for the transaction
     *
     * @property string Reference
     */

    /**
     * The currency that bank transaction has been raised in (see Currencies)
     *
     * @property string CurrencyCode
     */

    /**
     * Exchange rate to base currency when money is spent or received. e.g. 0.7500 Only used for bank
     * transactions in non base currency. If this isn’t specified for non base currency accounts then
     * either the user-defined rate (preference) or the XE.com day rate will be used
     *
     * @property float CurrencyRate
     */

    /**
     * URL link to a source document – shown as "Go to App Name"
     *
     * @property string Url
     */

    /**
     * See Bank Transaction Status Codes
     *
     * @property string Status
     */

    /**
     * Line amounts are exclusive of tax by default if you don’t specify this element. See Line Amount
     * Types
     *
     * @property string LineAmountTypes
     */

    /**
     * Total of bank transaction excluding taxes
     *
     * @property float SubTotal
     */

    /**
     * Total tax on bank transaction
     *
     * @property float TotalTax
     */

    /**
     * Total of bank transaction tax inclusive
     *
     * @property float Total
     */

    /**
     * Xero generated unique identifier for bank transaction
     *
     * @property string BankTransactionID
     */

    /**
     * Last modified date UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * Boolean to indicate if a bank transaction has an attachment
     *
     * @property bool HasAttachments
     */


    const TYPE_RECEIVE             = 'RECEIVE';
    const TYPE_RECEIVE_OVERPAYMENT = 'RECEIVE-OVERPAYMENT';
    const TYPE_RECEIVE_PREPAYMENT  = 'RECEIVE-PREPAYMENT';
    const TYPE_SPEND               = 'SPEND';
    const TYPE_SPEND_OVERPAYMENT   = 'SPEND-OVERPAYMENT';
    const TYPE_SPEND_PREPAYMENT    = 'SPEND-PREPAYMENT';
    const TYPE_RECEIVE_TRANSFER    = 'RECEIVE-TRANSFER';
    const TYPE_SPEND_TRANSFER      = 'SPEND-TRANSFER';

    const BANK_TRANSACTION_STATUS_AUTHORISED = 'AUTHORISED';
    const BANK_TRANSACTION_STATUS_DELETED    = 'DELETED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'BankTransactions';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'BankTransaction';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'BankTransactionID';
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
            Remote\Request::METHOD_POST
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
            'Type' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Contact' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', false, false),
            'LineItems' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\BankTransaction\\LineItem', true, false),
            'BankAccount' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\BankTransaction\\BankAccount', false, false),
            'IsReconciled' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'Date' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Url' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'BankTransactionID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'PrepaymentID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
        );
    }


    /**
     * @return string
     */
    public function getType() {
        return isset($this->_data['Type']) ? $this->_data['Type'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setType($value) {
        $this->propertyUpdated('Type', $value);
        $this->_data['Type'] = $value;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact() {
        return isset($this->_data['Contact']) ? $this->_data['Contact'] : null;
    }

    /**
     * @param Contact $value
     * @return BankTransaction
     */
    public function setContact(Contact $value) {
        $this->propertyUpdated('Contact', $value);
        $this->_data['Contact'] = $value;
        return $this;
    }

    /**
     * @return LineItem[]
     */
    public function getLineItems() {
        return isset($this->_data['LineItems']) ? $this->_data['LineItems'] : null;
    }

    /**
     * @param LineItem $value
     * @return BankTransaction
     */
    public function addLineItem(LineItem $value) {
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount() {
        return isset($this->_data['BankAccount']) ? $this->_data['BankAccount'] : null;
    }

    /**
     * @param BankAccount $value
     * @return BankTransaction
     */
    public function setBankAccount(BankAccount $value) {
        $this->propertyUpdated('BankAccount', $value);
        $this->_data['BankAccount'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsReconciled() {
        return isset($this->_data['IsReconciled']) ? $this->_data['IsReconciled'] : null;
    }

    /**
     * @param bool $value
     * @return BankTransaction
     */
    public function setIsReconciled($value) {
        $this->propertyUpdated('IsReconciled', $value);
        $this->_data['IsReconciled'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate() {
        return isset($this->_data['Date']) ? $this->_data['Date'] : null;
    }

    /**
     * @param \DateTime $value
     * @return BankTransaction
     */
    public function setDate(\DateTime $value) {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference() {
        return isset($this->_data['Reference']) ? $this->_data['Reference'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setReference($value) {
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode() {
        return isset($this->_data['CurrencyCode']) ? $this->_data['CurrencyCode'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setCurrencyCode($value) {
        $this->propertyUpdated('CurrencyCode', $value);
        $this->_data['CurrencyCode'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrencyRate() {
        return isset($this->_data['CurrencyRate']) ? $this->_data['CurrencyRate'] : null;
    }

    /**
     * @param float $value
     * @return BankTransaction
     */
    public function setCurrencyRate($value) {
        $this->propertyUpdated('CurrencyRate', $value);
        $this->_data['CurrencyRate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl() {
        return isset($this->_data['Url']) ? $this->_data['Url'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setUrl($value) {
        $this->propertyUpdated('Url', $value);
        $this->_data['Url'] = $value;
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
     * @return BankTransaction
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineAmountTypes() {
        return isset($this->_data['LineAmountTypes']) ? $this->_data['LineAmountTypes'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setLineAmountType($value) {
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal() {
        return isset($this->_data['SubTotal']) ? $this->_data['SubTotal'] : null;
    }

    /**
     * @param float $value
     * @return BankTransaction
     */
    public function setSubTotal($value) {
        $this->propertyUpdated('SubTotal', $value);
        $this->_data['SubTotal'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTax() {
        return isset($this->_data['TotalTax']) ? $this->_data['TotalTax'] : null;
    }

    /**
     * @param float $value
     * @return BankTransaction
     */
    public function setTotalTax($value) {
        $this->propertyUpdated('TotalTax', $value);
        $this->_data['TotalTax'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal() {
        return isset($this->_data['Total']) ? $this->_data['Total'] : null;
    }

    /**
     * @param float $value
     * @return BankTransaction
     */
    public function setTotal($value) {
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankTransactionID() {
        return isset($this->_data['BankTransactionID']) ? $this->_data['BankTransactionID'] : null;
    }

    /**
     * @param string $value
     * @return BankTransaction
     */
    public function setBankTransactionID($value) {
        $this->propertyUpdated('BankTransactionID', $value);
        $this->_data['BankTransactionID'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }


    /**
     * @return bool
     */
    public function getHasAttachments() {
        return isset($this->_data['HasAttachments']) ? $this->_data['HasAttachments'] : null;
    }

    public function getPrepaymentID() {
        return isset($this->_data['PrepaymentID']) ? $this->_data['PrepaymentID'] : null;
    }

}
