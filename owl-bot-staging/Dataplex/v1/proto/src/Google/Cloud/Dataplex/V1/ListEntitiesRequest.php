<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List metadata entities request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListEntitiesRequest</code>
 */
class ListEntitiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent zone:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Specify the entity view to make a partial list request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ListEntitiesRequest.EntityView view = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $view = 0;
    /**
     * Optional. Maximum number of entities to return. The service may return
     * fewer than this value. If unspecified, 100 entities will be returned by
     * default. The maximum value is 500; larger values will will be truncated to
     * 500.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token received from a previous `ListEntities` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListEntities` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The following filter parameters can be added to the URL to limit
     * the entities returned by the API:
     * - Entity ID: ?filter="id=entityID"
     * - Asset ID: ?filter="asset=assetID"
     * - Data path ?filter="data_path=gs://my-bucket"
     * - Is HIVE compatible: ?filter="hive_compatible=true"
     * - Is BigQuery compatible: ?filter="bigquery_compatible=true"
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent zone:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`.
     *     @type int $view
     *           Required. Specify the entity view to make a partial list request.
     *     @type int $page_size
     *           Optional. Maximum number of entities to return. The service may return
     *           fewer than this value. If unspecified, 100 entities will be returned by
     *           default. The maximum value is 500; larger values will will be truncated to
     *           500.
     *     @type string $page_token
     *           Optional. Page token received from a previous `ListEntities` call. Provide
     *           this to retrieve the subsequent page. When paginating, all other parameters
     *           provided to `ListEntities` must match the call that provided the
     *           page token.
     *     @type string $filter
     *           Optional. The following filter parameters can be added to the URL to limit
     *           the entities returned by the API:
     *           - Entity ID: ?filter="id=entityID"
     *           - Asset ID: ?filter="asset=assetID"
     *           - Data path ?filter="data_path=gs://my-bucket"
     *           - Is HIVE compatible: ?filter="hive_compatible=true"
     *           - Is BigQuery compatible: ?filter="bigquery_compatible=true"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent zone:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent zone:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`.
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
     * Required. Specify the entity view to make a partial list request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ListEntitiesRequest.EntityView view = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Required. Specify the entity view to make a partial list request.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.ListEntitiesRequest.EntityView view = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\ListEntitiesRequest\EntityView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of entities to return. The service may return
     * fewer than this value. If unspecified, 100 entities will be returned by
     * default. The maximum value is 500; larger values will will be truncated to
     * 500.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of entities to return. The service may return
     * fewer than this value. If unspecified, 100 entities will be returned by
     * default. The maximum value is 500; larger values will will be truncated to
     * 500.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Page token received from a previous `ListEntities` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListEntities` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token received from a previous `ListEntities` call. Provide
     * this to retrieve the subsequent page. When paginating, all other parameters
     * provided to `ListEntities` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The following filter parameters can be added to the URL to limit
     * the entities returned by the API:
     * - Entity ID: ?filter="id=entityID"
     * - Asset ID: ?filter="asset=assetID"
     * - Data path ?filter="data_path=gs://my-bucket"
     * - Is HIVE compatible: ?filter="hive_compatible=true"
     * - Is BigQuery compatible: ?filter="bigquery_compatible=true"
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The following filter parameters can be added to the URL to limit
     * the entities returned by the API:
     * - Entity ID: ?filter="id=entityID"
     * - Asset ID: ?filter="asset=assetID"
     * - Data path ?filter="data_path=gs://my-bucket"
     * - Is HIVE compatible: ?filter="hive_compatible=true"
     * - Is BigQuery compatible: ?filter="bigquery_compatible=true"
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

