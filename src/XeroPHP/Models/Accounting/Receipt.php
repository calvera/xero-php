<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\Receipt\LineItem;

class Receipt extends Remote\Object {

    use AttachmentTrait;

    /**
     * Date of receipt – YYYY-MM-DD
     *
     * @property \DateTime Date
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
     * The user in the organisation that the expense claim receipt is for. See Users
     *
     * @property User User
     */

    /**
     * Additional reference number
     *
     * @property string Reference
     */

    /**
     * See Line Amount Types
     *
     * @property string LineAmountTypes
     */

    /**
     * Total of receipt excluding taxes
     *
     * @property float SubTotal
     */

    /**
     * Total tax on receipt
     *
     * @property float TotalTax
     */

    /**
     * Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     *
     * @property float Total
     */

    /**
     * Xero generated unique identifier for receipt
     *
     * @property string ReceiptID
     */

    /**
     * Current status of receipt – see status types
     *
     * @property string Status
     */

    /**
     * Xero generated sequence number for receipt in current claim for a given user
     *
     * @property string ReceiptNumber
     */

    /**
     * Last modified date UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * boolean to indicate if a receipt has an attachment
     *
     * @property bool HasAttachments
     */

    /**
     * URL link to a source document – shown as “Go to [appName]” in the Xero app
     *
     * @property string Url
     */


    const RECEIPT_STATUS_DRAFT      = 'DRAFT';
    const RECEIPT_STATUS_SUBMITTED  = 'SUBMITTED';
    const RECEIPT_STATUS_AUTHORISED = 'AUTHORISED';
    const RECEIPT_STATUS_DECLINED   = 'DECLINED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Receipts';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Receipt';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'ReceiptID';
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
            'Date' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Contact' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', false, false),
            'LineItems' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Receipt\\LineItem', true, false),
            'User' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\User', false, false),
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'ReceiptID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ReceiptNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'Url' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return \DateTime
     */
    public function getDate() {
        return isset($this->_data['Date']) ? $this->_data['Date'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Receipt
     */
    public function setDate(\DateTime $value) {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
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
     * @return Receipt
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
     * @return Receipt
     */
    public function addLineItem(LineItem $value) {
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser() {
        return isset($this->_data['User']) ? $this->_data['User'] : null;
    }

    /**
     * @param User $value
     * @return Receipt
     */
    public function setUser(User $value) {
        $this->propertyUpdated('User', $value);
        $this->_data['User'] = $value;
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
     * @return Receipt
     */
    public function setReference($value) {
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
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
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
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
     * @return Receipt
     */
    public function setTotal($value) {
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptID() {
        return isset($this->_data['ReceiptID']) ? $this->_data['ReceiptID'] : null;
    }

    /**
     * @param string $value
     * @return Receipt
     */
    public function setReceiptID($value) {
        $this->propertyUpdated('ReceiptID', $value);
        $this->_data['ReceiptID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return isset($this->_data['Status']) ? $this->_data['Status'] : null;
    }


    /**
     * @return string
     */
    public function getReceiptNumber() {
        return isset($this->_data['ReceiptNumber']) ? $this->_data['ReceiptNumber'] : null;
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


    /**
     * @return string
     */
    public function getUrl() {
        return isset($this->_data['Url']) ? $this->_data['Url'] : null;
    }



}