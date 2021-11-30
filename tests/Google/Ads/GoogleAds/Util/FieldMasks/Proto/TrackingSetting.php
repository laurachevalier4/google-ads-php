<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Google/Ads/GoogleAds/Util/FieldMasks/Proto/tester.proto

namespace Google\Ads\GoogleAds\Util\FieldMasks\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sub-message field for ResourceSetting.
 *
 * Generated from protobuf message <code>google.ads.googleads.util.fieldmasks.proto.TrackingSetting</code>
 */
class TrackingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tracking_url = 1;</code>
     */
    protected $tracking_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\Util\FieldMasks\Proto\Tester::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tracking_url = 1;</code>
     * @return string
     */
    public function getTrackingUrl()
    {
        return isset($this->tracking_url) ? $this->tracking_url : '';
    }

    public function hasTrackingUrl()
    {
        return isset($this->tracking_url);
    }

    public function clearTrackingUrl()
    {
        unset($this->tracking_url);
    }

    /**
     * Generated from protobuf field <code>string tracking_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url = $var;

        return $this;
    }

}
