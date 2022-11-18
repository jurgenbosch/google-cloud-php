<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the metadata of a long-running operation.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.OperationMetadata</code>
 */
class OperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    protected $create_time = null;
    /**
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     */
    protected $target = '';
    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     */
    protected $verb = '';
    /**
     * Human-readable status of the operation if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     */
    protected $status_detail = '';
    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     */
    protected $requested_cancellation = false;
    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     */
    protected $api_version = '';
    /**
     * Map to hold any additional status info for the operation
     * If there is an accelerator being enabled/disabled/deleted, this will be
     * populated with accelerator name as key and status as
     * ENABLING, DISABLING or DELETING
     *
     * Generated from protobuf field <code>map<string, string> additional_status = 8;</code>
     */
    private $additional_status;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time the operation was created.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the operation finished running.
     *     @type string $target
     *           Server-defined resource path for the target of the operation.
     *     @type string $verb
     *           Name of the verb executed by the operation.
     *     @type string $status_detail
     *           Human-readable status of the operation if any.
     *     @type bool $requested_cancellation
     *           Identifies whether the user has requested cancellation
     *           of the operation. Operations that have successfully been cancelled
     *           have [Operation.error][] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     *           corresponding to `Code.CANCELLED`.
     *     @type string $api_version
     *           API version used to start the operation.
     *     @type array|\Google\Protobuf\Internal\MapField $additional_status
     *           Map to hold any additional status info for the operation
     *           If there is an accelerator being enabled/disabled/deleted, this will be
     *           populated with accelerator name as key and status as
     *           ENABLING, DISABLING or DELETING
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
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
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
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
     * The time the operation finished running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Server-defined resource path for the target of the operation.
     *
     * Generated from protobuf field <code>string target = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @return string
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Name of the verb executed by the operation.
     *
     * Generated from protobuf field <code>string verb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVerb($var)
    {
        GPBUtil::checkString($var, True);
        $this->verb = $var;

        return $this;
    }

    /**
     * Human-readable status of the operation if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Human-readable status of the operation if any.
     *
     * Generated from protobuf field <code>string status_detail = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;

        return $this;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     * @return bool
     */
    public function getRequestedCancellation()
    {
        return $this->requested_cancellation;
    }

    /**
     * Identifies whether the user has requested cancellation
     * of the operation. Operations that have successfully been cancelled
     * have [Operation.error][] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     *
     * Generated from protobuf field <code>bool requested_cancellation = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestedCancellation($var)
    {
        GPBUtil::checkBool($var);
        $this->requested_cancellation = $var;

        return $this;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @return string
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * API version used to start the operation.
     *
     * Generated from protobuf field <code>string api_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Map to hold any additional status info for the operation
     * If there is an accelerator being enabled/disabled/deleted, this will be
     * populated with accelerator name as key and status as
     * ENABLING, DISABLING or DELETING
     *
     * Generated from protobuf field <code>map<string, string> additional_status = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAdditionalStatus()
    {
        return $this->additional_status;
    }

    /**
     * Map to hold any additional status info for the operation
     * If there is an accelerator being enabled/disabled/deleted, this will be
     * populated with accelerator name as key and status as
     * ENABLING, DISABLING or DELETING
     *
     * Generated from protobuf field <code>map<string, string> additional_status = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAdditionalStatus($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_status = $arr;

        return $this;
    }

}

