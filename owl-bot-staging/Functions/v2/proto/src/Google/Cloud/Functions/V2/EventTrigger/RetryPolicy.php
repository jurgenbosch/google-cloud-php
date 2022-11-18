<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2\EventTrigger;

use UnexpectedValueException;

/**
 * Describes the retry policy in case of function's execution failure.
 * Retried execution is charged as any other execution.
 *
 * Protobuf type <code>google.cloud.functions.v2.EventTrigger.RetryPolicy</code>
 */
class RetryPolicy
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>RETRY_POLICY_UNSPECIFIED = 0;</code>
     */
    const RETRY_POLICY_UNSPECIFIED = 0;
    /**
     * Do not retry.
     *
     * Generated from protobuf enum <code>RETRY_POLICY_DO_NOT_RETRY = 1;</code>
     */
    const RETRY_POLICY_DO_NOT_RETRY = 1;
    /**
     * Retry on any failure, retry up to 7 days with an exponential backoff
     * (capped at 10 seconds).
     *
     * Generated from protobuf enum <code>RETRY_POLICY_RETRY = 2;</code>
     */
    const RETRY_POLICY_RETRY = 2;

    private static $valueToName = [
        self::RETRY_POLICY_UNSPECIFIED => 'RETRY_POLICY_UNSPECIFIED',
        self::RETRY_POLICY_DO_NOT_RETRY => 'RETRY_POLICY_DO_NOT_RETRY',
        self::RETRY_POLICY_RETRY => 'RETRY_POLICY_RETRY',
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
class_alias(RetryPolicy::class, \Google\Cloud\Functions\V2\EventTrigger_RetryPolicy::class);

