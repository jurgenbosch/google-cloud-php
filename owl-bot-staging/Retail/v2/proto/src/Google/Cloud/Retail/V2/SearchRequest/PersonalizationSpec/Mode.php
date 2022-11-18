<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchRequest\PersonalizationSpec;

use UnexpectedValueException;

/**
 * The personalization mode of each search request.
 *
 * Protobuf type <code>google.cloud.retail.v2.SearchRequest.PersonalizationSpec.Mode</code>
 */
class Mode
{
    /**
     * Default value. In this case, server behavior defaults to
     * [Mode.AUTO][google.cloud.retail.v2.SearchRequest.PersonalizationSpec.Mode.AUTO].
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Let CRS decide whether to use personalization based on quality of user
     * event data.
     *
     * Generated from protobuf enum <code>AUTO = 1;</code>
     */
    const AUTO = 1;
    /**
     * Disable personalization.
     *
     * Generated from protobuf enum <code>DISABLED = 2;</code>
     */
    const DISABLED = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::AUTO => 'AUTO',
        self::DISABLED => 'DISABLED',
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
class_alias(Mode::class, \Google\Cloud\Retail\V2\SearchRequest_PersonalizationSpec_Mode::class);

