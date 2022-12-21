<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [VmwareEngine.UpdateCluster][google.cloud.vmwareengine.v1.VmwareEngine.UpdateCluster]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.UpdateClusterRequest</code>
 */
class UpdateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `Cluster` resource by the update. The fields specified in the `updateMask`
     * are relative to the resource, not the full request. A field will be
     * overwritten if it is in the mask. If the user does not provide a mask then
     * all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. The description of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster = null;
    /**
     * Optional. The request ID must be a valid UUID with the exception that
     * zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';
    /**
     * Optional. True if you want the request to be validated and not executed; false
     * otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           `Cluster` resource by the update. The fields specified in the `updateMask`
     *           are relative to the resource, not the full request. A field will be
     *           overwritten if it is in the mask. If the user does not provide a mask then
     *           all fields will be overwritten.
     *     @type \Google\Cloud\VmwareEngine\V1\Cluster $cluster
     *           Required. The description of the cluster.
     *     @type string $request_id
     *           Optional. The request ID must be a valid UUID with the exception that
     *           zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. True if you want the request to be validated and not executed; false
     *           otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `Cluster` resource by the update. The fields specified in the `updateMask`
     * are relative to the resource, not the full request. A field will be
     * overwritten if it is in the mask. If the user does not provide a mask then
     * all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * `Cluster` resource by the update. The fields specified in the `updateMask`
     * are relative to the resource, not the full request. A field will be
     * overwritten if it is in the mask. If the user does not provide a mask then
     * all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The description of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Required. The description of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. The request ID must be a valid UUID with the exception that
     * zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. The request ID must be a valid UUID with the exception that
     * zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. True if you want the request to be validated and not executed; false
     * otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. True if you want the request to be validated and not executed; false
     * otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

