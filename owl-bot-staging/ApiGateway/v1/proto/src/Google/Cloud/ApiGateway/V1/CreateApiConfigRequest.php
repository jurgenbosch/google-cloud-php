<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigateway/v1/apigateway.proto

namespace Google\Cloud\ApiGateway\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ApiGatewayService.CreateApiConfig
 *
 * Generated from protobuf message <code>google.cloud.apigateway.v1.CreateApiConfigRequest</code>
 */
class CreateApiConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource of the API Config, of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Identifier to assign to the API Config. Must be unique within scope of
     * the parent resource.
     *
     * Generated from protobuf field <code>string api_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_config_id = '';
    /**
     * Required. API resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.ApiConfig api_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource of the API Config, of the form:
     *           `projects/&#42;&#47;locations/global/apis/&#42;`
     *     @type string $api_config_id
     *           Required. Identifier to assign to the API Config. Must be unique within scope of
     *           the parent resource.
     *     @type \Google\Cloud\ApiGateway\V1\ApiConfig $api_config
     *           Required. API resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigateway\V1\Apigateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource of the API Config, of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource of the API Config, of the form:
     * `projects/&#42;&#47;locations/global/apis/&#42;`
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
     * Required. Identifier to assign to the API Config. Must be unique within scope of
     * the parent resource.
     *
     * Generated from protobuf field <code>string api_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getApiConfigId()
    {
        return $this->api_config_id;
    }

    /**
     * Required. Identifier to assign to the API Config. Must be unique within scope of
     * the parent resource.
     *
     * Generated from protobuf field <code>string api_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setApiConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_config_id = $var;

        return $this;
    }

    /**
     * Required. API resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.ApiConfig api_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiGateway\V1\ApiConfig|null
     */
    public function getApiConfig()
    {
        return $this->api_config;
    }

    public function hasApiConfig()
    {
        return isset($this->api_config);
    }

    public function clearApiConfig()
    {
        unset($this->api_config);
    }

    /**
     * Required. API resource.
     *
     * Generated from protobuf field <code>.google.cloud.apigateway.v1.ApiConfig api_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiGateway\V1\ApiConfig $var
     * @return $this
     */
    public function setApiConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiGateway\V1\ApiConfig::class);
        $this->api_config = $var;

        return $this;
    }

}

