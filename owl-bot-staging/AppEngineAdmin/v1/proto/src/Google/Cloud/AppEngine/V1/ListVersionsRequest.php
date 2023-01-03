<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `Versions.ListVersions`.
 *
 * Generated from protobuf message <code>google.appengine.v1.ListVersionsRequest</code>
 */
class ListVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the parent Service resource. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * Controls the set of fields returned in the `List` response.
     *
     * Generated from protobuf field <code>.google.appengine.v1.VersionView view = 2;</code>
     */
    protected $view = 0;
    /**
     * Maximum results to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Name of the parent Service resource. Example:
     *           `apps/myapp/services/default`.
     *     @type int $view
     *           Controls the set of fields returned in the `List` response.
     *     @type int $page_size
     *           Maximum results to return per page.
     *     @type string $page_token
     *           Continuation token for fetching the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the parent Service resource. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Name of the parent Service resource. Example:
     * `apps/myapp/services/default`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * Controls the set of fields returned in the `List` response.
     *
     * Generated from protobuf field <code>.google.appengine.v1.VersionView view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Controls the set of fields returned in the `List` response.
     *
     * Generated from protobuf field <code>.google.appengine.v1.VersionView view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\VersionView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Maximum results to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum results to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
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

