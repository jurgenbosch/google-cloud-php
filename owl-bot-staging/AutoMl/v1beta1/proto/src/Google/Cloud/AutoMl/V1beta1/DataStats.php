<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_stats.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data statistics of a series of values that share the same DataType.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.DataStats</code>
 */
class DataStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of distinct values.
     *
     * Generated from protobuf field <code>int64 distinct_value_count = 1;</code>
     */
    protected $distinct_value_count = 0;
    /**
     * The number of values that are null.
     *
     * Generated from protobuf field <code>int64 null_value_count = 2;</code>
     */
    protected $null_value_count = 0;
    /**
     * The number of values that are valid.
     *
     * Generated from protobuf field <code>int64 valid_value_count = 9;</code>
     */
    protected $valid_value_count = 0;
    protected $stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\Float64Stats $float64_stats
     *           The statistics for FLOAT64 DataType.
     *     @type \Google\Cloud\AutoMl\V1beta1\StringStats $string_stats
     *           The statistics for STRING DataType.
     *     @type \Google\Cloud\AutoMl\V1beta1\TimestampStats $timestamp_stats
     *           The statistics for TIMESTAMP DataType.
     *     @type \Google\Cloud\AutoMl\V1beta1\ArrayStats $array_stats
     *           The statistics for ARRAY DataType.
     *     @type \Google\Cloud\AutoMl\V1beta1\StructStats $struct_stats
     *           The statistics for STRUCT DataType.
     *     @type \Google\Cloud\AutoMl\V1beta1\CategoryStats $category_stats
     *           The statistics for CATEGORY DataType.
     *     @type int|string $distinct_value_count
     *           The number of distinct values.
     *     @type int|string $null_value_count
     *           The number of values that are null.
     *     @type int|string $valid_value_count
     *           The number of values that are valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The statistics for FLOAT64 DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.Float64Stats float64_stats = 3;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\Float64Stats|null
     */
    public function getFloat64Stats()
    {
        return $this->readOneof(3);
    }

    public function hasFloat64Stats()
    {
        return $this->hasOneof(3);
    }

    /**
     * The statistics for FLOAT64 DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.Float64Stats float64_stats = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\Float64Stats $var
     * @return $this
     */
    public function setFloat64Stats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\Float64Stats::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The statistics for STRING DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.StringStats string_stats = 4;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\StringStats|null
     */
    public function getStringStats()
    {
        return $this->readOneof(4);
    }

    public function hasStringStats()
    {
        return $this->hasOneof(4);
    }

    /**
     * The statistics for STRING DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.StringStats string_stats = 4;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\StringStats $var
     * @return $this
     */
    public function setStringStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\StringStats::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The statistics for TIMESTAMP DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TimestampStats timestamp_stats = 5;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TimestampStats|null
     */
    public function getTimestampStats()
    {
        return $this->readOneof(5);
    }

    public function hasTimestampStats()
    {
        return $this->hasOneof(5);
    }

    /**
     * The statistics for TIMESTAMP DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TimestampStats timestamp_stats = 5;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TimestampStats $var
     * @return $this
     */
    public function setTimestampStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TimestampStats::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The statistics for ARRAY DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ArrayStats array_stats = 6;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\ArrayStats|null
     */
    public function getArrayStats()
    {
        return $this->readOneof(6);
    }

    public function hasArrayStats()
    {
        return $this->hasOneof(6);
    }

    /**
     * The statistics for ARRAY DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ArrayStats array_stats = 6;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\ArrayStats $var
     * @return $this
     */
    public function setArrayStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\ArrayStats::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The statistics for STRUCT DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.StructStats struct_stats = 7;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\StructStats|null
     */
    public function getStructStats()
    {
        return $this->readOneof(7);
    }

    public function hasStructStats()
    {
        return $this->hasOneof(7);
    }

    /**
     * The statistics for STRUCT DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.StructStats struct_stats = 7;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\StructStats $var
     * @return $this
     */
    public function setStructStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\StructStats::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The statistics for CATEGORY DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.CategoryStats category_stats = 8;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\CategoryStats|null
     */
    public function getCategoryStats()
    {
        return $this->readOneof(8);
    }

    public function hasCategoryStats()
    {
        return $this->hasOneof(8);
    }

    /**
     * The statistics for CATEGORY DataType.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.CategoryStats category_stats = 8;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\CategoryStats $var
     * @return $this
     */
    public function setCategoryStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\CategoryStats::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The number of distinct values.
     *
     * Generated from protobuf field <code>int64 distinct_value_count = 1;</code>
     * @return int|string
     */
    public function getDistinctValueCount()
    {
        return $this->distinct_value_count;
    }

    /**
     * The number of distinct values.
     *
     * Generated from protobuf field <code>int64 distinct_value_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDistinctValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->distinct_value_count = $var;

        return $this;
    }

    /**
     * The number of values that are null.
     *
     * Generated from protobuf field <code>int64 null_value_count = 2;</code>
     * @return int|string
     */
    public function getNullValueCount()
    {
        return $this->null_value_count;
    }

    /**
     * The number of values that are null.
     *
     * Generated from protobuf field <code>int64 null_value_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNullValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->null_value_count = $var;

        return $this;
    }

    /**
     * The number of values that are valid.
     *
     * Generated from protobuf field <code>int64 valid_value_count = 9;</code>
     * @return int|string
     */
    public function getValidValueCount()
    {
        return $this->valid_value_count;
    }

    /**
     * The number of values that are valid.
     *
     * Generated from protobuf field <code>int64 valid_value_count = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValidValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->valid_value_count = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getStats()
    {
        return $this->whichOneof("stats");
    }

}

