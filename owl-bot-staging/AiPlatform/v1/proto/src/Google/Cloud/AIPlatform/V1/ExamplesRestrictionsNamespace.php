<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Restrictions namespace for example-based explanations overrides.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExamplesRestrictionsNamespace</code>
 */
class ExamplesRestrictionsNamespace extends \Google\Protobuf\Internal\Message
{
    /**
     * The namespace name.
     *
     * Generated from protobuf field <code>string namespace_name = 1;</code>
     */
    protected $namespace_name = '';
    /**
     * The list of allowed tags.
     *
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     */
    private $allow;
    /**
     * The list of deny tags.
     *
     * Generated from protobuf field <code>repeated string deny = 3;</code>
     */
    private $deny;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace_name
     *           The namespace name.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allow
     *           The list of allowed tags.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $deny
     *           The list of deny tags.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * The namespace name.
     *
     * Generated from protobuf field <code>string namespace_name = 1;</code>
     * @return string
     */
    public function getNamespaceName()
    {
        return $this->namespace_name;
    }

    /**
     * The namespace name.
     *
     * Generated from protobuf field <code>string namespace_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_name = $var;

        return $this;
    }

    /**
     * The list of allowed tags.
     *
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * The list of allowed tags.
     *
     * Generated from protobuf field <code>repeated string allow = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllow($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allow = $arr;

        return $this;
    }

    /**
     * The list of deny tags.
     *
     * Generated from protobuf field <code>repeated string deny = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeny()
    {
        return $this->deny;
    }

    /**
     * The list of deny tags.
     *
     * Generated from protobuf field <code>repeated string deny = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeny($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->deny = $arr;

        return $this;
    }

}

