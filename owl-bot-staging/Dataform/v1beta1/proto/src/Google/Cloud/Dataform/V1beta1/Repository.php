<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Dataform Git repository.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.Repository</code>
 */
class Repository extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Optional. If set, configures this repository to be linked to a Git remote.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository.GitRemoteSettings git_remote_settings = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $git_remote_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The repository's name.
     *     @type \Google\Cloud\Dataform\V1beta1\Repository\GitRemoteSettings $git_remote_settings
     *           Optional. If set, configures this repository to be linked to a Git remote.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The repository's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. If set, configures this repository to be linked to a Git remote.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository.GitRemoteSettings git_remote_settings = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataform\V1beta1\Repository\GitRemoteSettings|null
     */
    public function getGitRemoteSettings()
    {
        return $this->git_remote_settings;
    }

    public function hasGitRemoteSettings()
    {
        return isset($this->git_remote_settings);
    }

    public function clearGitRemoteSettings()
    {
        unset($this->git_remote_settings);
    }

    /**
     * Optional. If set, configures this repository to be linked to a Git remote.
     *
     * Generated from protobuf field <code>.google.cloud.dataform.v1beta1.Repository.GitRemoteSettings git_remote_settings = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataform\V1beta1\Repository\GitRemoteSettings $var
     * @return $this
     */
    public function setGitRemoteSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataform\V1beta1\Repository\GitRemoteSettings::class);
        $this->git_remote_settings = $var;

        return $this;
    }

}

