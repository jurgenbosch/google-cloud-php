<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An environment for running orchestration tasks.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the environment, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     * EnvironmentId must start with a lowercase letter followed by up to 63
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Configuration parameters for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig config = 2;</code>
     */
    protected $config = null;
    /**
     * Output only. The UUID (Universally Unique IDentifier) associated with this environment.
     * This value is generated when the environment is created.
     *
     * Generated from protobuf field <code>string uuid = 3;</code>
     */
    protected $uuid = '';
    /**
     * The current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment.State state = 4;</code>
     */
    protected $state = 0;
    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which this environment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     */
    protected $update_time = null;
    /**
     * Optional. User-defined labels for this environment.
     * The labels map can contain no more than 64 entries. Entries of the labels
     * map are UTF8 strings that comply with the following restrictions:
     * * Keys must conform to regexp: [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * * Values must conform to regexp:  [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * * Both keys and values are additionally constrained to be <= 128 bytes in
     * size.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the environment, in the form:
     *           "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     *           EnvironmentId must start with a lowercase letter followed by up to 63
     *           lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\EnvironmentConfig $config
     *           Configuration parameters for this environment.
     *     @type string $uuid
     *           Output only. The UUID (Universally Unique IDentifier) associated with this environment.
     *           This value is generated when the environment is created.
     *     @type int $state
     *           The current state of the environment.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this environment was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this environment was last modified.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for this environment.
     *           The labels map can contain no more than 64 entries. Entries of the labels
     *           map are UTF8 strings that comply with the following restrictions:
     *           * Keys must conform to regexp: [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     *           * Values must conform to regexp:  [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     *           * Both keys and values are additionally constrained to be <= 128 bytes in
     *           size.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the environment, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     * EnvironmentId must start with a lowercase letter followed by up to 63
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the environment, in the form:
     * "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
     * EnvironmentId must start with a lowercase letter followed by up to 63
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *
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
     * Configuration parameters for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig config = 2;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\EnvironmentConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Configuration parameters for this environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.EnvironmentConfig config = 2;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\EnvironmentConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\EnvironmentConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Output only. The UUID (Universally Unique IDentifier) associated with this environment.
     * This value is generated when the environment is created.
     *
     * Generated from protobuf field <code>string uuid = 3;</code>
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Output only. The UUID (Universally Unique IDentifier) associated with this environment.
     * This value is generated when the environment is created.
     *
     * Generated from protobuf field <code>string uuid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uuid = $var;

        return $this;
    }

    /**
     * The current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the environment.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Orchestration\Airflow\Service\V1\Environment\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this environment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this environment was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for this environment.
     * The labels map can contain no more than 64 entries. Entries of the labels
     * map are UTF8 strings that comply with the following restrictions:
     * * Keys must conform to regexp: [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * * Values must conform to regexp:  [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * * Both keys and values are additionally constrained to be <= 128 bytes in
     * size.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for this environment.
     * The labels map can contain no more than 64 entries. Entries of the labels
     * map are UTF8 strings that comply with the following restrictions:
     * * Keys must conform to regexp: [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * * Values must conform to regexp:  [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * * Both keys and values are additionally constrained to be <= 128 bytes in
     * size.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

