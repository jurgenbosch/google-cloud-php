<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Route resource. A route defines a path from VM instances in the VPC network to a specific destination. This destination can be inside or outside the VPC network. For more information, read the Routes overview.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Route</code>
 */
class Route extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] AS path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouteAsPath as_paths = 137568929;</code>
     */
    private $as_paths;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    protected $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    protected $description = null;
    /**
     * The destination range of outgoing packets that this route applies to. Both IPv4 and IPv6 are supported.
     *
     * Generated from protobuf field <code>optional string dest_range = 381327712;</code>
     */
    protected $dest_range = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    protected $id = null;
    /**
     * [Output Only] Type of this resource. Always compute#routes for Route resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    protected $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    protected $name = null;
    /**
     * Fully-qualified URL of the network that this route applies to.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    protected $network = null;
    /**
     * The URL to a gateway that should handle matching packets. You can only specify the internet gateway using a full or partial valid URL: projects/ project/global/gateways/default-internet-gateway
     *
     * Generated from protobuf field <code>optional string next_hop_gateway = 377175298;</code>
     */
    protected $next_hop_gateway = null;
    /**
     * The URL to a forwarding rule of type loadBalancingScheme=INTERNAL that should handle matching packets or the IP address of the forwarding Rule. For example, the following are all valid URLs: - 10.128.0.56 - https://www.googleapis.com/compute/v1/projects/project/regions/region /forwardingRules/forwardingRule - regions/region/forwardingRules/forwardingRule 
     *
     * Generated from protobuf field <code>optional string next_hop_ilb = 198679901;</code>
     */
    protected $next_hop_ilb = null;
    /**
     * The URL to an instance that should handle matching packets. You can specify this as a full or partial URL. For example: https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/
     *
     * Generated from protobuf field <code>optional string next_hop_instance = 393508247;</code>
     */
    protected $next_hop_instance = null;
    /**
     * The network IP address of an instance that should handle matching packets. Only IPv4 is supported.
     *
     * Generated from protobuf field <code>optional string next_hop_ip = 110319529;</code>
     */
    protected $next_hop_ip = null;
    /**
     * The URL of the local network if it should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_network = 262295788;</code>
     */
    protected $next_hop_network = null;
    /**
     * [Output Only] The network peering name that should handle matching packets, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>optional string next_hop_peering = 412682750;</code>
     */
    protected $next_hop_peering = null;
    /**
     * The URL to a VpnTunnel that should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_vpn_tunnel = 519844501;</code>
     */
    protected $next_hop_vpn_tunnel = null;
    /**
     * The priority of this route. Priority is used to break ties in cases where there is more than one matching route of equal prefix length. In cases where multiple routes have equal prefix length, the one with the lowest-numbered priority value wins. The default value is `1000`. The priority value must be from `0` to `65535`, inclusive.
     *
     * Generated from protobuf field <code>optional uint32 priority = 445151652;</code>
     */
    protected $priority = null;
    /**
     * [Output only] The status of the route.
     * Check the RouteStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_status = 418162344;</code>
     */
    protected $route_status = null;
    /**
     * [Output Only] The type of this route, which can be one of the following values: - 'TRANSIT' for a transit route that this router learned from another Cloud Router and will readvertise to one of its BGP peers - 'SUBNET' for a route from a subnet of the VPC - 'BGP' for a route learned from a BGP peer of this router - 'STATIC' for a static route
     * Check the RouteType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_type = 375888752;</code>
     */
    protected $route_type = null;
    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    protected $self_link = null;
    /**
     * A list of instance tags to which this route applies.
     *
     * Generated from protobuf field <code>repeated string tags = 3552281;</code>
     */
    private $tags;
    /**
     * [Output Only] If potential misconfigurations are detected for this route, this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     */
    private $warnings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\RouteAsPath>|\Google\Protobuf\Internal\RepeatedField $as_paths
     *           [Output Only] AS path.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this field when you create the resource.
     *     @type string $dest_range
     *           The destination range of outgoing packets that this route applies to. Both IPv4 and IPv6 are supported.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of this resource. Always compute#routes for Route resources.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *     @type string $network
     *           Fully-qualified URL of the network that this route applies to.
     *     @type string $next_hop_gateway
     *           The URL to a gateway that should handle matching packets. You can only specify the internet gateway using a full or partial valid URL: projects/ project/global/gateways/default-internet-gateway
     *     @type string $next_hop_ilb
     *           The URL to a forwarding rule of type loadBalancingScheme=INTERNAL that should handle matching packets or the IP address of the forwarding Rule. For example, the following are all valid URLs: - 10.128.0.56 - https://www.googleapis.com/compute/v1/projects/project/regions/region /forwardingRules/forwardingRule - regions/region/forwardingRules/forwardingRule 
     *     @type string $next_hop_instance
     *           The URL to an instance that should handle matching packets. You can specify this as a full or partial URL. For example: https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/
     *     @type string $next_hop_ip
     *           The network IP address of an instance that should handle matching packets. Only IPv4 is supported.
     *     @type string $next_hop_network
     *           The URL of the local network if it should handle matching packets.
     *     @type string $next_hop_peering
     *           [Output Only] The network peering name that should handle matching packets, which should conform to RFC1035.
     *     @type string $next_hop_vpn_tunnel
     *           The URL to a VpnTunnel that should handle matching packets.
     *     @type int $priority
     *           The priority of this route. Priority is used to break ties in cases where there is more than one matching route of equal prefix length. In cases where multiple routes have equal prefix length, the one with the lowest-numbered priority value wins. The default value is `1000`. The priority value must be from `0` to `65535`, inclusive.
     *     @type string $route_status
     *           [Output only] The status of the route.
     *           Check the RouteStatus enum for the list of possible values.
     *     @type string $route_type
     *           [Output Only] The type of this route, which can be one of the following values: - 'TRANSIT' for a transit route that this router learned from another Cloud Router and will readvertise to one of its BGP peers - 'SUBNET' for a route from a subnet of the VPC - 'BGP' for a route learned from a BGP peer of this router - 'STATIC' for a static route
     *           Check the RouteType enum for the list of possible values.
     *     @type string $self_link
     *           [Output Only] Server-defined fully-qualified URL for this resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           A list of instance tags to which this route applies.
     *     @type array<\Google\Cloud\Compute\V1\Warnings>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           [Output Only] If potential misconfigurations are detected for this route, this field will be populated with warning messages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] AS path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouteAsPath as_paths = 137568929;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAsPaths()
    {
        return $this->as_paths;
    }

    /**
     * [Output Only] AS path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.RouteAsPath as_paths = 137568929;</code>
     * @param array<\Google\Cloud\Compute\V1\RouteAsPath>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAsPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\RouteAsPath::class);
        $this->as_paths = $arr;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this field when you create the resource.
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
     * An optional description of this resource. Provide this field when you create the resource.
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
     * The destination range of outgoing packets that this route applies to. Both IPv4 and IPv6 are supported.
     *
     * Generated from protobuf field <code>optional string dest_range = 381327712;</code>
     * @return string
     */
    public function getDestRange()
    {
        return isset($this->dest_range) ? $this->dest_range : '';
    }

    public function hasDestRange()
    {
        return isset($this->dest_range);
    }

    public function clearDestRange()
    {
        unset($this->dest_range);
    }

    /**
     * The destination range of outgoing packets that this route applies to. Both IPv4 and IPv6 are supported.
     *
     * Generated from protobuf field <code>optional string dest_range = 381327712;</code>
     * @param string $var
     * @return $this
     */
    public function setDestRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->dest_range = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of this resource. Always compute#routes for Route resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of this resource. Always compute#routes for Route resources.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
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
     * Fully-qualified URL of the network that this route applies to.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Fully-qualified URL of the network that this route applies to.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The URL to a gateway that should handle matching packets. You can only specify the internet gateway using a full or partial valid URL: projects/ project/global/gateways/default-internet-gateway
     *
     * Generated from protobuf field <code>optional string next_hop_gateway = 377175298;</code>
     * @return string
     */
    public function getNextHopGateway()
    {
        return isset($this->next_hop_gateway) ? $this->next_hop_gateway : '';
    }

    public function hasNextHopGateway()
    {
        return isset($this->next_hop_gateway);
    }

    public function clearNextHopGateway()
    {
        unset($this->next_hop_gateway);
    }

    /**
     * The URL to a gateway that should handle matching packets. You can only specify the internet gateway using a full or partial valid URL: projects/ project/global/gateways/default-internet-gateway
     *
     * Generated from protobuf field <code>optional string next_hop_gateway = 377175298;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopGateway($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_gateway = $var;

        return $this;
    }

    /**
     * The URL to a forwarding rule of type loadBalancingScheme=INTERNAL that should handle matching packets or the IP address of the forwarding Rule. For example, the following are all valid URLs: - 10.128.0.56 - https://www.googleapis.com/compute/v1/projects/project/regions/region /forwardingRules/forwardingRule - regions/region/forwardingRules/forwardingRule 
     *
     * Generated from protobuf field <code>optional string next_hop_ilb = 198679901;</code>
     * @return string
     */
    public function getNextHopIlb()
    {
        return isset($this->next_hop_ilb) ? $this->next_hop_ilb : '';
    }

    public function hasNextHopIlb()
    {
        return isset($this->next_hop_ilb);
    }

    public function clearNextHopIlb()
    {
        unset($this->next_hop_ilb);
    }

    /**
     * The URL to a forwarding rule of type loadBalancingScheme=INTERNAL that should handle matching packets or the IP address of the forwarding Rule. For example, the following are all valid URLs: - 10.128.0.56 - https://www.googleapis.com/compute/v1/projects/project/regions/region /forwardingRules/forwardingRule - regions/region/forwardingRules/forwardingRule 
     *
     * Generated from protobuf field <code>optional string next_hop_ilb = 198679901;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopIlb($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_ilb = $var;

        return $this;
    }

    /**
     * The URL to an instance that should handle matching packets. You can specify this as a full or partial URL. For example: https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/
     *
     * Generated from protobuf field <code>optional string next_hop_instance = 393508247;</code>
     * @return string
     */
    public function getNextHopInstance()
    {
        return isset($this->next_hop_instance) ? $this->next_hop_instance : '';
    }

    public function hasNextHopInstance()
    {
        return isset($this->next_hop_instance);
    }

    public function clearNextHopInstance()
    {
        unset($this->next_hop_instance);
    }

    /**
     * The URL to an instance that should handle matching packets. You can specify this as a full or partial URL. For example: https://www.googleapis.com/compute/v1/projects/project/zones/zone/instances/
     *
     * Generated from protobuf field <code>optional string next_hop_instance = 393508247;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_instance = $var;

        return $this;
    }

    /**
     * The network IP address of an instance that should handle matching packets. Only IPv4 is supported.
     *
     * Generated from protobuf field <code>optional string next_hop_ip = 110319529;</code>
     * @return string
     */
    public function getNextHopIp()
    {
        return isset($this->next_hop_ip) ? $this->next_hop_ip : '';
    }

    public function hasNextHopIp()
    {
        return isset($this->next_hop_ip);
    }

    public function clearNextHopIp()
    {
        unset($this->next_hop_ip);
    }

    /**
     * The network IP address of an instance that should handle matching packets. Only IPv4 is supported.
     *
     * Generated from protobuf field <code>optional string next_hop_ip = 110319529;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_ip = $var;

        return $this;
    }

    /**
     * The URL of the local network if it should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_network = 262295788;</code>
     * @return string
     */
    public function getNextHopNetwork()
    {
        return isset($this->next_hop_network) ? $this->next_hop_network : '';
    }

    public function hasNextHopNetwork()
    {
        return isset($this->next_hop_network);
    }

    public function clearNextHopNetwork()
    {
        unset($this->next_hop_network);
    }

    /**
     * The URL of the local network if it should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_network = 262295788;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_network = $var;

        return $this;
    }

    /**
     * [Output Only] The network peering name that should handle matching packets, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>optional string next_hop_peering = 412682750;</code>
     * @return string
     */
    public function getNextHopPeering()
    {
        return isset($this->next_hop_peering) ? $this->next_hop_peering : '';
    }

    public function hasNextHopPeering()
    {
        return isset($this->next_hop_peering);
    }

    public function clearNextHopPeering()
    {
        unset($this->next_hop_peering);
    }

    /**
     * [Output Only] The network peering name that should handle matching packets, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>optional string next_hop_peering = 412682750;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopPeering($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_peering = $var;

        return $this;
    }

    /**
     * The URL to a VpnTunnel that should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_vpn_tunnel = 519844501;</code>
     * @return string
     */
    public function getNextHopVpnTunnel()
    {
        return isset($this->next_hop_vpn_tunnel) ? $this->next_hop_vpn_tunnel : '';
    }

    public function hasNextHopVpnTunnel()
    {
        return isset($this->next_hop_vpn_tunnel);
    }

    public function clearNextHopVpnTunnel()
    {
        unset($this->next_hop_vpn_tunnel);
    }

    /**
     * The URL to a VpnTunnel that should handle matching packets.
     *
     * Generated from protobuf field <code>optional string next_hop_vpn_tunnel = 519844501;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopVpnTunnel($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_hop_vpn_tunnel = $var;

        return $this;
    }

    /**
     * The priority of this route. Priority is used to break ties in cases where there is more than one matching route of equal prefix length. In cases where multiple routes have equal prefix length, the one with the lowest-numbered priority value wins. The default value is `1000`. The priority value must be from `0` to `65535`, inclusive.
     *
     * Generated from protobuf field <code>optional uint32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * The priority of this route. Priority is used to break ties in cases where there is more than one matching route of equal prefix length. In cases where multiple routes have equal prefix length, the one with the lowest-numbered priority value wins. The default value is `1000`. The priority value must be from `0` to `65535`, inclusive.
     *
     * Generated from protobuf field <code>optional uint32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * [Output only] The status of the route.
     * Check the RouteStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_status = 418162344;</code>
     * @return string
     */
    public function getRouteStatus()
    {
        return isset($this->route_status) ? $this->route_status : '';
    }

    public function hasRouteStatus()
    {
        return isset($this->route_status);
    }

    public function clearRouteStatus()
    {
        unset($this->route_status);
    }

    /**
     * [Output only] The status of the route.
     * Check the RouteStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_status = 418162344;</code>
     * @param string $var
     * @return $this
     */
    public function setRouteStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->route_status = $var;

        return $this;
    }

    /**
     * [Output Only] The type of this route, which can be one of the following values: - 'TRANSIT' for a transit route that this router learned from another Cloud Router and will readvertise to one of its BGP peers - 'SUBNET' for a route from a subnet of the VPC - 'BGP' for a route learned from a BGP peer of this router - 'STATIC' for a static route
     * Check the RouteType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_type = 375888752;</code>
     * @return string
     */
    public function getRouteType()
    {
        return isset($this->route_type) ? $this->route_type : '';
    }

    public function hasRouteType()
    {
        return isset($this->route_type);
    }

    public function clearRouteType()
    {
        unset($this->route_type);
    }

    /**
     * [Output Only] The type of this route, which can be one of the following values: - 'TRANSIT' for a transit route that this router learned from another Cloud Router and will readvertise to one of its BGP peers - 'SUBNET' for a route from a subnet of the VPC - 'BGP' for a route learned from a BGP peer of this router - 'STATIC' for a static route
     * Check the RouteType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string route_type = 375888752;</code>
     * @param string $var
     * @return $this
     */
    public function setRouteType($var)
    {
        GPBUtil::checkString($var, True);
        $this->route_type = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * A list of instance tags to which this route applies.
     *
     * Generated from protobuf field <code>repeated string tags = 3552281;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * A list of instance tags to which this route applies.
     *
     * Generated from protobuf field <code>repeated string tags = 3552281;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * [Output Only] If potential misconfigurations are detected for this route, this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * [Output Only] If potential misconfigurations are detected for this route, this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Warnings warnings = 498091095;</code>
     * @param array<\Google\Cloud\Compute\V1\Warnings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Warnings::class);
        $this->warnings = $arr;

        return $this;
    }

}

