<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get DataScanJob request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.GetDataScanJobRequest</code>
 */
class GetDataScanJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the DataScanJob:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}/dataScanJobs/{data_scan_job_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. Select the DataScanJob view to return. Defaults to `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.GetDataScanJobRequest.DataScanJobView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the DataScanJob:
     *           `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}/dataScanJobs/{data_scan_job_id}`
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type int $view
     *           Optional. Select the DataScanJob view to return. Defaults to `BASIC`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the DataScanJob:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}/dataScanJobs/{data_scan_job_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the DataScanJob:
     * `projects/{project}/locations/{location_id}/dataScans/{data_scan_id}/dataScanJobs/{data_scan_job_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
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
     * Optional. Select the DataScanJob view to return. Defaults to `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.GetDataScanJobRequest.DataScanJobView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. Select the DataScanJob view to return. Defaults to `BASIC`.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.GetDataScanJobRequest.DataScanJobView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\GetDataScanJobRequest\DataScanJobView::class);
        $this->view = $var;

        return $this;
    }

}

