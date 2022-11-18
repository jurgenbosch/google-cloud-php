<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_service.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to get a previously created migration subtasks.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.GetMigrationSubtaskRequest</code>
 */
class GetMigrationSubtaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique identifier for the migration subtask.
     * Example: `projects/123/locations/us/workflows/1234/subtasks/543`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique identifier for the migration subtask.
     *           Example: `projects/123/locations/us/workflows/1234/subtasks/543`
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. The list of fields to be retrieved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique identifier for the migration subtask.
     * Example: `projects/123/locations/us/workflows/1234/subtasks/543`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique identifier for the migration subtask.
     * Example: `projects/123/locations/us/workflows/1234/subtasks/543`
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

    /**
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional. The list of fields to be retrieved.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

