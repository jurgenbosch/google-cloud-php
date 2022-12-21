<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1\PrivateCloud;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Management cluster configuration.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.PrivateCloud.ManagementCluster</code>
 */
class ManagementCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The user-provided identifier of the new `Cluster`.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC
     * 1034](https://datatracker.ietf.org/doc/html/rfc1034) (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_id = '';
    /**
     * Required. The map of cluster node types in this cluster, where the key is canonical
     * identifier of the node type (corresponds to the `NodeType`).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.vmwareengine.v1.NodeTypeConfig> node_type_configs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $node_type_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_id
     *           Required. The user-provided identifier of the new `Cluster`.
     *           The identifier must meet the following requirements:
     *           * Only contains 1-63 alphanumeric characters and hyphens
     *           * Begins with an alphabetical character
     *           * Ends with a non-hyphen character
     *           * Not formatted as a UUID
     *           * Complies with [RFC
     *           1034](https://datatracker.ietf.org/doc/html/rfc1034) (section 3.5)
     *     @type array|\Google\Protobuf\Internal\MapField $node_type_configs
     *           Required. The map of cluster node types in this cluster, where the key is canonical
     *           identifier of the node type (corresponds to the `NodeType`).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The user-provided identifier of the new `Cluster`.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC
     * 1034](https://datatracker.ietf.org/doc/html/rfc1034) (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. The user-provided identifier of the new `Cluster`.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC
     * 1034](https://datatracker.ietf.org/doc/html/rfc1034) (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The map of cluster node types in this cluster, where the key is canonical
     * identifier of the node type (corresponds to the `NodeType`).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.vmwareengine.v1.NodeTypeConfig> node_type_configs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNodeTypeConfigs()
    {
        return $this->node_type_configs;
    }

    /**
     * Required. The map of cluster node types in this cluster, where the key is canonical
     * identifier of the node type (corresponds to the `NodeType`).
     *
     * Generated from protobuf field <code>map<string, .google.cloud.vmwareengine.v1.NodeTypeConfig> node_type_configs = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNodeTypeConfigs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\NodeTypeConfig::class);
        $this->node_type_configs = $arr;

        return $this;
    }

}


