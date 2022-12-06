<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/control_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for DeleteControl method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.DeleteControlRequest</code>
 */
class DeleteControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Control to delete. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
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
     *           Required. The resource name of the Control to delete. Format:
     *           `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\ControlService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Control to delete. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Control to delete. Format:
     * `projects/{project_number}/locations/{location_id}/catalogs/{catalog_id}/controls/{control_id}`
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

