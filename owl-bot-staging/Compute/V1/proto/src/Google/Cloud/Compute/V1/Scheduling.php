<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sets the scheduling options for an Instance.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Scheduling</code>
 */
class Scheduling extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies whether the instance should be automatically restarted if it is terminated by Compute Engine (not terminated by a user). You can only set the automatic restart option for standard instances. Preemptible instances cannot be automatically restarted. By default, this is set to true so an instance is automatically restarted if it is terminated by Compute Engine.
     *
     * Generated from protobuf field <code>optional bool automatic_restart = 350821371;</code>
     */
    protected $automatic_restart = null;
    /**
     * Specifies the termination action for the instance.
     * Check the InstanceTerminationAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_termination_action = 107380667;</code>
     */
    protected $instance_termination_action = null;
    /**
     * An opaque location hint used to place the instance close to other resources. This field is for use by internal tools that use the public API.
     *
     * Generated from protobuf field <code>optional string location_hint = 350519505;</code>
     */
    protected $location_hint = null;
    /**
     * The minimum number of virtual CPUs this instance will consume when running on a sole-tenant node.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     */
    protected $min_node_cpus = null;
    /**
     * A set of node affinity and anti-affinity configurations. Refer to Configuring node affinity for more information. Overrides reservationAffinity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SchedulingNodeAffinity node_affinities = 461799971;</code>
     */
    private $node_affinities;
    /**
     * Defines the maintenance behavior for this instance. For standard instances, the default behavior is MIGRATE. For preemptible instances, the default and only possible behavior is TERMINATE. For more information, see Set VM host maintenance policy.
     * Check the OnHostMaintenance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string on_host_maintenance = 64616796;</code>
     */
    protected $on_host_maintenance = null;
    /**
     * Defines whether the instance is preemptible. This can only be set during instance creation or while the instance is stopped and therefore, in a `TERMINATED` state. See Instance Life Cycle for more information on the possible instance states.
     *
     * Generated from protobuf field <code>optional bool preemptible = 324203169;</code>
     */
    protected $preemptible = null;
    /**
     * Specifies the provisioning model of the instance.
     * Check the ProvisioningModel enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string provisioning_model = 494423;</code>
     */
    protected $provisioning_model = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $automatic_restart
     *           Specifies whether the instance should be automatically restarted if it is terminated by Compute Engine (not terminated by a user). You can only set the automatic restart option for standard instances. Preemptible instances cannot be automatically restarted. By default, this is set to true so an instance is automatically restarted if it is terminated by Compute Engine.
     *     @type string $instance_termination_action
     *           Specifies the termination action for the instance.
     *           Check the InstanceTerminationAction enum for the list of possible values.
     *     @type string $location_hint
     *           An opaque location hint used to place the instance close to other resources. This field is for use by internal tools that use the public API.
     *     @type int $min_node_cpus
     *           The minimum number of virtual CPUs this instance will consume when running on a sole-tenant node.
     *     @type array<\Google\Cloud\Compute\V1\SchedulingNodeAffinity>|\Google\Protobuf\Internal\RepeatedField $node_affinities
     *           A set of node affinity and anti-affinity configurations. Refer to Configuring node affinity for more information. Overrides reservationAffinity.
     *     @type string $on_host_maintenance
     *           Defines the maintenance behavior for this instance. For standard instances, the default behavior is MIGRATE. For preemptible instances, the default and only possible behavior is TERMINATE. For more information, see Set VM host maintenance policy.
     *           Check the OnHostMaintenance enum for the list of possible values.
     *     @type bool $preemptible
     *           Defines whether the instance is preemptible. This can only be set during instance creation or while the instance is stopped and therefore, in a `TERMINATED` state. See Instance Life Cycle for more information on the possible instance states.
     *     @type string $provisioning_model
     *           Specifies the provisioning model of the instance.
     *           Check the ProvisioningModel enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies whether the instance should be automatically restarted if it is terminated by Compute Engine (not terminated by a user). You can only set the automatic restart option for standard instances. Preemptible instances cannot be automatically restarted. By default, this is set to true so an instance is automatically restarted if it is terminated by Compute Engine.
     *
     * Generated from protobuf field <code>optional bool automatic_restart = 350821371;</code>
     * @return bool
     */
    public function getAutomaticRestart()
    {
        return isset($this->automatic_restart) ? $this->automatic_restart : false;
    }

    public function hasAutomaticRestart()
    {
        return isset($this->automatic_restart);
    }

    public function clearAutomaticRestart()
    {
        unset($this->automatic_restart);
    }

    /**
     * Specifies whether the instance should be automatically restarted if it is terminated by Compute Engine (not terminated by a user). You can only set the automatic restart option for standard instances. Preemptible instances cannot be automatically restarted. By default, this is set to true so an instance is automatically restarted if it is terminated by Compute Engine.
     *
     * Generated from protobuf field <code>optional bool automatic_restart = 350821371;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutomaticRestart($var)
    {
        GPBUtil::checkBool($var);
        $this->automatic_restart = $var;

        return $this;
    }

    /**
     * Specifies the termination action for the instance.
     * Check the InstanceTerminationAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_termination_action = 107380667;</code>
     * @return string
     */
    public function getInstanceTerminationAction()
    {
        return isset($this->instance_termination_action) ? $this->instance_termination_action : '';
    }

    public function hasInstanceTerminationAction()
    {
        return isset($this->instance_termination_action);
    }

    public function clearInstanceTerminationAction()
    {
        unset($this->instance_termination_action);
    }

    /**
     * Specifies the termination action for the instance.
     * Check the InstanceTerminationAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_termination_action = 107380667;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceTerminationAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_termination_action = $var;

        return $this;
    }

    /**
     * An opaque location hint used to place the instance close to other resources. This field is for use by internal tools that use the public API.
     *
     * Generated from protobuf field <code>optional string location_hint = 350519505;</code>
     * @return string
     */
    public function getLocationHint()
    {
        return isset($this->location_hint) ? $this->location_hint : '';
    }

    public function hasLocationHint()
    {
        return isset($this->location_hint);
    }

    public function clearLocationHint()
    {
        unset($this->location_hint);
    }

    /**
     * An opaque location hint used to place the instance close to other resources. This field is for use by internal tools that use the public API.
     *
     * Generated from protobuf field <code>optional string location_hint = 350519505;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_hint = $var;

        return $this;
    }

    /**
     * The minimum number of virtual CPUs this instance will consume when running on a sole-tenant node.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     * @return int
     */
    public function getMinNodeCpus()
    {
        return isset($this->min_node_cpus) ? $this->min_node_cpus : 0;
    }

    public function hasMinNodeCpus()
    {
        return isset($this->min_node_cpus);
    }

    public function clearMinNodeCpus()
    {
        unset($this->min_node_cpus);
    }

    /**
     * The minimum number of virtual CPUs this instance will consume when running on a sole-tenant node.
     *
     * Generated from protobuf field <code>optional int32 min_node_cpus = 317231675;</code>
     * @param int $var
     * @return $this
     */
    public function setMinNodeCpus($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_node_cpus = $var;

        return $this;
    }

    /**
     * A set of node affinity and anti-affinity configurations. Refer to Configuring node affinity for more information. Overrides reservationAffinity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SchedulingNodeAffinity node_affinities = 461799971;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeAffinities()
    {
        return $this->node_affinities;
    }

    /**
     * A set of node affinity and anti-affinity configurations. Refer to Configuring node affinity for more information. Overrides reservationAffinity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SchedulingNodeAffinity node_affinities = 461799971;</code>
     * @param array<\Google\Cloud\Compute\V1\SchedulingNodeAffinity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeAffinities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SchedulingNodeAffinity::class);
        $this->node_affinities = $arr;

        return $this;
    }

    /**
     * Defines the maintenance behavior for this instance. For standard instances, the default behavior is MIGRATE. For preemptible instances, the default and only possible behavior is TERMINATE. For more information, see Set VM host maintenance policy.
     * Check the OnHostMaintenance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string on_host_maintenance = 64616796;</code>
     * @return string
     */
    public function getOnHostMaintenance()
    {
        return isset($this->on_host_maintenance) ? $this->on_host_maintenance : '';
    }

    public function hasOnHostMaintenance()
    {
        return isset($this->on_host_maintenance);
    }

    public function clearOnHostMaintenance()
    {
        unset($this->on_host_maintenance);
    }

    /**
     * Defines the maintenance behavior for this instance. For standard instances, the default behavior is MIGRATE. For preemptible instances, the default and only possible behavior is TERMINATE. For more information, see Set VM host maintenance policy.
     * Check the OnHostMaintenance enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string on_host_maintenance = 64616796;</code>
     * @param string $var
     * @return $this
     */
    public function setOnHostMaintenance($var)
    {
        GPBUtil::checkString($var, True);
        $this->on_host_maintenance = $var;

        return $this;
    }

    /**
     * Defines whether the instance is preemptible. This can only be set during instance creation or while the instance is stopped and therefore, in a `TERMINATED` state. See Instance Life Cycle for more information on the possible instance states.
     *
     * Generated from protobuf field <code>optional bool preemptible = 324203169;</code>
     * @return bool
     */
    public function getPreemptible()
    {
        return isset($this->preemptible) ? $this->preemptible : false;
    }

    public function hasPreemptible()
    {
        return isset($this->preemptible);
    }

    public function clearPreemptible()
    {
        unset($this->preemptible);
    }

    /**
     * Defines whether the instance is preemptible. This can only be set during instance creation or while the instance is stopped and therefore, in a `TERMINATED` state. See Instance Life Cycle for more information on the possible instance states.
     *
     * Generated from protobuf field <code>optional bool preemptible = 324203169;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreemptible($var)
    {
        GPBUtil::checkBool($var);
        $this->preemptible = $var;

        return $this;
    }

    /**
     * Specifies the provisioning model of the instance.
     * Check the ProvisioningModel enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string provisioning_model = 494423;</code>
     * @return string
     */
    public function getProvisioningModel()
    {
        return isset($this->provisioning_model) ? $this->provisioning_model : '';
    }

    public function hasProvisioningModel()
    {
        return isset($this->provisioning_model);
    }

    public function clearProvisioningModel()
    {
        unset($this->provisioning_model);
    }

    /**
     * Specifies the provisioning model of the instance.
     * Check the ProvisioningModel enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string provisioning_model = 494423;</code>
     * @param string $var
     * @return $this
     */
    public function setProvisioningModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->provisioning_model = $var;

        return $this;
    }

}

