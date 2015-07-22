<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Models\Accounting\TaxRate\TaxComponent;

class TaxRate extends Remote\Object {

    /**
     * Name of tax rate
     *
     * @property string Name
     */

    /**
     * See Tax Types
     *
     * @property string TaxType
     */

    /**
     * See TaxComponents
     *
     * @property TaxComponent[] TaxComponents
     */

    /**
     * See Status Codes
     *
     * @property string Status
     */

    /**
     * See ReportTaxTypes
     *
     * @property string ReportTaxType
     */

    /**
     * Boolean to describe if tax rate can be used for asset accounts i.e. true,false
     *
     * @property float[] CanApplyToAssets
     */

    /**
     * Boolean to describe if tax rate can be used for equity accounts i.e. true,false
     *
     * @property float CanApplyToEquity
     */

    /**
     * Boolean to describe if tax rate can be used for expense accounts i.e. true,false
     *
     * @property float[] CanApplyToExpenses
     */

    /**
     * Boolean to describe if tax rate can be used for liability accounts i.e. true,false
     *
     * @property float[] CanApplyToLiabilities
     */

    /**
     * Boolean to describe if tax rate can be used for revenue accounts i.e. true,false
     *
     * @property float CanApplyToRevenue
     */

    /**
     * Tax Rate (decimal to 4dp) e.g 12.5000
     *
     * @property float DisplayTaxRate
     */

    /**
     * Effective Tax Rate (decimal to 4dp) e.g 12.5000
     *
     * @property float EffectiveRate
     */


    const TAX_STATUS_ACTIVE   = 'ACTIVE';
    const TAX_STATUS_DELETED  = 'DELETED';
    const TAX_STATUS_ARCHIVED = 'ARCHIVED';

    const AUSTRALIUM_TAX_TYPE        = 'TAX TYPE';
    const AUSTRALIUM_OUTPUT          = 'OUTPUT';
    const AUSTRALIUM_INPUT           = 'INPUT';
    const AUSTRALIUM_CAPEXINPUT      = 'CAPEXINPUT';
    const AUSTRALIUM_EXEMPTEXPORT    = 'EXEMPTEXPORT';
    const AUSTRALIUM_EXEMPTEXPENSES  = 'EXEMPTEXPENSES';
    const AUSTRALIUM_EXEMPTCAPITAL   = 'EXEMPTCAPITAL';
    const AUSTRALIUM_EXEMPTOUTPUT    = 'EXEMPTOUTPUT';
    const AUSTRALIUM_INPUTTAXED      = 'INPUTTAXED';
    const AUSTRALIUM_BASEXCLUDED     = 'BASEXCLUDED';
    const AUSTRALIUM_GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';
    const AUSTRALIUM_GSTONIMPORTS    = 'GSTONIMPORTS';

    const GLOBAL_TAX_TYPE     = 'TAX TYPE';
    const GLOBAL_INPUT        = 'INPUT';
    const GLOBAL_NONE         = 'NONE';
    const GLOBAL_OUTPUT       = 'OUTPUT';
    const GLOBAL_GSTONIMPORTS = 'GSTONIMPORTS';

    const NEW_ZEALAND_TAX_TYPE     = 'TAX TYPE';
    const NEW_ZEALAND_INPUT2       = 'INPUT2';
    const NEW_ZEALAND_NONE         = 'NONE';
    const NEW_ZEALAND_ZERORATED    = 'ZERORATED';
    const NEW_ZEALAND_OUTPUT2      = 'OUTPUT2';
    const NEW_ZEALAND_GSTONIMPORTS = 'GSTONIMPORTS';

    const UNITED_KINGDOM_TAX_TYPE           = 'TAX TYPE';
    const UNITED_KINGDOM_CAPEXINPUT         = 'CAPEXINPUT';
    const UNITED_KINGDOM_CAPEXINPUT2        = 'CAPEXINPUT2';
    const UNITED_KINGDOM_CAPEXOUTPUT        = 'CAPEXOUTPUT';
    const UNITED_KINGDOM_CAPEXOUTPUT2       = 'CAPEXOUTPUT2';
    const UNITED_KINGDOM_CAPEXSRINPUT       = 'CAPEXSRINPUT';
    const UNITED_KINGDOM_CAPEXSROUTPUT      = 'CAPEXSROUTPUT';
    const UNITED_KINGDOM_ECZRINPUT          = 'ECZRINPUT';
    const UNITED_KINGDOM_ECZROUTPUT         = 'ECZROUTPUT';
    const UNITED_KINGDOM_ECZROUTPUTSERVICES = 'ECZROUTPUTSERVICES';
    const UNITED_KINGDOM_EXEMPTINPUT        = 'EXEMPTINPUT';
    const UNITED_KINGDOM_EXEMPTOUTPUT       = 'EXEMPTOUTPUT';
    const UNITED_KINGDOM_GSTONIMPORTS       = 'GSTONIMPORTS';
    const UNITED_KINGDOM_INPUT2             = 'INPUT2';
    const UNITED_KINGDOM_NONE               = 'NONE';
    const UNITED_KINGDOM_OUTPUT2            = 'OUTPUT2';
    const UNITED_KINGDOM_RRINPUT            = 'RRINPUT';
    const UNITED_KINGDOM_RROUTPUT           = 'RROUTPUT';
    const UNITED_KINGDOM_SRINPUT            = 'SRINPUT';
    const UNITED_KINGDOM_SROUTPUT           = 'SROUTPUT';
    const UNITED_KINGDOM_ZERORATEDINPUT     = 'ZERORATEDINPUT';
    const UNITED_KINGDOM_ZERORATEDOUTPUT    = 'ZERORATEDOUTPUT';

    const UNITED_STATE_TAX_TYPE     = 'TAX TYPE';
    const UNITED_STATE_INPUT        = 'INPUT';
    const UNITED_STATE_NONE         = 'NONE';
    const UNITED_STATE_OUTPUT       = 'OUTPUT';
    const UNITED_STATE_GSTONIMPORTS = 'GSTONIMPORTS';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'TaxRates';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'TaxRate';
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
            'Name' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxType' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'TaxComponents' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\TaxRate\\TaxComponent', true, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'ReportTaxType' => array (true, self::PROPERTY_TYPE_ENUM, null, false, false),
            'CanApplyToAssets' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'CanApplyToEquity' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'CanApplyToExpenses' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'CanApplyToLiabilities' => array (false, self::PROPERTY_TYPE_FLOAT, null, true, false),
            'CanApplyToRevenue' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'DisplayTaxRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false),
            'EffectiveRate' => array (false, self::PROPERTY_TYPE_FLOAT, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getName() {
        return isset($this->_data['Name']) ? $this->_data['Name'] : null;
    }

    /**
     * @param string $value
     * @return TaxRate
     */
    public function setName($value) {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;
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
     * @return TaxRate
     */
    public function setTaxType($value) {
        $this->propertyUpdated('TaxType', $value);
        $this->_data['TaxType'] = $value;
        return $this;
    }

    /**
     * @return TaxComponent[]
     */
    public function getTaxComponents() {
        return isset($this->_data['TaxComponents']) ? $this->_data['TaxComponents'] : null;
    }

    /**
     * @param TaxComponent $value
     * @return TaxRate
     */
    public function addTaxComponent(TaxComponent $value) {
        $this->propertyUpdated('TaxComponents', $value);
        $this->_data['TaxComponents'][] = $value;
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
     * @return TaxRate
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getReportTaxType() {
        return isset($this->_data['ReportTaxType']) ? $this->_data['ReportTaxType'] : null;
    }

    /**
     * @param string $value
     * @return TaxRate
     */
    public function setReportTaxType($value) {
        $this->propertyUpdated('ReportTaxType', $value);
        $this->_data['ReportTaxType'] = $value;
        return $this;
    }

    /**
     * @return float[]
     */
    public function getCanApplyToAssets() {
        return isset($this->_data['CanApplyToAssets']) ? $this->_data['CanApplyToAssets'] : null;
    }


    /**
     * @return float
     */
    public function getCanApplyToEquity() {
        return isset($this->_data['CanApplyToEquity']) ? $this->_data['CanApplyToEquity'] : null;
    }


    /**
     * @return float[]
     */
    public function getCanApplyToExpenses() {
        return isset($this->_data['CanApplyToExpenses']) ? $this->_data['CanApplyToExpenses'] : null;
    }


    /**
     * @return float[]
     */
    public function getCanApplyToLiabilities() {
        return isset($this->_data['CanApplyToLiabilities']) ? $this->_data['CanApplyToLiabilities'] : null;
    }


    /**
     * @return float
     */
    public function getCanApplyToRevenue() {
        return isset($this->_data['CanApplyToRevenue']) ? $this->_data['CanApplyToRevenue'] : null;
    }


    /**
     * @return float
     */
    public function getDisplayTaxRate() {
        return isset($this->_data['DisplayTaxRate']) ? $this->_data['DisplayTaxRate'] : null;
    }


    /**
     * @return float
     */
    public function getEffectiveRate() {
        return isset($this->_data['EffectiveRate']) ? $this->_data['EffectiveRate'] : null;
    }



}