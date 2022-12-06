<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HTTP request data that is related to a reported error.
 * This data should be provided by the application when reporting an error,
 * unless the
 * error report has been generated automatically from Google App Engine logs.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.HttpRequestContext</code>
 */
class HttpRequestContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of HTTP request, such as `GET`, `POST`, etc.
     *
     * Generated from protobuf field <code>string method = 1;</code>
     */
    protected $method = '';
    /**
     * The URL of the request.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     */
    protected $url = '';
    /**
     * The user agent information that is provided with the request.
     *
     * Generated from protobuf field <code>string user_agent = 3;</code>
     */
    protected $user_agent = '';
    /**
     * The referrer information that is provided with the request.
     *
     * Generated from protobuf field <code>string referrer = 4;</code>
     */
    protected $referrer = '';
    /**
     * The HTTP response status code for the request.
     *
     * Generated from protobuf field <code>int32 response_status_code = 5;</code>
     */
    protected $response_status_code = 0;
    /**
     * The IP address from which the request originated.
     * This can be IPv4, IPv6, or a token which is derived from the
     * IP address, depending on the data that has been provided
     * in the error report.
     *
     * Generated from protobuf field <code>string remote_ip = 6;</code>
     */
    protected $remote_ip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $method
     *           The type of HTTP request, such as `GET`, `POST`, etc.
     *     @type string $url
     *           The URL of the request.
     *     @type string $user_agent
     *           The user agent information that is provided with the request.
     *     @type string $referrer
     *           The referrer information that is provided with the request.
     *     @type int $response_status_code
     *           The HTTP response status code for the request.
     *     @type string $remote_ip
     *           The IP address from which the request originated.
     *           This can be IPv4, IPv6, or a token which is derived from the
     *           IP address, depending on the data that has been provided
     *           in the error report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of HTTP request, such as `GET`, `POST`, etc.
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * The type of HTTP request, such as `GET`, `POST`, etc.
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * The URL of the request.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The URL of the request.
     *
     * Generated from protobuf field <code>string url = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * The user agent information that is provided with the request.
     *
     * Generated from protobuf field <code>string user_agent = 3;</code>
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * The user agent information that is provided with the request.
     *
     * Generated from protobuf field <code>string user_agent = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_agent = $var;

        return $this;
    }

    /**
     * The referrer information that is provided with the request.
     *
     * Generated from protobuf field <code>string referrer = 4;</code>
     * @return string
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * The referrer information that is provided with the request.
     *
     * Generated from protobuf field <code>string referrer = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setReferrer($var)
    {
        GPBUtil::checkString($var, True);
        $this->referrer = $var;

        return $this;
    }

    /**
     * The HTTP response status code for the request.
     *
     * Generated from protobuf field <code>int32 response_status_code = 5;</code>
     * @return int
     */
    public function getResponseStatusCode()
    {
        return $this->response_status_code;
    }

    /**
     * The HTTP response status code for the request.
     *
     * Generated from protobuf field <code>int32 response_status_code = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->response_status_code = $var;

        return $this;
    }

    /**
     * The IP address from which the request originated.
     * This can be IPv4, IPv6, or a token which is derived from the
     * IP address, depending on the data that has been provided
     * in the error report.
     *
     * Generated from protobuf field <code>string remote_ip = 6;</code>
     * @return string
     */
    public function getRemoteIp()
    {
        return $this->remote_ip;
    }

    /**
     * The IP address from which the request originated.
     * This can be IPv4, IPv6, or a token which is derived from the
     * IP address, depending on the data that has been provided
     * in the error report.
     *
     * Generated from protobuf field <code>string remote_ip = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_ip = $var;

        return $this;
    }

}

