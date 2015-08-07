<?php

namespace XeroPHP\Models\Accounting\TrackingCategory;

use XeroPHP\Models\Accounting\TrackingCategory;

class TrackingOptionsFactory
{
    /**
     * @param string $trackingCategoryId
     * @return TrackingOptions
     */
    public function newInstance($trackingCategoryId)
    {
        return (new TrackingOptions())
            ->setTrackingCategoryId($trackingCategoryId)
        ;
    }
}
