<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The conversation resource.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Conversation</code>
 */
class Conversation extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the conversation.
     * Format:
     * projects/{project}/locations/{location}/conversations/{conversation}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * The source of the audio and transcription for the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationDataSource data_source = 2;</code>
     */
    protected $data_source = null;
    /**
     * Output only. The time at which the conversation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The most recent time at which the conversation was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * The time at which the conversation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 17;</code>
     */
    protected $start_time = null;
    /**
     * A user-specified language code for the conversation.
     *
     * Generated from protobuf field <code>string language_code = 14;</code>
     */
    protected $language_code = '';
    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversation.
     *
     * Generated from protobuf field <code>string agent_id = 5;</code>
     */
    protected $agent_id = '';
    /**
     * A map for the user to specify any custom fields. A maximum of 20 labels per
     * conversation is allowed, with a maximum of 256 characters per entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     */
    private $labels;
    /**
     * Output only. The conversation transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript transcript = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $transcript = null;
    /**
     * Immutable. The conversation medium, if unspecified will default to PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $medium = 0;
    /**
     * Output only. The duration of the conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $duration = null;
    /**
     * Output only. The number of turns in the conversation.
     *
     * Generated from protobuf field <code>int32 turn_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $turn_count = 0;
    /**
     * Output only. The conversation's latest analysis, if one exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Analysis latest_analysis = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_analysis = null;
    /**
     * Output only. The annotations that were generated during the customer and agent
     * interaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.RuntimeAnnotation runtime_annotations = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $runtime_annotations;
    /**
     * Output only. All the matched Dialogflow intents in the call. The key corresponds to a
     * Dialogflow intent, format:
     * projects/{project}/agent/{agent}/intents/{intent}
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.DialogflowIntent> dialogflow_intents = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dialogflow_intents;
    /**
     * Obfuscated user ID which the customer sent to us.
     *
     * Generated from protobuf field <code>string obfuscated_user_id = 21;</code>
     */
    protected $obfuscated_user_id = '';
    protected $metadata;
    protected $expiration;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\Conversation\CallMetadata $call_metadata
     *           Call-specific metadata.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           The time at which this conversation should expire. After this time, the
     *           conversation data and any associated analyses will be deleted.
     *     @type \Google\Protobuf\Duration $ttl
     *           Input only. The TTL for this resource. If specified, then this TTL will
     *           be used to calculate the expire time.
     *     @type string $name
     *           Immutable. The resource name of the conversation.
     *           Format:
     *           projects/{project}/locations/{location}/conversations/{conversation}
     *     @type \Google\Cloud\ContactCenterInsights\V1\ConversationDataSource $data_source
     *           The source of the audio and transcription for the conversation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the conversation was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time at which the conversation was updated.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time at which the conversation started.
     *     @type string $language_code
     *           A user-specified language code for the conversation.
     *     @type string $agent_id
     *           An opaque, user-specified string representing the human agent who handled
     *           the conversation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A map for the user to specify any custom fields. A maximum of 20 labels per
     *           conversation is allowed, with a maximum of 256 characters per entry.
     *     @type \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript $transcript
     *           Output only. The conversation transcript.
     *     @type int $medium
     *           Immutable. The conversation medium, if unspecified will default to PHONE_CALL.
     *     @type \Google\Protobuf\Duration $duration
     *           Output only. The duration of the conversation.
     *     @type int $turn_count
     *           Output only. The number of turns in the conversation.
     *     @type \Google\Cloud\ContactCenterInsights\V1\Analysis $latest_analysis
     *           Output only. The conversation's latest analysis, if one exists.
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\RuntimeAnnotation>|\Google\Protobuf\Internal\RepeatedField $runtime_annotations
     *           Output only. The annotations that were generated during the customer and agent
     *           interaction.
     *     @type array|\Google\Protobuf\Internal\MapField $dialogflow_intents
     *           Output only. All the matched Dialogflow intents in the call. The key corresponds to a
     *           Dialogflow intent, format:
     *           projects/{project}/agent/{agent}/intents/{intent}
     *     @type string $obfuscated_user_id
     *           Obfuscated user ID which the customer sent to us.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Call-specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.CallMetadata call_metadata = 7;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Conversation\CallMetadata|null
     */
    public function getCallMetadata()
    {
        return $this->readOneof(7);
    }

    public function hasCallMetadata()
    {
        return $this->hasOneof(7);
    }

    /**
     * Call-specific metadata.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.CallMetadata call_metadata = 7;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Conversation\CallMetadata $var
     * @return $this
     */
    public function setCallMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Conversation\CallMetadata::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The time at which this conversation should expire. After this time, the
     * conversation data and any associated analyses will be deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->readOneof(15);
    }

    public function hasExpireTime()
    {
        return $this->hasOneof(15);
    }

    /**
     * The time at which this conversation should expire. After this time, the
     * conversation data and any associated analyses will be deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Input only. The TTL for this resource. If specified, then this TTL will
     * be used to calculate the expire time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 16 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->readOneof(16);
    }

    public function hasTtl()
    {
        return $this->hasOneof(16);
    }

    /**
     * Input only. The TTL for this resource. If specified, then this TTL will
     * be used to calculate the expire time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 16 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Immutable. The resource name of the conversation.
     * Format:
     * projects/{project}/locations/{location}/conversations/{conversation}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the conversation.
     * Format:
     * projects/{project}/locations/{location}/conversations/{conversation}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The source of the audio and transcription for the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationDataSource data_source = 2;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\ConversationDataSource|null
     */
    public function getDataSource()
    {
        return $this->data_source;
    }

    public function hasDataSource()
    {
        return isset($this->data_source);
    }

    public function clearDataSource()
    {
        unset($this->data_source);
    }

    /**
     * The source of the audio and transcription for the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationDataSource data_source = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\ConversationDataSource $var
     * @return $this
     */
    public function setDataSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\ConversationDataSource::class);
        $this->data_source = $var;

        return $this;
    }

    /**
     * Output only. The time at which the conversation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the conversation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The most recent time at which the conversation was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The most recent time at which the conversation was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The time at which the conversation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 17;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time at which the conversation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 17;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * A user-specified language code for the conversation.
     *
     * Generated from protobuf field <code>string language_code = 14;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * A user-specified language code for the conversation.
     *
     * Generated from protobuf field <code>string language_code = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversation.
     *
     * Generated from protobuf field <code>string agent_id = 5;</code>
     * @return string
     */
    public function getAgentId()
    {
        return $this->agent_id;
    }

    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversation.
     *
     * Generated from protobuf field <code>string agent_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_id = $var;

        return $this;
    }

    /**
     * A map for the user to specify any custom fields. A maximum of 20 labels per
     * conversation is allowed, with a maximum of 256 characters per entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A map for the user to specify any custom fields. A maximum of 20 labels per
     * conversation is allowed, with a maximum of 256 characters per entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The conversation transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript transcript = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript|null
     */
    public function getTranscript()
    {
        return $this->transcript;
    }

    public function hasTranscript()
    {
        return isset($this->transcript);
    }

    public function clearTranscript()
    {
        unset($this->transcript);
    }

    /**
     * Output only. The conversation transcript.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript transcript = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript $var
     * @return $this
     */
    public function setTranscript($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript::class);
        $this->transcript = $var;

        return $this;
    }

    /**
     * Immutable. The conversation medium, if unspecified will default to PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Immutable. The conversation medium, if unspecified will default to PHONE_CALL.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMedium($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\Conversation\Medium::class);
        $this->medium = $var;

        return $this;
    }

    /**
     * Output only. The duration of the conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Output only. The duration of the conversation.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Output only. The number of turns in the conversation.
     *
     * Generated from protobuf field <code>int32 turn_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTurnCount()
    {
        return $this->turn_count;
    }

    /**
     * Output only. The number of turns in the conversation.
     *
     * Generated from protobuf field <code>int32 turn_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTurnCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->turn_count = $var;

        return $this;
    }

    /**
     * Output only. The conversation's latest analysis, if one exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Analysis latest_analysis = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Analysis|null
     */
    public function getLatestAnalysis()
    {
        return $this->latest_analysis;
    }

    public function hasLatestAnalysis()
    {
        return isset($this->latest_analysis);
    }

    public function clearLatestAnalysis()
    {
        unset($this->latest_analysis);
    }

    /**
     * Output only. The conversation's latest analysis, if one exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Analysis latest_analysis = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Analysis $var
     * @return $this
     */
    public function setLatestAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Analysis::class);
        $this->latest_analysis = $var;

        return $this;
    }

    /**
     * Output only. The annotations that were generated during the customer and agent
     * interaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.RuntimeAnnotation runtime_annotations = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuntimeAnnotations()
    {
        return $this->runtime_annotations;
    }

    /**
     * Output only. The annotations that were generated during the customer and agent
     * interaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.RuntimeAnnotation runtime_annotations = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\RuntimeAnnotation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuntimeAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\RuntimeAnnotation::class);
        $this->runtime_annotations = $arr;

        return $this;
    }

    /**
     * Output only. All the matched Dialogflow intents in the call. The key corresponds to a
     * Dialogflow intent, format:
     * projects/{project}/agent/{agent}/intents/{intent}
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.DialogflowIntent> dialogflow_intents = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDialogflowIntents()
    {
        return $this->dialogflow_intents;
    }

    /**
     * Output only. All the matched Dialogflow intents in the call. The key corresponds to a
     * Dialogflow intent, format:
     * projects/{project}/agent/{agent}/intents/{intent}
     *
     * Generated from protobuf field <code>map<string, .google.cloud.contactcenterinsights.v1.DialogflowIntent> dialogflow_intents = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDialogflowIntents($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\DialogflowIntent::class);
        $this->dialogflow_intents = $arr;

        return $this;
    }

    /**
     * Obfuscated user ID which the customer sent to us.
     *
     * Generated from protobuf field <code>string obfuscated_user_id = 21;</code>
     * @return string
     */
    public function getObfuscatedUserId()
    {
        return $this->obfuscated_user_id;
    }

    /**
     * Obfuscated user ID which the customer sent to us.
     *
     * Generated from protobuf field <code>string obfuscated_user_id = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setObfuscatedUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->obfuscated_user_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->whichOneof("metadata");
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
        return $this->whichOneof("expiration");
    }

}

