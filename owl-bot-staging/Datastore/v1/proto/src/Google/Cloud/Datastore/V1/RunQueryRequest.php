<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Datastore.RunQuery][google.datastore.v1.Datastore.RunQuery].
 *
 * Generated from protobuf message <code>google.datastore.v1.RunQueryRequest</code>
 */
class RunQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * The ID of the database against which to make the request.
     * '(default)' is not allowed; please use empty string '' to refer the default
     * database.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     */
    protected $database_id = '';
    /**
     * Entities are partitioned into subsets, identified by a partition ID.
     * Queries are scoped to a single partition.
     * This partition ID is normalized with the standard default context
     * partition ID.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PartitionId partition_id = 2;</code>
     */
    protected $partition_id = null;
    /**
     * The options for this query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     */
    protected $read_options = null;
    protected $query_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the project against which to make the request.
     *     @type string $database_id
     *           The ID of the database against which to make the request.
     *           '(default)' is not allowed; please use empty string '' to refer the default
     *           database.
     *     @type \Google\Cloud\Datastore\V1\PartitionId $partition_id
     *           Entities are partitioned into subsets, identified by a partition ID.
     *           Queries are scoped to a single partition.
     *           This partition ID is normalized with the standard default context
     *           partition ID.
     *     @type \Google\Cloud\Datastore\V1\ReadOptions $read_options
     *           The options for this query.
     *     @type \Google\Cloud\Datastore\V1\Query $query
     *           The query to run.
     *     @type \Google\Cloud\Datastore\V1\GqlQuery $gql_query
     *           The GQL query to run. This query must be a non-aggregation query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The ID of the database against which to make the request.
     * '(default)' is not allowed; please use empty string '' to refer the default
     * database.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->database_id;
    }

    /**
     * The ID of the database against which to make the request.
     * '(default)' is not allowed; please use empty string '' to refer the default
     * database.
     *
     * Generated from protobuf field <code>string database_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_id = $var;

        return $this;
    }

    /**
     * Entities are partitioned into subsets, identified by a partition ID.
     * Queries are scoped to a single partition.
     * This partition ID is normalized with the standard default context
     * partition ID.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PartitionId partition_id = 2;</code>
     * @return \Google\Cloud\Datastore\V1\PartitionId|null
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    public function hasPartitionId()
    {
        return isset($this->partition_id);
    }

    public function clearPartitionId()
    {
        unset($this->partition_id);
    }

    /**
     * Entities are partitioned into subsets, identified by a partition ID.
     * Queries are scoped to a single partition.
     * This partition ID is normalized with the standard default context
     * partition ID.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PartitionId partition_id = 2;</code>
     * @param \Google\Cloud\Datastore\V1\PartitionId $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\PartitionId::class);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * The options for this query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     * @return \Google\Cloud\Datastore\V1\ReadOptions|null
     */
    public function getReadOptions()
    {
        return $this->read_options;
    }

    public function hasReadOptions()
    {
        return isset($this->read_options);
    }

    public function clearReadOptions()
    {
        unset($this->read_options);
    }

    /**
     * The options for this query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions read_options = 1;</code>
     * @param \Google\Cloud\Datastore\V1\ReadOptions $var
     * @return $this
     */
    public function setReadOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\ReadOptions::class);
        $this->read_options = $var;

        return $this;
    }

    /**
     * The query to run.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Query query = 3;</code>
     * @return \Google\Cloud\Datastore\V1\Query|null
     */
    public function getQuery()
    {
        return $this->readOneof(3);
    }

    public function hasQuery()
    {
        return $this->hasOneof(3);
    }

    /**
     * The query to run.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Query query = 3;</code>
     * @param \Google\Cloud\Datastore\V1\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Query::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The GQL query to run. This query must be a non-aggregation query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.GqlQuery gql_query = 7;</code>
     * @return \Google\Cloud\Datastore\V1\GqlQuery|null
     */
    public function getGqlQuery()
    {
        return $this->readOneof(7);
    }

    public function hasGqlQuery()
    {
        return $this->hasOneof(7);
    }

    /**
     * The GQL query to run. This query must be a non-aggregation query.
     *
     * Generated from protobuf field <code>.google.datastore.v1.GqlQuery gql_query = 7;</code>
     * @param \Google\Cloud\Datastore\V1\GqlQuery $var
     * @return $this
     */
    public function setGqlQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\GqlQuery::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getQueryType()
    {
        return $this->whichOneof("query_type");
    }

}

