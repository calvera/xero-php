<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\RepeatingInvoice\Schedule;
use XeroPHP\Models\Accounting\RepeatingInvoice\LineItem;

class RepeatingInvoice extends Remote\Object {

    use AttachmentTrait;

    /**
     * See Invoice Types
     *
     * @property string Type
     */

    /**
     * See Contacts
     *
     * @property Contact Contact
     */

    /**
     * See Schedule
     *
     * @property Schedule Schedule
     */

    /**
     * See LineItems
     *
     * @property LineItem[] LineItems
     */

    /**
     * Line amounts are exclusive of tax by default if you don’t specify this element. See Line Amount
     * Types
     *
     * @property string LineAmountTypes
     */

    /**
     * ACCREC only – additional reference number
     *
     * @property string Reference
     */

    /**
     * See BrandingThemes
     *
     * @property string BrandingThemeID
     */

    /**
     * The currency that invoice has been raised in (see Currencies)
     *
     * @property string CurrencyCode
     */

    /**
     * One of the following : DRAFT or AUTHORISED – See Invoice Status Codes
     *
     * @property string Status
     */

    /**
     * Total of invoice excluding taxes
     *
     * @property float SubTotal
     */

    /**
     * Total tax on invoice
     *
     * @property float TotalTax
     */

    /**
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax)
     *
     * @property float Total
     */

    /**
     * Xero generated unique identifier for repeating invoice template
     *
     * @property string RepeatingInvoiceID
     */

    /**
     * boolean to indicate if an invoice has an attachment
     *
     * @property bool HasAttachments
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'RepeatingInvoices';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'RepeatingInvoice';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'RepeatingInvoiceID';
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
            'Type' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Contact' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Contact', false, false),
            'Schedule' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\RepeatingInvoice\\Schedule', false, false),
            'LineItems' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\RepeatingInvoice\\LineItem', true, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'BrandingThemeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'RepeatingInvoiceID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false)
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
     * @return RepeatingInvoice
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
     * @return RepeatingInvoice
     */
    public function setContact(Contact $value) {
        $this->propertyUpdated('Contact', $value);
        $this->_data['Contact'] = $value;
        return $this;
    }

    /**
     * @return Schedule
     */
    public function getSchedule() {
        return isset($this->_data['Schedule']) ? $this->_data['Schedule'] : null;
    }

    /**
     * @param Schedule $value
     * @return RepeatingInvoice
     */
    public function setSchedule(Schedule $value) {
        $this->propertyUpdated('Schedule', $value);
        $this->_data['Schedule'] = $value;
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
     * @return RepeatingInvoice
     */
    public function addLineItem(LineItem $value) {
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
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
     * @return RepeatingInvoice
     */
    public function setLineAmountType($value) {
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'] = $value;
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
     * @return RepeatingInvoice
     */
    public function setReference($value) {
        $this->propertyUpdated('Reference', $value);
        $this->_data['Reference'] = $value;
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
     * @return RepeatingInvoice
     */
    public function setBrandingThemeID($value) {
        $this->propertyUpdated('BrandingThemeID', $value);
        $this->_data['BrandingThemeID'] = $value;
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
     * @return RepeatingInvoice
     */
    public function setCurrencyCode($value) {
        $this->propertyUpdated('CurrencyCode', $value);
        $this->_data['CurrencyCode'] = $value;
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
     * @return RepeatingInvoice
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
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
     * @return RepeatingInvoice
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
     * @return RepeatingInvoice
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
     * @return RepeatingInvoice
     */
    public function setTotal($value) {
        $this->propertyUpdated('Total', $value);
        $this->_data['Total'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepeatingInvoiceID() {
        return isset($this->_data['RepeatingInvoiceID']) ? $this->_data['RepeatingInvoiceID'] : null;
    }

    /**
     * @param string $value
     * @return RepeatingInvoice
     */
    public function setRepeatingInvoiceID($value) {
        $this->propertyUpdated('RepeatingInvoiceID', $value);
        $this->_data['RepeatingInvoiceID'] = $value;
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
     * @return RepeatingInvoice
     */
    public function setHasAttachment($value) {
        $this->propertyUpdated('HasAttachments', $value);
        $this->_data['HasAttachments'] = $value;
        return $this;
    }


}