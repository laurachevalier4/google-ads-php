<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/flight_placeholder_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Enums;

class FlightPlaceholderField
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v11/enums/flight_placeholder_field.protogoogle.ads.googleads.v11.enums"�
FlightPlaceholderFieldEnum"�
FlightPlaceholderField
UNSPECIFIED 
UNKNOWN
DESTINATION_ID
	ORIGIN_ID
FLIGHT_DESCRIPTION
ORIGIN_NAME
DESTINATION_NAME
FLIGHT_PRICE
FORMATTED_PRICE
FLIGHT_SALE_PRICE	
FORMATTED_SALE_PRICE

	IMAGE_URL

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_DESTINATION_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v11.enumsBFlightsPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

