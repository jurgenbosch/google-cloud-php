<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List DataScanJobs request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListDataScanJobsRequest</code>
 */
class ListDataScanJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent environment:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Maximum number of DataScanJobs to return. The service may return
     * fewer than this value. If unspecified, at most 10 DataScanJobs will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Page token received from a previous `ListDataScanJobs` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListDataScanJobs` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent environment:
     *           `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type int $page_size
     *           Optional. Maximum number of DataScanJobs to return. The service may return
     *           fewer than this value. If unspecified, at most 10 DataScanJobs will be
     *           returned. The maximum value is 1000; values above 1000 will be coerced to
     *           1000.
     *     @type string $page_token
     *           Optional. Page token received from a previous `ListDataScanJobs` call.
     *           Provide this to retrieve the subsequent page. When paginating, all other
     *           parameters provided to `ListDataScanJobs` must match the call that provided
     *           the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent environment:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent environment:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
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
     * Optional. Maximum number of DataScanJobs to return. The service may return
     * fewer than this value. If unspecified, at most 10 DataScanJobs will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Maximum number of DataScanJobs to return. The service may return
     * fewer than this value. If unspecified, at most 10 DataScanJobs will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
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
     * Optional. Page token received from a previous `ListDataScanJobs` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListDataScanJobs` must match the call that provided
     * the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Page token received from a previous `ListDataScanJobs` call.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters provided to `ListDataScanJobs` must match the call that provided
     * the page token.
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

}

