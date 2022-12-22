<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkAttachment;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkAttachment.ConnectionPreference</code>
 */
class ConnectionPreference
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CONNECTION_PREFERENCE = 0;</code>
     */
    const UNDEFINED_CONNECTION_PREFERENCE = 0;
    /**
     * Generated from protobuf enum <code>ACCEPT_AUTOMATIC = 75250580;</code>
     */
    const ACCEPT_AUTOMATIC = 75250580;
    /**
     * Generated from protobuf enum <code>ACCEPT_MANUAL = 373061341;</code>
     */
    const ACCEPT_MANUAL = 373061341;
    /**
     * Generated from protobuf enum <code>INVALID = 530283991;</code>
     */
    const INVALID = 530283991;

    private static $valueToName = [
        self::UNDEFINED_CONNECTION_PREFERENCE => 'UNDEFINED_CONNECTION_PREFERENCE',
        self::ACCEPT_AUTOMATIC => 'ACCEPT_AUTOMATIC',
        self::ACCEPT_MANUAL => 'ACCEPT_MANUAL',
        self::INVALID => 'INVALID',
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


