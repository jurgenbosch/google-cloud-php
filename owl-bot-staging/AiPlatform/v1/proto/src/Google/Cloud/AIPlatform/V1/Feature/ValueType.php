<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature.proto

namespace Google\Cloud\AIPlatform\V1\Feature;

use UnexpectedValueException;

/**
 * An enum representing the value type of a feature.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Feature.ValueType</code>
 */
class ValueType
{
    /**
     * The value type is unspecified.
     *
     * Generated from protobuf enum <code>VALUE_TYPE_UNSPECIFIED = 0;</code>
     */
    const VALUE_TYPE_UNSPECIFIED = 0;
    /**
     * Used for Feature that is a boolean.
     *
     * Generated from protobuf enum <code>BOOL = 1;</code>
     */
    const BOOL = 1;
    /**
     * Used for Feature that is a list of boolean.
     *
     * Generated from protobuf enum <code>BOOL_ARRAY = 2;</code>
     */
    const BOOL_ARRAY = 2;
    /**
     * Used for Feature that is double.
     *
     * Generated from protobuf enum <code>DOUBLE = 3;</code>
     */
    const DOUBLE = 3;
    /**
     * Used for Feature that is a list of double.
     *
     * Generated from protobuf enum <code>DOUBLE_ARRAY = 4;</code>
     */
    const DOUBLE_ARRAY = 4;
    /**
     * Used for Feature that is INT64.
     *
     * Generated from protobuf enum <code>INT64 = 9;</code>
     */
    const INT64 = 9;
    /**
     * Used for Feature that is a list of INT64.
     *
     * Generated from protobuf enum <code>INT64_ARRAY = 10;</code>
     */
    const INT64_ARRAY = 10;
    /**
     * Used for Feature that is string.
     *
     * Generated from protobuf enum <code>STRING = 11;</code>
     */
    const STRING = 11;
    /**
     * Used for Feature that is a list of String.
     *
     * Generated from protobuf enum <code>STRING_ARRAY = 12;</code>
     */
    const STRING_ARRAY = 12;
    /**
     * Used for Feature that is bytes.
     *
     * Generated from protobuf enum <code>BYTES = 13;</code>
     */
    const BYTES = 13;

    private static $valueToName = [
        self::VALUE_TYPE_UNSPECIFIED => 'VALUE_TYPE_UNSPECIFIED',
        self::BOOL => 'BOOL',
        self::BOOL_ARRAY => 'BOOL_ARRAY',
        self::DOUBLE => 'DOUBLE',
        self::DOUBLE_ARRAY => 'DOUBLE_ARRAY',
        self::INT64 => 'INT64',
        self::INT64_ARRAY => 'INT64_ARRAY',
        self::STRING => 'STRING',
        self::STRING_ARRAY => 'STRING_ARRAY',
        self::BYTES => 'BYTES',
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
class_alias(ValueType::class, \Google\Cloud\AIPlatform\V1\Feature_ValueType::class);

