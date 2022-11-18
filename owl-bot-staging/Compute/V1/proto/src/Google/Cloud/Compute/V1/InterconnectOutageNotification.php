<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of a planned outage on this Interconnect.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectOutageNotification</code>
 */
class InterconnectOutageNotification extends \Google\Protobuf\Internal\Message
{
    /**
     * If issue_type is IT_PARTIAL_OUTAGE, a list of the Google-side circuit IDs that will be affected.
     *
     * Generated from protobuf field <code>repeated string affected_circuits = 177717013;</code>
     */
    private $affected_circuits;
    /**
     * A description about the purpose of the outage.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * Scheduled end time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 end_time = 114938801;</code>
     */
    protected $end_time = null;
    /**
     * Form this outage is expected to take, which can take one of the following values: - OUTAGE: The Interconnect may be completely out of service for some or all of the specified window. - PARTIAL_OUTAGE: Some circuits comprising the Interconnect as a whole should remain up, but with reduced bandwidth. Note that the versions of this enum prefixed with "IT_" have been deprecated in favor of the unprefixed values.
     * Check the IssueType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string issue_type = 369639136;</code>
     */
    protected $issue_type = null;
    /**
     * Unique identifier for this outage notification.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * The party that generated this notification, which can take the following value: - GOOGLE: this notification as generated by Google. Note that the value of NSRC_GOOGLE has been deprecated in favor of GOOGLE.
     * Check the Source enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     */
    protected $source = null;
    /**
     * Scheduled start time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 start_time = 37467274;</code>
     */
    protected $start_time = null;
    /**
     * State of this notification, which can take one of the following values: - ACTIVE: This outage notification is active. The event could be in the past, present, or future. See start_time and end_time for scheduling. - CANCELLED: The outage associated with this notification was cancelled before the outage was due to start. - COMPLETED: The outage associated with this notification is complete. Note that the versions of this enum prefixed with "NS_" have been deprecated in favor of the unprefixed values.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $affected_circuits
     *           If issue_type is IT_PARTIAL_OUTAGE, a list of the Google-side circuit IDs that will be affected.
     *     @type string $description
     *           A description about the purpose of the outage.
     *     @type int|string $end_time
     *           Scheduled end time for the outage (milliseconds since Unix epoch).
     *     @type string $issue_type
     *           Form this outage is expected to take, which can take one of the following values: - OUTAGE: The Interconnect may be completely out of service for some or all of the specified window. - PARTIAL_OUTAGE: Some circuits comprising the Interconnect as a whole should remain up, but with reduced bandwidth. Note that the versions of this enum prefixed with "IT_" have been deprecated in favor of the unprefixed values.
     *           Check the IssueType enum for the list of possible values.
     *     @type string $name
     *           Unique identifier for this outage notification.
     *     @type string $source
     *           The party that generated this notification, which can take the following value: - GOOGLE: this notification as generated by Google. Note that the value of NSRC_GOOGLE has been deprecated in favor of GOOGLE.
     *           Check the Source enum for the list of possible values.
     *     @type int|string $start_time
     *           Scheduled start time for the outage (milliseconds since Unix epoch).
     *     @type string $state
     *           State of this notification, which can take one of the following values: - ACTIVE: This outage notification is active. The event could be in the past, present, or future. See start_time and end_time for scheduling. - CANCELLED: The outage associated with this notification was cancelled before the outage was due to start. - COMPLETED: The outage associated with this notification is complete. Note that the versions of this enum prefixed with "NS_" have been deprecated in favor of the unprefixed values.
     *           Check the State enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * If issue_type is IT_PARTIAL_OUTAGE, a list of the Google-side circuit IDs that will be affected.
     *
     * Generated from protobuf field <code>repeated string affected_circuits = 177717013;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAffectedCircuits()
    {
        return $this->affected_circuits;
    }

    /**
     * If issue_type is IT_PARTIAL_OUTAGE, a list of the Google-side circuit IDs that will be affected.
     *
     * Generated from protobuf field <code>repeated string affected_circuits = 177717013;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAffectedCircuits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->affected_circuits = $arr;

        return $this;
    }

    /**
     * A description about the purpose of the outage.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * A description about the purpose of the outage.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Scheduled end time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 end_time = 114938801;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : 0;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Scheduled end time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 end_time = 114938801;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Form this outage is expected to take, which can take one of the following values: - OUTAGE: The Interconnect may be completely out of service for some or all of the specified window. - PARTIAL_OUTAGE: Some circuits comprising the Interconnect as a whole should remain up, but with reduced bandwidth. Note that the versions of this enum prefixed with "IT_" have been deprecated in favor of the unprefixed values.
     * Check the IssueType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string issue_type = 369639136;</code>
     * @return string
     */
    public function getIssueType()
    {
        return isset($this->issue_type) ? $this->issue_type : '';
    }

    public function hasIssueType()
    {
        return isset($this->issue_type);
    }

    public function clearIssueType()
    {
        unset($this->issue_type);
    }

    /**
     * Form this outage is expected to take, which can take one of the following values: - OUTAGE: The Interconnect may be completely out of service for some or all of the specified window. - PARTIAL_OUTAGE: Some circuits comprising the Interconnect as a whole should remain up, but with reduced bandwidth. Note that the versions of this enum prefixed with "IT_" have been deprecated in favor of the unprefixed values.
     * Check the IssueType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string issue_type = 369639136;</code>
     * @param string $var
     * @return $this
     */
    public function setIssueType($var)
    {
        GPBUtil::checkString($var, True);
        $this->issue_type = $var;

        return $this;
    }

    /**
     * Unique identifier for this outage notification.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Unique identifier for this outage notification.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * The party that generated this notification, which can take the following value: - GOOGLE: this notification as generated by Google. Note that the value of NSRC_GOOGLE has been deprecated in favor of GOOGLE.
     * Check the Source enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * The party that generated this notification, which can take the following value: - GOOGLE: this notification as generated by Google. Note that the value of NSRC_GOOGLE has been deprecated in favor of GOOGLE.
     * Check the Source enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source = 177235995;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Scheduled start time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 start_time = 37467274;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : 0;
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
     * Scheduled start time for the outage (milliseconds since Unix epoch).
     *
     * Generated from protobuf field <code>optional int64 start_time = 37467274;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     * State of this notification, which can take one of the following values: - ACTIVE: This outage notification is active. The event could be in the past, present, or future. See start_time and end_time for scheduling. - CANCELLED: The outage associated with this notification was cancelled before the outage was due to start. - COMPLETED: The outage associated with this notification is complete. Note that the versions of this enum prefixed with "NS_" have been deprecated in favor of the unprefixed values.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * State of this notification, which can take one of the following values: - ACTIVE: This outage notification is active. The event could be in the past, present, or future. See start_time and end_time for scheduling. - CANCELLED: The outage associated with this notification was cancelled before the outage was due to start. - COMPLETED: The outage associated with this notification is complete. Note that the versions of this enum prefixed with "NS_" have been deprecated in favor of the unprefixed values.
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

}

