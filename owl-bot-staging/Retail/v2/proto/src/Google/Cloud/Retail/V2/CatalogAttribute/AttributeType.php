<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog.proto

namespace Google\Cloud\Retail\V2\CatalogAttribute;

use UnexpectedValueException;

/**
 * The type of an attribute.
 *
 * Protobuf type <code>google.cloud.retail.v2.CatalogAttribute.AttributeType</code>
 */
class AttributeType
{
    /**
     * The type of the attribute is unknown.
     * Used when type cannot be derived from attribute that is not
     * [in_use][google.cloud.retail.v2.CatalogAttribute.in_use].
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Textual attribute.
     *
     * Generated from protobuf enum <code>TEXTUAL = 1;</code>
     */
    const TEXTUAL = 1;
    /**
     * Numerical attribute.
     *
     * Generated from protobuf enum <code>NUMERICAL = 2;</code>
     */
    const NUMERICAL = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::TEXTUAL => 'TEXTUAL',
        self::NUMERICAL => 'NUMERICAL',
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
class_alias(AttributeType::class, \Google\Cloud\Retail\V2\CatalogAttribute_AttributeType::class);

