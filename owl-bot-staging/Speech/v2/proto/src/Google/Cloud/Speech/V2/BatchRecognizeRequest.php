<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the
 * [BatchRecognize][google.cloud.speech.v2.Speech.BatchRecognize]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.BatchRecognizeRequest</code>
 */
class BatchRecognizeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the recognizer to be used for ASR.
     *
     * Generated from protobuf field <code>string recognizer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $recognizer = '';
    /**
     * Features and audio metadata to use for the Automatic Speech Recognition.
     * This field in combination with the
     * [config_mask][google.cloud.speech.v2.BatchRecognizeRequest.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 4;</code>
     */
    protected $config = null;
    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] that override
     * the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all given fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] override the
     * values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] completely
     * overrides and replaces the config in the recognizer for this recognition
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 5;</code>
     */
    protected $config_mask = null;
    /**
     * Audio files with file metadata for ASR.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.BatchRecognizeFileMetadata files = 3;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $recognizer
     *           Required. Resource name of the recognizer to be used for ASR.
     *     @type \Google\Cloud\Speech\V2\RecognitionConfig $config
     *           Features and audio metadata to use for the Automatic Speech Recognition.
     *           This field in combination with the
     *           [config_mask][google.cloud.speech.v2.BatchRecognizeRequest.config_mask]
     *           field can be used to override parts of the
     *           [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     *           of the Recognizer resource.
     *     @type \Google\Protobuf\FieldMask $config_mask
     *           The list of fields in
     *           [config][google.cloud.speech.v2.BatchRecognizeRequest.config] that override
     *           the values in the
     *           [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     *           of the recognizer during this recognition request. If no mask is provided,
     *           all given fields in
     *           [config][google.cloud.speech.v2.BatchRecognizeRequest.config] override the
     *           values in the recognizer for this recognition request. If a mask is
     *           provided, only the fields listed in the mask override the config in the
     *           recognizer for this recognition request. If a wildcard (`*`) is provided,
     *           [config][google.cloud.speech.v2.BatchRecognizeRequest.config] completely
     *           overrides and replaces the config in the recognizer for this recognition
     *           request.
     *     @type array<\Google\Cloud\Speech\V2\BatchRecognizeFileMetadata>|\Google\Protobuf\Internal\RepeatedField $files
     *           Audio files with file metadata for ASR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the recognizer to be used for ASR.
     *
     * Generated from protobuf field <code>string recognizer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRecognizer()
    {
        return $this->recognizer;
    }

    /**
     * Required. Resource name of the recognizer to be used for ASR.
     *
     * Generated from protobuf field <code>string recognizer = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRecognizer($var)
    {
        GPBUtil::checkString($var, True);
        $this->recognizer = $var;

        return $this;
    }

    /**
     * Features and audio metadata to use for the Automatic Speech Recognition.
     * This field in combination with the
     * [config_mask][google.cloud.speech.v2.BatchRecognizeRequest.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 4;</code>
     * @return \Google\Cloud\Speech\V2\RecognitionConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Features and audio metadata to use for the Automatic Speech Recognition.
     * This field in combination with the
     * [config_mask][google.cloud.speech.v2.BatchRecognizeRequest.config_mask]
     * field can be used to override parts of the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the Recognizer resource.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionConfig config = 4;</code>
     * @param \Google\Cloud\Speech\V2\RecognitionConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\RecognitionConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] that override
     * the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all given fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] override the
     * values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] completely
     * overrides and replaces the config in the recognizer for this recognition
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 5;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getConfigMask()
    {
        return $this->config_mask;
    }

    public function hasConfigMask()
    {
        return isset($this->config_mask);
    }

    public function clearConfigMask()
    {
        unset($this->config_mask);
    }

    /**
     * The list of fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] that override
     * the values in the
     * [default_recognition_config][google.cloud.speech.v2.Recognizer.default_recognition_config]
     * of the recognizer during this recognition request. If no mask is provided,
     * all given fields in
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] override the
     * values in the recognizer for this recognition request. If a mask is
     * provided, only the fields listed in the mask override the config in the
     * recognizer for this recognition request. If a wildcard (`*`) is provided,
     * [config][google.cloud.speech.v2.BatchRecognizeRequest.config] completely
     * overrides and replaces the config in the recognizer for this recognition
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask config_mask = 5;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setConfigMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->config_mask = $var;

        return $this;
    }

    /**
     * Audio files with file metadata for ASR.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.BatchRecognizeFileMetadata files = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Audio files with file metadata for ASR.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.BatchRecognizeFileMetadata files = 3;</code>
     * @param array<\Google\Cloud\Speech\V2\BatchRecognizeFileMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V2\BatchRecognizeFileMetadata::class);
        $this->files = $arr;

        return $this;
    }

}

