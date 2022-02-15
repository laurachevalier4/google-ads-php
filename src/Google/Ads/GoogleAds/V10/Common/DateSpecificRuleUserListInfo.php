<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/user_lists.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Visitors of a page during specific dates.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.DateSpecificRuleUserListInfo</code>
 */
class DateSpecificRuleUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.common.UserListRuleInfo rule = 1;</code>
     */
    protected $rule = null;
    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string start_date = 4;</code>
     */
    protected $start_date = null;
    /**
     * Last date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string end_date = 5;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V10\Common\UserListRuleInfo $rule
     *           Boolean rule that defines visitor of a page.
     *           Required for creating a date specific rule user list.
     *     @type string $start_date
     *           Start date of users visit. If set to 2000-01-01, then the list includes all
     *           users before end_date. The date's format should be YYYY-MM-DD.
     *           Required for creating a data specific rule user list.
     *     @type string $end_date
     *           Last date of users visit. If set to 2037-12-30, then the list includes all
     *           users after start_date. The date's format should be YYYY-MM-DD.
     *           Required for creating a data specific rule user list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.common.UserListRuleInfo rule = 1;</code>
     * @return \Google\Ads\GoogleAds\V10\Common\UserListRuleInfo|null
     */
    public function getRule()
    {
        return $this->rule;
    }

    public function hasRule()
    {
        return isset($this->rule);
    }

    public function clearRule()
    {
        unset($this->rule);
    }

    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.common.UserListRuleInfo rule = 1;</code>
     * @param \Google\Ads\GoogleAds\V10\Common\UserListRuleInfo $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V10\Common\UserListRuleInfo::class);
        $this->rule = $var;

        return $this;
    }

    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string start_date = 4;</code>
     * @return string
     */
    public function getStartDate()
    {
        return isset($this->start_date) ? $this->start_date : '';
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string start_date = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Last date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string end_date = 5;</code>
     * @return string
     */
    public function getEndDate()
    {
        return isset($this->end_date) ? $this->end_date : '';
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * Last date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>optional string end_date = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

}
