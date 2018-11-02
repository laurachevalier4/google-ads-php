<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/geo_target_constant_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GeoTargetConstantService.SuggestGeoTargetConstantsRequest][].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.SuggestGeoTargetConstantsRequest</code>
 */
class SuggestGeoTargetConstantsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * If possible, returned geo targets are translated using this locale. If not,
     * en is used by default. This is also used as a hint for returned geo
     * targets.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 3;</code>
     */
    private $locale = null;
    protected $query;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $locale
     *           If possible, returned geo targets are translated using this locale. If not,
     *           en is used by default. This is also used as a hint for returned geo
     *           targets.
     *     @type \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\LocationNames $location_names
     *           The location names to search by. At most 25 names can be set.
     *     @type \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\GeoTargets $geo_targets
     *           The geo target constant resource names to filter by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\GeoTargetConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * If possible, returned geo targets are translated using this locale. If not,
     * en is used by default. This is also used as a hint for returned geo
     * targets.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * If possible, returned geo targets are translated using this locale. If not,
     * en is used by default. This is also used as a hint for returned geo
     * targets.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->locale = $var;

        return $this;
    }

    /**
     * The location names to search by. At most 25 names can be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.SuggestGeoTargetConstantsRequest.LocationNames location_names = 1;</code>
     * @return \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\LocationNames
     */
    public function getLocationNames()
    {
        return $this->readOneof(1);
    }

    /**
     * The location names to search by. At most 25 names can be set.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.SuggestGeoTargetConstantsRequest.LocationNames location_names = 1;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\LocationNames $var
     * @return $this
     */
    public function setLocationNames($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest_LocationNames::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The geo target constant resource names to filter by.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.SuggestGeoTargetConstantsRequest.GeoTargets geo_targets = 2;</code>
     * @return \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\GeoTargets
     */
    public function getGeoTargets()
    {
        return $this->readOneof(2);
    }

    /**
     * The geo target constant resource names to filter by.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.services.SuggestGeoTargetConstantsRequest.GeoTargets geo_targets = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest\GeoTargets $var
     * @return $this
     */
    public function setGeoTargets($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Services\SuggestGeoTargetConstantsRequest_GeoTargets::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->whichOneof("query");
    }

}
