<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1beta/oslogin.proto

namespace Google\Cloud\OsLogin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The credential information for a Google registered security key.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1beta.SecurityKey</code>
 */
class SecurityKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Public key text in SSH format, defined by
     * [RFC4253]("https://www.ietf.org/rfc/rfc4253.txt") section 6.6.
     *
     * Generated from protobuf field <code>string public_key = 1;</code>
     */
    protected $public_key = '';
    /**
     * Hardware-backed private key text in SSH format.
     *
     * Generated from protobuf field <code>string private_key = 2;</code>
     */
    protected $private_key = '';
    protected $protocol_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $public_key
     *           Public key text in SSH format, defined by
     *           [RFC4253]("https://www.ietf.org/rfc/rfc4253.txt") section 6.6.
     *     @type string $private_key
     *           Hardware-backed private key text in SSH format.
     *     @type \Google\Cloud\OsLogin\V1beta\UniversalTwoFactor $universal_two_factor
     *           The U2F protocol type.
     *     @type \Google\Cloud\OsLogin\V1beta\WebAuthn $web_authn
     *           The Web Authentication protocol type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1Beta\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Public key text in SSH format, defined by
     * [RFC4253]("https://www.ietf.org/rfc/rfc4253.txt") section 6.6.
     *
     * Generated from protobuf field <code>string public_key = 1;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Public key text in SSH format, defined by
     * [RFC4253]("https://www.ietf.org/rfc/rfc4253.txt") section 6.6.
     *
     * Generated from protobuf field <code>string public_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_key = $var;

        return $this;
    }

    /**
     * Hardware-backed private key text in SSH format.
     *
     * Generated from protobuf field <code>string private_key = 2;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Hardware-backed private key text in SSH format.
     *
     * Generated from protobuf field <code>string private_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * The U2F protocol type.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1beta.UniversalTwoFactor universal_two_factor = 3;</code>
     * @return \Google\Cloud\OsLogin\V1beta\UniversalTwoFactor|null
     */
    public function getUniversalTwoFactor()
    {
        return $this->readOneof(3);
    }

    public function hasUniversalTwoFactor()
    {
        return $this->hasOneof(3);
    }

    /**
     * The U2F protocol type.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1beta.UniversalTwoFactor universal_two_factor = 3;</code>
     * @param \Google\Cloud\OsLogin\V1beta\UniversalTwoFactor $var
     * @return $this
     */
    public function setUniversalTwoFactor($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\V1beta\UniversalTwoFactor::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The Web Authentication protocol type.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1beta.WebAuthn web_authn = 4;</code>
     * @return \Google\Cloud\OsLogin\V1beta\WebAuthn|null
     */
    public function getWebAuthn()
    {
        return $this->readOneof(4);
    }

    public function hasWebAuthn()
    {
        return $this->hasOneof(4);
    }

    /**
     * The Web Authentication protocol type.
     *
     * Generated from protobuf field <code>.google.cloud.oslogin.v1beta.WebAuthn web_authn = 4;</code>
     * @param \Google\Cloud\OsLogin\V1beta\WebAuthn $var
     * @return $this
     */
    public function setWebAuthn($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsLogin\V1beta\WebAuthn::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getProtocolType()
    {
        return $this->whichOneof("protocol_type");
    }

}

