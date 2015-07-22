<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;

use XeroPHP\Traits\AttachmentTrait;

use XeroPHP\Models\Accounting\ManualJournal\JournalLine;

class ManualJournal extends Remote\Object {

    use AttachmentTrait;

    /**
     * Xero identifier
     *
     * @property string ManualJournalID
     */

    /**
     * Description of journal being posted
     *
     * @property string Narration
     */

    /**
     * See JournalLines
     *
     * @property JournalLine[] JournalLines
     */

    /**
     * Date journal was posted – YYYY-MM-DD
     *
     * @property \DateTime Date
     */

    /**
     * NoTax by default if you don’t specify this element. See Line Amount Types
     *
     * @property string LineAmountTypes
     */

    /**
     * See Manual Journal Status Codes
     *
     * @property string Status
     */

    /**
     * Url link to a source document – shown as “Go to [appName]” in the Xero app
     *
     * @property string Url
     */

    /**
     * Boolean – default is true if not specified
     *
     * @property bool ShowOnCashBasisReports
     */

    /**
     * Boolean to indicate if a manual journal has an attachment
     *
     * @property bool HasAttachments
     */


    const MANUAL_JOURNAL_STATUS_DRAFT   = 'DRAFT';
    const MANUAL_JOURNAL_STATUS_POSTED  = 'POSTED';
    const MANUAL_JOURNAL_STATUS_DELETED = 'DELETED';
    const MANUAL_JOURNAL_STATUS_VOIDED  = 'VOIDED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'ManualJournals';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'ManualJournal';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'ManualJournalID';
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
            'ManualJournalID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Narration' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'JournalLines' => array (true, self::PROPERTY_TYPE_OBJECT, 'Accounting\\ManualJournal\\JournalLine', true, false),
            'Date' => array (false, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'LineAmountTypes' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Status' => array (false, self::PROPERTY_TYPE_ENUM, null, false, false),
            'Url' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'ShowOnCashBasisReports' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false),
            'HasAttachments' => array (false, self::PROPERTY_TYPE_BOOLEAN, null, false, false)
        );
    }


    /**
     * @return string
     */
    public function getManualJournalID() {
        return isset($this->_data['ManualJournalID']) ? $this->_data['ManualJournalID'] : null;
    }

    /**
     * @param string $value
     * @return ManualJournal
     */
    public function setManualJournalID($value) {
        $this->propertyUpdated('ManualJournalID', $value);
        $this->_data['ManualJournalID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getNarration() {
        return isset($this->_data['Narration']) ? $this->_data['Narration'] : null;
    }

    /**
     * @param string $value
     * @return ManualJournal
     */
    public function setNarration($value) {
        $this->propertyUpdated('Narration', $value);
        $this->_data['Narration'] = $value;
        return $this;
    }

    /**
     * @return JournalLine[]
     */
    public function getJournalLines() {
        return isset($this->_data['JournalLines']) ? $this->_data['JournalLines'] : null;
    }

    /**
     * @param JournalLine $value
     * @return ManualJournal
     */
    public function addJournalLine(JournalLine $value) {
        $this->propertyUpdated('JournalLines', $value);
        $this->_data['JournalLines'][] = $value;
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
     * @return ManualJournal
     */
    public function setDate(\DateTime $value) {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;
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
     * @return ManualJournal
     */
    public function setLineAmountType($value) {
        $this->propertyUpdated('LineAmountTypes', $value);
        $this->_data['LineAmountTypes'] = $value;
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
     * @return ManualJournal
     */
    public function setStatus($value) {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
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
     * @return ManualJournal
     */
    public function setUrl($value) {
        $this->propertyUpdated('Url', $value);
        $this->_data['Url'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowOnCashBasisReports() {
        return isset($this->_data['ShowOnCashBasisReports']) ? $this->_data['ShowOnCashBasisReports'] : null;
    }

    /**
     * @param bool $value
     * @return ManualJournal
     */
    public function setShowOnCashBasisReport($value) {
        $this->propertyUpdated('ShowOnCashBasisReports', $value);
        $this->_data['ShowOnCashBasisReports'] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAttachments() {
        return isset($this->_data['HasAttachments']) ? $this->_data['HasAttachments'] : null;
    }



}