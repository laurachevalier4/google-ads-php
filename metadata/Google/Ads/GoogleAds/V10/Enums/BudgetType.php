<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/budget_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class BudgetType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
0google/ads/googleads/v10/enums/budget_type.protogoogle.ads.googleads.v10.enums"�
BudgetTypeEnum"o

BudgetType
UNSPECIFIED 
UNKNOWN
STANDARD
	FIXED_CPA
SMART_CAMPAIGN
LOCAL_SERVICESB�
"com.google.ads.googleads.v10.enumsBBudgetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

