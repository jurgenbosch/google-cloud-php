<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\PropertyFilter;

use UnexpectedValueException;

/**
 * A property filter operator.
 *
 * Protobuf type <code>google.datastore.v1.PropertyFilter.Operator</code>
 */
class Operator
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * The given `property` is less than the given `value`.
     * Requires:
     * * That `property` comes first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN = 1;</code>
     */
    const LESS_THAN = 1;
    /**
     * The given `property` is less than or equal to the given `value`.
     * Requires:
     * * That `property` comes first in `order_by`.
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 2;</code>
     */
    const LESS_THAN_OR_EQUAL = 2;
    /**
     * The given `property` is greater than the given `value`.
     * Requires:
     * * That `property` comes first in `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN = 3;</code>
     */
    const GREATER_THAN = 3;
    /**
     * The given `property` is greater than or equal to the given `value`.
     * Requires:
     * * That `property` comes first in `order_by`.
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 4;</code>
     */
    const GREATER_THAN_OR_EQUAL = 4;
    /**
     * The given `property` is equal to the given `value`.
     *
     * Generated from protobuf enum <code>EQUAL = 5;</code>
     */
    const EQUAL = 5;
    /**
     * The given `property` is equal to at least one value in the given array.
     * Requires:
     * * That `value` is a non-empty `ArrayValue` with at most 10 values.
     * * No other `IN` or `NOT_IN` is in the same query.
     *
     * Generated from protobuf enum <code>IN = 6;</code>
     */
    const IN = 6;
    /**
     * The given `property` is not equal to the given `value`.
     * Requires:
     * * No other `NOT_EQUAL` or `NOT_IN` is in the same query.
     * * That `property` comes first in the `order_by`.
     *
     * Generated from protobuf enum <code>NOT_EQUAL = 9;</code>
     */
    const NOT_EQUAL = 9;
    /**
     * Limit the result set to the given entity and its descendants.
     * Requires:
     * * That `value` is an entity key.
     *
     * Generated from protobuf enum <code>HAS_ANCESTOR = 11;</code>
     */
    const HAS_ANCESTOR = 11;
    /**
     * The value of the `property` is not in the given array.
     * Requires:
     * * That `value` is a non-empty `ArrayValue` with at most 10 values.
     * * No other `IN`, `NOT_IN`, `NOT_EQUAL` is in the same query.
     * * That `field` comes first in the `order_by`.
     *
     * Generated from protobuf enum <code>NOT_IN = 13;</code>
     */
    const NOT_IN = 13;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::LESS_THAN => 'LESS_THAN',
        self::LESS_THAN_OR_EQUAL => 'LESS_THAN_OR_EQUAL',
        self::GREATER_THAN => 'GREATER_THAN',
        self::GREATER_THAN_OR_EQUAL => 'GREATER_THAN_OR_EQUAL',
        self::EQUAL => 'EQUAL',
        self::IN => 'IN',
        self::NOT_EQUAL => 'NOT_EQUAL',
        self::HAS_ANCESTOR => 'HAS_ANCESTOR',
        self::NOT_IN => 'NOT_IN',
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
class_alias(Operator::class, \Google\Cloud\Datastore\V1\PropertyFilter_Operator::class);

