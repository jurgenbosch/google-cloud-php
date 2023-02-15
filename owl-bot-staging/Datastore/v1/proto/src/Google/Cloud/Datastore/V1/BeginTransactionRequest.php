<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
 *
 * Generated from protobuf message <code>google.datastore.v1.BeginTransactionRequest</code>
 */
class BeginTransactionRequest extends \Google\Protobuf\Internal\Message
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
     * Options for a new transaction.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions transaction_options = 10;</code>
     */
    protected $transaction_options = null;

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
     *     @type \Google\Cloud\Datastore\V1\TransactionOptions $transaction_options
     *           Options for a new transaction.
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
     * Options for a new transaction.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions transaction_options = 10;</code>
     * @return \Google\Cloud\Datastore\V1\TransactionOptions|null
     */
    public function getTransactionOptions()
    {
        return $this->transaction_options;
    }

    public function hasTransactionOptions()
    {
        return isset($this->transaction_options);
    }

    public function clearTransactionOptions()
    {
        unset($this->transaction_options);
    }

    /**
     * Options for a new transaction.
     *
     * Generated from protobuf field <code>.google.datastore.v1.TransactionOptions transaction_options = 10;</code>
     * @param \Google\Cloud\Datastore\V1\TransactionOptions $var
     * @return $this
     */
    public function setTransactionOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\TransactionOptions::class);
        $this->transaction_options = $var;

        return $this;
    }

}

