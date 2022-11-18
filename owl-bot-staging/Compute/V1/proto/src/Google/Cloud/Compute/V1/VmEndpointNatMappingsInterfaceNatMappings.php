<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contain information of Nat mapping for an interface of this endpoint.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappings</code>
 */
class VmEndpointNatMappingsInterfaceNatMappings extends \Google\Protobuf\Internal\Message
{
    /**
     * List of all drain IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string drain_nat_ip_port_ranges = 395440577;</code>
     */
    private $drain_nat_ip_port_ranges;
    /**
     * A list of all IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string nat_ip_port_ranges = 531830810;</code>
     */
    private $nat_ip_port_ranges;
    /**
     * Total number of drain ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field drain_nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_drain_nat_ports = 335532793;</code>
     */
    protected $num_total_drain_nat_ports = null;
    /**
     * Total number of ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_nat_ports = 299904384;</code>
     */
    protected $num_total_nat_ports = null;
    /**
     * Information about mappings provided by rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings rule_mappings = 486192968;</code>
     */
    private $rule_mappings;
    /**
     * Alias IP range for this interface endpoint. It will be a private (RFC 1918) IP range. Examples: "10.33.4.55/32", or "192.168.5.0/24".
     *
     * Generated from protobuf field <code>optional string source_alias_ip_range = 440340952;</code>
     */
    protected $source_alias_ip_range = null;
    /**
     * Primary IP of the VM for this NIC.
     *
     * Generated from protobuf field <code>optional string source_virtual_ip = 149836159;</code>
     */
    protected $source_virtual_ip = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $drain_nat_ip_port_ranges
     *           List of all drain IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $nat_ip_port_ranges
     *           A list of all IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *     @type int $num_total_drain_nat_ports
     *           Total number of drain ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field drain_nat_ip_port_ranges.
     *     @type int $num_total_nat_ports
     *           Total number of ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field nat_ip_port_ranges.
     *     @type array<\Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings>|\Google\Protobuf\Internal\RepeatedField $rule_mappings
     *           Information about mappings provided by rules in this NAT.
     *     @type string $source_alias_ip_range
     *           Alias IP range for this interface endpoint. It will be a private (RFC 1918) IP range. Examples: "10.33.4.55/32", or "192.168.5.0/24".
     *     @type string $source_virtual_ip
     *           Primary IP of the VM for this NIC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * List of all drain IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string drain_nat_ip_port_ranges = 395440577;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDrainNatIpPortRanges()
    {
        return $this->drain_nat_ip_port_ranges;
    }

    /**
     * List of all drain IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string drain_nat_ip_port_ranges = 395440577;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDrainNatIpPortRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->drain_nat_ip_port_ranges = $arr;

        return $this;
    }

    /**
     * A list of all IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string nat_ip_port_ranges = 531830810;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNatIpPortRanges()
    {
        return $this->nat_ip_port_ranges;
    }

    /**
     * A list of all IP:port-range mappings assigned to this interface. These ranges are inclusive, that is, both the first and the last ports can be used for NAT. Example: ["2.2.2.2:12345-12355", "1.1.1.1:2234-2234"].
     *
     * Generated from protobuf field <code>repeated string nat_ip_port_ranges = 531830810;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNatIpPortRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nat_ip_port_ranges = $arr;

        return $this;
    }

    /**
     * Total number of drain ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field drain_nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_drain_nat_ports = 335532793;</code>
     * @return int
     */
    public function getNumTotalDrainNatPorts()
    {
        return isset($this->num_total_drain_nat_ports) ? $this->num_total_drain_nat_ports : 0;
    }

    public function hasNumTotalDrainNatPorts()
    {
        return isset($this->num_total_drain_nat_ports);
    }

    public function clearNumTotalDrainNatPorts()
    {
        unset($this->num_total_drain_nat_ports);
    }

    /**
     * Total number of drain ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field drain_nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_drain_nat_ports = 335532793;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTotalDrainNatPorts($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_total_drain_nat_ports = $var;

        return $this;
    }

    /**
     * Total number of ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_nat_ports = 299904384;</code>
     * @return int
     */
    public function getNumTotalNatPorts()
    {
        return isset($this->num_total_nat_ports) ? $this->num_total_nat_ports : 0;
    }

    public function hasNumTotalNatPorts()
    {
        return isset($this->num_total_nat_ports);
    }

    public function clearNumTotalNatPorts()
    {
        unset($this->num_total_nat_ports);
    }

    /**
     * Total number of ports across all NAT IPs allocated to this interface. It equals to the aggregated port number in the field nat_ip_port_ranges.
     *
     * Generated from protobuf field <code>optional int32 num_total_nat_ports = 299904384;</code>
     * @param int $var
     * @return $this
     */
    public function setNumTotalNatPorts($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_total_nat_ports = $var;

        return $this;
    }

    /**
     * Information about mappings provided by rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings rule_mappings = 486192968;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuleMappings()
    {
        return $this->rule_mappings;
    }

    /**
     * Information about mappings provided by rules in this NAT.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings rule_mappings = 486192968;</code>
     * @param array<\Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuleMappings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\VmEndpointNatMappingsInterfaceNatMappingsNatRuleMappings::class);
        $this->rule_mappings = $arr;

        return $this;
    }

    /**
     * Alias IP range for this interface endpoint. It will be a private (RFC 1918) IP range. Examples: "10.33.4.55/32", or "192.168.5.0/24".
     *
     * Generated from protobuf field <code>optional string source_alias_ip_range = 440340952;</code>
     * @return string
     */
    public function getSourceAliasIpRange()
    {
        return isset($this->source_alias_ip_range) ? $this->source_alias_ip_range : '';
    }

    public function hasSourceAliasIpRange()
    {
        return isset($this->source_alias_ip_range);
    }

    public function clearSourceAliasIpRange()
    {
        unset($this->source_alias_ip_range);
    }

    /**
     * Alias IP range for this interface endpoint. It will be a private (RFC 1918) IP range. Examples: "10.33.4.55/32", or "192.168.5.0/24".
     *
     * Generated from protobuf field <code>optional string source_alias_ip_range = 440340952;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceAliasIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_alias_ip_range = $var;

        return $this;
    }

    /**
     * Primary IP of the VM for this NIC.
     *
     * Generated from protobuf field <code>optional string source_virtual_ip = 149836159;</code>
     * @return string
     */
    public function getSourceVirtualIp()
    {
        return isset($this->source_virtual_ip) ? $this->source_virtual_ip : '';
    }

    public function hasSourceVirtualIp()
    {
        return isset($this->source_virtual_ip);
    }

    public function clearSourceVirtualIp()
    {
        unset($this->source_virtual_ip);
    }

    /**
     * Primary IP of the VM for this NIC.
     *
     * Generated from protobuf field <code>optional string source_virtual_ip = 149836159;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceVirtualIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_virtual_ip = $var;

        return $this;
    }

}

