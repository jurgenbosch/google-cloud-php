<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the Publish method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.PublishRequest</code>
 */
class PublishRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The messages in the request will be published on this topic.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $topic = '';
    /**
     * Required. The messages to publish.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.PubsubMessage messages = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Required. The messages in the request will be published on this topic.
     *           Format is `projects/{project}/topics/{topic}`.
     *     @type array<\Google\Cloud\PubSub\V1\PubsubMessage>|\Google\Protobuf\Internal\RepeatedField $messages
     *           Required. The messages to publish.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The messages in the request will be published on this topic.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Required. The messages in the request will be published on this topic.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Required. The messages to publish.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.PubsubMessage messages = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Required. The messages to publish.
     *
     * Generated from protobuf field <code>repeated .google.pubsub.v1.PubsubMessage messages = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\PubSub\V1\PubsubMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\PubSub\V1\PubsubMessage::class);
        $this->messages = $arr;

        return $this;
    }

}

