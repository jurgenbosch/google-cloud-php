<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/operation.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for [google.longrunning.Operation][google.longrunning.Operation] results from
 * [FirestoreAdmin.ImportDocuments][google.firestore.admin.v1.FirestoreAdmin.ImportDocuments].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.ImportDocumentsMetadata</code>
 */
class ImportDocumentsMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * The state of the import operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState operation_state = 3;</code>
     */
    protected $operation_state = 0;
    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 4;</code>
     */
    protected $progress_documents = null;
    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 5;</code>
     */
    protected $progress_bytes = null;
    /**
     * Which collection ids are being imported.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 6;</code>
     */
    private $collection_ids;
    /**
     * The location of the documents being imported.
     *
     * Generated from protobuf field <code>string input_uri_prefix = 7;</code>
     */
    protected $input_uri_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time this operation started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time this operation completed. Will be unset if operation still in
     *           progress.
     *     @type int $operation_state
     *           The state of the import operation.
     *     @type \Google\Cloud\Firestore\Admin\V1\Progress $progress_documents
     *           The progress, in documents, of this operation.
     *     @type \Google\Cloud\Firestore\Admin\V1\Progress $progress_bytes
     *           The progress, in bytes, of this operation.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $collection_ids
     *           Which collection ids are being imported.
     *     @type string $input_uri_prefix
     *           The location of the documents being imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The state of the import operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState operation_state = 3;</code>
     * @return int
     */
    public function getOperationState()
    {
        return $this->operation_state;
    }

    /**
     * The state of the import operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState operation_state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\OperationState::class);
        $this->operation_state = $var;

        return $this;
    }

    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 4;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Progress|null
     */
    public function getProgressDocuments()
    {
        return $this->progress_documents;
    }

    public function hasProgressDocuments()
    {
        return isset($this->progress_documents);
    }

    public function clearProgressDocuments()
    {
        unset($this->progress_documents);
    }

    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 4;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressDocuments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Progress::class);
        $this->progress_documents = $var;

        return $this;
    }

    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 5;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Progress|null
     */
    public function getProgressBytes()
    {
        return $this->progress_bytes;
    }

    public function hasProgressBytes()
    {
        return isset($this->progress_bytes);
    }

    public function clearProgressBytes()
    {
        unset($this->progress_bytes);
    }

    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 5;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressBytes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Progress::class);
        $this->progress_bytes = $var;

        return $this;
    }

    /**
     * Which collection ids are being imported.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectionIds()
    {
        return $this->collection_ids;
    }

    /**
     * Which collection ids are being imported.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collection_ids = $arr;

        return $this;
    }

    /**
     * The location of the documents being imported.
     *
     * Generated from protobuf field <code>string input_uri_prefix = 7;</code>
     * @return string
     */
    public function getInputUriPrefix()
    {
        return $this->input_uri_prefix;
    }

    /**
     * The location of the documents being imported.
     *
     * Generated from protobuf field <code>string input_uri_prefix = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri_prefix = $var;

        return $this;
    }

}

