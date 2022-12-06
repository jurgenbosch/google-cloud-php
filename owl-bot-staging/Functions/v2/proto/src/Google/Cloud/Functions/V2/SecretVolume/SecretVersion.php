<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2\SecretVolume;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a single version.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.SecretVolume.SecretVersion</code>
 */
class SecretVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Version of the secret (version number or the string 'latest'). It is
     * preferable to use `latest` version with secret volumes as secret value
     * changes are reflected immediately.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * Relative path of the file under the mount path where the secret value for
     * this version will be fetched and made available. For example, setting the
     * mount_path as '/etc/secrets' and path as `secret_foo` would mount the
     * secret value file at `/etc/secrets/secret_foo`.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           Version of the secret (version number or the string 'latest'). It is
     *           preferable to use `latest` version with secret volumes as secret value
     *           changes are reflected immediately.
     *     @type string $path
     *           Relative path of the file under the mount path where the secret value for
     *           this version will be fetched and made available. For example, setting the
     *           mount_path as '/etc/secrets' and path as `secret_foo` would mount the
     *           secret value file at `/etc/secrets/secret_foo`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Version of the secret (version number or the string 'latest'). It is
     * preferable to use `latest` version with secret volumes as secret value
     * changes are reflected immediately.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the secret (version number or the string 'latest'). It is
     * preferable to use `latest` version with secret volumes as secret value
     * changes are reflected immediately.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Relative path of the file under the mount path where the secret value for
     * this version will be fetched and made available. For example, setting the
     * mount_path as '/etc/secrets' and path as `secret_foo` would mount the
     * secret value file at `/etc/secrets/secret_foo`.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Relative path of the file under the mount path where the secret value for
     * this version will be fetched and made available. For example, setting the
     * mount_path as '/etc/secrets' and path as `secret_foo` would mount the
     * secret value file at `/etc/secrets/secret_foo`.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecretVersion::class, \Google\Cloud\Functions\V2\SecretVolume_SecretVersion::class);

