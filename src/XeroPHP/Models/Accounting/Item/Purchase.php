<?php

namespace XeroPHP\Models\Accounting\Item;

use XeroPHP\Remote;


class Purchase extends Remote\Object {

    /**
     * Unit Price of item
     *
     * @property string UnitPrice
     */

    /**
     * Account code to be used for purchased item
     *
     * @property string AccountCode
     */

    /**
     * Used as an override if the default Tax Code for the selected <AccountCode> is not correct – see
     * TaxTypes.
     *
     * @property string TaxType
     */

    /**
     * Last modified date in UTC format
     *
     * @property \DateTime UpdatedDateUTC
     */



    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'Purchases';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Purchase';
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
            'UnitPrice' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'AccountCode' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'UpdatedDateUTC' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false)
        );
    }


    /**
     * @return string
     */
    public function getUnitPrice() {
        return isset($this->_data['UnitPrice']) ? $this->_data['UnitPrice'] : null;
    }

    /**
     * @param string $value
     * @return Purchase
     */
    public function setUnitPrice($value) {
        $this->propertyUpdated('UnitPrice', $value);
        $this->_data['UnitPrice'] = $value;
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
     * @return Purchase
     */
    public function setAccountCode($value) {
        $this->propertyUpdated('AccountCode', $value);
        $this->_data['AccountCode'] = $value;
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
     * @return Purchase
     */
    public function setTaxType($value) {
        $this->propertyUpdated('TaxType', $value);
        $this->_data['TaxType'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedDateUTC() {
        return isset($this->_data['UpdatedDateUTC']) ? $this->_data['UpdatedDateUTC'] : null;
    }



}