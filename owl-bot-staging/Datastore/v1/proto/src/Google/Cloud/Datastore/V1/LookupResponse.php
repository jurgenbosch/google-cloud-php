<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Datastore.Lookup][google.datastore.v1.Datastore.Lookup].
 *
 * Generated from protobuf message <code>google.datastore.v1.LookupResponse</code>
 */
class LookupResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     */
    private $found;
    /**
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     */
    private $missing;
    /**
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     */
    private $deferred;
    /**
     * The time at which these entities were read or found missing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     */
    protected $read_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $found
     *           Entities found as `ResultType.FULL` entities. The order of results in this
     *           field is undefined and has no relation to the order of the keys in the
     *           input.
     *     @type array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $missing
     *           Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     *           in this field is undefined and has no relation to the order of the keys
     *           in the input.
     *     @type array<\Google\Cloud\Datastore\V1\Key>|\Google\Protobuf\Internal\RepeatedField $deferred
     *           A list of keys that were not looked up due to resource constraints. The
     *           order of results in this field is undefined and has no relation to the
     *           order of the keys in the input.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           The time at which these entities were read or found missing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFound()
    {
        return $this->found;
    }

    /**
     * Entities found as `ResultType.FULL` entities. The order of results in this
     * field is undefined and has no relation to the order of the keys in the
     * input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult found = 1;</code>
     * @param array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFound($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\EntityResult::class);
        $this->found = $arr;

        return $this;
    }

    /**
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMissing()
    {
        return $this->missing;
    }

    /**
     * Entities not found as `ResultType.KEY_ONLY` entities. The order of results
     * in this field is undefined and has no relation to the order of the keys
     * in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.EntityResult missing = 2;</code>
     * @param array<\Google\Cloud\Datastore\V1\EntityResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMissing($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\EntityResult::class);
        $this->missing = $arr;

        return $this;
    }

    /**
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeferred()
    {
        return $this->deferred;
    }

    /**
     * A list of keys that were not looked up due to resource constraints. The
     * order of results in this field is undefined and has no relation to the
     * order of the keys in the input.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Key deferred = 3;</code>
     * @param array<\Google\Cloud\Datastore\V1\Key>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeferred($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\Key::class);
        $this->deferred = $arr;

        return $this;
    }

    /**
     * The time at which these entities were read or found missing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * The time at which these entities were read or found missing.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

}

