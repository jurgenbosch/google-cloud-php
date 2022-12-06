<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.DropRowRange][google.bigtable.admin.v2.BigtableTableAdmin.DropRowRange]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.DropRowRangeRequest</code>
 */
class DropRowRangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the table on which to drop a range of rows.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the table on which to drop a range of rows.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}/tables/{table}`.
     *     @type string $row_key_prefix
     *           Delete all rows that start with this row key prefix. Prefix cannot be
     *           zero length.
     *     @type bool $delete_all_data_from_table
     *           Delete all rows in the table. Setting this to false is a no-op.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the table on which to drop a range of rows.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the table on which to drop a range of rows.
     * Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
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
     * Delete all rows that start with this row key prefix. Prefix cannot be
     * zero length.
     *
     * Generated from protobuf field <code>bytes row_key_prefix = 2;</code>
     * @return string
     */
    public function getRowKeyPrefix()
    {
        return $this->readOneof(2);
    }

    public function hasRowKeyPrefix()
    {
        return $this->hasOneof(2);
    }

    /**
     * Delete all rows that start with this row key prefix. Prefix cannot be
     * zero length.
     *
     * Generated from protobuf field <code>bytes row_key_prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKeyPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Delete all rows in the table. Setting this to false is a no-op.
     *
     * Generated from protobuf field <code>bool delete_all_data_from_table = 3;</code>
     * @return bool
     */
    public function getDeleteAllDataFromTable()
    {
        return $this->readOneof(3);
    }

    public function hasDeleteAllDataFromTable()
    {
        return $this->hasOneof(3);
    }

    /**
     * Delete all rows in the table. Setting this to false is a no-op.
     *
     * Generated from protobuf field <code>bool delete_all_data_from_table = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteAllDataFromTable($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

