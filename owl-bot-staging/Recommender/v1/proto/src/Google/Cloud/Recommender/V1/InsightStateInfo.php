<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/insight.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information related to insight state.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.InsightStateInfo</code>
 */
class InsightStateInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Insight state.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo.State state = 1;</code>
     */
    protected $state = 0;
    /**
     * A map of metadata for the state, provided by user or automations systems.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2;</code>
     */
    private $state_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Insight state.
     *     @type array|\Google\Protobuf\Internal\MapField $state_metadata
     *           A map of metadata for the state, provided by user or automations systems.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\Insight::initOnce();
        parent::__construct($data);
    }

    /**
     * Insight state.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo.State state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Insight state.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo.State state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Recommender\V1\InsightStateInfo\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * A map of metadata for the state, provided by user or automations systems.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getStateMetadata()
    {
        return $this->state_metadata;
    }

    /**
     * A map of metadata for the state, provided by user or automations systems.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setStateMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->state_metadata = $arr;

        return $this;
    }

}

