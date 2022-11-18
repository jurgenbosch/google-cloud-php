<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2\DnsSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a host on your domain that is a DNS name server for your domain
 * and/or other domains. Glue records are a way of making the IP address of a
 * name server known, even when it serves DNS queries for its parent domain.
 * For example, when `ns.example.com` is a name server for `example.com`, the
 * host `ns.example.com` must have a glue record to break the circular DNS
 * reference.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.DnsSettings.GlueRecord</code>
 */
class GlueRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Domain name of the host in Punycode format.
     *
     * Generated from protobuf field <code>string host_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $host_name = '';
    /**
     * List of IPv4 addresses corresponding to this host in the standard decimal
     * format (e.g. `198.51.100.1`). At least one of `ipv4_address` and
     * `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv4_addresses = 2;</code>
     */
    private $ipv4_addresses;
    /**
     * List of IPv6 addresses corresponding to this host in the standard
     * hexadecimal format (e.g. `2001:db8::`). At least one of
     * `ipv4_address` and `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv6_addresses = 3;</code>
     */
    private $ipv6_addresses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host_name
     *           Required. Domain name of the host in Punycode format.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv4_addresses
     *           List of IPv4 addresses corresponding to this host in the standard decimal
     *           format (e.g. `198.51.100.1`). At least one of `ipv4_address` and
     *           `ipv6_address` must be set.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv6_addresses
     *           List of IPv6 addresses corresponding to this host in the standard
     *           hexadecimal format (e.g. `2001:db8::`). At least one of
     *           `ipv4_address` and `ipv6_address` must be set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Domain name of the host in Punycode format.
     *
     * Generated from protobuf field <code>string host_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostName()
    {
        return $this->host_name;
    }

    /**
     * Required. Domain name of the host in Punycode format.
     *
     * Generated from protobuf field <code>string host_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHostName($var)
    {
        GPBUtil::checkString($var, True);
        $this->host_name = $var;

        return $this;
    }

    /**
     * List of IPv4 addresses corresponding to this host in the standard decimal
     * format (e.g. `198.51.100.1`). At least one of `ipv4_address` and
     * `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv4_addresses = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv4Addresses()
    {
        return $this->ipv4_addresses;
    }

    /**
     * List of IPv4 addresses corresponding to this host in the standard decimal
     * format (e.g. `198.51.100.1`). At least one of `ipv4_address` and
     * `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv4_addresses = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpv4Addresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv4_addresses = $arr;

        return $this;
    }

    /**
     * List of IPv6 addresses corresponding to this host in the standard
     * hexadecimal format (e.g. `2001:db8::`). At least one of
     * `ipv4_address` and `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv6_addresses = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv6Addresses()
    {
        return $this->ipv6_addresses;
    }

    /**
     * List of IPv6 addresses corresponding to this host in the standard
     * hexadecimal format (e.g. `2001:db8::`). At least one of
     * `ipv4_address` and `ipv6_address` must be set.
     *
     * Generated from protobuf field <code>repeated string ipv6_addresses = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpv6Addresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv6_addresses = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GlueRecord::class, \Google\Cloud\Domains\V1alpha2\DnsSettings_GlueRecord::class);

