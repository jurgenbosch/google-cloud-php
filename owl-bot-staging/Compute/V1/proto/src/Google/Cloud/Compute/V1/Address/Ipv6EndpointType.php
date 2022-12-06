<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Address;

use UnexpectedValueException;

/**
 * The endpoint type of this address, which should be VM or NETLB. This is used for deciding which type of endpoint this address can be used after the external IPv6 address reservation.
 *
 * Protobuf type <code>google.cloud.compute.v1.Address.Ipv6EndpointType</code>
 */
class Ipv6EndpointType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_IPV6_ENDPOINT_TYPE = 0;</code>
     */
    const UNDEFINED_IPV6_ENDPOINT_TYPE = 0;
    /**
     * Reserved IPv6 address can be used on network load balancer.
     *
     * Generated from protobuf enum <code>NETLB = 74173363;</code>
     */
    const NETLB = 74173363;
    /**
     * Reserved IPv6 address can be used on VM.
     *
     * Generated from protobuf enum <code>VM = 2743;</code>
     */
    const VM = 2743;

    private static $valueToName = [
        self::UNDEFINED_IPV6_ENDPOINT_TYPE => 'UNDEFINED_IPV6_ENDPOINT_TYPE',
        self::NETLB => 'NETLB',
        self::VM => 'VM',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Ipv6EndpointType::class, \Google\Cloud\Compute\V1\Address_Ipv6EndpointType::class);

