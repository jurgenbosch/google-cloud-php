<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information specifying where to deploy a Cloud Run Service.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CloudRunLocation</code>
 */
class CloudRunLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location for the Cloud Run Service. Format must be
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Required. The location for the Cloud Run Service. Format must be
     *           `projects/{project}/locations/{location}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location for the Cloud Run Service. Format must be
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. The location for the Cloud Run Service. Format must be
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

