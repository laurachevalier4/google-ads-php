<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/criteria.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A radius around a list of locations specified through a feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.LocationGroupInfo</code>
 */
class LocationGroupInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional string feed = 5;</code>
     */
    protected $feed = null;
    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 6;</code>
     */
    private $geo_target_constants;
    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional int64 radius = 7;</code>
     */
    protected $radius = null;
    /**
     * Unit of the radius. Miles and meters are supported for geo target
     * constants. Milli miles and meters are supported for feed item sets.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     */
    protected $radius_units = 0;
    /**
     * FeedItemSets whose FeedItems are targeted. If multiple IDs are specified,
     * then all items that appear in at least one set are targeted. This field
     * cannot be used with geo_target_constants. This is optional and can only be
     * set in CREATE operations.
     *
     * Generated from protobuf field <code>repeated string feed_item_sets = 8;</code>
     */
    private $feed_item_sets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $feed
     *           Feed specifying locations for targeting.
     *           This is required and must be set in CREATE operations.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $geo_target_constants
     *           Geo target constant(s) restricting the scope of the geographic area within
     *           the feed. Currently only one geo target constant is allowed.
     *     @type int|string $radius
     *           Distance in units specifying the radius around targeted locations.
     *           This is required and must be set in CREATE operations.
     *     @type int $radius_units
     *           Unit of the radius. Miles and meters are supported for geo target
     *           constants. Milli miles and meters are supported for feed item sets.
     *           This is required and must be set in CREATE operations.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $feed_item_sets
     *           FeedItemSets whose FeedItems are targeted. If multiple IDs are specified,
     *           then all items that appear in at least one set are targeted. This field
     *           cannot be used with geo_target_constants. This is optional and can only be
     *           set in CREATE operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional string feed = 5;</code>
     * @return string
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : '';
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Feed specifying locations for targeting.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional string feed = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed = $var;

        return $this;
    }

    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstants()
    {
        return $this->geo_target_constants;
    }

    /**
     * Geo target constant(s) restricting the scope of the geographic area within
     * the feed. Currently only one geo target constant is allowed.
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->geo_target_constants = $arr;

        return $this;
    }

    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional int64 radius = 7;</code>
     * @return int|string
     */
    public function getRadius()
    {
        return isset($this->radius) ? $this->radius : 0;
    }

    public function hasRadius()
    {
        return isset($this->radius);
    }

    public function clearRadius()
    {
        unset($this->radius);
    }

    /**
     * Distance in units specifying the radius around targeted locations.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>optional int64 radius = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRadius($var)
    {
        GPBUtil::checkInt64($var);
        $this->radius = $var;

        return $this;
    }

    /**
     * Unit of the radius. Miles and meters are supported for geo target
     * constants. Milli miles and meters are supported for feed item sets.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     * @return int
     */
    public function getRadiusUnits()
    {
        return $this->radius_units;
    }

    /**
     * Unit of the radius. Miles and meters are supported for geo target
     * constants. Milli miles and meters are supported for feed item sets.
     * This is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits radius_units = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRadiusUnits($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\LocationGroupRadiusUnitsEnum\LocationGroupRadiusUnits::class);
        $this->radius_units = $var;

        return $this;
    }

    /**
     * FeedItemSets whose FeedItems are targeted. If multiple IDs are specified,
     * then all items that appear in at least one set are targeted. This field
     * cannot be used with geo_target_constants. This is optional and can only be
     * set in CREATE operations.
     *
     * Generated from protobuf field <code>repeated string feed_item_sets = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeedItemSets()
    {
        return $this->feed_item_sets;
    }

    /**
     * FeedItemSets whose FeedItems are targeted. If multiple IDs are specified,
     * then all items that appear in at least one set are targeted. This field
     * cannot be used with geo_target_constants. This is optional and can only be
     * set in CREATE operations.
     *
     * Generated from protobuf field <code>repeated string feed_item_sets = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeedItemSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->feed_item_sets = $arr;

        return $this;
    }

}

