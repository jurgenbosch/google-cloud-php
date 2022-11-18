<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/completion_stats.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Success and error statistics of processing multiple entities
 * (for example, DataItems or structured data rows) in batch.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CompletionStats</code>
 */
class CompletionStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The number of entities that had been processed successfully.
     *
     * Generated from protobuf field <code>int64 successful_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $successful_count = 0;
    /**
     * Output only. The number of entities for which any error was encountered.
     *
     * Generated from protobuf field <code>int64 failed_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failed_count = 0;
    /**
     * Output only. In cases when enough errors are encountered a job, pipeline, or operation
     * may be failed as a whole. Below is the number of entities for which the
     * processing had not been finished (either in successful or failed state).
     * Set to -1 if the number is unknown (for example, the operation failed
     * before the total entity number could be collected).
     *
     * Generated from protobuf field <code>int64 incomplete_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $incomplete_count = 0;
    /**
     * Output only. The number of the successful forecast points that are generated by the
     * forecasting model. This is ONLY used by the forecasting batch prediction.
     *
     * Generated from protobuf field <code>int64 successful_forecast_point_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $successful_forecast_point_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $successful_count
     *           Output only. The number of entities that had been processed successfully.
     *     @type int|string $failed_count
     *           Output only. The number of entities for which any error was encountered.
     *     @type int|string $incomplete_count
     *           Output only. In cases when enough errors are encountered a job, pipeline, or operation
     *           may be failed as a whole. Below is the number of entities for which the
     *           processing had not been finished (either in successful or failed state).
     *           Set to -1 if the number is unknown (for example, the operation failed
     *           before the total entity number could be collected).
     *     @type int|string $successful_forecast_point_count
     *           Output only. The number of the successful forecast points that are generated by the
     *           forecasting model. This is ONLY used by the forecasting batch prediction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CompletionStats::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The number of entities that had been processed successfully.
     *
     * Generated from protobuf field <code>int64 successful_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSuccessfulCount()
    {
        return $this->successful_count;
    }

    /**
     * Output only. The number of entities that had been processed successfully.
     *
     * Generated from protobuf field <code>int64 successful_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessfulCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->successful_count = $var;

        return $this;
    }

    /**
     * Output only. The number of entities for which any error was encountered.
     *
     * Generated from protobuf field <code>int64 failed_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getFailedCount()
    {
        return $this->failed_count;
    }

    /**
     * Output only. The number of entities for which any error was encountered.
     *
     * Generated from protobuf field <code>int64 failed_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailedCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->failed_count = $var;

        return $this;
    }

    /**
     * Output only. In cases when enough errors are encountered a job, pipeline, or operation
     * may be failed as a whole. Below is the number of entities for which the
     * processing had not been finished (either in successful or failed state).
     * Set to -1 if the number is unknown (for example, the operation failed
     * before the total entity number could be collected).
     *
     * Generated from protobuf field <code>int64 incomplete_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getIncompleteCount()
    {
        return $this->incomplete_count;
    }

    /**
     * Output only. In cases when enough errors are encountered a job, pipeline, or operation
     * may be failed as a whole. Below is the number of entities for which the
     * processing had not been finished (either in successful or failed state).
     * Set to -1 if the number is unknown (for example, the operation failed
     * before the total entity number could be collected).
     *
     * Generated from protobuf field <code>int64 incomplete_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setIncompleteCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->incomplete_count = $var;

        return $this;
    }

    /**
     * Output only. The number of the successful forecast points that are generated by the
     * forecasting model. This is ONLY used by the forecasting batch prediction.
     *
     * Generated from protobuf field <code>int64 successful_forecast_point_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSuccessfulForecastPointCount()
    {
        return $this->successful_forecast_point_count;
    }

    /**
     * Output only. The number of the successful forecast points that are generated by the
     * forecasting model. This is ONLY used by the forecasting batch prediction.
     *
     * Generated from protobuf field <code>int64 successful_forecast_point_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSuccessfulForecastPointCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->successful_forecast_point_count = $var;

        return $this;
    }

}

