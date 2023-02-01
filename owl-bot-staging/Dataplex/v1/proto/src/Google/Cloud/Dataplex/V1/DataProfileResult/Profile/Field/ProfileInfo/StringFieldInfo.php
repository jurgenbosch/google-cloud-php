<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StringFieldInfo defines output info for any string type field.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.StringFieldInfo</code>
 */
class StringFieldInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum length of the string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 min_length = 1;</code>
     */
    protected $min_length = 0;
    /**
     * The maximum length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 max_length = 2;</code>
     */
    protected $max_length = 0;
    /**
     * The average length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>double average_length = 3;</code>
     */
    protected $average_length = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_length
     *           The minimum length of the string field in the sampled data.
     *           Optional if zero non-null rows.
     *     @type int|string $max_length
     *           The maximum length of a string field in the sampled data.
     *           Optional if zero non-null rows.
     *     @type float $average_length
     *           The average length of a string field in the sampled data.
     *           Optional if zero non-null rows.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum length of the string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 min_length = 1;</code>
     * @return int|string
     */
    public function getMinLength()
    {
        return $this->min_length;
    }

    /**
     * The minimum length of the string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 min_length = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_length = $var;

        return $this;
    }

    /**
     * The maximum length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 max_length = 2;</code>
     * @return int|string
     */
    public function getMaxLength()
    {
        return $this->max_length;
    }

    /**
     * The maximum length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>int64 max_length = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxLength($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_length = $var;

        return $this;
    }

    /**
     * The average length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>double average_length = 3;</code>
     * @return float
     */
    public function getAverageLength()
    {
        return $this->average_length;
    }

    /**
     * The average length of a string field in the sampled data.
     * Optional if zero non-null rows.
     *
     * Generated from protobuf field <code>double average_length = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAverageLength($var)
    {
        GPBUtil::checkDouble($var);
        $this->average_length = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StringFieldInfo::class, \Google\Cloud\Dataplex\V1\DataProfileResult_Profile_Field_ProfileInfo_StringFieldInfo::class);

