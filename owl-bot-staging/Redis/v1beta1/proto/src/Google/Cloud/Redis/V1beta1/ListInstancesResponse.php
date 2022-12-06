<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for [ListInstances][google.cloud.redis.v1beta1.CloudRedis.ListInstances].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1beta1.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of Redis instances in the project in the specified location,
     * or across all locations.
     * If the `location_id` in the parent field of the request is "-", all regions
     * available to the project are queried, and the results aggregated.
     * If in such an aggregated query a location is unavailable, a placeholder
     * Redis entry is included in the response with the `name` field set to a
     * value of the form
     * `projects/{project_id}/locations/{location_id}/instances/`- and the
     * `status` field set to ERROR and `status_message` field set to "location not
     * available for ListInstances".
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.v1beta1.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Redis\V1beta1\Instance>|\Google\Protobuf\Internal\RepeatedField $instances
     *           A list of Redis instances in the project in the specified location,
     *           or across all locations.
     *           If the `location_id` in the parent field of the request is "-", all regions
     *           available to the project are queried, and the results aggregated.
     *           If in such an aggregated query a location is unavailable, a placeholder
     *           Redis entry is included in the response with the `name` field set to a
     *           value of the form
     *           `projects/{project_id}/locations/{location_id}/instances/`- and the
     *           `status` field set to ERROR and `status_message` field set to "location not
     *           available for ListInstances".
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1Beta1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of Redis instances in the project in the specified location,
     * or across all locations.
     * If the `location_id` in the parent field of the request is "-", all regions
     * available to the project are queried, and the results aggregated.
     * If in such an aggregated query a location is unavailable, a placeholder
     * Redis entry is included in the response with the `name` field set to a
     * value of the form
     * `projects/{project_id}/locations/{location_id}/instances/`- and the
     * `status` field set to ERROR and `status_message` field set to "location not
     * available for ListInstances".
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.v1beta1.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * A list of Redis instances in the project in the specified location,
     * or across all locations.
     * If the `location_id` in the parent field of the request is "-", all regions
     * available to the project are queried, and the results aggregated.
     * If in such an aggregated query a location is unavailable, a placeholder
     * Redis entry is included in the response with the `name` field set to a
     * value of the form
     * `projects/{project_id}/locations/{location_id}/instances/`- and the
     * `status` field set to ERROR and `status_message` field set to "location not
     * available for ListInstances".
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.v1beta1.Instance instances = 1;</code>
     * @param array<\Google\Cloud\Redis\V1beta1\Instance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\V1beta1\Instance::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
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

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

