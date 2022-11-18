<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information specifying a GKE Cluster.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.GkeCluster</code>
 */
class GkeCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $cluster = '';
    /**
     * Optional. If true, `cluster` is accessed using the private IP address of the control
     * plane endpoint. Otherwise, the default IP address of the control plane
     * endpoint is used. The default IP address is the private IP address for
     * clusters with private control-plane endpoints and the public IP address
     * otherwise.
     * Only specify this option when `cluster` is a [private GKE
     * cluster](https://cloud.google.com/kubernetes-engine/docs/concepts/private-cluster-concept).
     *
     * Generated from protobuf field <code>bool internal_ip = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $internal_ip = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           Information specifying a GKE Cluster. Format is
     *           `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *     @type bool $internal_ip
     *           Optional. If true, `cluster` is accessed using the private IP address of the control
     *           plane endpoint. Otherwise, the default IP address of the control plane
     *           endpoint is used. The default IP address is the private IP address for
     *           clusters with private control-plane endpoints and the public IP address
     *           otherwise.
     *           Only specify this option when `cluster` is a [private GKE
     *           cluster](https://cloud.google.com/kubernetes-engine/docs/concepts/private-cluster-concept).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Information specifying a GKE Cluster. Format is
     * `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}.
     *
     * Generated from protobuf field <code>string cluster = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. If true, `cluster` is accessed using the private IP address of the control
     * plane endpoint. Otherwise, the default IP address of the control plane
     * endpoint is used. The default IP address is the private IP address for
     * clusters with private control-plane endpoints and the public IP address
     * otherwise.
     * Only specify this option when `cluster` is a [private GKE
     * cluster](https://cloud.google.com/kubernetes-engine/docs/concepts/private-cluster-concept).
     *
     * Generated from protobuf field <code>bool internal_ip = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getInternalIp()
    {
        return $this->internal_ip;
    }

    /**
     * Optional. If true, `cluster` is accessed using the private IP address of the control
     * plane endpoint. Otherwise, the default IP address of the control plane
     * endpoint is used. The default IP address is the private IP address for
     * clusters with private control-plane endpoints and the public IP address
     * otherwise.
     * Only specify this option when `cluster` is a [private GKE
     * cluster](https://cloud.google.com/kubernetes-engine/docs/concepts/private-cluster-concept).
     *
     * Generated from protobuf field <code>bool internal_ip = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalIp($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_ip = $var;

        return $this;
    }

}

