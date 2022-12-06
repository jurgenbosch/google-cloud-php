<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a response from an automated agent.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AutomatedAgentReply</code>
 */
class AutomatedAgentReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2.Sessions.DetectIntent] call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DetectIntentResponse detect_intent_response = 1;</code>
     */
    protected $detect_intent_response = null;
    /**
     * AutomatedAgentReply type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply.AutomatedAgentReplyType automated_agent_reply_type = 7;</code>
     */
    protected $automated_agent_reply_type = 0;
    /**
     * Indicates whether the partial automated agent reply is interruptible when a
     * later reply message arrives. e.g. if the agent specified some music as
     * partial response, it can be cancelled.
     *
     * Generated from protobuf field <code>bool allow_cancellation = 8;</code>
     */
    protected $allow_cancellation = false;
    /**
     * The unique identifier of the current Dialogflow CX conversation page.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/pages/<Page ID>`.
     *
     * Generated from protobuf field <code>string cx_current_page = 11;</code>
     */
    protected $cx_current_page = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\DetectIntentResponse $detect_intent_response
     *           Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2.Sessions.DetectIntent] call.
     *     @type int $automated_agent_reply_type
     *           AutomatedAgentReply type.
     *     @type bool $allow_cancellation
     *           Indicates whether the partial automated agent reply is interruptible when a
     *           later reply message arrives. e.g. if the agent specified some music as
     *           partial response, it can be cancelled.
     *     @type string $cx_current_page
     *           The unique identifier of the current Dialogflow CX conversation page.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/flows/<Flow ID>/pages/<Page ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2.Sessions.DetectIntent] call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DetectIntentResponse detect_intent_response = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\DetectIntentResponse|null
     */
    public function getDetectIntentResponse()
    {
        return $this->detect_intent_response;
    }

    public function hasDetectIntentResponse()
    {
        return isset($this->detect_intent_response);
    }

    public function clearDetectIntentResponse()
    {
        unset($this->detect_intent_response);
    }

    /**
     * Response of the Dialogflow [Sessions.DetectIntent][google.cloud.dialogflow.v2.Sessions.DetectIntent] call.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.DetectIntentResponse detect_intent_response = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\DetectIntentResponse $var
     * @return $this
     */
    public function setDetectIntentResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\DetectIntentResponse::class);
        $this->detect_intent_response = $var;

        return $this;
    }

    /**
     * AutomatedAgentReply type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply.AutomatedAgentReplyType automated_agent_reply_type = 7;</code>
     * @return int
     */
    public function getAutomatedAgentReplyType()
    {
        return $this->automated_agent_reply_type;
    }

    /**
     * AutomatedAgentReply type.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentReply.AutomatedAgentReplyType automated_agent_reply_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setAutomatedAgentReplyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\AutomatedAgentReply\AutomatedAgentReplyType::class);
        $this->automated_agent_reply_type = $var;

        return $this;
    }

    /**
     * Indicates whether the partial automated agent reply is interruptible when a
     * later reply message arrives. e.g. if the agent specified some music as
     * partial response, it can be cancelled.
     *
     * Generated from protobuf field <code>bool allow_cancellation = 8;</code>
     * @return bool
     */
    public function getAllowCancellation()
    {
        return $this->allow_cancellation;
    }

    /**
     * Indicates whether the partial automated agent reply is interruptible when a
     * later reply message arrives. e.g. if the agent specified some music as
     * partial response, it can be cancelled.
     *
     * Generated from protobuf field <code>bool allow_cancellation = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowCancellation($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_cancellation = $var;

        return $this;
    }

    /**
     * The unique identifier of the current Dialogflow CX conversation page.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/pages/<Page ID>`.
     *
     * Generated from protobuf field <code>string cx_current_page = 11;</code>
     * @return string
     */
    public function getCxCurrentPage()
    {
        return $this->cx_current_page;
    }

    /**
     * The unique identifier of the current Dialogflow CX conversation page.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/flows/<Flow ID>/pages/<Page ID>`.
     *
     * Generated from protobuf field <code>string cx_current_page = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCxCurrentPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->cx_current_page = $var;

        return $this;
    }

}

