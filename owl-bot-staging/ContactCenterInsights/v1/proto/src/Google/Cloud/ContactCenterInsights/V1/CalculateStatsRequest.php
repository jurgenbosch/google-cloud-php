<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for calculating conversation statistics.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CalculateStatsRequest</code>
 */
class CalculateStatsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location of the conversations.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $location = '';
    /**
     * A filter to reduce results to a specific subset. This field is useful for
     * getting statistics about conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           Required. The location of the conversations.
     *     @type string $filter
     *           A filter to reduce results to a specific subset. This field is useful for
     *           getting statistics about conversations with specific properties.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location of the conversations.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Required. The location of the conversations.
     *
     * Generated from protobuf field <code>string location = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * A filter to reduce results to a specific subset. This field is useful for
     * getting statistics about conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to reduce results to a specific subset. This field is useful for
     * getting statistics about conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

