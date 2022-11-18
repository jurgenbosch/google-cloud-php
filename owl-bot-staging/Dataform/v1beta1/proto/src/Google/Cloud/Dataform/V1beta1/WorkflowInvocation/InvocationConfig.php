<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\WorkflowInvocation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Includes various configuration options for this workflow invocation.
 * If both `included_targets` and `included_tags` are unset, all actions
 * will be included.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.WorkflowInvocation.InvocationConfig</code>
 */
class InvocationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The set of action identifiers to include.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target included_targets = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $included_targets;
    /**
     * Immutable. The set of tags to include.
     *
     * Generated from protobuf field <code>repeated string included_tags = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $included_tags;
    /**
     * Immutable. When set to true, transitive dependencies of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependencies_included = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $transitive_dependencies_included = false;
    /**
     * Immutable. When set to true, transitive dependents of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependents_included = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $transitive_dependents_included = false;
    /**
     * Immutable. When set to true, any incremental tables will be fully refreshed.
     *
     * Generated from protobuf field <code>bool fully_refresh_incremental_tables_enabled = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $fully_refresh_incremental_tables_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $included_targets
     *           Immutable. The set of action identifiers to include.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $included_tags
     *           Immutable. The set of tags to include.
     *     @type bool $transitive_dependencies_included
     *           Immutable. When set to true, transitive dependencies of included actions will be
     *           executed.
     *     @type bool $transitive_dependents_included
     *           Immutable. When set to true, transitive dependents of included actions will be
     *           executed.
     *     @type bool $fully_refresh_incremental_tables_enabled
     *           Immutable. When set to true, any incremental tables will be fully refreshed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The set of action identifiers to include.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target included_targets = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludedTargets()
    {
        return $this->included_targets;
    }

    /**
     * Immutable. The set of action identifiers to include.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataform.v1beta1.Target included_targets = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<\Google\Cloud\Dataform\V1beta1\Target>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludedTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataform\V1beta1\Target::class);
        $this->included_targets = $arr;

        return $this;
    }

    /**
     * Immutable. The set of tags to include.
     *
     * Generated from protobuf field <code>repeated string included_tags = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludedTags()
    {
        return $this->included_tags;
    }

    /**
     * Immutable. The set of tags to include.
     *
     * Generated from protobuf field <code>repeated string included_tags = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludedTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->included_tags = $arr;

        return $this;
    }

    /**
     * Immutable. When set to true, transitive dependencies of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependencies_included = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getTransitiveDependenciesIncluded()
    {
        return $this->transitive_dependencies_included;
    }

    /**
     * Immutable. When set to true, transitive dependencies of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependencies_included = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setTransitiveDependenciesIncluded($var)
    {
        GPBUtil::checkBool($var);
        $this->transitive_dependencies_included = $var;

        return $this;
    }

    /**
     * Immutable. When set to true, transitive dependents of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependents_included = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getTransitiveDependentsIncluded()
    {
        return $this->transitive_dependents_included;
    }

    /**
     * Immutable. When set to true, transitive dependents of included actions will be
     * executed.
     *
     * Generated from protobuf field <code>bool transitive_dependents_included = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setTransitiveDependentsIncluded($var)
    {
        GPBUtil::checkBool($var);
        $this->transitive_dependents_included = $var;

        return $this;
    }

    /**
     * Immutable. When set to true, any incremental tables will be fully refreshed.
     *
     * Generated from protobuf field <code>bool fully_refresh_incremental_tables_enabled = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getFullyRefreshIncrementalTablesEnabled()
    {
        return $this->fully_refresh_incremental_tables_enabled;
    }

    /**
     * Immutable. When set to true, any incremental tables will be fully refreshed.
     *
     * Generated from protobuf field <code>bool fully_refresh_incremental_tables_enabled = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setFullyRefreshIncrementalTablesEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_refresh_incremental_tables_enabled = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InvocationConfig::class, \Google\Cloud\Dataform\V1beta1\WorkflowInvocation_InvocationConfig::class);

