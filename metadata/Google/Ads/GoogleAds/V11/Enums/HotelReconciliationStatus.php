<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/enums/hotel_reconciliation_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Enums;

class HotelReconciliationStatus
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
@google/ads/googleads/v11/enums/hotel_reconciliation_status.protogoogle.ads.googleads.v11.enums"�
HotelReconciliationStatusEnum"�
HotelReconciliationStatus
UNSPECIFIED 
UNKNOWN
RESERVATION_ENABLED
RECONCILIATION_NEEDED

RECONCILED
CANCELEDB�
"com.google.ads.googleads.v11.enumsBHotelReconciliationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

