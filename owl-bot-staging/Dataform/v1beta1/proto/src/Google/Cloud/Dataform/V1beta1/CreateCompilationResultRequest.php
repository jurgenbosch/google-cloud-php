<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `CreateCompilationResult` request message.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.CreateCompilationResultRequest</code>
 */
class CreateCompilationResultRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The repository in which to create the compilation result. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The compilation result to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CompilationResult compilation_result = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $compilation_result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The repository in which to create the compilation result. Must be in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *     @type \Google\Cloud\Dataform\V1beta1\CompilationResult $compilation_result
     *           Required. The compilation result to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The repository in which to create the compilation result. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The repository in which to create the compilation result. Must be in the
     * format `projects/&#42;&#47;locations/&#42;&#47;repositories/&#42;`.
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
     * Required. The compilation result to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CompilationResult compilation_result = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataform\V1beta1\CompilationResult|null
     */
    public function getCompilationResult()
    {
        return $this->compilation_result;
    }

    public function hasCompilationResult()
    {
        return isset($this->compilation_result);
    }

    public function clearCompilationResult()
    {
        unset($this->compilation_result);
    }

    /**
     * Required. The compilation result to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.CompilationResult compilation_result = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataform\V1beta1\CompilationResult $var
     * @return $this
     */
    public function setCompilationResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\CompilationResult::class);
        $this->compilation_result = $var;

        return $this;
    }

}

