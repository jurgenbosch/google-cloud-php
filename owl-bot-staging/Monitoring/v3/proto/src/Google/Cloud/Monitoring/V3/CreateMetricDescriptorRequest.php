<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateMetricDescriptor` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateMetricDescriptorRequest</code>
 */
class CreateMetricDescriptorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     * 4
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The new [custom metric](https://cloud.google.com/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_descriptor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     *           which to execute the request. The format is:
     *           4
     *               projects/[PROJECT_ID_OR_NUMBER]
     *     @type \Google\Api\MetricDescriptor $metric_descriptor
     *           Required. The new [custom metric](https://cloud.google.com/monitoring/custom-metrics)
     *           descriptor.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     * 4
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [project](https://cloud.google.com/monitoring/api/v3#project_name) on
     * which to execute the request. The format is:
     * 4
     *     projects/[PROJECT_ID_OR_NUMBER]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The new [custom metric](https://cloud.google.com/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Api\MetricDescriptor|null
     */
    public function getMetricDescriptor()
    {
        return $this->metric_descriptor;
    }

    public function hasMetricDescriptor()
    {
        return isset($this->metric_descriptor);
    }

    public function clearMetricDescriptor()
    {
        unset($this->metric_descriptor);
    }

    /**
     * Required. The new [custom metric](https://cloud.google.com/monitoring/custom-metrics)
     * descriptor.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor metric_descriptor = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Api\MetricDescriptor $var
     * @return $this
     */
    public function setMetricDescriptor($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MetricDescriptor::class);
        $this->metric_descriptor = $var;

        return $this;
    }

}

