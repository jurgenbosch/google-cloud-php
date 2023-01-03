<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appgateways/v1/app_gateways_service.proto

namespace Google\Cloud\BeyondCorp\AppGateways\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BeyondCorp.ListAppGateways.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appgateways.v1.ListAppGatewaysRequest</code>
 */
class ListAppGatewaysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the AppGateway location using the form:
     * `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ListAppGatewaysResponse.next_page_token] to
     * determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous
     * ListAppGatewaysRequest, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. A filter specifying constraints of a list operation.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Specifies the ordering of results. See
     * [Sorting
     * order](https://cloud.google.com/apis/design/design_patterns#sorting_order)
     * for more information.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the AppGateway location using the form:
     *           `projects/{project_id}/locations/{location_id}`
     *     @type int $page_size
     *           Optional. The maximum number of items to return.
     *           If not specified, a default value of 50 will be used by the service.
     *           Regardless of the page_size value, the response may include a partial list
     *           and a caller should only rely on response's
     *           [next_page_token][BeyondCorp.ListAppGatewaysResponse.next_page_token] to
     *           determine if there are more instances left to be queried.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous
     *           ListAppGatewaysRequest, if any.
     *     @type string $filter
     *           Optional. A filter specifying constraints of a list operation.
     *     @type string $order_by
     *           Optional. Specifies the ordering of results. See
     *           [Sorting
     *           order](https://cloud.google.com/apis/design/design_patterns#sorting_order)
     *           for more information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appgateways\V1\AppGatewaysService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the AppGateway location using the form:
     * `projects/{project_id}/locations/{location_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the AppGateway location using the form:
     * `projects/{project_id}/locations/{location_id}`
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
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ListAppGatewaysResponse.next_page_token] to
     * determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 50 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [next_page_token][BeyondCorp.ListAppGatewaysResponse.next_page_token] to
     * determine if there are more instances left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The next_page_token value returned from a previous
     * ListAppGatewaysRequest, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous
     * ListAppGatewaysRequest, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. A filter specifying constraints of a list operation.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter specifying constraints of a list operation.
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Specifies the ordering of results. See
     * [Sorting
     * order](https://cloud.google.com/apis/design/design_patterns#sorting_order)
     * for more information.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Specifies the ordering of results. See
     * [Sorting
     * order](https://cloud.google.com/apis/design/design_patterns#sorting_order)
     * for more information.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

