<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientconnectorservices/v1/client_connector_services_service.proto

namespace Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService;

use UnexpectedValueException;

/**
 * Represents the different states of a ClientConnectorService.
 *
 * Protobuf type <code>google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * ClientConnectorService is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * ClientConnectorService is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 2;</code>
     */
    const UPDATING = 2;
    /**
     * ClientConnectorService is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * ClientConnectorService is running.
     *
     * Generated from protobuf enum <code>RUNNING = 4;</code>
     */
    const RUNNING = 4;
    /**
     * ClientConnectorService is down and may be restored in the future.
     * This happens when CCFE sends ProjectState = OFF.
     *
     * Generated from protobuf enum <code>DOWN = 5;</code>
     */
    const DOWN = 5;
    /**
     * ClientConnectorService encountered an error and is in an indeterministic
     * state.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::RUNNING => 'RUNNING',
        self::DOWN => 'DOWN',
        self::ERROR => 'ERROR',
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
class_alias(State::class, \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService_State::class);

