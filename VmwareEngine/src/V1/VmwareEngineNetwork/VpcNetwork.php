<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a VMware Engine VPC network that is managed by a
 * VMware Engine network resource.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork</code>
 */
class VpcNetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Type of VPC network (INTRANET, INTERNET, or
     * GOOGLE_CLOUD)
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork.Type type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $type = 0;
    /**
     * Output only. The relative resource name of the service VPC network this
     * VMware Engine network is attached to. For example:
     * `projects/123123/global/networks/my-network`
     *
     * Generated from protobuf field <code>string network = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $network = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Output only. Type of VPC network (INTRANET, INTERNET, or
     *           GOOGLE_CLOUD)
     *     @type string $network
     *           Output only. The relative resource name of the service VPC network this
     *           VMware Engine network is attached to. For example:
     *           `projects/123123/global/networks/my-network`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Type of VPC network (INTRANET, INTERNET, or
     * GOOGLE_CLOUD)
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork.Type type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type of VPC network (INTRANET, INTERNET, or
     * GOOGLE_CLOUD)
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork.VpcNetwork.Type type = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork\VpcNetwork\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The relative resource name of the service VPC network this
     * VMware Engine network is attached to. For example:
     * `projects/123123/global/networks/my-network`
     *
     * Generated from protobuf field <code>string network = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Output only. The relative resource name of the service VPC network this
     * VMware Engine network is attached to. For example:
     * `projects/123123/global/networks/my-network`
     *
     * Generated from protobuf field <code>string network = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

}


