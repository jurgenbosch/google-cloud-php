<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/specialist_pool_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SpecialistPoolService.GetSpecialistPool][google.cloud.aiplatform.v1.SpecialistPoolService.GetSpecialistPool].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetSpecialistPoolRequest</code>
 */
class GetSpecialistPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the SpecialistPool resource.
     * The form is
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the SpecialistPool resource.
     *           The form is
     *           `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\SpecialistPoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the SpecialistPool resource.
     * The form is
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the SpecialistPool resource.
     * The form is
     * `projects/{project}/locations/{location}/specialistPools/{specialist_pool}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

