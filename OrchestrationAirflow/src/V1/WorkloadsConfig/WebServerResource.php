<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for resources used by Airflow web server.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.WorkloadsConfig.WebServerResource</code>
 */
class WebServerResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. CPU request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cpu = 0.0;
    /**
     * Optional. Memory (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $memory_gb = 0.0;
    /**
     * Optional. Storage (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $storage_gb = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $cpu
     *           Optional. CPU request and limit for Airflow web server.
     *     @type float $memory_gb
     *           Optional. Memory (GB) request and limit for Airflow web server.
     *     @type float $storage_gb
     *           Optional. Storage (GB) request and limit for Airflow web server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. CPU request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Optional. CPU request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float cpu = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setCpu($var)
    {
        GPBUtil::checkFloat($var);
        $this->cpu = $var;

        return $this;
    }

    /**
     * Optional. Memory (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getMemoryGb()
    {
        return $this->memory_gb;
    }

    /**
     * Optional. Memory (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float memory_gb = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryGb($var)
    {
        GPBUtil::checkFloat($var);
        $this->memory_gb = $var;

        return $this;
    }

    /**
     * Optional. Storage (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getStorageGb()
    {
        return $this->storage_gb;
    }

    /**
     * Optional. Storage (GB) request and limit for Airflow web server.
     *
     * Generated from protobuf field <code>float storage_gb = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setStorageGb($var)
    {
        GPBUtil::checkFloat($var);
        $this->storage_gb = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebServerResource::class, \Google\Cloud\Orchestration\Airflow\Service\V1\WorkloadsConfig_WebServerResource::class);

