<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ForwardingRule;

use UnexpectedValueException;

/**
 * This signifies the networking tier used for configuring this load balancer and can only take the following values: PREMIUM, STANDARD. For regional ForwardingRule, the valid values are PREMIUM and STANDARD. For GlobalForwardingRule, the valid value is PREMIUM. If this field is not specified, it is assumed to be PREMIUM. If IPAddress is specified, this value must be equal to the networkTier of the Address.
 *
 * Protobuf type <code>google.cloud.compute.v1.ForwardingRule.NetworkTier</code>
 */
class NetworkTier
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_NETWORK_TIER = 0;</code>
     */
    const UNDEFINED_NETWORK_TIER = 0;
    /**
     * Public internet quality with fixed bandwidth.
     *
     * Generated from protobuf enum <code>FIXED_STANDARD = 310464328;</code>
     */
    const FIXED_STANDARD = 310464328;
    /**
     * High quality, Google-grade network tier, support for all networking products.
     *
     * Generated from protobuf enum <code>PREMIUM = 399530551;</code>
     */
    const PREMIUM = 399530551;
    /**
     * Public internet quality, only limited support for other networking products.
     *
     * Generated from protobuf enum <code>STANDARD = 484642493;</code>
     */
    const STANDARD = 484642493;
    /**
     * (Output only) Temporary tier for FIXED_STANDARD when fixed standard tier is expired or not configured.
     *
     * Generated from protobuf enum <code>STANDARD_OVERRIDES_FIXED_STANDARD = 465847234;</code>
     */
    const STANDARD_OVERRIDES_FIXED_STANDARD = 465847234;

    private static $valueToName = [
        self::UNDEFINED_NETWORK_TIER => 'UNDEFINED_NETWORK_TIER',
        self::FIXED_STANDARD => 'FIXED_STANDARD',
        self::PREMIUM => 'PREMIUM',
        self::STANDARD => 'STANDARD',
        self::STANDARD_OVERRIDES_FIXED_STANDARD => 'STANDARD_OVERRIDES_FIXED_STANDARD',
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
class_alias(NetworkTier::class, \Google\Cloud\Compute\V1\ForwardingRule_NetworkTier::class);

