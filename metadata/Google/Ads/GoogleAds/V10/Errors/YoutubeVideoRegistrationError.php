<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/youtube_video_registration_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class YoutubeVideoRegistrationError
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
Fgoogle/ads/googleads/v10/errors/youtube_video_registration_error.protogoogle.ads.googleads.v10.errors"�
!YoutubeVideoRegistrationErrorEnum"�
YoutubeVideoRegistrationError
UNSPECIFIED 
UNKNOWN
VIDEO_NOT_FOUND
VIDEO_NOT_ACCESSIBLE
VIDEO_NOT_ELIGIBLEB�
#com.google.ads.googleads.v10.errorsB"YoutubeVideoRegistrationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

