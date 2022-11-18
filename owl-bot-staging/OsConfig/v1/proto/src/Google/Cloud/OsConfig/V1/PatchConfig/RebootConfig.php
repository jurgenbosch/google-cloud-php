<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1\PatchConfig;

use UnexpectedValueException;

/**
 * Post-patch reboot settings.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.PatchConfig.RebootConfig</code>
 */
class RebootConfig
{
    /**
     * The default behavior is DEFAULT.
     *
     * Generated from protobuf enum <code>REBOOT_CONFIG_UNSPECIFIED = 0;</code>
     */
    const REBOOT_CONFIG_UNSPECIFIED = 0;
    /**
     * The agent decides if a reboot is necessary by checking signals such as
     * registry keys on Windows or `/var/run/reboot-required` on APT based
     * systems. On RPM based systems, a set of core system package install times
     * are compared with system boot time.
     *
     * Generated from protobuf enum <code>DEFAULT = 1;</code>
     */
    const PBDEFAULT = 1;
    /**
     * Always reboot the machine after the update completes.
     *
     * Generated from protobuf enum <code>ALWAYS = 2;</code>
     */
    const ALWAYS = 2;
    /**
     * Never reboot the machine after the update completes.
     *
     * Generated from protobuf enum <code>NEVER = 3;</code>
     */
    const NEVER = 3;

    private static $valueToName = [
        self::REBOOT_CONFIG_UNSPECIFIED => 'REBOOT_CONFIG_UNSPECIFIED',
        self::PBDEFAULT => 'DEFAULT',
        self::ALWAYS => 'ALWAYS',
        self::NEVER => 'NEVER',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RebootConfig::class, \Google\Cloud\OsConfig\V1\PatchConfig_RebootConfig::class);

