<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1\PatchDeployment;

use UnexpectedValueException;

/**
 * Represents state of patch peployment.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.PatchDeployment.State</code>
 */
class State
{
    /**
     * The default value. This value is used if the state is omitted.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Active value means that patch deployment generates Patch Jobs.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Paused value means that patch deployment does not generate
     * Patch jobs. Requires user action to move in and out from this state.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::PAUSED => 'PAUSED',
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
class_alias(State::class, \Google\Cloud\OsConfig\V1\PatchDeployment_State::class);

