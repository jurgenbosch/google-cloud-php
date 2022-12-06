<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InterconnectOutageNotification;

use UnexpectedValueException;

/**
 * The party that generated this notification, which can take the following value: - GOOGLE: this notification as generated by Google. Note that the value of NSRC_GOOGLE has been deprecated in favor of GOOGLE.
 *
 * Protobuf type <code>google.cloud.compute.v1.InterconnectOutageNotification.Source</code>
 */
class Source
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_SOURCE = 0;</code>
     */
    const UNDEFINED_SOURCE = 0;
    /**
     * This notification was generated by Google.
     *
     * Generated from protobuf enum <code>GOOGLE = 497439289;</code>
     */
    const GOOGLE = 497439289;
    /**
     * [Deprecated] This notification was generated by Google.
     *
     * Generated from protobuf enum <code>NSRC_GOOGLE = 510574562;</code>
     */
    const NSRC_GOOGLE = 510574562;

    private static $valueToName = [
        self::UNDEFINED_SOURCE => 'UNDEFINED_SOURCE',
        self::GOOGLE => 'GOOGLE',
        self::NSRC_GOOGLE => 'NSRC_GOOGLE',
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
class_alias(Source::class, \Google\Cloud\Compute\V1\InterconnectOutageNotification_Source::class);

