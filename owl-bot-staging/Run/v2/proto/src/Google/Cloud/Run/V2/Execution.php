<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/execution.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution represents the configuration of a single execution. A execution an
 * immutable resource that references a container image which is run to
 * completion.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.Execution</code>
 */
class Execution extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique name of this Execution.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Server assigned unique identifier for the Execution. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. A number that monotonically increases every time the user
     * modifies the desired state.
     *
     * Generated from protobuf field <code>int64 generation = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $generation = 0;
    /**
     * KRM-style labels for the resource.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels
     * Cloud Run will populate some labels with 'run.googleapis.com' or
     * 'serving.knative.dev' namespaces. Those labels are read-only, and user
     * changes will not be preserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * KRM-style annotations for the resource.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     */
    private $annotations;
    /**
     * Output only. Represents time when the execution was acknowledged by the execution
     * controller. It is not guaranteed to be set in happens-before order across
     * separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Represents time when the execution started to run.
     * It is not guaranteed to be set in happens-before order across separate
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Represents time when the execution was completed. It is not guaranteed to
     * be set in happens-before order across separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $completion_time = null;
    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. For a deleted resource, the deletion time. It is only
     * populated as a response to a Delete request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Output only. For a deleted resource, the time after which it will be
     * permamently deleted. It is only populated as a response to a Delete
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Set the launch stage to a preview stage on write to allow use of preview
     * features in that stage. On read, describes whether the resource uses
     * preview features. Launch Stages are defined at [Google Cloud Platform
     * Launch Stages](https://cloud.google.com/terms/launch-stages).
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 11;</code>
     */
    protected $launch_stage = 0;
    /**
     * Output only. The name of the parent Job.
     *
     * Generated from protobuf field <code>string job = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $job = '';
    /**
     * Output only. Specifies the maximum desired number of tasks the execution should
     * run at any given time. Must be <= task_count. The actual number of
     * tasks running in steady state will be less than this number when
     * ((.spec.task_count - .status.successful) < .spec.parallelism), i.e. when
     * the work left to do is less than max parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 parallelism = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $parallelism = 0;
    /**
     * Output only. Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution.
     * More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 task_count = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $task_count = 0;
    /**
     * Output only. The template used to create tasks for this execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $template = null;
    /**
     * Output only. Indicates whether the resource's reconciliation is still in progress.
     * See comments in `Job.reconciling` for additional information on
     * reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciling = false;
    /**
     * Output only. The Condition of this Execution, containing its readiness status, and
     * detailed error information in case it did not reach the desired state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Condition conditions = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $conditions;
    /**
     * Output only. The generation of this Execution. See comments in `reconciling` for
     * additional information on reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>int64 observed_generation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $observed_generation = 0;
    /**
     * Output only. The number of actively running tasks.
     *
     * Generated from protobuf field <code>int32 running_count = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $running_count = 0;
    /**
     * Output only. The number of tasks which reached phase Succeeded.
     *
     * Generated from protobuf field <code>int32 succeeded_count = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $succeeded_count = 0;
    /**
     * Output only. The number of tasks which reached phase Failed.
     *
     * Generated from protobuf field <code>int32 failed_count = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failed_count = 0;
    /**
     * Output only. A system-generated fingerprint for this version of the
     * resource. May be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 99 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The unique name of this Execution.
     *     @type string $uid
     *           Output only. Server assigned unique identifier for the Execution. The value is a UUID4
     *           string and guaranteed to remain unchanged until the resource is deleted.
     *     @type int|string $generation
     *           Output only. A number that monotonically increases every time the user
     *           modifies the desired state.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           KRM-style labels for the resource.
     *           User-provided labels are shared with Google's billing system, so they can
     *           be used to filter, or break down billing charges by team, component,
     *           environment, state, etc. For more information, visit
     *           https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     *           https://cloud.google.com/run/docs/configuring/labels
     *           Cloud Run will populate some labels with 'run.googleapis.com' or
     *           'serving.knative.dev' namespaces. Those labels are read-only, and user
     *           changes will not be preserved.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           KRM-style annotations for the resource.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Represents time when the execution was acknowledged by the execution
     *           controller. It is not guaranteed to be set in happens-before order across
     *           separate operations.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Represents time when the execution started to run.
     *           It is not guaranteed to be set in happens-before order across separate
     *           operations.
     *     @type \Google\Protobuf\Timestamp $completion_time
     *           Output only. Represents time when the execution was completed. It is not guaranteed to
     *           be set in happens-before order across separate operations.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last-modified time.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. For a deleted resource, the deletion time. It is only
     *           populated as a response to a Delete request.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. For a deleted resource, the time after which it will be
     *           permamently deleted. It is only populated as a response to a Delete
     *           request.
     *     @type int $launch_stage
     *           Set the launch stage to a preview stage on write to allow use of preview
     *           features in that stage. On read, describes whether the resource uses
     *           preview features. Launch Stages are defined at [Google Cloud Platform
     *           Launch Stages](https://cloud.google.com/terms/launch-stages).
     *     @type string $job
     *           Output only. The name of the parent Job.
     *     @type int $parallelism
     *           Output only. Specifies the maximum desired number of tasks the execution should
     *           run at any given time. Must be <= task_count. The actual number of
     *           tasks running in steady state will be less than this number when
     *           ((.spec.task_count - .status.successful) < .spec.parallelism), i.e. when
     *           the work left to do is less than max parallelism. More info:
     *           https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *     @type int $task_count
     *           Output only. Specifies the desired number of tasks the execution should run.
     *           Setting to 1 means that parallelism is limited to 1 and the success of
     *           that task signals the success of the execution.
     *           More info:
     *           https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *     @type \Google\Cloud\Run\V2\TaskTemplate $template
     *           Output only. The template used to create tasks for this execution.
     *     @type bool $reconciling
     *           Output only. Indicates whether the resource's reconciliation is still in progress.
     *           See comments in `Job.reconciling` for additional information on
     *           reconciliation process in Cloud Run.
     *     @type array<\Google\Cloud\Run\V2\Condition>|\Google\Protobuf\Internal\RepeatedField $conditions
     *           Output only. The Condition of this Execution, containing its readiness status, and
     *           detailed error information in case it did not reach the desired state.
     *     @type int|string $observed_generation
     *           Output only. The generation of this Execution. See comments in `reconciling` for
     *           additional information on reconciliation process in Cloud Run.
     *     @type int $running_count
     *           Output only. The number of actively running tasks.
     *     @type int $succeeded_count
     *           Output only. The number of tasks which reached phase Succeeded.
     *     @type int $failed_count
     *           Output only. The number of tasks which reached phase Failed.
     *     @type string $etag
     *           Output only. A system-generated fingerprint for this version of the
     *           resource. May be used to detect modification conflict during updates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique name of this Execution.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The unique name of this Execution.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Server assigned unique identifier for the Execution. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server assigned unique identifier for the Execution. The value is a UUID4
     * string and guaranteed to remain unchanged until the resource is deleted.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. A number that monotonically increases every time the user
     * modifies the desired state.
     *
     * Generated from protobuf field <code>int64 generation = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Output only. A number that monotonically increases every time the user
     * modifies the desired state.
     *
     * Generated from protobuf field <code>int64 generation = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation = $var;

        return $this;
    }

    /**
     * KRM-style labels for the resource.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels
     * Cloud Run will populate some labels with 'run.googleapis.com' or
     * 'serving.knative.dev' namespaces. Those labels are read-only, and user
     * changes will not be preserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * KRM-style labels for the resource.
     * User-provided labels are shared with Google's billing system, so they can
     * be used to filter, or break down billing charges by team, component,
     * environment, state, etc. For more information, visit
     * https://cloud.google.com/resource-manager/docs/creating-managing-labels or
     * https://cloud.google.com/run/docs/configuring/labels
     * Cloud Run will populate some labels with 'run.googleapis.com' or
     * 'serving.knative.dev' namespaces. Those labels are read-only, and user
     * changes will not be preserved.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
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
     * KRM-style annotations for the resource.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * KRM-style annotations for the resource.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. Represents time when the execution was acknowledged by the execution
     * controller. It is not guaranteed to be set in happens-before order across
     * separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Represents time when the execution was acknowledged by the execution
     * controller. It is not guaranteed to be set in happens-before order across
     * separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Represents time when the execution started to run.
     * It is not guaranteed to be set in happens-before order across separate
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Represents time when the execution started to run.
     * It is not guaranteed to be set in happens-before order across separate
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Represents time when the execution was completed. It is not guaranteed to
     * be set in happens-before order across separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompletionTime()
    {
        return $this->completion_time;
    }

    public function hasCompletionTime()
    {
        return isset($this->completion_time);
    }

    public function clearCompletionTime()
    {
        unset($this->completion_time);
    }

    /**
     * Output only. Represents time when the execution was completed. It is not guaranteed to
     * be set in happens-before order across separate operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completion_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompletionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->completion_time = $var;

        return $this;
    }

    /**
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The last-modified time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. For a deleted resource, the deletion time. It is only
     * populated as a response to a Delete request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. For a deleted resource, the deletion time. It is only
     * populated as a response to a Delete request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. For a deleted resource, the time after which it will be
     * permamently deleted. It is only populated as a response to a Delete
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. For a deleted resource, the time after which it will be
     * permamently deleted. It is only populated as a response to a Delete
     * request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Set the launch stage to a preview stage on write to allow use of preview
     * features in that stage. On read, describes whether the resource uses
     * preview features. Launch Stages are defined at [Google Cloud Platform
     * Launch Stages](https://cloud.google.com/terms/launch-stages).
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 11;</code>
     * @return int
     */
    public function getLaunchStage()
    {
        return $this->launch_stage;
    }

    /**
     * Set the launch stage to a preview stage on write to allow use of preview
     * features in that stage. On read, describes whether the resource uses
     * preview features. Launch Stages are defined at [Google Cloud Platform
     * Launch Stages](https://cloud.google.com/terms/launch-stages).
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLaunchStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\LaunchStage::class);
        $this->launch_stage = $var;

        return $this;
    }

    /**
     * Output only. The name of the parent Job.
     *
     * Generated from protobuf field <code>string job = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Output only. The name of the parent Job.
     *
     * Generated from protobuf field <code>string job = 12 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->job = $var;

        return $this;
    }

    /**
     * Output only. Specifies the maximum desired number of tasks the execution should
     * run at any given time. Must be <= task_count. The actual number of
     * tasks running in steady state will be less than this number when
     * ((.spec.task_count - .status.successful) < .spec.parallelism), i.e. when
     * the work left to do is less than max parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 parallelism = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getParallelism()
    {
        return $this->parallelism;
    }

    /**
     * Output only. Specifies the maximum desired number of tasks the execution should
     * run at any given time. Must be <= task_count. The actual number of
     * tasks running in steady state will be less than this number when
     * ((.spec.task_count - .status.successful) < .spec.parallelism), i.e. when
     * the work left to do is less than max parallelism. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 parallelism = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setParallelism($var)
    {
        GPBUtil::checkInt32($var);
        $this->parallelism = $var;

        return $this;
    }

    /**
     * Output only. Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution.
     * More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 task_count = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTaskCount()
    {
        return $this->task_count;
    }

    /**
     * Output only. Specifies the desired number of tasks the execution should run.
     * Setting to 1 means that parallelism is limited to 1 and the success of
     * that task signals the success of the execution.
     * More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * Generated from protobuf field <code>int32 task_count = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTaskCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->task_count = $var;

        return $this;
    }

    /**
     * Output only. The template used to create tasks for this execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Run\V2\TaskTemplate|null
     */
    public function getTemplate()
    {
        return $this->template;
    }

    public function hasTemplate()
    {
        return isset($this->template);
    }

    public function clearTemplate()
    {
        unset($this->template);
    }

    /**
     * Output only. The template used to create tasks for this execution.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TaskTemplate template = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Run\V2\TaskTemplate $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\TaskTemplate::class);
        $this->template = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether the resource's reconciliation is still in progress.
     * See comments in `Job.reconciling` for additional information on
     * reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. Indicates whether the resource's reconciliation is still in progress.
     * See comments in `Job.reconciling` for additional information on
     * reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>bool reconciling = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The Condition of this Execution, containing its readiness status, and
     * detailed error information in case it did not reach the desired state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Condition conditions = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Output only. The Condition of this Execution, containing its readiness status, and
     * detailed error information in case it did not reach the desired state.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.Condition conditions = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Run\V2\Condition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\Condition::class);
        $this->conditions = $arr;

        return $this;
    }

    /**
     * Output only. The generation of this Execution. See comments in `reconciling` for
     * additional information on reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>int64 observed_generation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getObservedGeneration()
    {
        return $this->observed_generation;
    }

    /**
     * Output only. The generation of this Execution. See comments in `reconciling` for
     * additional information on reconciliation process in Cloud Run.
     *
     * Generated from protobuf field <code>int64 observed_generation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setObservedGeneration($var)
    {
        GPBUtil::checkInt64($var);
        $this->observed_generation = $var;

        return $this;
    }

    /**
     * Output only. The number of actively running tasks.
     *
     * Generated from protobuf field <code>int32 running_count = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRunningCount()
    {
        return $this->running_count;
    }

    /**
     * Output only. The number of actively running tasks.
     *
     * Generated from protobuf field <code>int32 running_count = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRunningCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->running_count = $var;

        return $this;
    }

    /**
     * Output only. The number of tasks which reached phase Succeeded.
     *
     * Generated from protobuf field <code>int32 succeeded_count = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSucceededCount()
    {
        return $this->succeeded_count;
    }

    /**
     * Output only. The number of tasks which reached phase Succeeded.
     *
     * Generated from protobuf field <code>int32 succeeded_count = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSucceededCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->succeeded_count = $var;

        return $this;
    }

    /**
     * Output only. The number of tasks which reached phase Failed.
     *
     * Generated from protobuf field <code>int32 failed_count = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailedCount()
    {
        return $this->failed_count;
    }

    /**
     * Output only. The number of tasks which reached phase Failed.
     *
     * Generated from protobuf field <code>int32 failed_count = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->failed_count = $var;

        return $this;
    }

    /**
     * Output only. A system-generated fingerprint for this version of the
     * resource. May be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 99 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. A system-generated fingerprint for this version of the
     * resource. May be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 99 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

