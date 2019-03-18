<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/conversion_action_counting_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\ConversionActionCountingTypeEnum;

/**
 * Indicates how conversions for this action will be counted. For more
 * information, see https://support.google.com/google-ads/answer/3438531.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType</code>
 */
class ConversionActionCountingType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Count only one conversion per click.
     *
     * Generated from protobuf enum <code>ONE_PER_CLICK = 2;</code>
     */
    const ONE_PER_CLICK = 2;
    /**
     * Count all conversions per click.
     *
     * Generated from protobuf enum <code>MANY_PER_CLICK = 3;</code>
     */
    const MANY_PER_CLICK = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionActionCountingType::class, \Google\Ads\GoogleAds\V1\Enums\ConversionActionCountingTypeEnum_ConversionActionCountingType::class);
