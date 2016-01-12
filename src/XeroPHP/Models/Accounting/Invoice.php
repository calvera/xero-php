<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\PDFTrait;
use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\Invoice\LineItem;

class Invoice extends Remote\Object {

    use PDFTrait;
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
     * See LineItems
     *
     * @property LineItem[] LineItems
     */

    /**
     * Date invoice was issued – YYYY-MM-DD. Learn more
     *
     * @property \DateTime Date
     */

    /**
     * Date invoice is due – YYYY-MM-DD
     *
     * @property \DateTime DueDate
     */

    /**
     * Line amounts are exclusive of tax by default if you don’t specify this element. See Line Amount
     * Types
     *
     * @property string LineAmountTypes
     */

    /**
     * ACCREC – Unique alpha numeric code identifying invoice (when missing will auto-generate from your
     * Organisation Invoice Settings)
     *
     * @property string InvoiceNumber
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
     * URL link to a source document – shown as “Go to [appName]” in the Xero app
     *
     * @property string Url
     */

    /**
     * The currency that invoice has been raised in (see Currencies)
     *
     * @property string CurrencyCode
     */

    /**
     * The currency rate for a multicurrency invoice. If no rate is specified, the XE.com day rate is used.
     *
     * @property float CurrencyRate
     */

    /**
     * See Invoice Status Codes
     *
     * @property string Status
     */

    /**
     * Boolean to set whether the invoice in the Xero app should be marked as “sent”. This can be set
     * only on invoices that have been approved
     *
     * @property bool SentToContact
     */

    /**
     * Shown on sales invoices (Accounts Receivable) when this has been set
     *
     * @property string ExpectedPaymentDate
     */

    /**
     * Shown on bills (Accounts Payable) when this has been set
     *
     * @property string PlannedPaymentDate
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
     * Total of Invoice tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t
     * equal the sum of the LineAmounts
     *
     * @property float Total
     */

    /**
     * Total of discounts applied on the invoice line items
     *
     * @property float TotalDiscount
     */

    /**
     * Xero generated unique identifier for invoice
     *
     * @property string InvoiceID
     */

    /**
     * boolean to indicate if an invoice has an attachment
     *
     * @property bool HasAttachments
     */

    /**
     * See Payments
     *
     * @property Payment[] Payments
     */

    /**
     * See Prepayments
     *
     * @property Prepayment[] Prepayments
     */

    /**
     * See Overpayments
     *
     * @property Overpayment[] Overpayments
     */

    /**
     * Amount remaining to be paid on invoice
     *
     * @property float AmountDue
     */

    /**
     * Sum of payments received for invoice
     *
     * @property float AmountPaid
     */

    /**
     * The date the invoice was fully paid. Only returned on fully paid invoices
     *
     * @property \DateTime FullyPaidOnDate
     */

    /**
     * Sum of all credit notes, over-payments and pre-payments applied to invoice
     *
     * @property float AmountCredited
     */

    /**
     * Last modified date UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */

    /**
     * Details of credit notes that have been applied to an invoice
     *
     * @property CreditNote[] CreditNotes
     */


    const INVOICE_TYPE_ACCPAY = 'ACCPAY';
    const INVOICE_TYPE_ACCREC = 'ACCREC';

    const INVOICE_STATUS_DRAFT      = 'DRAFT';
    const INVOICE_STATUS_SUBMITTED  = 'SUBMITTED';
    const INVOICE_STATUS_DELETED    = 'DELETED';
    const INVOICE_STATUS_AUTHORISED = 'AUTHORISED';
    const INVOICE_STATUS_PAID       = 'PAID';
    const INVOICE_STATUS_VOIDED     = 'VOIDED';

    const LINEAMOUNT_TYPE_EXCLUSIVE = 'Exclusive';
    const LINEAMOUNT_TYPE_INCLUSIVE = 'Inclusive';
    const LINEAMOUNT_TYPE_NOTAX     = 'NoTax';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Invoices';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Invoice';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'InvoiceID';
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
            'LineItems' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Invoice\\LineItem', true, false),
            'Date' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'DueDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'InvoiceNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Reference' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'BrandingThemeID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Url' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'CurrencyRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'SentToContact' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'ExpectedPaymentDate' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'PlannedPaymentDate' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'SubTotal' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalTax' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Total' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'TotalDiscount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'InvoiceID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'Payments' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Payment', true, false),
            'Prepayments' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Prepayment', true, false),
            'Overpayments' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Overpayment', true, false),
            'AmountDue' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'AmountPaid' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'FullyPaidOnDate' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'AmountCredited' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'CreditNotes' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\CreditNote', true, false)
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
     * @return Invoice
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
     * @return Invoice
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
     * @return Invoice
     */
    public function addLineItem(LineItem $value) {
        $this->propertyUpdated('LineItems', $value);
        $this->_data['LineItems'][] = $value;
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
     * @return Invoice
     */
    public function setDate(\DateTime $value) {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate() {
        return isset($this->_data['DueDate']) ? $this->_data['DueDate'] : null;
    }

    /**
     * @param \DateTime $value
     * @return Invoice
     */
    public function setDueDate(\DateTime $value) {
        $this->propertyUpdated('DueDate', $value);
        $this->_data['DueDate'] = $value;
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
     * @return Invoice
     */
    public function setLineAmountType($value) {
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber() {
        return isset($this->_data['InvoiceNumber']) ? $this->_data['InvoiceNumber'] : null;
    }

    /**
     * @param string $value
     * @return Invoice
     */
    public function setInvoiceNumber($value) {
        $this->propertyUpdated('InvoiceNumber', $value);
        $this->_data['InvoiceNumber'] = $value;
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
     * @return Invoice
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
     * @return Invoice
     */
    public function setBrandingThemeID($value) {
        $this->propertyUpdated('BrandingThemeID', $value);
        $this->_data['BrandingThemeID'] = $value;
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
     * @return Invoice
     */
    public function setUrl($value) {
        $this->propertyUpdated('Url', $value);
        $this->_data['Url'] = $value;
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
     * @return Invoice
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
     * @return Invoice
     */
    public function setCurrencyRate($value) {
        $this->propertyUpdated('CurrencyRate', $value);
        $this->_data['CurrencyRate'] = $value;
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
     * @return Invoice
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
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
     * @return Invoice
     */
    public function setSentToContact($value) {
        $this->propertyUpdated('SentToContact', $value);
        $this->_data['SentToContact'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedPaymentDate() {
        return isset($this->_data['ExpectedPaymentDate']) ? $this->_data['ExpectedPaymentDate'] : null;
    }

    /**
     * @param string $value
     * @return Invoice
     */
    public function setExpectedPaymentDate($value) {
        $this->propertyUpdated('ExpectedPaymentDate', $value);
        $this->_data['ExpectedPaymentDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedPaymentDate() {
        return isset($this->_data['PlannedPaymentDate']) ? $this->_data['PlannedPaymentDate'] : null;
    }

    /**
     * @param string $value
     * @return Invoice
     */
    public function setPlannedPaymentDate($value) {
        $this->propertyUpdated('PlannedPaymentDate', $value);
        $this->_data['PlannedPaymentDate'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal() {
        return isset($this->_data['SubTotal']) ? $this->_data['SubTotal'] : null;
    }


    /**
     * @return float
     */
    public function getTotalTax() {
        return isset($this->_data['TotalTax']) ? $this->_data['TotalTax'] : null;
    }


    /**
     * @return float
     */
    public function getTotal() {
        return isset($this->_data['Total']) ? $this->_data['Total'] : null;
    }


    /**
     * @return float
     */
    public function getTotalDiscount() {
        return isset($this->_data['TotalDiscount']) ? $this->_data['TotalDiscount'] : null;
    }


    /**
     * @return string
     */
    public function getInvoiceID() {
        return isset($this->_data['InvoiceID']) ? $this->_data['InvoiceID'] : null;
    }

    /**
     * @param string $value
     * @return Invoice
     */
    public function setInvoiceID($value) {
        $this->propertyUpdated('InvoiceID', $value);
        $this->_data['InvoiceID'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAttachments() {
        return isset($this->_data['HasAttachments']) ? $this->_data['HasAttachments'] : null;
    }


    /**
     * @return Payment[]
     */
    public function getPayments() {
        return isset($this->_data['Payments']) ? $this->_data['Payments'] : [];
    }


    /**
     * @return Prepayment[]
     */
    public function getPrepayments() {
        return isset($this->_data['Prepayments']) ? $this->_data['Prepayments'] : null;
    }


    /**
     * @return Overpayment[]
     */
    public function getOverpayments() {
        return isset($this->_data['Overpayments']) ? $this->_data['Overpayments'] : null;
    }


    /**
     * @return float
     */
    public function getAmountDue() {
        return isset($this->_data['AmountDue']) ? $this->_data['AmountDue'] : null;
    }


    /**
     * @return float
     */
    public function getAmountPaid() {
        return isset($this->_data['AmountPaid']) ? $this->_data['AmountPaid'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getFullyPaidOnDate() {
        return isset($this->_data['FullyPaidOnDate']) ? $this->_data['FullyPaidOnDate'] : null;
    }


    /**
     * @return float
     */
    public function getAmountCredited() {
        return isset($this->_data['AmountCredited']) ? $this->_data['AmountCredited'] : null;
    }


    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }


    /**
     * @return CreditNote[]
     */
    public function getCreditNotes() {
        return isset($this->_data['CreditNotes']) ? $this->_data['CreditNotes'] : null;
    }



}
