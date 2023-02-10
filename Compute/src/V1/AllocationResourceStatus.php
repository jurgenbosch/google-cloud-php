<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AllocationResourceStatus</code>
 */
class AllocationResourceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatusSpecificSKUAllocation specific_sku_allocation = 196231151;</code>
     */
    private $specific_sku_allocation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AllocationResourceStatusSpecificSKUAllocation $specific_sku_allocation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatusSpecificSKUAllocation specific_sku_allocation = 196231151;</code>
     * @return \Google\Cloud\Compute\V1\AllocationResourceStatusSpecificSKUAllocation|null
     */
    public function getSpecificSkuAllocation()
    {
        return $this->specific_sku_allocation;
    }

    public function hasSpecificSkuAllocation()
    {
        return isset($this->specific_sku_allocation);
    }

    public function clearSpecificSkuAllocation()
    {
        unset($this->specific_sku_allocation);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.AllocationResourceStatusSpecificSKUAllocation specific_sku_allocation = 196231151;</code>
     * @param \Google\Cloud\Compute\V1\AllocationResourceStatusSpecificSKUAllocation $var
     * @return $this
     */
    public function setSpecificSkuAllocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\AllocationResourceStatusSpecificSKUAllocation::class);
        $this->specific_sku_allocation = $var;

        return $this;
    }

}

