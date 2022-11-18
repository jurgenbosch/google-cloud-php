<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Participants.CreateParticipant][google.cloud.dialogflow.v2.Participants.CreateParticipant].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateParticipantRequest</code>
 */
class CreateParticipantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource identifier of the conversation adding the participant.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The participant to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $participant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource identifier of the conversation adding the participant.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\Participant $participant
     *           Required. The participant to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource identifier of the conversation adding the participant.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource identifier of the conversation adding the participant.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The participant to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Participant|null
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function hasParticipant()
    {
        return isset($this->participant);
    }

    public function clearParticipant()
    {
        unset($this->participant);
    }

    /**
     * Required. The participant to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Participant participant = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Participant $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Participant::class);
        $this->participant = $var;

        return $this;
    }

}

