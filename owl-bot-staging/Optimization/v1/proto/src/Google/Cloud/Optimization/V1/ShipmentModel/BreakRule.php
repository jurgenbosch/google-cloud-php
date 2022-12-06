<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentModel;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated: Use top level [BreakRule][] instead.
 * Rules to generate time breaks for a vehicle (e.g. lunch
 * breaks). A break is a contiguous period of time during which the vehicle
 * remains idle at its current position and cannot perform any visit. A break
 * may occur:
 * * during the travel between two visits (which includes the time right
 *   before or right after a visit, but not in the middle of a visit), in
 *   which case it extends the corresponding transit time between the visits,
 * * or before the vehicle start (the vehicle may not start in the middle of
 *   a break), in which case it does not affect the vehicle start time.
 * * or after the vehicle end (ditto, with the vehicle end time).
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentModel.BreakRule</code>
 */
class BreakRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Sequence of breaks. See the `BreakRequest` message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.BreakRequest break_requests = 1;</code>
     */
    private $break_requests;
    /**
     * Several `FrequencyConstraint` may apply. They must all be satisfied by
     * the `BreakRequest`s of this `BreakRule`. See `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.FrequencyConstraint frequency_constraints = 2;</code>
     */
    private $frequency_constraints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\BreakRequest>|\Google\Protobuf\Internal\RepeatedField $break_requests
     *           Sequence of breaks. See the `BreakRequest` message.
     *     @type array<\Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\FrequencyConstraint>|\Google\Protobuf\Internal\RepeatedField $frequency_constraints
     *           Several `FrequencyConstraint` may apply. They must all be satisfied by
     *           the `BreakRequest`s of this `BreakRule`. See `FrequencyConstraint`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Sequence of breaks. See the `BreakRequest` message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.BreakRequest break_requests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBreakRequests()
    {
        return $this->break_requests;
    }

    /**
     * Sequence of breaks. See the `BreakRequest` message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.BreakRequest break_requests = 1;</code>
     * @param array<\Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\BreakRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBreakRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\BreakRequest::class);
        $this->break_requests = $arr;

        return $this;
    }

    /**
     * Several `FrequencyConstraint` may apply. They must all be satisfied by
     * the `BreakRequest`s of this `BreakRule`. See `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.FrequencyConstraint frequency_constraints = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrequencyConstraints()
    {
        return $this->frequency_constraints;
    }

    /**
     * Several `FrequencyConstraint` may apply. They must all be satisfied by
     * the `BreakRequest`s of this `BreakRule`. See `FrequencyConstraint`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.ShipmentModel.BreakRule.FrequencyConstraint frequency_constraints = 2;</code>
     * @param array<\Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\FrequencyConstraint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrequencyConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\ShipmentModel\BreakRule\FrequencyConstraint::class);
        $this->frequency_constraints = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BreakRule::class, \Google\Cloud\Optimization\V1\ShipmentModel_BreakRule::class);

