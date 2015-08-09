<?php

namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;

class Tracking extends Remote\Object
{
    /**
     * @var TrackingCategory[]
     */
    private $trackingCategories = [];

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return '';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'Tracking';
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

    public function addTrackingCategory(TrackingCategory $trackingCategory)
    {
        $this->trackingCategories[] = $trackingCategory;
    }

    /**
     * @return TrackingCategory[]
     */
    public function getTrackingCategories()
    {
        return $this->trackingCategories;
    }

    public function toStringArray() {
        return ['TrackingCategory' => array_map(function(TrackingCategory $trackingCategory) {
            return $trackingCategory->toStringArray();
        }, $this->trackingCategories)];
    }

    /**
     * Load an assoc array into the instance of the object $property => $value
     * $replace_data - replace existing data
     *
     * @param $input_array
     * @param $replace_data
     * @return Object
     */
    public function fromStringArray($input_array, $replace_data = false)
    {
        return [];
    }

    /**
     * @return array
     */
    static function getProperties()
    {
        return array(
            'TrackingCategory' => array (false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Invoice\\TrackingCategory', true, false),
        );
    }
}
