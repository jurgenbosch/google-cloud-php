<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a restore.
 * Next id: 9
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestoreConfig</code>
 */
class RestoreConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the mechanism to be used to restore volume data.
     * Default: VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED (will be treated as
     * NO_VOLUME_DATA_RESTORATION).
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy volume_data_restore_policy = 1;</code>
     */
    protected $volume_data_restore_policy = 0;
    /**
     * Defines the behavior for handling the situation where cluster-scoped
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than CLUSTER_RESOURCE_CONFLICT_POLICY_UNSPECIFIED if
     * [cluster_resource_restore_scope][google.cloud.gkebackup.v1.RestoreConfig.cluster_resource_restore_scope] is not empty.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceConflictPolicy cluster_resource_conflict_policy = 2;</code>
     */
    protected $cluster_resource_conflict_policy = 0;
    /**
     * Defines the behavior for handling the situation where sets of namespaced
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.NamespacedResourceRestoreMode namespaced_resource_restore_mode = 3;</code>
     */
    protected $namespaced_resource_restore_mode = 0;
    /**
     * Identifies the cluster-scoped resources to restore from the Backup.
     * Not specifying it means NO cluster resource will be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceRestoreScope cluster_resource_restore_scope = 4;</code>
     */
    protected $cluster_resource_restore_scope = null;
    /**
     * A list of transformation rules to be applied against Kubernetes resources
     * as they are selected for restoration from a Backup. Rules are executed in
     * order defined - this order matters, as changes made by a rule may impact
     * the filtering logic of subsequent rules. An empty list means no
     * substitution will occur.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.SubstitutionRule substitution_rules = 8;</code>
     */
    private $substitution_rules;
    protected $namespaced_resource_restore_scope;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $volume_data_restore_policy
     *           Specifies the mechanism to be used to restore volume data.
     *           Default: VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED (will be treated as
     *           NO_VOLUME_DATA_RESTORATION).
     *     @type int $cluster_resource_conflict_policy
     *           Defines the behavior for handling the situation where cluster-scoped
     *           resources being restored already exist in the target cluster. This MUST be
     *           set to a value other than CLUSTER_RESOURCE_CONFLICT_POLICY_UNSPECIFIED if
     *           [cluster_resource_restore_scope][google.cloud.gkebackup.v1.RestoreConfig.cluster_resource_restore_scope] is not empty.
     *     @type int $namespaced_resource_restore_mode
     *           Defines the behavior for handling the situation where sets of namespaced
     *           resources being restored already exist in the target cluster. This MUST be
     *           set to a value other than NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED.
     *     @type \Google\Cloud\GkeBackup\V1\RestoreConfig\ClusterResourceRestoreScope $cluster_resource_restore_scope
     *           Identifies the cluster-scoped resources to restore from the Backup.
     *           Not specifying it means NO cluster resource will be restored.
     *     @type bool $all_namespaces
     *           Restore all namespaced resources in the Backup if set to "True".
     *           Specifying this field to "False" is an error.
     *     @type \Google\Cloud\GkeBackup\V1\Namespaces $selected_namespaces
     *           A list of selected Namespaces to restore from the Backup. The listed
     *           Namespaces and all resources contained in them will be restored.
     *     @type \Google\Cloud\GkeBackup\V1\NamespacedNames $selected_applications
     *           A list of selected ProtectedApplications to restore. The listed
     *           ProtectedApplications and all the resources to which they refer will be
     *           restored.
     *     @type array<\Google\Cloud\GkeBackup\V1\RestoreConfig\SubstitutionRule>|\Google\Protobuf\Internal\RepeatedField $substitution_rules
     *           A list of transformation rules to be applied against Kubernetes resources
     *           as they are selected for restoration from a Backup. Rules are executed in
     *           order defined - this order matters, as changes made by a rule may impact
     *           the filtering logic of subsequent rules. An empty list means no
     *           substitution will occur.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the mechanism to be used to restore volume data.
     * Default: VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED (will be treated as
     * NO_VOLUME_DATA_RESTORATION).
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy volume_data_restore_policy = 1;</code>
     * @return int
     */
    public function getVolumeDataRestorePolicy()
    {
        return $this->volume_data_restore_policy;
    }

    /**
     * Specifies the mechanism to be used to restore volume data.
     * Default: VOLUME_DATA_RESTORE_POLICY_UNSPECIFIED (will be treated as
     * NO_VOLUME_DATA_RESTORATION).
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.VolumeDataRestorePolicy volume_data_restore_policy = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVolumeDataRestorePolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\VolumeDataRestorePolicy::class);
        $this->volume_data_restore_policy = $var;

        return $this;
    }

    /**
     * Defines the behavior for handling the situation where cluster-scoped
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than CLUSTER_RESOURCE_CONFLICT_POLICY_UNSPECIFIED if
     * [cluster_resource_restore_scope][google.cloud.gkebackup.v1.RestoreConfig.cluster_resource_restore_scope] is not empty.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceConflictPolicy cluster_resource_conflict_policy = 2;</code>
     * @return int
     */
    public function getClusterResourceConflictPolicy()
    {
        return $this->cluster_resource_conflict_policy;
    }

    /**
     * Defines the behavior for handling the situation where cluster-scoped
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than CLUSTER_RESOURCE_CONFLICT_POLICY_UNSPECIFIED if
     * [cluster_resource_restore_scope][google.cloud.gkebackup.v1.RestoreConfig.cluster_resource_restore_scope] is not empty.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceConflictPolicy cluster_resource_conflict_policy = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setClusterResourceConflictPolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\ClusterResourceConflictPolicy::class);
        $this->cluster_resource_conflict_policy = $var;

        return $this;
    }

    /**
     * Defines the behavior for handling the situation where sets of namespaced
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.NamespacedResourceRestoreMode namespaced_resource_restore_mode = 3;</code>
     * @return int
     */
    public function getNamespacedResourceRestoreMode()
    {
        return $this->namespaced_resource_restore_mode;
    }

    /**
     * Defines the behavior for handling the situation where sets of namespaced
     * resources being restored already exist in the target cluster. This MUST be
     * set to a value other than NAMESPACED_RESOURCE_RESTORE_MODE_UNSPECIFIED.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.NamespacedResourceRestoreMode namespaced_resource_restore_mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNamespacedResourceRestoreMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\NamespacedResourceRestoreMode::class);
        $this->namespaced_resource_restore_mode = $var;

        return $this;
    }

    /**
     * Identifies the cluster-scoped resources to restore from the Backup.
     * Not specifying it means NO cluster resource will be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceRestoreScope cluster_resource_restore_scope = 4;</code>
     * @return \Google\Cloud\GkeBackup\V1\RestoreConfig\ClusterResourceRestoreScope|null
     */
    public function getClusterResourceRestoreScope()
    {
        return $this->cluster_resource_restore_scope;
    }

    public function hasClusterResourceRestoreScope()
    {
        return isset($this->cluster_resource_restore_scope);
    }

    public function clearClusterResourceRestoreScope()
    {
        unset($this->cluster_resource_restore_scope);
    }

    /**
     * Identifies the cluster-scoped resources to restore from the Backup.
     * Not specifying it means NO cluster resource will be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.RestoreConfig.ClusterResourceRestoreScope cluster_resource_restore_scope = 4;</code>
     * @param \Google\Cloud\GkeBackup\V1\RestoreConfig\ClusterResourceRestoreScope $var
     * @return $this
     */
    public function setClusterResourceRestoreScope($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\RestoreConfig\ClusterResourceRestoreScope::class);
        $this->cluster_resource_restore_scope = $var;

        return $this;
    }

    /**
     * Restore all namespaced resources in the Backup if set to "True".
     * Specifying this field to "False" is an error.
     *
     * Generated from protobuf field <code>bool all_namespaces = 5;</code>
     * @return bool
     */
    public function getAllNamespaces()
    {
        return $this->readOneof(5);
    }

    public function hasAllNamespaces()
    {
        return $this->hasOneof(5);
    }

    /**
     * Restore all namespaced resources in the Backup if set to "True".
     * Specifying this field to "False" is an error.
     *
     * Generated from protobuf field <code>bool all_namespaces = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllNamespaces($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A list of selected Namespaces to restore from the Backup. The listed
     * Namespaces and all resources contained in them will be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Namespaces selected_namespaces = 6;</code>
     * @return \Google\Cloud\GkeBackup\V1\Namespaces|null
     */
    public function getSelectedNamespaces()
    {
        return $this->readOneof(6);
    }

    public function hasSelectedNamespaces()
    {
        return $this->hasOneof(6);
    }

    /**
     * A list of selected Namespaces to restore from the Backup. The listed
     * Namespaces and all resources contained in them will be restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.Namespaces selected_namespaces = 6;</code>
     * @param \Google\Cloud\GkeBackup\V1\Namespaces $var
     * @return $this
     */
    public function setSelectedNamespaces($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\Namespaces::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A list of selected ProtectedApplications to restore. The listed
     * ProtectedApplications and all the resources to which they refer will be
     * restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedNames selected_applications = 7;</code>
     * @return \Google\Cloud\GkeBackup\V1\NamespacedNames|null
     */
    public function getSelectedApplications()
    {
        return $this->readOneof(7);
    }

    public function hasSelectedApplications()
    {
        return $this->hasOneof(7);
    }

    /**
     * A list of selected ProtectedApplications to restore. The listed
     * ProtectedApplications and all the resources to which they refer will be
     * restored.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.NamespacedNames selected_applications = 7;</code>
     * @param \Google\Cloud\GkeBackup\V1\NamespacedNames $var
     * @return $this
     */
    public function setSelectedApplications($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\NamespacedNames::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A list of transformation rules to be applied against Kubernetes resources
     * as they are selected for restoration from a Backup. Rules are executed in
     * order defined - this order matters, as changes made by a rule may impact
     * the filtering logic of subsequent rules. An empty list means no
     * substitution will occur.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.SubstitutionRule substitution_rules = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubstitutionRules()
    {
        return $this->substitution_rules;
    }

    /**
     * A list of transformation rules to be applied against Kubernetes resources
     * as they are selected for restoration from a Backup. Rules are executed in
     * order defined - this order matters, as changes made by a rule may impact
     * the filtering logic of subsequent rules. An empty list means no
     * substitution will occur.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.SubstitutionRule substitution_rules = 8;</code>
     * @param array<\Google\Cloud\GkeBackup\V1\RestoreConfig\SubstitutionRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubstitutionRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\RestoreConfig\SubstitutionRule::class);
        $this->substitution_rules = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamespacedResourceRestoreScope()
    {
        return $this->whichOneof("namespaced_resource_restore_scope");
    }

}

