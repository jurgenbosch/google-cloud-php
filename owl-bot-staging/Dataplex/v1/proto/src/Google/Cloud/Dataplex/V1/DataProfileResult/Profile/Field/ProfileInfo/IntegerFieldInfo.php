<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IntegerFieldInfo defines output for any integer type field.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.IntegerFieldInfo</code>
 */
class IntegerFieldInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The average of non-null values of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     */
    protected $average = 0.0;
    /**
     * The standard deviation of non-null of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     */
    protected $standard_deviation = 0.0;
    /**
     * The minimum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 min = 4;</code>
     */
    protected $min = 0;
    /**
     * A quartile divide the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point. So,
     * here the quartiles is provided as an ordered list of quartile
     * values, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated int64 quartiles = 6;</code>
     */
    private $quartiles;
    /**
     * The maximum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 max = 5;</code>
     */
    protected $max = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $average
     *           The average of non-null values of integer field in the sampled
     *           data. Return NaN, if the field has a NaN. Optional if zero non-null
     *           rows.
     *     @type float $standard_deviation
     *           The standard deviation of non-null of integer field in the sampled
     *           data. Return NaN, if the field has a NaN. Optional if zero non-null
     *           rows.
     *     @type int|string $min
     *           The minimum value of an integer field in the sampled data.
     *           Return NaN, if the field has a NaN. Optional if zero non-null
     *           rows.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $quartiles
     *           A quartile divide the number of data points into four parts, or
     *           quarters, of more-or-less equal size. Three main quartiles used
     *           are: The first quartile (Q1) splits off the lowest 25% of data from
     *           the highest 75%. It is also known as the lower or 25th empirical
     *           quartile, as 25% of the data is below this point. The second
     *           quartile (Q2) is the median of a data set. So, 50% of the data lies
     *           below this point. The third quartile (Q3) splits off the highest
     *           25% of data from the lowest 75%. It is known as the upper or 75th
     *           empirical quartile, as 75% of the data lies below this point. So,
     *           here the quartiles is provided as an ordered list of quartile
     *           values, occurring in order Q1, median, Q3.
     *     @type int|string $max
     *           The maximum value of an integer field in the sampled data.
     *           Return NaN, if the field has a NaN. Optional if zero non-null
     *           rows.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * The average of non-null values of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     * @return float
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * The average of non-null values of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAverage($var)
    {
        GPBUtil::checkDouble($var);
        $this->average = $var;

        return $this;
    }

    /**
     * The standard deviation of non-null of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     * @return float
     */
    public function getStandardDeviation()
    {
        return $this->standard_deviation;
    }

    /**
     * The standard deviation of non-null of integer field in the sampled
     * data. Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setStandardDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->standard_deviation = $var;

        return $this;
    }

    /**
     * The minimum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 min = 4;</code>
     * @return int|string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 min = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkInt64($var);
        $this->min = $var;

        return $this;
    }

    /**
     * A quartile divide the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point. So,
     * here the quartiles is provided as an ordered list of quartile
     * values, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated int64 quartiles = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuartiles()
    {
        return $this->quartiles;
    }

    /**
     * A quartile divide the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point. So,
     * here the quartiles is provided as an ordered list of quartile
     * values, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated int64 quartiles = 6;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuartiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->quartiles = $arr;

        return $this;
    }

    /**
     * The maximum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 max = 5;</code>
     * @return int|string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum value of an integer field in the sampled data.
     * Return NaN, if the field has a NaN. Optional if zero non-null
     * rows.
     *
     * Generated from protobuf field <code>int64 max = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkInt64($var);
        $this->max = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IntegerFieldInfo::class, \Google\Cloud\Dataplex\V1\DataProfileResult_Profile_Field_ProfileInfo_IntegerFieldInfo::class);

