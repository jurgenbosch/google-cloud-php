<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1\SearchUrisResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains threat information on a matching uri.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.SearchUrisResponse.ThreatUri</code>
 */
class ThreatUri extends \Google\Protobuf\Internal\Message
{
    /**
     * The ThreatList this threat belongs to.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     */
    private $threat_types;
    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     */
    protected $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $threat_types
     *           The ThreatList this threat belongs to.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The cache lifetime for the returned match. Clients must not cache this
     *           response past this timestamp to avoid false positives.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The ThreatList this threat belongs to.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreatTypes()
    {
        return $this->threat_types;
    }

    /**
     * The ThreatList this threat belongs to.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreatTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebRisk\V1\ThreatType::class);
        $this->threat_types = $arr;

        return $this;
    }

    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * The cache lifetime for the returned match. Clients must not cache this
     * response past this timestamp to avoid false positives.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThreatUri::class, \Google\Cloud\WebRisk\V1\SearchUrisResponse_ThreatUri::class);

