<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update dataScan request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.UpdateDataScanRequest</code>
 */
class UpdateDataScanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. DataScan resource to be updated.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_scan = null;
    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\DataScan $data_scan
     *           Required. DataScan resource to be updated.
     *           Only fields specified in `update_mask` are updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. DataScan resource to be updated.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\DataScan|null
     */
    public function getDataScan()
    {
        return $this->data_scan;
    }

    public function hasDataScan()
    {
        return isset($this->data_scan);
    }

    public function clearDataScan()
    {
        unset($this->data_scan);
    }

    /**
     * Required. DataScan resource to be updated.
     * Only fields specified in `update_mask` are updated.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\DataScan $var
     * @return $this
     */
    public function setDataScan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScan::class);
        $this->data_scan = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

