<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing  mute configs at a given scope e.g. organization,
 * folder or project.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListMuteConfigsRequest</code>
 */
class ListMuteConfigsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns the collection of mute configs. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of configs to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListMuteConfigs` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMuteConfigs` must
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
     *           Required. The parent, which owns the collection of mute configs. Its format
     *           is "organizations/[organization_id]", "folders/[folder_id]",
     *           "projects/[project_id]".
     *     @type int $page_size
     *           The maximum number of configs to return. The service may return fewer than
     *           this value.
     *           If unspecified, at most 10 configs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListMuteConfigs` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListMuteConfigs` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns the collection of mute configs. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns the collection of mute configs. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
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
     * The maximum number of configs to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
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
     * The maximum number of configs to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
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
     * A page token, received from a previous `ListMuteConfigs` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMuteConfigs` must
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
     * A page token, received from a previous `ListMuteConfigs` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListMuteConfigs` must
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

