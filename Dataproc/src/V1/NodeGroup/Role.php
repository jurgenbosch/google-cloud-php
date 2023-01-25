<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1\NodeGroup;

use UnexpectedValueException;

/**
 * Node group roles.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.NodeGroup.Role</code>
 */
class Role
{
    /**
     * Required unspecified role.
     *
     * Generated from protobuf enum <code>ROLE_UNSPECIFIED = 0;</code>
     */
    const ROLE_UNSPECIFIED = 0;
    /**
     * Job drivers run on the node group.
     *
     * Generated from protobuf enum <code>DRIVER = 1;</code>
     */
    const DRIVER = 1;

    private static $valueToName = [
        self::ROLE_UNSPECIFIED => 'ROLE_UNSPECIFIED',
        self::DRIVER => 'DRIVER',
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
class_alias(Role::class, \Google\Cloud\Dataproc\V1\NodeGroup_Role::class);

