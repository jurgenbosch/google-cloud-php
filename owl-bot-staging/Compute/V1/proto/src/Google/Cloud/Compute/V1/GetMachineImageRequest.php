<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for MachineImages.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetMachineImageRequest</code>
 */
class GetMachineImageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the machine image.
     *
     * Generated from protobuf field <code>string machine_image = 69189475 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $machine_image = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_image
     *           The name of the machine image.
     *     @type string $project
     *           Project ID for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the machine image.
     *
     * Generated from protobuf field <code>string machine_image = 69189475 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMachineImage()
    {
        return $this->machine_image;
    }

    /**
     * The name of the machine image.
     *
     * Generated from protobuf field <code>string machine_image = 69189475 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMachineImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_image = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

