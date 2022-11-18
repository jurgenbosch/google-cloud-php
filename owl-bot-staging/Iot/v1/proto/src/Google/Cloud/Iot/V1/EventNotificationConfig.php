<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration for forwarding telemetry events.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.EventNotificationConfig</code>
 */
class EventNotificationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If the subfolder name matches this string exactly, this configuration will
     * be used. The string must not include the leading '/' character. If empty,
     * all strings are matched. This field is used only for telemetry events;
     * subfolders are not supported for state changes.
     *
     * Generated from protobuf field <code>string subfolder_matches = 2;</code>
     */
    protected $subfolder_matches = '';
    /**
     * A Cloud Pub/Sub topic name. For example,
     * `projects/myProject/topics/deviceEvents`.
     *
     * Generated from protobuf field <code>string pubsub_topic_name = 1;</code>
     */
    protected $pubsub_topic_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subfolder_matches
     *           If the subfolder name matches this string exactly, this configuration will
     *           be used. The string must not include the leading '/' character. If empty,
     *           all strings are matched. This field is used only for telemetry events;
     *           subfolders are not supported for state changes.
     *     @type string $pubsub_topic_name
     *           A Cloud Pub/Sub topic name. For example,
     *           `projects/myProject/topics/deviceEvents`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * If the subfolder name matches this string exactly, this configuration will
     * be used. The string must not include the leading '/' character. If empty,
     * all strings are matched. This field is used only for telemetry events;
     * subfolders are not supported for state changes.
     *
     * Generated from protobuf field <code>string subfolder_matches = 2;</code>
     * @return string
     */
    public function getSubfolderMatches()
    {
        return $this->subfolder_matches;
    }

    /**
     * If the subfolder name matches this string exactly, this configuration will
     * be used. The string must not include the leading '/' character. If empty,
     * all strings are matched. This field is used only for telemetry events;
     * subfolders are not supported for state changes.
     *
     * Generated from protobuf field <code>string subfolder_matches = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubfolderMatches($var)
    {
        GPBUtil::checkString($var, True);
        $this->subfolder_matches = $var;

        return $this;
    }

    /**
     * A Cloud Pub/Sub topic name. For example,
     * `projects/myProject/topics/deviceEvents`.
     *
     * Generated from protobuf field <code>string pubsub_topic_name = 1;</code>
     * @return string
     */
    public function getPubsubTopicName()
    {
        return $this->pubsub_topic_name;
    }

    /**
     * A Cloud Pub/Sub topic name. For example,
     * `projects/myProject/topics/deviceEvents`.
     *
     * Generated from protobuf field <code>string pubsub_topic_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPubsubTopicName($var)
    {
        GPBUtil::checkString($var, True);
        $this->pubsub_topic_name = $var;

        return $this;
    }

}

