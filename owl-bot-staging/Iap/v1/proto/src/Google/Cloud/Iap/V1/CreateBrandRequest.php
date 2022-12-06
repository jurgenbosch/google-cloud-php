<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to CreateBrand.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.CreateBrandRequest</code>
 */
class CreateBrandRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. GCP Project number/id under which the brand is to be created.
     * In the following format: projects/{project_number/id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The brand to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.Brand brand = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $brand = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. GCP Project number/id under which the brand is to be created.
     *           In the following format: projects/{project_number/id}.
     *     @type \Google\Cloud\Iap\V1\Brand $brand
     *           Required. The brand to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. GCP Project number/id under which the brand is to be created.
     * In the following format: projects/{project_number/id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. GCP Project number/id under which the brand is to be created.
     * In the following format: projects/{project_number/id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The brand to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.Brand brand = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iap\V1\Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    public function hasBrand()
    {
        return isset($this->brand);
    }

    public function clearBrand()
    {
        unset($this->brand);
    }

    /**
     * Required. The brand to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.Brand brand = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iap\V1\Brand $var
     * @return $this
     */
    public function setBrand($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\Brand::class);
        $this->brand = $var;

        return $this;
    }

}

