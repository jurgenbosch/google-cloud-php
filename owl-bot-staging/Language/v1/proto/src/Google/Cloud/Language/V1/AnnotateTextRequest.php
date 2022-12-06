<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the text annotation API, which can perform multiple
 * analysis types (sentiment, entities, and syntax) in one call.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.AnnotateTextRequest</code>
 */
class AnnotateTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $document = null;
    /**
     * Required. The enabled features.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.AnnotateTextRequest.Features features = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $features = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 3;</code>
     */
    protected $encoding_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1\Document $document
     *           Required. Input document.
     *     @type \Google\Cloud\Language\V1\AnnotateTextRequest\Features $features
     *           Required. The enabled features.
     *     @type int $encoding_type
     *           The encoding type used by the API to calculate offsets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Language\V1\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Language\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * Required. The enabled features.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.AnnotateTextRequest.Features features = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Language\V1\AnnotateTextRequest\Features|null
     */
    public function getFeatures()
    {
        return $this->features;
    }

    public function hasFeatures()
    {
        return isset($this->features);
    }

    public function clearFeatures()
    {
        unset($this->features);
    }

    /**
     * Required. The enabled features.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.AnnotateTextRequest.Features features = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Language\V1\AnnotateTextRequest\Features $var
     * @return $this
     */
    public function setFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\AnnotateTextRequest\Features::class);
        $this->features = $var;

        return $this;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 3;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

