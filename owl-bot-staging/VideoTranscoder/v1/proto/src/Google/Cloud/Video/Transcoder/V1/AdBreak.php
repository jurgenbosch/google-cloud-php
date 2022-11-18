<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Ad break.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.AdBreak</code>
 */
class AdBreak extends \Google\Protobuf\Internal\Message
{
    /**
     * Start time in seconds for the ad break, relative to the output file
     * timeline. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     */
    protected $start_time_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_time_offset
     *           Start time in seconds for the ad break, relative to the output file
     *           timeline. The default is `0s`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Start time in seconds for the ad break, relative to the output file
     * timeline. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartTimeOffset()
    {
        return $this->start_time_offset;
    }

    public function hasStartTimeOffset()
    {
        return isset($this->start_time_offset);
    }

    public function clearStartTimeOffset()
    {
        unset($this->start_time_offset);
    }

    /**
     * Start time in seconds for the ad break, relative to the output file
     * timeline. The default is `0s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time_offset = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTimeOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time_offset = $var;

        return $this;
    }

}

