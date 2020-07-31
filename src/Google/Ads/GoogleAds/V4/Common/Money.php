<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/feed_common.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a price in a particular currency.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.Money</code>
 */
class Money extends \Google\Protobuf\Internal\Message
{
    /**
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 1;</code>
     */
    protected $currency_code = null;
    /**
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 2;</code>
     */
    protected $amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Three-character ISO 4217 currency code.
     *     @type \Google\Protobuf\Int64Value $amount_micros
     *           Amount in micros. One million is equivalent to one unit.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\FeedCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 1;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

    /**
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAmountMicros()
    {
        return $this->amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getAmountMicros()</code>

     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 2;</code>
     * @return int|string|null
     */
    public function getAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("amount_micros");
    }

    /**
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("amount_micros", $var);
        return $this;}

}
