<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListChannelPartnerLinksRequest</code>
 */
class ListChannelPartnerLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller account for listing channel
     * partner links. Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Optional. Requested page size. Server might return fewer results than
     * requested. If unspecified, server will pick a default size (25). The
     * maximum value is 200; the server will coerce values above 200.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token for a page of results other than the first page.
     * Obtained using
     * [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the reseller account for listing channel
     *           partner links. Parent uses the format: accounts/{account_id}
     *     @type int $page_size
     *           Optional. Requested page size. Server might return fewer results than
     *           requested. If unspecified, server will pick a default size (25). The
     *           maximum value is 200; the server will coerce values above 200.
     *     @type string $page_token
     *           Optional. A token for a page of results other than the first page.
     *           Obtained using
     *           [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token]
     *           of the previous
     *           [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks]
     *           call.
     *     @type int $view
     *           Optional. The level of granularity the ChannelPartnerLink will display.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the reseller account for listing channel
     * partner links. Parent uses the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller account for listing channel
     * partner links. Parent uses the format: accounts/{account_id}
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
     * Optional. Requested page size. Server might return fewer results than
     * requested. If unspecified, server will pick a default size (25). The
     * maximum value is 200; the server will coerce values above 200.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than
     * requested. If unspecified, server will pick a default size (25). The
     * maximum value is 200; the server will coerce values above 200.
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
     * Optional. A token for a page of results other than the first page.
     * Obtained using
     * [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token for a page of results other than the first page.
     * Obtained using
     * [ListChannelPartnerLinksResponse.next_page_token][google.cloud.channel.v1.ListChannelPartnerLinksResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListChannelPartnerLinks][google.cloud.channel.v1.CloudChannelService.ListChannelPartnerLinks]
     * call.
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
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. The level of granularity the ChannelPartnerLink will display.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ChannelPartnerLinkView view = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\ChannelPartnerLinkView::class);
        $this->view = $var;

        return $this;
    }

}

