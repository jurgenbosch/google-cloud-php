<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data for an intent match.
 * Represents an intent match for a text segment in the conversation. A text
 * segment can be part of a sentence, a complete sentence, or an utterance
 * with multiple sentences.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.IntentMatchData</code>
 */
class IntentMatchData extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the matched intent.
     * Can be used to retrieve the corresponding intent information.
     *
     * Generated from protobuf field <code>string intent_unique_id = 1;</code>
     */
    protected $intent_unique_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $intent_unique_id
     *           The id of the matched intent.
     *           Can be used to retrieve the corresponding intent information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the matched intent.
     * Can be used to retrieve the corresponding intent information.
     *
     * Generated from protobuf field <code>string intent_unique_id = 1;</code>
     * @return string
     */
    public function getIntentUniqueId()
    {
        return $this->intent_unique_id;
    }

    /**
     * The id of the matched intent.
     * Can be used to retrieve the corresponding intent information.
     *
     * Generated from protobuf field <code>string intent_unique_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIntentUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->intent_unique_id = $var;

        return $this;
    }

}

