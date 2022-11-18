<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/execution.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for deleting an Execution.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.DeleteExecutionRequest</code>
 */
class DeleteExecutionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Execution to delete.
     * Format:
     * projects/{project}/locations/{location}/jobs/{job}/executions/{execution},
     * where {project} can be project id or number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Indicates that the request should be validated without actually
     * deleting any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;
    /**
     * A system-generated fingerprint for this version of the resource.
     * This may be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Execution to delete.
     *           Format:
     *           projects/{project}/locations/{location}/jobs/{job}/executions/{execution},
     *           where {project} can be project id or number.
     *     @type bool $validate_only
     *           Indicates that the request should be validated without actually
     *           deleting any resources.
     *     @type string $etag
     *           A system-generated fingerprint for this version of the resource.
     *           This may be used to detect modification conflict during updates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Execution::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Execution to delete.
     * Format:
     * projects/{project}/locations/{location}/jobs/{job}/executions/{execution},
     * where {project} can be project id or number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Execution to delete.
     * Format:
     * projects/{project}/locations/{location}/jobs/{job}/executions/{execution},
     * where {project} can be project id or number.
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
     * Indicates that the request should be validated without actually
     * deleting any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Indicates that the request should be validated without actually
     * deleting any resources.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * A system-generated fingerprint for this version of the resource.
     * This may be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * A system-generated fingerprint for this version of the resource.
     * This may be used to detect modification conflict during updates.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

