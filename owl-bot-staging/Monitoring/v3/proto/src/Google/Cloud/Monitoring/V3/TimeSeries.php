<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of data points that describes the time-varying values
 * of a metric. A time series is identified by a combination of a
 * fully-specified monitored resource and a fully-specified metric.
 * This type is used for both listing and creating time series.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TimeSeries</code>
 */
class TimeSeries extends \Google\Protobuf\Internal\Message
{
    /**
     * The associated metric. A fully-specified metric used to identify the time
     * series.
     *
     * Generated from protobuf field <code>.google.api.Metric metric = 1;</code>
     */
    protected $metric = null;
    /**
     * The associated monitored resource.  Custom metrics can use only certain
     * monitored resource types in their time series data. For more information,
     * see [Monitored resources for custom
     * metrics](https://cloud.google.com/monitoring/custom-metrics/creating-metrics#custom-metric-resources).
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     */
    protected $resource = null;
    /**
     * Output only. The associated monitored resource metadata. When reading a
     * time series, this field will include metadata labels that are explicitly
     * named in the reduction. When creating a time series, this field is ignored.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResourceMetadata metadata = 7;</code>
     */
    protected $metadata = null;
    /**
     * The metric kind of the time series. When listing time series, this metric
     * kind might be different from the metric kind of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the metric kind of the associated metric. If the associated
     * metric's descriptor must be auto-created, then this field specifies the
     * metric kind of the new descriptor and must be either `GAUGE` (the default)
     * or `CUMULATIVE`.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     */
    protected $metric_kind = 0;
    /**
     * The value type of the time series. When listing time series, this value
     * type might be different from the value type of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the type of the data in the `points` field.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 4;</code>
     */
    protected $value_type = 0;
    /**
     * The data points of this time series. When listing time series, points are
     * returned in reverse time order.
     * When creating a time series, this field must contain exactly one point and
     * the point's type must be the same as the value type of the associated
     * metric. If the associated metric's descriptor must be auto-created, then
     * the value type of the descriptor is determined by the point's type, which
     * must be `BOOL`, `INT64`, `DOUBLE`, or `DISTRIBUTION`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Point points = 5;</code>
     */
    private $points;
    /**
     * The units in which the metric value is reported. It is only applicable
     * if the `value_type` is `INT64`, `DOUBLE`, or `DISTRIBUTION`. The `unit`
     * defines the representation of the stored metric values.
     *
     * Generated from protobuf field <code>string unit = 8;</code>
     */
    protected $unit = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Metric $metric
     *           The associated metric. A fully-specified metric used to identify the time
     *           series.
     *     @type \Google\Api\MonitoredResource $resource
     *           The associated monitored resource.  Custom metrics can use only certain
     *           monitored resource types in their time series data. For more information,
     *           see [Monitored resources for custom
     *           metrics](https://cloud.google.com/monitoring/custom-metrics/creating-metrics#custom-metric-resources).
     *     @type \Google\Api\MonitoredResourceMetadata $metadata
     *           Output only. The associated monitored resource metadata. When reading a
     *           time series, this field will include metadata labels that are explicitly
     *           named in the reduction. When creating a time series, this field is ignored.
     *     @type int $metric_kind
     *           The metric kind of the time series. When listing time series, this metric
     *           kind might be different from the metric kind of the associated metric if
     *           this time series is an alignment or reduction of other time series.
     *           When creating a time series, this field is optional. If present, it must be
     *           the same as the metric kind of the associated metric. If the associated
     *           metric's descriptor must be auto-created, then this field specifies the
     *           metric kind of the new descriptor and must be either `GAUGE` (the default)
     *           or `CUMULATIVE`.
     *     @type int $value_type
     *           The value type of the time series. When listing time series, this value
     *           type might be different from the value type of the associated metric if
     *           this time series is an alignment or reduction of other time series.
     *           When creating a time series, this field is optional. If present, it must be
     *           the same as the type of the data in the `points` field.
     *     @type array<\Google\Cloud\Monitoring\V3\Point>|\Google\Protobuf\Internal\RepeatedField $points
     *           The data points of this time series. When listing time series, points are
     *           returned in reverse time order.
     *           When creating a time series, this field must contain exactly one point and
     *           the point's type must be the same as the value type of the associated
     *           metric. If the associated metric's descriptor must be auto-created, then
     *           the value type of the descriptor is determined by the point's type, which
     *           must be `BOOL`, `INT64`, `DOUBLE`, or `DISTRIBUTION`.
     *     @type string $unit
     *           The units in which the metric value is reported. It is only applicable
     *           if the `value_type` is `INT64`, `DOUBLE`, or `DISTRIBUTION`. The `unit`
     *           defines the representation of the stored metric values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * The associated metric. A fully-specified metric used to identify the time
     * series.
     *
     * Generated from protobuf field <code>.google.api.Metric metric = 1;</code>
     * @return \Google\Api\Metric|null
     */
    public function getMetric()
    {
        return $this->metric;
    }

    public function hasMetric()
    {
        return isset($this->metric);
    }

    public function clearMetric()
    {
        unset($this->metric);
    }

    /**
     * The associated metric. A fully-specified metric used to identify the time
     * series.
     *
     * Generated from protobuf field <code>.google.api.Metric metric = 1;</code>
     * @param \Google\Api\Metric $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Metric::class);
        $this->metric = $var;

        return $this;
    }

    /**
     * The associated monitored resource.  Custom metrics can use only certain
     * monitored resource types in their time series data. For more information,
     * see [Monitored resources for custom
     * metrics](https://cloud.google.com/monitoring/custom-metrics/creating-metrics#custom-metric-resources).
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     * @return \Google\Api\MonitoredResource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * The associated monitored resource.  Custom metrics can use only certain
     * monitored resource types in their time series data. For more information,
     * see [Monitored resources for custom
     * metrics](https://cloud.google.com/monitoring/custom-metrics/creating-metrics#custom-metric-resources).
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 2;</code>
     * @param \Google\Api\MonitoredResource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * Output only. The associated monitored resource metadata. When reading a
     * time series, this field will include metadata labels that are explicitly
     * named in the reduction. When creating a time series, this field is ignored.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResourceMetadata metadata = 7;</code>
     * @return \Google\Api\MonitoredResourceMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Output only. The associated monitored resource metadata. When reading a
     * time series, this field will include metadata labels that are explicitly
     * named in the reduction. When creating a time series, this field is ignored.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResourceMetadata metadata = 7;</code>
     * @param \Google\Api\MonitoredResourceMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResourceMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The metric kind of the time series. When listing time series, this metric
     * kind might be different from the metric kind of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the metric kind of the associated metric. If the associated
     * metric's descriptor must be auto-created, then this field specifies the
     * metric kind of the new descriptor and must be either `GAUGE` (the default)
     * or `CUMULATIVE`.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     * @return int
     */
    public function getMetricKind()
    {
        return $this->metric_kind;
    }

    /**
     * The metric kind of the time series. When listing time series, this metric
     * kind might be different from the metric kind of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the metric kind of the associated metric. If the associated
     * metric's descriptor must be auto-created, then this field specifies the
     * metric kind of the new descriptor and must be either `GAUGE` (the default)
     * or `CUMULATIVE`.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMetricKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\MetricDescriptor\MetricKind::class);
        $this->metric_kind = $var;

        return $this;
    }

    /**
     * The value type of the time series. When listing time series, this value
     * type might be different from the value type of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the type of the data in the `points` field.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 4;</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * The value type of the time series. When listing time series, this value
     * type might be different from the value type of the associated metric if
     * this time series is an alignment or reduction of other time series.
     * When creating a time series, this field is optional. If present, it must be
     * the same as the type of the data in the `points` field.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\MetricDescriptor\ValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * The data points of this time series. When listing time series, points are
     * returned in reverse time order.
     * When creating a time series, this field must contain exactly one point and
     * the point's type must be the same as the value type of the associated
     * metric. If the associated metric's descriptor must be auto-created, then
     * the value type of the descriptor is determined by the point's type, which
     * must be `BOOL`, `INT64`, `DOUBLE`, or `DISTRIBUTION`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Point points = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * The data points of this time series. When listing time series, points are
     * returned in reverse time order.
     * When creating a time series, this field must contain exactly one point and
     * the point's type must be the same as the value type of the associated
     * metric. If the associated metric's descriptor must be auto-created, then
     * the value type of the descriptor is determined by the point's type, which
     * must be `BOOL`, `INT64`, `DOUBLE`, or `DISTRIBUTION`.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.Point points = 5;</code>
     * @param array<\Google\Cloud\Monitoring\V3\Point>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\Point::class);
        $this->points = $arr;

        return $this;
    }

    /**
     * The units in which the metric value is reported. It is only applicable
     * if the `value_type` is `INT64`, `DOUBLE`, or `DISTRIBUTION`. The `unit`
     * defines the representation of the stored metric values.
     *
     * Generated from protobuf field <code>string unit = 8;</code>
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * The units in which the metric value is reported. It is only applicable
     * if the `value_type` is `INT64`, `DOUBLE`, or `DISTRIBUTION`. The `unit`
     * defines the representation of the stored metric values.
     *
     * Generated from protobuf field <code>string unit = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->unit = $var;

        return $this;
    }

}

