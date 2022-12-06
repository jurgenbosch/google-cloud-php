<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information on speech adaptation use in results
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.SpeechAdaptationInfo</code>
 */
class SpeechAdaptationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether there was a timeout when applying speech adaptation. If true,
     * adaptation had no effect in the response transcript.
     *
     * Generated from protobuf field <code>bool adaptation_timeout = 1;</code>
     */
    protected $adaptation_timeout = false;
    /**
     * If set, returns a message specifying which part of the speech adaptation
     * request timed out.
     *
     * Generated from protobuf field <code>string timeout_message = 4;</code>
     */
    protected $timeout_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $adaptation_timeout
     *           Whether there was a timeout when applying speech adaptation. If true,
     *           adaptation had no effect in the response transcript.
     *     @type string $timeout_message
     *           If set, returns a message specifying which part of the speech adaptation
     *           request timed out.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether there was a timeout when applying speech adaptation. If true,
     * adaptation had no effect in the response transcript.
     *
     * Generated from protobuf field <code>bool adaptation_timeout = 1;</code>
     * @return bool
     */
    public function getAdaptationTimeout()
    {
        return $this->adaptation_timeout;
    }

    /**
     * Whether there was a timeout when applying speech adaptation. If true,
     * adaptation had no effect in the response transcript.
     *
     * Generated from protobuf field <code>bool adaptation_timeout = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAdaptationTimeout($var)
    {
        GPBUtil::checkBool($var);
        $this->adaptation_timeout = $var;

        return $this;
    }

    /**
     * If set, returns a message specifying which part of the speech adaptation
     * request timed out.
     *
     * Generated from protobuf field <code>string timeout_message = 4;</code>
     * @return string
     */
    public function getTimeoutMessage()
    {
        return $this->timeout_message;
    }

    /**
     * If set, returns a message specifying which part of the speech adaptation
     * request timed out.
     *
     * Generated from protobuf field <code>string timeout_message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeoutMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->timeout_message = $var;

        return $this;
    }

}

