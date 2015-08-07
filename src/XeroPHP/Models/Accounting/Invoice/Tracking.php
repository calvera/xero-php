<?php

namespace XeroPHP\Models\Accounting\Invoice;

use XeroPHP\Remote;

class Tracking
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
        return 'TrackingCategory';
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
        return [
            'Tracking' => [array_map(function(TrackingCategory $trackingCategory) {
                return $trackingCategory->toStringArray();
            }, $this->trackingCategories)]
        ];
    }

    public function fromStringArray() {
        return [];
    }
}
