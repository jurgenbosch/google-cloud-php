<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_statement.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.Subject</code>
 */
class Subject extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * `"<ALGORITHM>": "<HEX_VALUE>"`
     * Algorithms can be e.g. sha256, sha512
     * See
     * https://github.com/in-toto/attestation/blob/main/spec/field_types.md#DigestSet
     *
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     */
    private $digest;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type array|\Google\Protobuf\Internal\MapField $digest
     *           `"<ALGORITHM>": "<HEX_VALUE>"`
     *           Algorithms can be e.g. sha256, sha512
     *           See
     *           https://github.com/in-toto/attestation/blob/main/spec/field_types.md#DigestSet
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
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
     * `"<ALGORITHM>": "<HEX_VALUE>"`
     * Algorithms can be e.g. sha256, sha512
     * See
     * https://github.com/in-toto/attestation/blob/main/spec/field_types.md#DigestSet
     *
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * `"<ALGORITHM>": "<HEX_VALUE>"`
     * Algorithms can be e.g. sha256, sha512
     * See
     * https://github.com/in-toto/attestation/blob/main/spec/field_types.md#DigestSet
     *
     * Generated from protobuf field <code>map<string, string> digest = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDigest($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->digest = $arr;

        return $this;
    }

}

