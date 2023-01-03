<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/text_extraction.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Annotation for identifying spans of text.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TextExtractionAnnotation</code>
 */
class TextExtractionAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence in correctness of the annotation.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;
    protected $annotation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\TextSegment $text_segment
     *           An entity annotation will set this, which is the part of the original
     *           text to which the annotation pertains.
     *     @type float $score
     *           Output only. A confidence estimate between 0.0 and 1.0. A higher value
     *           means greater confidence in correctness of the annotation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TextExtraction::initOnce();
        parent::__construct($data);
    }

    /**
     * An entity annotation will set this, which is the part of the original
     * text to which the annotation pertains.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextSegment text_segment = 3;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TextSegment|null
     */
    public function getTextSegment()
    {
        return $this->readOneof(3);
    }

    public function hasTextSegment()
    {
        return $this->hasOneof(3);
    }

    /**
     * An entity annotation will set this, which is the part of the original
     * text to which the annotation pertains.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextSegment text_segment = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TextSegment $var
     * @return $this
     */
    public function setTextSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TextSegment::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence in correctness of the annotation.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence in correctness of the annotation.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnnotation()
    {
        return $this->whichOneof("annotation");
    }

}

