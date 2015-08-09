<?php

namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;


class LineItem extends Remote\Object {

    /**
     * LineItem Description
     *
     * @property string Description
     */

    /**
     * LineItem Quantity
     *
     * @property string Quantity
     */

    /**
     * Lineitem unit amount. By default, unit amount will be rounded to two decimal places. You can opt in
     * to use four decimal places by adding the querystring parameter unitdp=4 to your query. See the
     * Rounding in Xero guide for more information.
     *
     * @property float UnitAmount
     */

    /**
     * See Items
     *
     * @property string ItemCode
     */

    /**
     * See Accounts
     *
     * @property string AccountCode
     */

    /**
     * The Xero generated identifier for a LineItem. If LineItemIDs are not included with line items in an
     * update request then the line items are deleted and recreated.
     *
     * @property string LineItemID
     */

    /**
     * Used as an override if the default Tax Code for the selected <AccountCode> is not correct – see
     * TaxTypes.
     *
     * @property string TaxType
     */

    /**
     * The tax amount is auto calculated as a percentage of the line amount (see below) based on the tax
     * rate. This value can be overriden if the calculated <TaxAmount> is not correct.
     *
     * @property float TaxAmount
     */

    /**
     * If you wish to omit either of the <Quantity> or <UnitAmount> you can provide a LineAmount and Xero
     * will calculate the missing amount for you. The line amount reflects the discounted price if a
     * DiscountRate has been used . i.e LineAmount = Quantity * Unit Amount * ((100 – DiscountRate)/100)
     *
     * @property float LineAmount
     */

    /**
     * Optional Tracking Category – see Tracking. Any LineItem can have a maximum of 2 <TrackingCategory>
     * elements.
     *
     * @property string Tracking
     */

    /**
     * Percentage discount being applied to a line item (only supported on ACCREC invoices – ACC PAY
     * invoices and credit notes in Xero do not support discounts
     *
     * @property string DiscountRate
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'LineItems';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'LineItem';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'LineItemID';
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
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Quantity' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UnitAmount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'ItemCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AccountCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LineItemID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxAmount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'LineAmount' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'Tracking' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Invoice\\Tracking', false, false),
            'DiscountRate' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getDescription() {
        return isset($this->_data['Description']) ? $this->_data['Description'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity() {
        return isset($this->_data['Quantity']) ? $this->_data['Quantity'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setQuantity($value) {
        $this->propertyUpdated('Quantity', $value);
        $this->_data['Quantity'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitAmount() {
        return isset($this->_data['UnitAmount']) ? $this->_data['UnitAmount'] : null;
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setUnitAmount($value) {
        $this->propertyUpdated('UnitAmount', $value);
        $this->_data['UnitAmount'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemCode() {
        return isset($this->_data['ItemCode']) ? $this->_data['ItemCode'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setItemCode($value) {
        $this->propertyUpdated('ItemCode', $value);
        $this->_data['ItemCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode() {
        return isset($this->_data['AccountCode']) ? $this->_data['AccountCode'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setAccountCode($value) {
        $this->propertyUpdated('AccountCode', $value);
        $this->_data['AccountCode'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineItemID() {
        return isset($this->_data['LineItemID']) ? $this->_data['LineItemID'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setLineItemID($value) {
        $this->propertyUpdated('LineItemID', $value);
        $this->_data['LineItemID'] = $value;
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
     * @return LineItem
     */
    public function setTaxType($value) {
        $this->propertyUpdated('TaxType', $value);
        $this->_data['TaxType'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount() {
        return isset($this->_data['TaxAmount']) ? $this->_data['TaxAmount'] : null;
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setTaxAmount($value) {
        $this->propertyUpdated('TaxAmount', $value);
        $this->_data['TaxAmount'] = $value;
        return $this;
    }

    /**
     * @return float
     */
    public function getLineAmount() {
        return isset($this->_data['LineAmount']) ? $this->_data['LineAmount'] : null;
    }

    /**
     * @param float $value
     * @return LineItem
     */
    public function setLineAmount($value) {
        $this->propertyUpdated('LineAmount', $value);
        $this->_data['LineAmount'] = $value;
        return $this;
    }

    /**
     * @return Tracking
     */
    public function getTracking() {
        return isset($this->_data['Tracking']) ? $this->_data['Tracking'] : null;
    }

    /**
     * @param Tracking $value
     * @return LineItem
     */
    public function setTracking(Tracking $value = null) {
        $this->propertyUpdated('Tracking', $value);
        $this->_data['Tracking'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountRate() {
        return isset($this->_data['DiscountRate']) ? $this->_data['DiscountRate'] : null;
    }

    /**
     * @param string $value
     * @return LineItem
     */
    public function setDiscountRate($value) {
        $this->propertyUpdated('DiscountRate', $value);
        $this->_data['DiscountRate'] = $value;
        return $this;
    }
}
