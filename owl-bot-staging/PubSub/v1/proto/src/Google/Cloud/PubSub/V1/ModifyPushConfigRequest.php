<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the ModifyPushConfig method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ModifyPushConfigRequest</code>
 */
class ModifyPushConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $subscription = '';
    /**
     * Required. The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` or `StreamingPull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $push_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Required. The name of the subscription.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type \Google\Cloud\PubSub\V1\PushConfig $push_config
     *           Required. The push configuration for future deliveries.
     *           An empty `pushConfig` indicates that the Pub/Sub system should
     *           stop pushing messages from the given subscription and allow
     *           messages to be pulled and acknowledged - effectively pausing
     *           the subscription if `Pull` or `StreamingPull` is not called.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Required. The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` or `StreamingPull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\PubSub\V1\PushConfig|null
     */
    public function getPushConfig()
    {
        return $this->push_config;
    }

    public function hasPushConfig()
    {
        return isset($this->push_config);
    }

    public function clearPushConfig()
    {
        unset($this->push_config);
    }

    /**
     * Required. The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` or `StreamingPull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\PubSub\V1\PushConfig $var
     * @return $this
     */
    public function setPushConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PushConfig::class);
        $this->push_config = $var;

        return $this;
    }

}

