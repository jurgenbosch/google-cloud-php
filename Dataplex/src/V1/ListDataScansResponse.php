<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List dataScans response.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ListDataScansResponse</code>
 */
class ListDataScansResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * DataScans (metadata only) under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataScan data_scans = 1;</code>
     */
    private $data_scans;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataplex\V1\DataScan>|\Google\Protobuf\Internal\RepeatedField $data_scans
     *           DataScans (metadata only) under the given parent location.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * DataScans (metadata only) under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataScan data_scans = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataScans()
    {
        return $this->data_scans;
    }

    /**
     * DataScans (metadata only) under the given parent location.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataScan data_scans = 1;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataScan>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataScans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataScan::class);
        $this->data_scans = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

