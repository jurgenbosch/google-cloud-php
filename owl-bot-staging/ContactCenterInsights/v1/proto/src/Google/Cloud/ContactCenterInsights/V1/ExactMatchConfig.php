<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Exact match configuration.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ExactMatchConfig</code>
 */
class ExactMatchConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to consider case sensitivity when performing an exact match.
     *
     * Generated from protobuf field <code>bool case_sensitive = 1;</code>
     */
    protected $case_sensitive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $case_sensitive
     *           Whether to consider case sensitivity when performing an exact match.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to consider case sensitivity when performing an exact match.
     *
     * Generated from protobuf field <code>bool case_sensitive = 1;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * Whether to consider case sensitivity when performing an exact match.
     *
     * Generated from protobuf field <code>bool case_sensitive = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}

