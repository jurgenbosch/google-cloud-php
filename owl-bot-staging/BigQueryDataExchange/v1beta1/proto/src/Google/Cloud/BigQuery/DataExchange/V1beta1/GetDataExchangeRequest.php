<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a data exchange.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.GetDataExchangeRequest</code>
 */
class GetDataExchangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the data exchange.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

