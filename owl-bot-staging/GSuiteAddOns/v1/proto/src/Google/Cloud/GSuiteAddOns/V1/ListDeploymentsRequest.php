<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gsuiteaddons/v1/gsuiteaddons.proto

namespace Google\Cloud\GSuiteAddOns\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to list deployments for a project.
 *
 * Generated from protobuf message <code>google.cloud.gsuiteaddons.v1.ListDeploymentsRequest</code>
 */
class ListDeploymentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the project in which to create the deployment.
     * Example: `projects/my_project`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of deployments to return. The service may return fewer
     * than this value.
     * If unspecified, at most 1000 deployments will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListDeployments` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the project in which to create the deployment.
     *           Example: `projects/my_project`.
     *     @type int $page_size
     *           The maximum number of deployments to return. The service may return fewer
     *           than this value.
     *           If unspecified, at most 1000 deployments will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListDeployments` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListDeployments` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gsuiteaddons\V1\Gsuiteaddons::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the project in which to create the deployment.
     * Example: `projects/my_project`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the project in which to create the deployment.
     * Example: `projects/my_project`.
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
     * The maximum number of deployments to return. The service may return fewer
     * than this value.
     * If unspecified, at most 1000 deployments will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of deployments to return. The service may return fewer
     * than this value.
     * If unspecified, at most 1000 deployments will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListDeployments` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListDeployments` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

