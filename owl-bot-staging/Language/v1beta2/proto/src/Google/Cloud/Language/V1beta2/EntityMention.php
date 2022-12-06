<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a mention for an entity in the text. Currently, proper noun
 * mentions are supported.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.EntityMention</code>
 */
class EntityMention extends \Google\Protobuf\Internal\Message
{
    /**
     * The mention text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     */
    protected $text = null;
    /**
     * The type of the entity mention.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EntityMention.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * For calls to [AnalyzeEntitySentiment][] or if
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v1beta2.AnnotateTextRequest.Features.extract_entity_sentiment] is set to
     * true, this field will contain the sentiment expressed for this mention of
     * the entity in the provided document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment sentiment = 3;</code>
     */
    protected $sentiment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1beta2\TextSpan $text
     *           The mention text.
     *     @type int $type
     *           The type of the entity mention.
     *     @type \Google\Cloud\Language\V1beta2\Sentiment $sentiment
     *           For calls to [AnalyzeEntitySentiment][] or if
     *           [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v1beta2.AnnotateTextRequest.Features.extract_entity_sentiment] is set to
     *           true, this field will contain the sentiment expressed for this mention of
     *           the entity in the provided document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * The mention text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     * @return \Google\Cloud\Language\V1beta2\TextSpan|null
     */
    public function getText()
    {
        return $this->text;
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The mention text.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.TextSpan text = 1;</code>
     * @param \Google\Cloud\Language\V1beta2\TextSpan $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\TextSpan::class);
        $this->text = $var;

        return $this;
    }

    /**
     * The type of the entity mention.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EntityMention.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the entity mention.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EntityMention.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\EntityMention\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * For calls to [AnalyzeEntitySentiment][] or if
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v1beta2.AnnotateTextRequest.Features.extract_entity_sentiment] is set to
     * true, this field will contain the sentiment expressed for this mention of
     * the entity in the provided document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment sentiment = 3;</code>
     * @return \Google\Cloud\Language\V1beta2\Sentiment|null
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }

    public function hasSentiment()
    {
        return isset($this->sentiment);
    }

    public function clearSentiment()
    {
        unset($this->sentiment);
    }

    /**
     * For calls to [AnalyzeEntitySentiment][] or if
     * [AnnotateTextRequest.Features.extract_entity_sentiment][google.cloud.language.v1beta2.AnnotateTextRequest.Features.extract_entity_sentiment] is set to
     * true, this field will contain the sentiment expressed for this mention of
     * the entity in the provided document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Sentiment sentiment = 3;</code>
     * @param \Google\Cloud\Language\V1beta2\Sentiment $var
     * @return $this
     */
    public function setSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Sentiment::class);
        $this->sentiment = $var;

        return $this;
    }

}

