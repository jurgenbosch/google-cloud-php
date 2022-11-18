<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/purge_config.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of the PurgeUserEventsRequest. If the long running operation is
 * successfully done, then this message is returned by the
 * google.longrunning.Operations.response field.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.PurgeUserEventsResponse</code>
 */
class PurgeUserEventsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     */
    protected $purged_events_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $purged_events_count
     *           The total count of events purged as a result of the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\PurgeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     * @return int|string
     */
    public function getPurgedEventsCount()
    {
        return $this->purged_events_count;
    }

    /**
     * The total count of events purged as a result of the operation.
     *
     * Generated from protobuf field <code>int64 purged_events_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPurgedEventsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->purged_events_count = $var;

        return $this;
    }

}

