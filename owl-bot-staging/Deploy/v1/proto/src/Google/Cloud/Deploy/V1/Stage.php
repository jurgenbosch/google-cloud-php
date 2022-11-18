<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stage specifies a location to which to deploy.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.Stage</code>
 */
class Stage extends \Google\Protobuf\Internal\Message
{
    /**
     * The target_id to which this stage points. This field refers exclusively to
     * the last segment of a target name. For example, this field would just be
     * `my-target` (rather than
     * `projects/project/locations/location/targets/my-target`). The location of
     * the `Target` is inferred to be the same as the location of the
     * `DeliveryPipeline` that contains this `Stage`.
     *
     * Generated from protobuf field <code>string target_id = 1;</code>
     */
    protected $target_id = '';
    /**
     * Skaffold profiles to use when rendering the manifest for this stage's
     * `Target`.
     *
     * Generated from protobuf field <code>repeated string profiles = 2;</code>
     */
    private $profiles;
    /**
     * Optional. The strategy to use for a `Rollout` to this stage.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Strategy strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $strategy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $target_id
     *           The target_id to which this stage points. This field refers exclusively to
     *           the last segment of a target name. For example, this field would just be
     *           `my-target` (rather than
     *           `projects/project/locations/location/targets/my-target`). The location of
     *           the `Target` is inferred to be the same as the location of the
     *           `DeliveryPipeline` that contains this `Stage`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $profiles
     *           Skaffold profiles to use when rendering the manifest for this stage's
     *           `Target`.
     *     @type \Google\Cloud\Deploy\V1\Strategy $strategy
     *           Optional. The strategy to use for a `Rollout` to this stage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * The target_id to which this stage points. This field refers exclusively to
     * the last segment of a target name. For example, this field would just be
     * `my-target` (rather than
     * `projects/project/locations/location/targets/my-target`). The location of
     * the `Target` is inferred to be the same as the location of the
     * `DeliveryPipeline` that contains this `Stage`.
     *
     * Generated from protobuf field <code>string target_id = 1;</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * The target_id to which this stage points. This field refers exclusively to
     * the last segment of a target name. For example, this field would just be
     * `my-target` (rather than
     * `projects/project/locations/location/targets/my-target`). The location of
     * the `Target` is inferred to be the same as the location of the
     * `DeliveryPipeline` that contains this `Stage`.
     *
     * Generated from protobuf field <code>string target_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

    /**
     * Skaffold profiles to use when rendering the manifest for this stage's
     * `Target`.
     *
     * Generated from protobuf field <code>repeated string profiles = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Skaffold profiles to use when rendering the manifest for this stage's
     * `Target`.
     *
     * Generated from protobuf field <code>repeated string profiles = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->profiles = $arr;

        return $this;
    }

    /**
     * Optional. The strategy to use for a `Rollout` to this stage.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Strategy strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\Strategy|null
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    public function hasStrategy()
    {
        return isset($this->strategy);
    }

    public function clearStrategy()
    {
        unset($this->strategy);
    }

    /**
     * Optional. The strategy to use for a `Rollout` to this stage.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Strategy strategy = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\Strategy $var
     * @return $this
     */
    public function setStrategy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\Strategy::class);
        $this->strategy = $var;

        return $this;
    }

}

