<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AwsServerConfig is the configuration of GKE cluster on AWS.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsServerConfig</code>
 */
class AwsServerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsK8sVersionInfo valid_versions = 2;</code>
     */
    private $valid_versions;
    /**
     * The list of supported AWS regions.
     *
     * Generated from protobuf field <code>repeated string supported_aws_regions = 3;</code>
     */
    private $supported_aws_regions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the config.
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AwsK8sVersionInfo>|\Google\Protobuf\Internal\RepeatedField $valid_versions
     *           List of valid Kubernetes versions.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $supported_aws_regions
     *           The list of supported AWS regions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the config.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsK8sVersionInfo valid_versions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValidVersions()
    {
        return $this->valid_versions;
    }

    /**
     * List of valid Kubernetes versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AwsK8sVersionInfo valid_versions = 2;</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AwsK8sVersionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValidVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AwsK8sVersionInfo::class);
        $this->valid_versions = $arr;

        return $this;
    }

    /**
     * The list of supported AWS regions.
     *
     * Generated from protobuf field <code>repeated string supported_aws_regions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedAwsRegions()
    {
        return $this->supported_aws_regions;
    }

    /**
     * The list of supported AWS regions.
     *
     * Generated from protobuf field <code>repeated string supported_aws_regions = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedAwsRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->supported_aws_regions = $arr;

        return $this;
    }

}

