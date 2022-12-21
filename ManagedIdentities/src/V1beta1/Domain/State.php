<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/resource.proto

namespace Google\Cloud\ManagedIdentities\V1beta1\Domain;

use UnexpectedValueException;

/**
 * Represents the different states of a managed domain.
 *
 * Protobuf type <code>google.cloud.managedidentities.v1beta1.Domain.State</code>
 */
class State
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The domain is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The domain has been created and is fully usable.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * The domain's configuration is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * The domain is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * The domain is being repaired and may be unusable. Details
     * can be found in the `status_message` field.
     *
     * Generated from protobuf enum <code>REPAIRING = 5;</code>
     */
    const REPAIRING = 5;
    /**
     * The domain is undergoing maintenance.
     *
     * Generated from protobuf enum <code>PERFORMING_MAINTENANCE = 6;</code>
     */
    const PERFORMING_MAINTENANCE = 6;
    /**
     * The domain is not serving requests.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 7;</code>
     */
    const UNAVAILABLE = 7;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::REPAIRING => 'REPAIRING',
        self::PERFORMING_MAINTENANCE => 'PERFORMING_MAINTENANCE',
        self::UNAVAILABLE => 'UNAVAILABLE',
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


