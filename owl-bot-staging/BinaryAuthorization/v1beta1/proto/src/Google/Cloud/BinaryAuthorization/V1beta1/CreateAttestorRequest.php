<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/service.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [BinauthzManagementService.CreateAttestor][].
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.CreateAttestorRequest</code>
 */
class CreateAttestorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent of this [attestor][google.cloud.binaryauthorization.v1beta1.Attestor].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] ID.
     *
     * Generated from protobuf field <code>string attestor_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attestor_id = '';
    /**
     * Required. The initial [attestor][google.cloud.binaryauthorization.v1beta1.Attestor] value. The service will
     * overwrite the [attestor name][google.cloud.binaryauthorization.v1beta1.Attestor.name] field with the resource name,
     * in the format `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Attestor attestor = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attestor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent of this [attestor][google.cloud.binaryauthorization.v1beta1.Attestor].
     *     @type string $attestor_id
     *           Required. The [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] ID.
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\Attestor $attestor
     *           Required. The initial [attestor][google.cloud.binaryauthorization.v1beta1.Attestor] value. The service will
     *           overwrite the [attestor name][google.cloud.binaryauthorization.v1beta1.Attestor.name] field with the resource name,
     *           in the format `projects/&#42;&#47;attestors/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent of this [attestor][google.cloud.binaryauthorization.v1beta1.Attestor].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent of this [attestor][google.cloud.binaryauthorization.v1beta1.Attestor].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] ID.
     *
     * Generated from protobuf field <code>string attestor_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAttestorId()
    {
        return $this->attestor_id;
    }

    /**
     * Required. The [attestors][google.cloud.binaryauthorization.v1beta1.Attestor] ID.
     *
     * Generated from protobuf field <code>string attestor_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAttestorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->attestor_id = $var;

        return $this;
    }

    /**
     * Required. The initial [attestor][google.cloud.binaryauthorization.v1beta1.Attestor] value. The service will
     * overwrite the [attestor name][google.cloud.binaryauthorization.v1beta1.Attestor.name] field with the resource name,
     * in the format `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Attestor attestor = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BinaryAuthorization\V1beta1\Attestor|null
     */
    public function getAttestor()
    {
        return $this->attestor;
    }

    public function hasAttestor()
    {
        return isset($this->attestor);
    }

    public function clearAttestor()
    {
        unset($this->attestor);
    }

    /**
     * Required. The initial [attestor][google.cloud.binaryauthorization.v1beta1.Attestor] value. The service will
     * overwrite the [attestor name][google.cloud.binaryauthorization.v1beta1.Attestor.name] field with the resource name,
     * in the format `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.Attestor attestor = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\Attestor $var
     * @return $this
     */
    public function setAttestor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BinaryAuthorization\V1beta1\Attestor::class);
        $this->attestor = $var;

        return $this;
    }

}

