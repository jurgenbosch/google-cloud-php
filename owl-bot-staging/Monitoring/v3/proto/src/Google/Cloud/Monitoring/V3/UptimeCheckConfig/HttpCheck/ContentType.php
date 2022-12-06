<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck;

use UnexpectedValueException;

/**
 * Header options corresponding to the content type of a HTTP request body.
 *
 * Protobuf type <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck.ContentType</code>
 */
class ContentType
{
    /**
     * No content type specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * `body` is in URL-encoded form. Equivalent to setting the `Content-Type`
     * to `application/x-www-form-urlencoded` in the HTTP request.
     *
     * Generated from protobuf enum <code>URL_ENCODED = 1;</code>
     */
    const URL_ENCODED = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::URL_ENCODED => 'URL_ENCODED',
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
class_alias(ContentType::class, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck_ContentType::class);

