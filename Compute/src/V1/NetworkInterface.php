<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network interface resource attached to an instance.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkInterface</code>
 */
class NetworkInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * An array of configurations for this interface. Currently, only one access config, ONE_TO_ONE_NAT, is supported. If there are no accessConfigs specified, then this instance will have no external internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig access_configs = 111058326;</code>
     */
    private $access_configs;
    /**
     * An array of alias IP ranges for this network interface. You can only specify this field for network interfaces in VPC networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AliasIpRange alias_ip_ranges = 165085631;</code>
     */
    private $alias_ip_ranges;
    /**
     * Fingerprint hash of contents stored in this network interface. This field will be ignored when inserting an Instance or adding a NetworkInterface. An up-to-date fingerprint must be provided in order to update the NetworkInterface. The request will fail with error 400 Bad Request if the fingerprint is not provided, or 412 Precondition Failed if the fingerprint is out of date.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * The prefix length of the primary internal IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 internal_ipv6_prefix_length = 203833757;</code>
     */
    private $internal_ipv6_prefix_length = null;
    /**
     * An array of IPv6 access configurations for this interface. Currently, only one IPv6 access config, DIRECT_IPV6, is supported. If there is no ipv6AccessConfig specified, then this instance will have no external IPv6 Internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig ipv6_access_configs = 483472110;</code>
     */
    private $ipv6_access_configs;
    /**
     * [Output Only] One of EXTERNAL, INTERNAL to indicate whether the IP can be accessed from the Internet. This field is always inherited from its subnetwork. Valid only if stackType is IPV4_IPV6.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     */
    private $ipv6_access_type = null;
    /**
     * An IPv6 internal network address for this network interface.
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     */
    private $ipv6_address = null;
    /**
     * [Output Only] Type of the resource. Always compute#networkInterface for network interfaces.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] The name of the network interface, which is generated by the server. For a VM, the network interface uses the nicN naming format. Where N is a value between 0 and 7. The default interface value is nic0.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * URL of the VPC network resource for this instance. When creating an instance, if neither the network nor the subnetwork is specified, the default network global/networks/default is used. If the selected project doesn't have the default network, you must specify a network or subnet. If the network is not specified but the subnetwork is specified, the network is inferred. If you specify this property, you can specify the network as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/global/networks/ network - projects/project/global/networks/network - global/networks/default 
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    private $network = null;
    /**
     * The URL of the network attachment that this interface should connect to in the following format: projects/{project_number}/regions/{region_name}/networkAttachments/{network_attachment_name}.
     *
     * Generated from protobuf field <code>optional string network_attachment = 224644052;</code>
     */
    private $network_attachment = null;
    /**
     * An IPv4 internal IP address to assign to the instance for this network interface. If not specified by the user, an unused internal IP is assigned by the system.
     *
     * Generated from protobuf field <code>optional string network_i_p = 207181961;</code>
     */
    private $network_i_p = null;
    /**
     * The type of vNIC to be used on this interface. This may be gVNIC or VirtioNet.
     * Check the NicType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nic_type = 59810577;</code>
     */
    private $nic_type = null;
    /**
     * The networking queue count that's specified by users for the network interface. Both Rx and Tx queues will be set to this number. It'll be empty if not specified by the users.
     *
     * Generated from protobuf field <code>optional int32 queue_count = 503708769;</code>
     */
    private $queue_count = null;
    /**
     * The stack type for this network interface to identify whether the IPv6 feature is enabled or not. If not specified, IPV4_ONLY will be used. This field can be both set at instance creation and update network interface operations.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     */
    private $stack_type = null;
    /**
     * The URL of the Subnetwork resource for this instance. If the network resource is in legacy mode, do not specify this field. If the network is in auto subnet mode, specifying the subnetwork is optional. If the network is in custom subnet mode, specifying the subnetwork is required. If you specify this field, you can specify the subnetwork as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/regions/region /subnetworks/subnetwork - regions/region/subnetworks/subnetwork 
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    private $subnetwork = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\AccessConfig>|\Google\Protobuf\Internal\RepeatedField $access_configs
     *           An array of configurations for this interface. Currently, only one access config, ONE_TO_ONE_NAT, is supported. If there are no accessConfigs specified, then this instance will have no external internet access.
     *     @type array<\Google\Cloud\Compute\V1\AliasIpRange>|\Google\Protobuf\Internal\RepeatedField $alias_ip_ranges
     *           An array of alias IP ranges for this network interface. You can only specify this field for network interfaces in VPC networks.
     *     @type string $fingerprint
     *           Fingerprint hash of contents stored in this network interface. This field will be ignored when inserting an Instance or adding a NetworkInterface. An up-to-date fingerprint must be provided in order to update the NetworkInterface. The request will fail with error 400 Bad Request if the fingerprint is not provided, or 412 Precondition Failed if the fingerprint is out of date.
     *     @type int $internal_ipv6_prefix_length
     *           The prefix length of the primary internal IPv6 range.
     *     @type array<\Google\Cloud\Compute\V1\AccessConfig>|\Google\Protobuf\Internal\RepeatedField $ipv6_access_configs
     *           An array of IPv6 access configurations for this interface. Currently, only one IPv6 access config, DIRECT_IPV6, is supported. If there is no ipv6AccessConfig specified, then this instance will have no external IPv6 Internet access.
     *     @type string $ipv6_access_type
     *           [Output Only] One of EXTERNAL, INTERNAL to indicate whether the IP can be accessed from the Internet. This field is always inherited from its subnetwork. Valid only if stackType is IPV4_IPV6.
     *           Check the Ipv6AccessType enum for the list of possible values.
     *     @type string $ipv6_address
     *           An IPv6 internal network address for this network interface.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#networkInterface for network interfaces.
     *     @type string $name
     *           [Output Only] The name of the network interface, which is generated by the server. For a VM, the network interface uses the nicN naming format. Where N is a value between 0 and 7. The default interface value is nic0.
     *     @type string $network
     *           URL of the VPC network resource for this instance. When creating an instance, if neither the network nor the subnetwork is specified, the default network global/networks/default is used. If the selected project doesn't have the default network, you must specify a network or subnet. If the network is not specified but the subnetwork is specified, the network is inferred. If you specify this property, you can specify the network as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/global/networks/ network - projects/project/global/networks/network - global/networks/default 
     *     @type string $network_attachment
     *           The URL of the network attachment that this interface should connect to in the following format: projects/{project_number}/regions/{region_name}/networkAttachments/{network_attachment_name}.
     *     @type string $network_i_p
     *           An IPv4 internal IP address to assign to the instance for this network interface. If not specified by the user, an unused internal IP is assigned by the system.
     *     @type string $nic_type
     *           The type of vNIC to be used on this interface. This may be gVNIC or VirtioNet.
     *           Check the NicType enum for the list of possible values.
     *     @type int $queue_count
     *           The networking queue count that's specified by users for the network interface. Both Rx and Tx queues will be set to this number. It'll be empty if not specified by the users.
     *     @type string $stack_type
     *           The stack type for this network interface to identify whether the IPv6 feature is enabled or not. If not specified, IPV4_ONLY will be used. This field can be both set at instance creation and update network interface operations.
     *           Check the StackType enum for the list of possible values.
     *     @type string $subnetwork
     *           The URL of the Subnetwork resource for this instance. If the network resource is in legacy mode, do not specify this field. If the network is in auto subnet mode, specifying the subnetwork is optional. If the network is in custom subnet mode, specifying the subnetwork is required. If you specify this field, you can specify the subnetwork as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/regions/region /subnetworks/subnetwork - regions/region/subnetworks/subnetwork 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * An array of configurations for this interface. Currently, only one access config, ONE_TO_ONE_NAT, is supported. If there are no accessConfigs specified, then this instance will have no external internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig access_configs = 111058326;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessConfigs()
    {
        return $this->access_configs;
    }

    /**
     * An array of configurations for this interface. Currently, only one access config, ONE_TO_ONE_NAT, is supported. If there are no accessConfigs specified, then this instance will have no external internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig access_configs = 111058326;</code>
     * @param array<\Google\Cloud\Compute\V1\AccessConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AccessConfig::class);
        $this->access_configs = $arr;

        return $this;
    }

    /**
     * An array of alias IP ranges for this network interface. You can only specify this field for network interfaces in VPC networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AliasIpRange alias_ip_ranges = 165085631;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAliasIpRanges()
    {
        return $this->alias_ip_ranges;
    }

    /**
     * An array of alias IP ranges for this network interface. You can only specify this field for network interfaces in VPC networks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AliasIpRange alias_ip_ranges = 165085631;</code>
     * @param array<\Google\Cloud\Compute\V1\AliasIpRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAliasIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AliasIpRange::class);
        $this->alias_ip_ranges = $arr;

        return $this;
    }

    /**
     * Fingerprint hash of contents stored in this network interface. This field will be ignored when inserting an Instance or adding a NetworkInterface. An up-to-date fingerprint must be provided in order to update the NetworkInterface. The request will fail with error 400 Bad Request if the fingerprint is not provided, or 412 Precondition Failed if the fingerprint is out of date.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint hash of contents stored in this network interface. This field will be ignored when inserting an Instance or adding a NetworkInterface. An up-to-date fingerprint must be provided in order to update the NetworkInterface. The request will fail with error 400 Bad Request if the fingerprint is not provided, or 412 Precondition Failed if the fingerprint is out of date.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * The prefix length of the primary internal IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 internal_ipv6_prefix_length = 203833757;</code>
     * @return int
     */
    public function getInternalIpv6PrefixLength()
    {
        return isset($this->internal_ipv6_prefix_length) ? $this->internal_ipv6_prefix_length : 0;
    }

    public function hasInternalIpv6PrefixLength()
    {
        return isset($this->internal_ipv6_prefix_length);
    }

    public function clearInternalIpv6PrefixLength()
    {
        unset($this->internal_ipv6_prefix_length);
    }

    /**
     * The prefix length of the primary internal IPv6 range.
     *
     * Generated from protobuf field <code>optional int32 internal_ipv6_prefix_length = 203833757;</code>
     * @param int $var
     * @return $this
     */
    public function setInternalIpv6PrefixLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->internal_ipv6_prefix_length = $var;

        return $this;
    }

    /**
     * An array of IPv6 access configurations for this interface. Currently, only one IPv6 access config, DIRECT_IPV6, is supported. If there is no ipv6AccessConfig specified, then this instance will have no external IPv6 Internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig ipv6_access_configs = 483472110;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv6AccessConfigs()
    {
        return $this->ipv6_access_configs;
    }

    /**
     * An array of IPv6 access configurations for this interface. Currently, only one IPv6 access config, DIRECT_IPV6, is supported. If there is no ipv6AccessConfig specified, then this instance will have no external IPv6 Internet access.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AccessConfig ipv6_access_configs = 483472110;</code>
     * @param array<\Google\Cloud\Compute\V1\AccessConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpv6AccessConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AccessConfig::class);
        $this->ipv6_access_configs = $arr;

        return $this;
    }

    /**
     * [Output Only] One of EXTERNAL, INTERNAL to indicate whether the IP can be accessed from the Internet. This field is always inherited from its subnetwork. Valid only if stackType is IPV4_IPV6.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     * @return string
     */
    public function getIpv6AccessType()
    {
        return isset($this->ipv6_access_type) ? $this->ipv6_access_type : '';
    }

    public function hasIpv6AccessType()
    {
        return isset($this->ipv6_access_type);
    }

    public function clearIpv6AccessType()
    {
        unset($this->ipv6_access_type);
    }

    /**
     * [Output Only] One of EXTERNAL, INTERNAL to indicate whether the IP can be accessed from the Internet. This field is always inherited from its subnetwork. Valid only if stackType is IPV4_IPV6.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     * @param string $var
     * @return $this
     */
    public function setIpv6AccessType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ipv6_access_type = $var;

        return $this;
    }

    /**
     * An IPv6 internal network address for this network interface.
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     * @return string
     */
    public function getIpv6Address()
    {
        return isset($this->ipv6_address) ? $this->ipv6_address : '';
    }

    public function hasIpv6Address()
    {
        return isset($this->ipv6_address);
    }

    public function clearIpv6Address()
    {
        unset($this->ipv6_address);
    }

    /**
     * An IPv6 internal network address for this network interface.
     *
     * Generated from protobuf field <code>optional string ipv6_address = 341563804;</code>
     * @param string $var
     * @return $this
     */
    public function setIpv6Address($var)
    {
        GPBUtil::checkString($var, True);
        $this->ipv6_address = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#networkInterface for network interfaces.
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
     * [Output Only] Type of the resource. Always compute#networkInterface for network interfaces.
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
     * [Output Only] The name of the network interface, which is generated by the server. For a VM, the network interface uses the nicN naming format. Where N is a value between 0 and 7. The default interface value is nic0.
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
     * [Output Only] The name of the network interface, which is generated by the server. For a VM, the network interface uses the nicN naming format. Where N is a value between 0 and 7. The default interface value is nic0.
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
     * URL of the VPC network resource for this instance. When creating an instance, if neither the network nor the subnetwork is specified, the default network global/networks/default is used. If the selected project doesn't have the default network, you must specify a network or subnet. If the network is not specified but the subnetwork is specified, the network is inferred. If you specify this property, you can specify the network as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/global/networks/ network - projects/project/global/networks/network - global/networks/default 
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
     * URL of the VPC network resource for this instance. When creating an instance, if neither the network nor the subnetwork is specified, the default network global/networks/default is used. If the selected project doesn't have the default network, you must specify a network or subnet. If the network is not specified but the subnetwork is specified, the network is inferred. If you specify this property, you can specify the network as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/global/networks/ network - projects/project/global/networks/network - global/networks/default 
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
     * The URL of the network attachment that this interface should connect to in the following format: projects/{project_number}/regions/{region_name}/networkAttachments/{network_attachment_name}.
     *
     * Generated from protobuf field <code>optional string network_attachment = 224644052;</code>
     * @return string
     */
    public function getNetworkAttachment()
    {
        return isset($this->network_attachment) ? $this->network_attachment : '';
    }

    public function hasNetworkAttachment()
    {
        return isset($this->network_attachment);
    }

    public function clearNetworkAttachment()
    {
        unset($this->network_attachment);
    }

    /**
     * The URL of the network attachment that this interface should connect to in the following format: projects/{project_number}/regions/{region_name}/networkAttachments/{network_attachment_name}.
     *
     * Generated from protobuf field <code>optional string network_attachment = 224644052;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_attachment = $var;

        return $this;
    }

    /**
     * An IPv4 internal IP address to assign to the instance for this network interface. If not specified by the user, an unused internal IP is assigned by the system.
     *
     * Generated from protobuf field <code>optional string network_i_p = 207181961;</code>
     * @return string
     */
    public function getNetworkIP()
    {
        return isset($this->network_i_p) ? $this->network_i_p : '';
    }

    public function hasNetworkIP()
    {
        return isset($this->network_i_p);
    }

    public function clearNetworkIP()
    {
        unset($this->network_i_p);
    }

    /**
     * An IPv4 internal IP address to assign to the instance for this network interface. If not specified by the user, an unused internal IP is assigned by the system.
     *
     * Generated from protobuf field <code>optional string network_i_p = 207181961;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkIP($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_i_p = $var;

        return $this;
    }

    /**
     * The type of vNIC to be used on this interface. This may be gVNIC or VirtioNet.
     * Check the NicType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nic_type = 59810577;</code>
     * @return string
     */
    public function getNicType()
    {
        return isset($this->nic_type) ? $this->nic_type : '';
    }

    public function hasNicType()
    {
        return isset($this->nic_type);
    }

    public function clearNicType()
    {
        unset($this->nic_type);
    }

    /**
     * The type of vNIC to be used on this interface. This may be gVNIC or VirtioNet.
     * Check the NicType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string nic_type = 59810577;</code>
     * @param string $var
     * @return $this
     */
    public function setNicType($var)
    {
        GPBUtil::checkString($var, True);
        $this->nic_type = $var;

        return $this;
    }

    /**
     * The networking queue count that's specified by users for the network interface. Both Rx and Tx queues will be set to this number. It'll be empty if not specified by the users.
     *
     * Generated from protobuf field <code>optional int32 queue_count = 503708769;</code>
     * @return int
     */
    public function getQueueCount()
    {
        return isset($this->queue_count) ? $this->queue_count : 0;
    }

    public function hasQueueCount()
    {
        return isset($this->queue_count);
    }

    public function clearQueueCount()
    {
        unset($this->queue_count);
    }

    /**
     * The networking queue count that's specified by users for the network interface. Both Rx and Tx queues will be set to this number. It'll be empty if not specified by the users.
     *
     * Generated from protobuf field <code>optional int32 queue_count = 503708769;</code>
     * @param int $var
     * @return $this
     */
    public function setQueueCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->queue_count = $var;

        return $this;
    }

    /**
     * The stack type for this network interface to identify whether the IPv6 feature is enabled or not. If not specified, IPV4_ONLY will be used. This field can be both set at instance creation and update network interface operations.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @return string
     */
    public function getStackType()
    {
        return isset($this->stack_type) ? $this->stack_type : '';
    }

    public function hasStackType()
    {
        return isset($this->stack_type);
    }

    public function clearStackType()
    {
        unset($this->stack_type);
    }

    /**
     * The stack type for this network interface to identify whether the IPv6 feature is enabled or not. If not specified, IPV4_ONLY will be used. This field can be both set at instance creation and update network interface operations.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @param string $var
     * @return $this
     */
    public function setStackType($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack_type = $var;

        return $this;
    }

    /**
     * The URL of the Subnetwork resource for this instance. If the network resource is in legacy mode, do not specify this field. If the network is in auto subnet mode, specifying the subnetwork is optional. If the network is in custom subnet mode, specifying the subnetwork is required. If you specify this field, you can specify the subnetwork as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/regions/region /subnetworks/subnetwork - regions/region/subnetworks/subnetwork 
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * The URL of the Subnetwork resource for this instance. If the network resource is in legacy mode, do not specify this field. If the network is in auto subnet mode, specifying the subnetwork is optional. If the network is in custom subnet mode, specifying the subnetwork is required. If you specify this field, you can specify the subnetwork as a full or partial URL. For example, the following are all valid URLs: - https://www.googleapis.com/compute/v1/projects/project/regions/region /subnetworks/subnetwork - regions/region/subnetworks/subnetwork 
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

}

