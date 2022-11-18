<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetRestore.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.GetRestoreRequest</code>
 */
class GetRestoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the restore resource.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;
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
     *           Required. Name of the restore resource.
     *           Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the restore resource.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the restore resource.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;&#47;restores/&#42;
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

