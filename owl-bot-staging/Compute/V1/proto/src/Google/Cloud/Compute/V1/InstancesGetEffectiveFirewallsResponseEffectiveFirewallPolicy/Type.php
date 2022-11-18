<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstancesGetEffectiveFirewallsResponseEffectiveFirewallPolicy;

use UnexpectedValueException;

/**
 * [Output Only] The type of the firewall policy. Can be one of HIERARCHY, NETWORK, NETWORK_REGIONAL.
 *
 * Protobuf type <code>google.cloud.compute.v1.InstancesGetEffectiveFirewallsResponseEffectiveFirewallPolicy.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>HIERARCHY = 69902869;</code>
     */
    const HIERARCHY = 69902869;
    /**
     * Generated from protobuf enum <code>NETWORK = 413984270;</code>
     */
    const NETWORK = 413984270;
    /**
     * Generated from protobuf enum <code>NETWORK_REGIONAL = 190804272;</code>
     */
    const NETWORK_REGIONAL = 190804272;
    /**
     * Generated from protobuf enum <code>UNSPECIFIED = 526786327;</code>
     */
    const UNSPECIFIED = 526786327;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::HIERARCHY => 'HIERARCHY',
        self::NETWORK => 'NETWORK',
        self::NETWORK_REGIONAL => 'NETWORK_REGIONAL',
        self::UNSPECIFIED => 'UNSPECIFIED',
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
class_alias(Type::class, \Google\Cloud\Compute\V1\InstancesGetEffectiveFirewallsResponseEffectiveFirewallPolicy_Type::class);

