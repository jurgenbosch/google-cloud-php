<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Storage source of conversation data.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.GcsSource</code>
 */
class GcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage URI that points to a file that contains the conversation
     * audio.
     *
     * Generated from protobuf field <code>string audio_uri = 1;</code>
     */
    protected $audio_uri = '';
    /**
     * Immutable. Cloud Storage URI that points to a file that contains the conversation
     * transcript.
     *
     * Generated from protobuf field <code>string transcript_uri = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $transcript_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $audio_uri
     *           Cloud Storage URI that points to a file that contains the conversation
     *           audio.
     *     @type string $transcript_uri
     *           Immutable. Cloud Storage URI that points to a file that contains the conversation
     *           transcript.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage URI that points to a file that contains the conversation
     * audio.
     *
     * Generated from protobuf field <code>string audio_uri = 1;</code>
     * @return string
     */
    public function getAudioUri()
    {
        return $this->audio_uri;
    }

    /**
     * Cloud Storage URI that points to a file that contains the conversation
     * audio.
     *
     * Generated from protobuf field <code>string audio_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAudioUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->audio_uri = $var;

        return $this;
    }

    /**
     * Immutable. Cloud Storage URI that points to a file that contains the conversation
     * transcript.
     *
     * Generated from protobuf field <code>string transcript_uri = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getTranscriptUri()
    {
        return $this->transcript_uri;
    }

    /**
     * Immutable. Cloud Storage URI that points to a file that contains the conversation
     * transcript.
     *
     * Generated from protobuf field <code>string transcript_uri = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setTranscriptUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->transcript_uri = $var;

        return $this;
    }

}

