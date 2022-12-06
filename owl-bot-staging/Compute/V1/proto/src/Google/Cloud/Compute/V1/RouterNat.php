<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Nat resource. It enables the VMs within the specified subnetworks to access Internet without external IP addresses. It specifies a list of subnetworks (and the ranges within) that want to use NAT. Customers can also provide the external IPs that would be used for NAT. GCP would auto-allocate ephemeral IPs if no external IPs are provided.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterNat</code>
 */
class RouterNat extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of URLs of the IP resources to be drained. These IPs must be valid static external IPs that have been assigned to the NAT. These IPs should be used for updating/patching a NAT only.
     *
     * Generated from protobuf field <code>repeated string drain_nat_ips = 504078535;</code>
     */
    private $drain_nat_ips;
    /**
     * Enable Dynamic Port Allocation. If not specified, it is disabled by default. If set to true, - Dynamic Port Allocation will be enabled on this NAT config. - enableEndpointIndependentMapping cannot be set to true. - If minPorts is set, minPortsPerVm must be set to a power of two greater than or equal to 32. If minPortsPerVm is not set, a minimum of 32 ports will be allocated to a VM from this NAT config. 
     *
     * Generated from protobuf field <code>optional bool enable_dynamic_port_allocation = 532106402;</code>
     */
    protected $enable_dynamic_port_allocation = null;
    /**
     * Generated from protobuf field <code>optional bool enable_endpoint_independent_mapping = 259441819;</code>
     */
    protected $enable_endpoint_independent_mapping = null;
    /**
     * List of NAT-ted endpoint types supported by the Nat Gateway. If the list is empty, then it will be equivalent to include ENDPOINT_TYPE_VM
     * Check the EndpointTypes enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string endpoint_types = 502633807;</code>
     */
    private $endpoint_types;
    /**
     * Timeout (in seconds) for ICMP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 icmp_idle_timeout_sec = 3647562;</code>
     */
    protected $icmp_idle_timeout_sec = null;
    /**
     * Configure logging on this NAT.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatLogConfig log_config = 351299741;</code>
     */
    protected $log_config = null;
    /**
     * Maximum number of ports allocated to a VM from this NAT config when Dynamic Port Allocation is enabled. If Dynamic Port Allocation is not enabled, this field has no effect. If Dynamic Port Allocation is enabled, and this field is set, it must be set to a power of two greater than minPortsPerVm, or 64 if minPortsPerVm is not set. If Dynamic Port Allocation is enabled and this field is not set, a maximum of 65536 ports will be allocated to a VM from this NAT config.
     *
     * Generated from protobuf field <code>optional int32 max_ports_per_vm = 250062049;</code>
     */
    protected $max_ports_per_vm = null;
    /**
     * Minimum number of ports allocated to a VM from this NAT config. If not set, a default number of ports is allocated to a VM. This is rounded up to the nearest power of 2. For example, if the value of this field is 50, at least 64 ports are allocated to a VM.
     *
     * Generated from protobuf field <code>optional int32 min_ports_per_vm = 186193587;</code>
     */
    protected $min_ports_per_vm = null;
    /**
     * Unique name of this Nat service. The name must be 1-63 characters long and comply with RFC1035.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * Specify the NatIpAllocateOption, which can take one of the following values: - MANUAL_ONLY: Uses only Nat IP addresses provided by customers. When there are not enough specified Nat IPs, the Nat service fails for new VMs. - AUTO_ONLY: Nat IPs are allocated by Google Cloud Platform; customers can't specify any Nat IPs. When choosing AUTO_ONLY, then nat_ip should be empty.
     * Check the NatIpAllocateOption enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nat_ip_allocate_option = 429726845;</code>
     */
    protected $nat_ip_allocate_option = null;
    /**
     * A list of URLs of the IP resources used for this Nat service. These IP addresses must be valid static external IP addresses assigned to the project.
     *
     * Generated from protobuf field <code>repeated string nat_ips = 117635086;</code>
     */
    private $nat_ips;
    /**
     * A list of rules associated with this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatRule rules = 108873975;</code>
     */
    private $rules;
    /**
     * Specify the Nat option, which can take one of the following values: - ALL_SUBNETWORKS_ALL_IP_RANGES: All of the IP ranges in every Subnetwork are allowed to Nat. - ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES: All of the primary IP ranges in every Subnetwork are allowed to Nat. - LIST_OF_SUBNETWORKS: A list of Subnetworks are allowed to Nat (specified in the field subnetwork below) The default is SUBNETWORK_IP_RANGE_TO_NAT_OPTION_UNSPECIFIED. Note that if this field contains ALL_SUBNETWORKS_ALL_IP_RANGES or ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES, then there should not be any other Router.Nat section in any Router for this network in this region.
     * Check the SourceSubnetworkIpRangesToNat enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source_subnetwork_ip_ranges_to_nat = 252213211;</code>
     */
    protected $source_subnetwork_ip_ranges_to_nat = null;
    /**
     * A list of Subnetwork resources whose traffic should be translated by NAT Gateway. It is used only when LIST_OF_SUBNETWORKS is selected for the SubnetworkIpRangeToNatOption above.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat subnetworks = 415853125;</code>
     */
    private $subnetworks;
    /**
     * Timeout (in seconds) for TCP established connections. Defaults to 1200s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_established_idle_timeout_sec = 223098349;</code>
     */
    protected $tcp_established_idle_timeout_sec = null;
    /**
     * Timeout (in seconds) for TCP connections that are in TIME_WAIT state. Defaults to 120s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_time_wait_timeout_sec = 513596925;</code>
     */
    protected $tcp_time_wait_timeout_sec = null;
    /**
     * Timeout (in seconds) for TCP transitory connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_transitory_idle_timeout_sec = 205028774;</code>
     */
    protected $tcp_transitory_idle_timeout_sec = null;
    /**
     * Timeout (in seconds) for UDP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 udp_idle_timeout_sec = 64919878;</code>
     */
    protected $udp_idle_timeout_sec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $drain_nat_ips
     *           A list of URLs of the IP resources to be drained. These IPs must be valid static external IPs that have been assigned to the NAT. These IPs should be used for updating/patching a NAT only.
     *     @type bool $enable_dynamic_port_allocation
     *           Enable Dynamic Port Allocation. If not specified, it is disabled by default. If set to true, - Dynamic Port Allocation will be enabled on this NAT config. - enableEndpointIndependentMapping cannot be set to true. - If minPorts is set, minPortsPerVm must be set to a power of two greater than or equal to 32. If minPortsPerVm is not set, a minimum of 32 ports will be allocated to a VM from this NAT config. 
     *     @type bool $enable_endpoint_independent_mapping
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $endpoint_types
     *           List of NAT-ted endpoint types supported by the Nat Gateway. If the list is empty, then it will be equivalent to include ENDPOINT_TYPE_VM
     *           Check the EndpointTypes enum for the list of possible values.
     *     @type int $icmp_idle_timeout_sec
     *           Timeout (in seconds) for ICMP connections. Defaults to 30s if not set.
     *     @type \Google\Cloud\Compute\V1\RouterNatLogConfig $log_config
     *           Configure logging on this NAT.
     *     @type int $max_ports_per_vm
     *           Maximum number of ports allocated to a VM from this NAT config when Dynamic Port Allocation is enabled. If Dynamic Port Allocation is not enabled, this field has no effect. If Dynamic Port Allocation is enabled, and this field is set, it must be set to a power of two greater than minPortsPerVm, or 64 if minPortsPerVm is not set. If Dynamic Port Allocation is enabled and this field is not set, a maximum of 65536 ports will be allocated to a VM from this NAT config.
     *     @type int $min_ports_per_vm
     *           Minimum number of ports allocated to a VM from this NAT config. If not set, a default number of ports is allocated to a VM. This is rounded up to the nearest power of 2. For example, if the value of this field is 50, at least 64 ports are allocated to a VM.
     *     @type string $name
     *           Unique name of this Nat service. The name must be 1-63 characters long and comply with RFC1035.
     *     @type string $nat_ip_allocate_option
     *           Specify the NatIpAllocateOption, which can take one of the following values: - MANUAL_ONLY: Uses only Nat IP addresses provided by customers. When there are not enough specified Nat IPs, the Nat service fails for new VMs. - AUTO_ONLY: Nat IPs are allocated by Google Cloud Platform; customers can't specify any Nat IPs. When choosing AUTO_ONLY, then nat_ip should be empty.
     *           Check the NatIpAllocateOption enum for the list of possible values.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $nat_ips
     *           A list of URLs of the IP resources used for this Nat service. These IP addresses must be valid static external IP addresses assigned to the project.
     *     @type array<\Google\Cloud\Compute\V1\RouterNatRule>|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of rules associated with this NAT.
     *     @type string $source_subnetwork_ip_ranges_to_nat
     *           Specify the Nat option, which can take one of the following values: - ALL_SUBNETWORKS_ALL_IP_RANGES: All of the IP ranges in every Subnetwork are allowed to Nat. - ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES: All of the primary IP ranges in every Subnetwork are allowed to Nat. - LIST_OF_SUBNETWORKS: A list of Subnetworks are allowed to Nat (specified in the field subnetwork below) The default is SUBNETWORK_IP_RANGE_TO_NAT_OPTION_UNSPECIFIED. Note that if this field contains ALL_SUBNETWORKS_ALL_IP_RANGES or ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES, then there should not be any other Router.Nat section in any Router for this network in this region.
     *           Check the SourceSubnetworkIpRangesToNat enum for the list of possible values.
     *     @type array<\Google\Cloud\Compute\V1\RouterNatSubnetworkToNat>|\Google\Protobuf\Internal\RepeatedField $subnetworks
     *           A list of Subnetwork resources whose traffic should be translated by NAT Gateway. It is used only when LIST_OF_SUBNETWORKS is selected for the SubnetworkIpRangeToNatOption above.
     *     @type int $tcp_established_idle_timeout_sec
     *           Timeout (in seconds) for TCP established connections. Defaults to 1200s if not set.
     *     @type int $tcp_time_wait_timeout_sec
     *           Timeout (in seconds) for TCP connections that are in TIME_WAIT state. Defaults to 120s if not set.
     *     @type int $tcp_transitory_idle_timeout_sec
     *           Timeout (in seconds) for TCP transitory connections. Defaults to 30s if not set.
     *     @type int $udp_idle_timeout_sec
     *           Timeout (in seconds) for UDP connections. Defaults to 30s if not set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of URLs of the IP resources to be drained. These IPs must be valid static external IPs that have been assigned to the NAT. These IPs should be used for updating/patching a NAT only.
     *
     * Generated from protobuf field <code>repeated string drain_nat_ips = 504078535;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDrainNatIps()
    {
        return $this->drain_nat_ips;
    }

    /**
     * A list of URLs of the IP resources to be drained. These IPs must be valid static external IPs that have been assigned to the NAT. These IPs should be used for updating/patching a NAT only.
     *
     * Generated from protobuf field <code>repeated string drain_nat_ips = 504078535;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDrainNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->drain_nat_ips = $arr;

        return $this;
    }

    /**
     * Enable Dynamic Port Allocation. If not specified, it is disabled by default. If set to true, - Dynamic Port Allocation will be enabled on this NAT config. - enableEndpointIndependentMapping cannot be set to true. - If minPorts is set, minPortsPerVm must be set to a power of two greater than or equal to 32. If minPortsPerVm is not set, a minimum of 32 ports will be allocated to a VM from this NAT config. 
     *
     * Generated from protobuf field <code>optional bool enable_dynamic_port_allocation = 532106402;</code>
     * @return bool
     */
    public function getEnableDynamicPortAllocation()
    {
        return isset($this->enable_dynamic_port_allocation) ? $this->enable_dynamic_port_allocation : false;
    }

    public function hasEnableDynamicPortAllocation()
    {
        return isset($this->enable_dynamic_port_allocation);
    }

    public function clearEnableDynamicPortAllocation()
    {
        unset($this->enable_dynamic_port_allocation);
    }

    /**
     * Enable Dynamic Port Allocation. If not specified, it is disabled by default. If set to true, - Dynamic Port Allocation will be enabled on this NAT config. - enableEndpointIndependentMapping cannot be set to true. - If minPorts is set, minPortsPerVm must be set to a power of two greater than or equal to 32. If minPortsPerVm is not set, a minimum of 32 ports will be allocated to a VM from this NAT config. 
     *
     * Generated from protobuf field <code>optional bool enable_dynamic_port_allocation = 532106402;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDynamicPortAllocation($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_dynamic_port_allocation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool enable_endpoint_independent_mapping = 259441819;</code>
     * @return bool
     */
    public function getEnableEndpointIndependentMapping()
    {
        return isset($this->enable_endpoint_independent_mapping) ? $this->enable_endpoint_independent_mapping : false;
    }

    public function hasEnableEndpointIndependentMapping()
    {
        return isset($this->enable_endpoint_independent_mapping);
    }

    public function clearEnableEndpointIndependentMapping()
    {
        unset($this->enable_endpoint_independent_mapping);
    }

    /**
     * Generated from protobuf field <code>optional bool enable_endpoint_independent_mapping = 259441819;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableEndpointIndependentMapping($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_endpoint_independent_mapping = $var;

        return $this;
    }

    /**
     * List of NAT-ted endpoint types supported by the Nat Gateway. If the list is empty, then it will be equivalent to include ENDPOINT_TYPE_VM
     * Check the EndpointTypes enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string endpoint_types = 502633807;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpointTypes()
    {
        return $this->endpoint_types;
    }

    /**
     * List of NAT-ted endpoint types supported by the Nat Gateway. If the list is empty, then it will be equivalent to include ENDPOINT_TYPE_VM
     * Check the EndpointTypes enum for the list of possible values.
     *
     * Generated from protobuf field <code>repeated string endpoint_types = 502633807;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpointTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->endpoint_types = $arr;

        return $this;
    }

    /**
     * Timeout (in seconds) for ICMP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 icmp_idle_timeout_sec = 3647562;</code>
     * @return int
     */
    public function getIcmpIdleTimeoutSec()
    {
        return isset($this->icmp_idle_timeout_sec) ? $this->icmp_idle_timeout_sec : 0;
    }

    public function hasIcmpIdleTimeoutSec()
    {
        return isset($this->icmp_idle_timeout_sec);
    }

    public function clearIcmpIdleTimeoutSec()
    {
        unset($this->icmp_idle_timeout_sec);
    }

    /**
     * Timeout (in seconds) for ICMP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 icmp_idle_timeout_sec = 3647562;</code>
     * @param int $var
     * @return $this
     */
    public function setIcmpIdleTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->icmp_idle_timeout_sec = $var;

        return $this;
    }

    /**
     * Configure logging on this NAT.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatLogConfig log_config = 351299741;</code>
     * @return \Google\Cloud\Compute\V1\RouterNatLogConfig|null
     */
    public function getLogConfig()
    {
        return $this->log_config;
    }

    public function hasLogConfig()
    {
        return isset($this->log_config);
    }

    public function clearLogConfig()
    {
        unset($this->log_config);
    }

    /**
     * Configure logging on this NAT.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.RouterNatLogConfig log_config = 351299741;</code>
     * @param \Google\Cloud\Compute\V1\RouterNatLogConfig $var
     * @return $this
     */
    public function setLogConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RouterNatLogConfig::class);
        $this->log_config = $var;

        return $this;
    }

    /**
     * Maximum number of ports allocated to a VM from this NAT config when Dynamic Port Allocation is enabled. If Dynamic Port Allocation is not enabled, this field has no effect. If Dynamic Port Allocation is enabled, and this field is set, it must be set to a power of two greater than minPortsPerVm, or 64 if minPortsPerVm is not set. If Dynamic Port Allocation is enabled and this field is not set, a maximum of 65536 ports will be allocated to a VM from this NAT config.
     *
     * Generated from protobuf field <code>optional int32 max_ports_per_vm = 250062049;</code>
     * @return int
     */
    public function getMaxPortsPerVm()
    {
        return isset($this->max_ports_per_vm) ? $this->max_ports_per_vm : 0;
    }

    public function hasMaxPortsPerVm()
    {
        return isset($this->max_ports_per_vm);
    }

    public function clearMaxPortsPerVm()
    {
        unset($this->max_ports_per_vm);
    }

    /**
     * Maximum number of ports allocated to a VM from this NAT config when Dynamic Port Allocation is enabled. If Dynamic Port Allocation is not enabled, this field has no effect. If Dynamic Port Allocation is enabled, and this field is set, it must be set to a power of two greater than minPortsPerVm, or 64 if minPortsPerVm is not set. If Dynamic Port Allocation is enabled and this field is not set, a maximum of 65536 ports will be allocated to a VM from this NAT config.
     *
     * Generated from protobuf field <code>optional int32 max_ports_per_vm = 250062049;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPortsPerVm($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_ports_per_vm = $var;

        return $this;
    }

    /**
     * Minimum number of ports allocated to a VM from this NAT config. If not set, a default number of ports is allocated to a VM. This is rounded up to the nearest power of 2. For example, if the value of this field is 50, at least 64 ports are allocated to a VM.
     *
     * Generated from protobuf field <code>optional int32 min_ports_per_vm = 186193587;</code>
     * @return int
     */
    public function getMinPortsPerVm()
    {
        return isset($this->min_ports_per_vm) ? $this->min_ports_per_vm : 0;
    }

    public function hasMinPortsPerVm()
    {
        return isset($this->min_ports_per_vm);
    }

    public function clearMinPortsPerVm()
    {
        unset($this->min_ports_per_vm);
    }

    /**
     * Minimum number of ports allocated to a VM from this NAT config. If not set, a default number of ports is allocated to a VM. This is rounded up to the nearest power of 2. For example, if the value of this field is 50, at least 64 ports are allocated to a VM.
     *
     * Generated from protobuf field <code>optional int32 min_ports_per_vm = 186193587;</code>
     * @param int $var
     * @return $this
     */
    public function setMinPortsPerVm($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_ports_per_vm = $var;

        return $this;
    }

    /**
     * Unique name of this Nat service. The name must be 1-63 characters long and comply with RFC1035.
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
     * Unique name of this Nat service. The name must be 1-63 characters long and comply with RFC1035.
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
     * Specify the NatIpAllocateOption, which can take one of the following values: - MANUAL_ONLY: Uses only Nat IP addresses provided by customers. When there are not enough specified Nat IPs, the Nat service fails for new VMs. - AUTO_ONLY: Nat IPs are allocated by Google Cloud Platform; customers can't specify any Nat IPs. When choosing AUTO_ONLY, then nat_ip should be empty.
     * Check the NatIpAllocateOption enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nat_ip_allocate_option = 429726845;</code>
     * @return string
     */
    public function getNatIpAllocateOption()
    {
        return isset($this->nat_ip_allocate_option) ? $this->nat_ip_allocate_option : '';
    }

    public function hasNatIpAllocateOption()
    {
        return isset($this->nat_ip_allocate_option);
    }

    public function clearNatIpAllocateOption()
    {
        unset($this->nat_ip_allocate_option);
    }

    /**
     * Specify the NatIpAllocateOption, which can take one of the following values: - MANUAL_ONLY: Uses only Nat IP addresses provided by customers. When there are not enough specified Nat IPs, the Nat service fails for new VMs. - AUTO_ONLY: Nat IPs are allocated by Google Cloud Platform; customers can't specify any Nat IPs. When choosing AUTO_ONLY, then nat_ip should be empty.
     * Check the NatIpAllocateOption enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nat_ip_allocate_option = 429726845;</code>
     * @param string $var
     * @return $this
     */
    public function setNatIpAllocateOption($var)
    {
        GPBUtil::checkString($var, True);
        $this->nat_ip_allocate_option = $var;

        return $this;
    }

    /**
     * A list of URLs of the IP resources used for this Nat service. These IP addresses must be valid static external IP addresses assigned to the project.
     *
     * Generated from protobuf field <code>repeated string nat_ips = 117635086;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNatIps()
    {
        return $this->nat_ips;
    }

    /**
     * A list of URLs of the IP resources used for this Nat service. These IP addresses must be valid static external IP addresses assigned to the project.
     *
     * Generated from protobuf field <code>repeated string nat_ips = 117635086;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNatIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nat_ips = $arr;

        return $this;
    }

    /**
     * A list of rules associated with this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatRule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of rules associated with this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatRule rules = 108873975;</code>
     * @param array<\Google\Cloud\Compute\V1\RouterNatRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterNatRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * Specify the Nat option, which can take one of the following values: - ALL_SUBNETWORKS_ALL_IP_RANGES: All of the IP ranges in every Subnetwork are allowed to Nat. - ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES: All of the primary IP ranges in every Subnetwork are allowed to Nat. - LIST_OF_SUBNETWORKS: A list of Subnetworks are allowed to Nat (specified in the field subnetwork below) The default is SUBNETWORK_IP_RANGE_TO_NAT_OPTION_UNSPECIFIED. Note that if this field contains ALL_SUBNETWORKS_ALL_IP_RANGES or ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES, then there should not be any other Router.Nat section in any Router for this network in this region.
     * Check the SourceSubnetworkIpRangesToNat enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source_subnetwork_ip_ranges_to_nat = 252213211;</code>
     * @return string
     */
    public function getSourceSubnetworkIpRangesToNat()
    {
        return isset($this->source_subnetwork_ip_ranges_to_nat) ? $this->source_subnetwork_ip_ranges_to_nat : '';
    }

    public function hasSourceSubnetworkIpRangesToNat()
    {
        return isset($this->source_subnetwork_ip_ranges_to_nat);
    }

    public function clearSourceSubnetworkIpRangesToNat()
    {
        unset($this->source_subnetwork_ip_ranges_to_nat);
    }

    /**
     * Specify the Nat option, which can take one of the following values: - ALL_SUBNETWORKS_ALL_IP_RANGES: All of the IP ranges in every Subnetwork are allowed to Nat. - ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES: All of the primary IP ranges in every Subnetwork are allowed to Nat. - LIST_OF_SUBNETWORKS: A list of Subnetworks are allowed to Nat (specified in the field subnetwork below) The default is SUBNETWORK_IP_RANGE_TO_NAT_OPTION_UNSPECIFIED. Note that if this field contains ALL_SUBNETWORKS_ALL_IP_RANGES or ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES, then there should not be any other Router.Nat section in any Router for this network in this region.
     * Check the SourceSubnetworkIpRangesToNat enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string source_subnetwork_ip_ranges_to_nat = 252213211;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceSubnetworkIpRangesToNat($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_subnetwork_ip_ranges_to_nat = $var;

        return $this;
    }

    /**
     * A list of Subnetwork resources whose traffic should be translated by NAT Gateway. It is used only when LIST_OF_SUBNETWORKS is selected for the SubnetworkIpRangeToNatOption above.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat subnetworks = 415853125;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubnetworks()
    {
        return $this->subnetworks;
    }

    /**
     * A list of Subnetwork resources whose traffic should be translated by NAT Gateway. It is used only when LIST_OF_SUBNETWORKS is selected for the SubnetworkIpRangeToNatOption above.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouterNatSubnetworkToNat subnetworks = 415853125;</code>
     * @param array<\Google\Cloud\Compute\V1\RouterNatSubnetworkToNat>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubnetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouterNatSubnetworkToNat::class);
        $this->subnetworks = $arr;

        return $this;
    }

    /**
     * Timeout (in seconds) for TCP established connections. Defaults to 1200s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_established_idle_timeout_sec = 223098349;</code>
     * @return int
     */
    public function getTcpEstablishedIdleTimeoutSec()
    {
        return isset($this->tcp_established_idle_timeout_sec) ? $this->tcp_established_idle_timeout_sec : 0;
    }

    public function hasTcpEstablishedIdleTimeoutSec()
    {
        return isset($this->tcp_established_idle_timeout_sec);
    }

    public function clearTcpEstablishedIdleTimeoutSec()
    {
        unset($this->tcp_established_idle_timeout_sec);
    }

    /**
     * Timeout (in seconds) for TCP established connections. Defaults to 1200s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_established_idle_timeout_sec = 223098349;</code>
     * @param int $var
     * @return $this
     */
    public function setTcpEstablishedIdleTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->tcp_established_idle_timeout_sec = $var;

        return $this;
    }

    /**
     * Timeout (in seconds) for TCP connections that are in TIME_WAIT state. Defaults to 120s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_time_wait_timeout_sec = 513596925;</code>
     * @return int
     */
    public function getTcpTimeWaitTimeoutSec()
    {
        return isset($this->tcp_time_wait_timeout_sec) ? $this->tcp_time_wait_timeout_sec : 0;
    }

    public function hasTcpTimeWaitTimeoutSec()
    {
        return isset($this->tcp_time_wait_timeout_sec);
    }

    public function clearTcpTimeWaitTimeoutSec()
    {
        unset($this->tcp_time_wait_timeout_sec);
    }

    /**
     * Timeout (in seconds) for TCP connections that are in TIME_WAIT state. Defaults to 120s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_time_wait_timeout_sec = 513596925;</code>
     * @param int $var
     * @return $this
     */
    public function setTcpTimeWaitTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->tcp_time_wait_timeout_sec = $var;

        return $this;
    }

    /**
     * Timeout (in seconds) for TCP transitory connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_transitory_idle_timeout_sec = 205028774;</code>
     * @return int
     */
    public function getTcpTransitoryIdleTimeoutSec()
    {
        return isset($this->tcp_transitory_idle_timeout_sec) ? $this->tcp_transitory_idle_timeout_sec : 0;
    }

    public function hasTcpTransitoryIdleTimeoutSec()
    {
        return isset($this->tcp_transitory_idle_timeout_sec);
    }

    public function clearTcpTransitoryIdleTimeoutSec()
    {
        unset($this->tcp_transitory_idle_timeout_sec);
    }

    /**
     * Timeout (in seconds) for TCP transitory connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 tcp_transitory_idle_timeout_sec = 205028774;</code>
     * @param int $var
     * @return $this
     */
    public function setTcpTransitoryIdleTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->tcp_transitory_idle_timeout_sec = $var;

        return $this;
    }

    /**
     * Timeout (in seconds) for UDP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 udp_idle_timeout_sec = 64919878;</code>
     * @return int
     */
    public function getUdpIdleTimeoutSec()
    {
        return isset($this->udp_idle_timeout_sec) ? $this->udp_idle_timeout_sec : 0;
    }

    public function hasUdpIdleTimeoutSec()
    {
        return isset($this->udp_idle_timeout_sec);
    }

    public function clearUdpIdleTimeoutSec()
    {
        unset($this->udp_idle_timeout_sec);
    }

    /**
     * Timeout (in seconds) for UDP connections. Defaults to 30s if not set.
     *
     * Generated from protobuf field <code>optional int32 udp_idle_timeout_sec = 64919878;</code>
     * @param int $var
     * @return $this
     */
    public function setUdpIdleTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->udp_idle_timeout_sec = $var;

        return $this;
    }

}

