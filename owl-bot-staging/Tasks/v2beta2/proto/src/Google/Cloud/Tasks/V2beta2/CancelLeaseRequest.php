<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta2/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for canceling a lease using
 * [CancelLease][google.cloud.tasks.v2beta2.CloudTasks.CancelLease].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta2.CancelLeaseRequest</code>
 */
class CancelLeaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $schedule_time = null;
    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 3;</code>
     */
    protected $response_view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The task name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *     @type \Google\Protobuf\Timestamp $schedule_time
     *           Required. The task's current schedule time, available in the
     *           [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     *           [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     *           [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     *           to ensure that your worker currently holds the lease.
     *     @type int $response_view
     *           The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     *           returned.
     *           By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     *           information is retrieved by default because some data, such as
     *           payloads, might be desirable to return only when needed because
     *           of its large size or because of the sensitivity of data that it
     *           contains.
     *           Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     *           `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     *           permission on the [Task][google.cloud.tasks.v2beta2.Task] resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta2\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The task name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID/tasks/TASK_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The task's current schedule time, available in the
     * [schedule_time][google.cloud.tasks.v2beta2.Task.schedule_time] returned by
     * [LeaseTasks][google.cloud.tasks.v2beta2.CloudTasks.LeaseTasks] response or
     * [RenewLease][google.cloud.tasks.v2beta2.CloudTasks.RenewLease] response. This restriction is
     * to ensure that your worker currently holds the lease.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp schedule_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 3;</code>
     * @return int
     */
    public function getResponseView()
    {
        return $this->response_view;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta2.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta2.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta2.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta2.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta2.Task.View response_view = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2beta2\Task\View::class);
        $this->response_view = $var;

        return $this;
    }

}

