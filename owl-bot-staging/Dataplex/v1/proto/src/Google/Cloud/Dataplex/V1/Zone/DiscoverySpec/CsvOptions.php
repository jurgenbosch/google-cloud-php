<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Zone\DiscoverySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describe CSV and similar semi-structured data formats.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Zone.DiscoverySpec.CsvOptions</code>
 */
class CsvOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $header_rows = 0;
    /**
     * Optional. The delimiter being used to separate values. This defaults to
     * ','.
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $delimiter = '';
    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encoding = '';
    /**
     * Optional. Whether to disable the inference of data type for CSV data.
     * If true, all columns will be registered as strings.
     *
     * Generated from protobuf field <code>bool disable_type_inference = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disable_type_inference = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $header_rows
     *           Optional. The number of rows to interpret as header rows that should be
     *           skipped when reading data rows.
     *     @type string $delimiter
     *           Optional. The delimiter being used to separate values. This defaults to
     *           ','.
     *     @type string $encoding
     *           Optional. The character encoding of the data. The default is UTF-8.
     *     @type bool $disable_type_inference
     *           Optional. Whether to disable the inference of data type for CSV data.
     *           If true, all columns will be registered as strings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getHeaderRows()
    {
        return $this->header_rows;
    }

    /**
     * Optional. The number of rows to interpret as header rows that should be
     * skipped when reading data rows.
     *
     * Generated from protobuf field <code>int32 header_rows = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setHeaderRows($var)
    {
        GPBUtil::checkInt32($var);
        $this->header_rows = $var;

        return $this;
    }

    /**
     * Optional. The delimiter being used to separate values. This defaults to
     * ','.
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Optional. The delimiter being used to separate values. This defaults to
     * ','.
     *
     * Generated from protobuf field <code>string delimiter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDelimiter($var)
    {
        GPBUtil::checkString($var, True);
        $this->delimiter = $var;

        return $this;
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Optional. The character encoding of the data. The default is UTF-8.
     *
     * Generated from protobuf field <code>string encoding = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->encoding = $var;

        return $this;
    }

    /**
     * Optional. Whether to disable the inference of data type for CSV data.
     * If true, all columns will be registered as strings.
     *
     * Generated from protobuf field <code>bool disable_type_inference = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisableTypeInference()
    {
        return $this->disable_type_inference;
    }

    /**
     * Optional. Whether to disable the inference of data type for CSV data.
     * If true, all columns will be registered as strings.
     *
     * Generated from protobuf field <code>bool disable_type_inference = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableTypeInference($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_type_inference = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CsvOptions::class, \Google\Cloud\Dataplex\V1\Zone_DiscoverySpec_CsvOptions::class);

