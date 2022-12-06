<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/apikeys/v2/resources.proto

namespace Google\Cloud\ApiKeys\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifier of an Android application for key use.
 *
 * Generated from protobuf message <code>google.api.apikeys.v2.AndroidApplication</code>
 */
class AndroidApplication extends \Google\Protobuf\Internal\Message
{
    /**
     * The SHA1 fingerprint of the application. For example, both sha1 formats are
     * acceptable : DA:39:A3:EE:5E:6B:4B:0D:32:55:BF:EF:95:60:18:90:AF:D8:07:09 or
     * DA39A3EE5E6B4B0D3255BFEF95601890AFD80709.
     * Output format is the latter.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 1;</code>
     */
    protected $sha1_fingerprint = '';
    /**
     * The package name of the application.
     *
     * Generated from protobuf field <code>string package_name = 2;</code>
     */
    protected $package_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sha1_fingerprint
     *           The SHA1 fingerprint of the application. For example, both sha1 formats are
     *           acceptable : DA:39:A3:EE:5E:6B:4B:0D:32:55:BF:EF:95:60:18:90:AF:D8:07:09 or
     *           DA39A3EE5E6B4B0D3255BFEF95601890AFD80709.
     *           Output format is the latter.
     *     @type string $package_name
     *           The package name of the application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Apikeys\V2\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The SHA1 fingerprint of the application. For example, both sha1 formats are
     * acceptable : DA:39:A3:EE:5E:6B:4B:0D:32:55:BF:EF:95:60:18:90:AF:D8:07:09 or
     * DA39A3EE5E6B4B0D3255BFEF95601890AFD80709.
     * Output format is the latter.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 1;</code>
     * @return string
     */
    public function getSha1Fingerprint()
    {
        return $this->sha1_fingerprint;
    }

    /**
     * The SHA1 fingerprint of the application. For example, both sha1 formats are
     * acceptable : DA:39:A3:EE:5E:6B:4B:0D:32:55:BF:EF:95:60:18:90:AF:D8:07:09 or
     * DA39A3EE5E6B4B0D3255BFEF95601890AFD80709.
     * Output format is the latter.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSha1Fingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha1_fingerprint = $var;

        return $this;
    }

    /**
     * The package name of the application.
     *
     * Generated from protobuf field <code>string package_name = 2;</code>
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * The package name of the application.
     *
     * Generated from protobuf field <code>string package_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPackageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_name = $var;

        return $this;
    }

}

