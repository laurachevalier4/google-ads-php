<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/audience_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class AudienceError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v10/errors/audience_error.protogoogle.ads.googleads.v10.errors"�
AudienceErrorEnum"�
AudienceError
UNSPECIFIED 
UNKNOWN
NAME_ALREADY_IN_USE
DIMENSION_INVALID
AUDIENCE_SEGMENT_NOT_FOUND\'
#AUDIENCE_SEGMENT_TYPE_NOT_SUPPORTED
DUPLICATE_AUDIENCE_SEGMENT
TOO_MANY_SEGMENTS$
 TOO_MANY_DIMENSIONS_OF_SAME_TYPE

IN_USE	B�
#com.google.ads.googleads.v10.errorsBAudienceErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

