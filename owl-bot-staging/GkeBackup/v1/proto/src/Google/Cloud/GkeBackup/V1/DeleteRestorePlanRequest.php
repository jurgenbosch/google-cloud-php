<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/gkebackup.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteRestorePlan.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.DeleteRestorePlanRequest</code>
 */
class DeleteRestorePlanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully qualified RestorePlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If provided, this value must match the current value of the
     * target RestorePlan's [etag][google.cloud.gkebackup.v1.RestorePlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    protected $etag = '';
    /**
     * If set to true, any Restores below this RestorePlan will also be deleted.
     * Otherwise, the request will only succeed if the RestorePlan has no
     * Restores.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    protected $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Fully qualified RestorePlan name.
     *           Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;
     *     @type string $etag
     *           If provided, this value must match the current value of the
     *           target RestorePlan's [etag][google.cloud.gkebackup.v1.RestorePlan.etag] field or the request is
     *           rejected.
     *     @type bool $force
     *           If set to true, any Restores below this RestorePlan will also be deleted.
     *           Otherwise, the request will only succeed if the RestorePlan has no
     *           Restores.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Gkebackup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully qualified RestorePlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Fully qualified RestorePlan name.
     * Format: projects/&#42;&#47;locations/&#42;&#47;restorePlans/&#42;
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

    /**
     * If provided, this value must match the current value of the
     * target RestorePlan's [etag][google.cloud.gkebackup.v1.RestorePlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * If provided, this value must match the current value of the
     * target RestorePlan's [etag][google.cloud.gkebackup.v1.RestorePlan.etag] field or the request is
     * rejected.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * If set to true, any Restores below this RestorePlan will also be deleted.
     * Otherwise, the request will only succeed if the RestorePlan has no
     * Restores.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If set to true, any Restores below this RestorePlan will also be deleted.
     * Otherwise, the request will only succeed if the RestorePlan has no
     * Restores.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

