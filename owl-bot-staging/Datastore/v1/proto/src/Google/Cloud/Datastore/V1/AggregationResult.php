<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/aggregation_result.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of a single bucket from a Datastore aggregation query.
 * The keys of `aggregate_properties` are the same for all results in an
 * aggregation query, unlike entity queries which can have different fields
 * present for each result.
 *
 * Generated from protobuf message <code>google.datastore.v1.AggregationResult</code>
 */
class AggregationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of the aggregation functions, ex: `COUNT(*) AS total_entities`.
     * The key is the [alias][google.datastore.v1.AggregationQuery.Aggregation.alias]
     * assigned to the aggregation function on input and the size of this map
     * equals the number of aggregation functions in the query.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1.Value> aggregate_properties = 2;</code>
     */
    private $aggregate_properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $aggregate_properties
     *           The result of the aggregation functions, ex: `COUNT(*) AS total_entities`.
     *           The key is the [alias][google.datastore.v1.AggregationQuery.Aggregation.alias]
     *           assigned to the aggregation function on input and the size of this map
     *           equals the number of aggregation functions in the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\AggregationResult::initOnce();
        parent::__construct($data);
    }

    /**
     * The result of the aggregation functions, ex: `COUNT(*) AS total_entities`.
     * The key is the [alias][google.datastore.v1.AggregationQuery.Aggregation.alias]
     * assigned to the aggregation function on input and the size of this map
     * equals the number of aggregation functions in the query.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1.Value> aggregate_properties = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAggregateProperties()
    {
        return $this->aggregate_properties;
    }

    /**
     * The result of the aggregation functions, ex: `COUNT(*) AS total_entities`.
     * The key is the [alias][google.datastore.v1.AggregationQuery.Aggregation.alias]
     * assigned to the aggregation function on input and the size of this map
     * equals the number of aggregation functions in the query.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1.Value> aggregate_properties = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAggregateProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\Value::class);
        $this->aggregate_properties = $arr;

        return $this;
    }

}

