<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for OAuth login&consent flow behavior as well as for OAuth
 * Credentials.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.OAuthSettings</code>
 */
class OAuthSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Domain hint to send as hd=? parameter in OAuth request flow. Enables
     * redirect to primary IDP by skipping Google's login screen.
     * https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     * Note: IAP does not verify that the id token's hd claim matches this value
     * since access behavior is managed by IAM policies.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue login_hint = 2;</code>
     */
    protected $login_hint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $login_hint
     *           Domain hint to send as hd=? parameter in OAuth request flow. Enables
     *           redirect to primary IDP by skipping Google's login screen.
     *           https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     *           Note: IAP does not verify that the id token's hd claim matches this value
     *           since access behavior is managed by IAM policies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Domain hint to send as hd=? parameter in OAuth request flow. Enables
     * redirect to primary IDP by skipping Google's login screen.
     * https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     * Note: IAP does not verify that the id token's hd claim matches this value
     * since access behavior is managed by IAM policies.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue login_hint = 2;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getLoginHint()
    {
        return $this->login_hint;
    }

    public function hasLoginHint()
    {
        return isset($this->login_hint);
    }

    public function clearLoginHint()
    {
        unset($this->login_hint);
    }

    /**
     * Returns the unboxed value from <code>getLoginHint()</code>

     * Domain hint to send as hd=? parameter in OAuth request flow. Enables
     * redirect to primary IDP by skipping Google's login screen.
     * https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     * Note: IAP does not verify that the id token's hd claim matches this value
     * since access behavior is managed by IAM policies.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue login_hint = 2;</code>
     * @return string|null
     */
    public function getLoginHintUnwrapped()
    {
        return $this->readWrapperValue("login_hint");
    }

    /**
     * Domain hint to send as hd=? parameter in OAuth request flow. Enables
     * redirect to primary IDP by skipping Google's login screen.
     * https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     * Note: IAP does not verify that the id token's hd claim matches this value
     * since access behavior is managed by IAM policies.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue login_hint = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLoginHint($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->login_hint = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Domain hint to send as hd=? parameter in OAuth request flow. Enables
     * redirect to primary IDP by skipping Google's login screen.
     * https://developers.google.com/identity/protocols/OpenIDConnect#hd-param
     * Note: IAP does not verify that the id token's hd claim matches this value
     * since access behavior is managed by IAM policies.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue login_hint = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLoginHintUnwrapped($var)
    {
        $this->writeWrapperValue("login_hint", $var);
        return $this;}

}

