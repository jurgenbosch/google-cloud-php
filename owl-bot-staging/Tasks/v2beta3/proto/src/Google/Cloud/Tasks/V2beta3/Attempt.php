<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/task.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The status of a task attempt.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.Attempt</code>
 */
class Attempt extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time that this attempt was scheduled.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     */
    protected $schedule_time = null;
    /**
     * Output only. The time that this attempt was dispatched.
     * `dispatch_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp dispatch_time = 2;</code>
     */
    protected $dispatch_time = null;
    /**
     * Output only. The time that this attempt response was received.
     * `response_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp response_time = 3;</code>
     */
    protected $response_time = null;
    /**
     * Output only. The response from the worker for this attempt.
     * If `response_time` is unset, then the task has not been attempted or is
     * currently running and the `response_status` field is meaningless.
     *
     * Generated from protobuf field <code>.google.rpc.Status response_status = 4;</code>
     */
    protected $response_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $schedule_time
     *           Output only. The time that this attempt was scheduled.
     *           `schedule_time` will be truncated to the nearest microsecond.
     *     @type \Google\Protobuf\Timestamp $dispatch_time
     *           Output only. The time that this attempt was dispatched.
     *           `dispatch_time` will be truncated to the nearest microsecond.
     *     @type \Google\Protobuf\Timestamp $response_time
     *           Output only. The time that this attempt response was received.
     *           `response_time` will be truncated to the nearest microsecond.
     *     @type \Google\Rpc\Status $response_status
     *           Output only. The response from the worker for this attempt.
     *           If `response_time` is unset, then the task has not been attempted or is
     *           currently running and the `response_status` field is meaningless.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time that this attempt was scheduled.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduleTime()
    {
        return $this->schedule_time;
    }

    public function hasScheduleTime()
    {
        return isset($this->schedule_time);
    }

    public function clearScheduleTime()
    {
        unset($this->schedule_time);
    }

    /**
     * Output only. The time that this attempt was scheduled.
     * `schedule_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduleTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->schedule_time = $var;

        return $this;
    }

    /**
     * Output only. The time that this attempt was dispatched.
     * `dispatch_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp dispatch_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDispatchTime()
    {
        return $this->dispatch_time;
    }

    public function hasDispatchTime()
    {
        return isset($this->dispatch_time);
    }

    public function clearDispatchTime()
    {
        unset($this->dispatch_time);
    }

    /**
     * Output only. The time that this attempt was dispatched.
     * `dispatch_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp dispatch_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDispatchTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->dispatch_time = $var;

        return $this;
    }

    /**
     * Output only. The time that this attempt response was received.
     * `response_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp response_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getResponseTime()
    {
        return $this->response_time;
    }

    public function hasResponseTime()
    {
        return isset($this->response_time);
    }

    public function clearResponseTime()
    {
        unset($this->response_time);
    }

    /**
     * Output only. The time that this attempt response was received.
     * `response_time` will be truncated to the nearest microsecond.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp response_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setResponseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->response_time = $var;

        return $this;
    }

    /**
     * Output only. The response from the worker for this attempt.
     * If `response_time` is unset, then the task has not been attempted or is
     * currently running and the `response_status` field is meaningless.
     *
     * Generated from protobuf field <code>.google.rpc.Status response_status = 4;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getResponseStatus()
    {
        return $this->response_status;
    }

    public function hasResponseStatus()
    {
        return isset($this->response_status);
    }

    public function clearResponseStatus()
    {
        unset($this->response_status);
    }

    /**
     * Output only. The response from the worker for this attempt.
     * If `response_time` is unset, then the task has not been attempted or is
     * currently running and the `response_status` field is meaningless.
     *
     * Generated from protobuf field <code>.google.rpc.Status response_status = 4;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setResponseStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->response_status = $var;

        return $this;
    }

}

