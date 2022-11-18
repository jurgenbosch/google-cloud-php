<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vpcaccess/v1/vpc_access.proto

namespace Google\Cloud\VpcAccess\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing Serverless VPC Access connectors.
 *
 * Generated from protobuf message <code>google.cloud.vpcaccess.v1.ListConnectorsResponse</code>
 */
class ListConnectorsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Serverless VPC Access connectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vpcaccess.v1.Connector connectors = 1;</code>
     */
    private $connectors;
    /**
     * Continuation token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VpcAccess\V1\Connector>|\Google\Protobuf\Internal\RepeatedField $connectors
     *           List of Serverless VPC Access connectors.
     *     @type string $next_page_token
     *           Continuation token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vpcaccess\V1\VpcAccess::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Serverless VPC Access connectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vpcaccess.v1.Connector connectors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnectors()
    {
        return $this->connectors;
    }

    /**
     * List of Serverless VPC Access connectors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vpcaccess.v1.Connector connectors = 1;</code>
     * @param array<\Google\Cloud\VpcAccess\V1\Connector>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VpcAccess\V1\Connector::class);
        $this->connectors = $arr;

        return $this;
    }

    /**
     * Continuation token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Continuation token.
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

}

