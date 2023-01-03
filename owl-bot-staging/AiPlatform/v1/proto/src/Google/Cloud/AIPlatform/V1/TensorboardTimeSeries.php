<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tensorboard_time_series.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TensorboardTimeSeries maps to times series produced in training runs
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.TensorboardTimeSeries</code>
 */
class TensorboardTimeSeries extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. User provided name of this TensorboardTimeSeries.
     * This value should be unique among all TensorboardTimeSeries resources
     * belonging to the same TensorboardRun resource (parent resource).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Description of this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Required. Immutable. Type of TensorboardTimeSeries value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $value_type = 0;
    /**
     * Output only. Timestamp when this TensorboardTimeSeries was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this TensorboardTimeSeries was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     */
    protected $etag = '';
    /**
     * Immutable. Name of the plugin this time series pertain to. Such as Scalar, Tensor,
     * Blob
     *
     * Generated from protobuf field <code>string plugin_name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $plugin_name = '';
    /**
     * Data of the current plugin, with the size limited to 65KB.
     *
     * Generated from protobuf field <code>bytes plugin_data = 9;</code>
     */
    protected $plugin_data = '';
    /**
     * Output only. Scalar, Tensor, or Blob metadata for this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.Metadata metadata = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the TensorboardTimeSeries.
     *     @type string $display_name
     *           Required. User provided name of this TensorboardTimeSeries.
     *           This value should be unique among all TensorboardTimeSeries resources
     *           belonging to the same TensorboardRun resource (parent resource).
     *     @type string $description
     *           Description of this TensorboardTimeSeries.
     *     @type int $value_type
     *           Required. Immutable. Type of TensorboardTimeSeries value.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this TensorboardTimeSeries was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this TensorboardTimeSeries was last updated.
     *     @type string $etag
     *           Used to perform a consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     *     @type string $plugin_name
     *           Immutable. Name of the plugin this time series pertain to. Such as Scalar, Tensor,
     *           Blob
     *     @type string $plugin_data
     *           Data of the current plugin, with the size limited to 65KB.
     *     @type \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\Metadata $metadata
     *           Output only. Scalar, Tensor, or Blob metadata for this TensorboardTimeSeries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TensorboardTimeSeries::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. User provided name of this TensorboardTimeSeries.
     * This value should be unique among all TensorboardTimeSeries resources
     * belonging to the same TensorboardRun resource (parent resource).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. User provided name of this TensorboardTimeSeries.
     * This value should be unique among all TensorboardTimeSeries resources
     * belonging to the same TensorboardRun resource (parent resource).
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Description of this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Immutable. Type of TensorboardTimeSeries value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * Required. Immutable. Type of TensorboardTimeSeries value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.ValueType value_type = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\ValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this TensorboardTimeSeries was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this TensorboardTimeSeries was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this TensorboardTimeSeries was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this TensorboardTimeSeries was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform a consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Immutable. Name of the plugin this time series pertain to. Such as Scalar, Tensor,
     * Blob
     *
     * Generated from protobuf field <code>string plugin_name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getPluginName()
    {
        return $this->plugin_name;
    }

    /**
     * Immutable. Name of the plugin this time series pertain to. Such as Scalar, Tensor,
     * Blob
     *
     * Generated from protobuf field <code>string plugin_name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setPluginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->plugin_name = $var;

        return $this;
    }

    /**
     * Data of the current plugin, with the size limited to 65KB.
     *
     * Generated from protobuf field <code>bytes plugin_data = 9;</code>
     * @return string
     */
    public function getPluginData()
    {
        return $this->plugin_data;
    }

    /**
     * Data of the current plugin, with the size limited to 65KB.
     *
     * Generated from protobuf field <code>bytes plugin_data = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPluginData($var)
    {
        GPBUtil::checkString($var, False);
        $this->plugin_data = $var;

        return $this;
    }

    /**
     * Output only. Scalar, Tensor, or Blob metadata for this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.Metadata metadata = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\Metadata|null
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
     * Output only. Scalar, Tensor, or Blob metadata for this TensorboardTimeSeries.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.TensorboardTimeSeries.Metadata metadata = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\TensorboardTimeSeries\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

}

