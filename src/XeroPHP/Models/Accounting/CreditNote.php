<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\PDFTrait;
use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\Invoice\LineItem;
use XeroPHP\Models\Accounting\CreditNote\Allocation;

class CreditNote extends Remote\Object {

    use PDFTrait;
    use AttachmentTrait;

    /**
     * An optional field to store a reference
     *
     * @property string Reference
     */

    /**
     * See Credit Note Types
     *
     * @property string Type
     */

    /**
     * See Contacts
     *
     * @property Contact Contact
     */

    /**
     * The date the credit note is issued YYYY-MM-DD
     *
     * @property \DateTime Date
     */

    /**
     * See Invoice Status Codes
     *
     * @property string Status
     */

    /**
     * See Invoice Line Amount Types
     *
     * @property string LineAmountTypes
     */

    /**
     * See Invoice Line Items
     *
     * @property LineItem[] LineItems
     */

    /**
     * The subtotal of the credit note excluding taxes
     *
     * @property float SubTotal
     */

    /**
     * The total tax on the credit note
     *
     * @property float TotalTax
     */

    /**
     * The total of the Credit Note(subtotal + total tax)
     *
     * @property float Total
     */

    /**
     * UTC timestamp of last update to the credit note
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * Currency used for the Credit Note
     *
     * @property string CurrencyCode
     */

    /**
     * Date when credit note was fully paid(UTC format)
     *
     * @property \DateTime FullyPaidOnDate
     */

    /**
     * Xero generated unique identifier
     *
     * @property string CreditNoteID
     */

    /**
     * The user friendly unique identifier for a credit note e.g. CN 1001
     *
     * @property string CreditNoteNumber
     */

    /**
     * boolean to indicate if a credit note has been sent to a contact via the Xero app
     *
     * @property bool SentToContact
     */

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used
     *
     * @property float CurrencyRate
     */

    /**
     * The remaining credit balance on the Credit Note
     *
     * @property string RemainingCredit
     */

    /**
     * See Allocations
     *
     * @property Allocation[] Allocations
     */

    /**
     * See BrandingThemes
     *
     * @property string BrandingThemeID
     */

    /**
     * boolean to indicate if a credit note has an attachment
     *
     * @property bool HasAttachments
     */


    const CREDIT_NOTE_TYPE_ACCPAYCREDIT = 'ACCPAYCREDIT';
    const CREDIT_NOTE_TYPE_ACCRECCREDIT = 'ACCRECCREDIT';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'CreditNotes';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'CreditNote';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'CreditNoteID';
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
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_PUT,
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
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Type' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Contact' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', false, false),
            'Date' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'LineItems' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Invoice\\LineItem', true, false),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'FullyPaidOnDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'CreditNoteID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CreditNoteNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'SentToContact' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'CurrencyRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'RemainingCredit' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Allocations' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\CreditNote\\Allocation', true, false),
            'BrandingThemeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getReference() {
        return isset($this->_data['Reference']) ? $this->_data['Reference'] : null;
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setReference($value) {
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
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
     * @return CreditNote
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
     * @return CreditNote
     */
    public function setContact(Contact $value) {
        $this->propertyUpdated('Contact', $value);
        $this->_data['Contact'] = $value;
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
     * @return CreditNote
     */
    public function setDate(\DateTime $value) {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
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
     * @return CreditNote
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
     * @return CreditNote
     */
    public function setLineAmountType($value) {
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'] = $value;
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
     * @return CreditNote
     */
    public function addLineItem(LineItem $value) {
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
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
     * @return CreditNote
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
     * @return CreditNote
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
     * @return CreditNote
     */
    public function setTotal($value) {
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
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
     * @return CreditNote
     */
    public function setUpdatedDateUTC(\DateTime $value) {
        $this->propertyUpdated('UpdatedDateUTC', $value);
        $this->_data['UpdatedDateUTC'] = $value;
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
     * @return CreditNote
     */
    public function setCurrencyCode($value) {
        $this->propertyUpdated('CurrencyCode', $value);
        $this->_data['CurrencyCode'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFullyPaidOnDate() {
        return isset($this->_data['FullyPaidOnDate']) ? $this->_data['FullyPaidOnDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return CreditNote
     */
    public function setFullyPaidOnDate(\DateTime $value) {
        $this->propertyUpdated('FullyPaidOnDate', $value);
        $this->_data['FullyPaidOnDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditNoteID() {
        return isset($this->_data['CreditNoteID']) ? $this->_data['CreditNoteID'] : null;
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setCreditNoteID($value) {
        $this->propertyUpdated('CreditNoteID', $value);
        $this->_data['CreditNoteID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditNoteNumber() {
        return isset($this->_data['CreditNoteNumber']) ? $this->_data['CreditNoteNumber'] : null;
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setCreditNoteNumber($value) {
        $this->propertyUpdated('CreditNoteNumber', $value);
        $this->_data['CreditNoteNumber'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSentToContact() {
        return isset($this->_data['SentToContact']) ? $this->_data['SentToContact'] : null;
    }

    /**
     * @param bool $value
     * @return CreditNote
     */
    public function setSentToContact($value) {
        $this->propertyUpdated('SentToContact', $value);
        $this->_data['SentToContact'] = $value;
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
     * @return CreditNote
     */
    public function setCurrencyRate($value) {
        $this->propertyUpdated('CurrencyRate', $value);
        $this->_data['CurrencyRate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemainingCredit() {
        return isset($this->_data['RemainingCredit']) ? $this->_data['RemainingCredit'] : null;
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setRemainingCredit($value) {
        $this->propertyUpdated('RemainingCredit', $value);
        $this->_data['RemainingCredit'] = $value;
        return $this;
    }

    /**
     * @return Allocation[]
     */
    public function getAllocations() {
        return isset($this->_data['Allocations']) ? $this->_data['Allocations'] : null;
    }

    /**
     * @param Allocation $value
     * @return CreditNote
     */
    public function addAllocation(Allocation $value) {
        $this->propertyUpdated('Allocations', $value);
        $this->_data['Allocations'][] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandingThemeID() {
        return isset($this->_data['BrandingThemeID']) ? $this->_data['BrandingThemeID'] : null;
    }

    /**
     * @param string $value
     * @return CreditNote
     */
    public function setBrandingThemeID($value) {
        $this->propertyUpdated('BrandingThemeID', $value);
        $this->_data['BrandingThemeID'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAttachments() {
        return isset($this->_data['HasAttachments']) ? $this->_data['HasAttachments'] : null;
    }

    /**
     * @param bool $value
     * @return CreditNote
     */
    public function setHasAttachment($value) {
        $this->propertyUpdated('HasAttachments', $value);
        $this->_data['HasAttachments'] = $value;
        return $this;
    }


}