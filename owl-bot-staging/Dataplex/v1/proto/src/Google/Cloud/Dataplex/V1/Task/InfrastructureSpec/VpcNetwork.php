<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task\InfrastructureSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud VPC Network used to run the infrastructure.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.InfrastructureSpec.VpcNetwork</code>
 */
class VpcNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of network tags to apply to the job.
     *
     * Generated from protobuf field <code>repeated string network_tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $network_tags;
    protected $network_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           Optional. The Cloud VPC network in which the job is run. By default,
     *           the Cloud VPC network named Default within the project is used.
     *     @type string $sub_network
     *           Optional. The Cloud VPC sub-network in which the job is run.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $network_tags
     *           Optional. List of network tags to apply to the job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Cloud VPC network in which the job is run. By default,
     * the Cloud VPC network named Default within the project is used.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->readOneof(1);
    }

    public function hasNetwork()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. The Cloud VPC network in which the job is run. By default,
     * the Cloud VPC network named Default within the project is used.
     *
     * Generated from protobuf field <code>string network = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. The Cloud VPC sub-network in which the job is run.
     *
     * Generated from protobuf field <code>string sub_network = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubNetwork()
    {
        return $this->readOneof(2);
    }

    public function hasSubNetwork()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. The Cloud VPC sub-network in which the job is run.
     *
     * Generated from protobuf field <code>string sub_network = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. List of network tags to apply to the job.
     *
     * Generated from protobuf field <code>repeated string network_tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkTags()
    {
        return $this->network_tags;
    }

    /**
     * Optional. List of network tags to apply to the job.
     *
     * Generated from protobuf field <code>repeated string network_tags = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_tags = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkName()
    {
        return $this->whichOneof("network_name");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VpcNetwork::class, \Google\Cloud\Dataplex\V1\Task_InfrastructureSpec_VpcNetwork::class);

