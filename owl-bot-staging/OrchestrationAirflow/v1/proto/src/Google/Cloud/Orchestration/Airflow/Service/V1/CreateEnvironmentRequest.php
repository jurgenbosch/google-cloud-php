<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create a new environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.CreateEnvironmentRequest</code>
 */
class CreateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent must be of the form
     * "projects/{projectId}/locations/{locationId}".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 2;</code>
     */
    protected $environment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent must be of the form
     *           "projects/{projectId}/locations/{locationId}".
     *     @type \Google\Cloud\Orchestration\Airflow\Service\V1\Environment $environment
     *           The environment to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent must be of the form
     * "projects/{projectId}/locations/{locationId}".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent must be of the form
     * "projects/{projectId}/locations/{locationId}".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 2;</code>
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\Environment|null
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * The environment to create.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.Environment environment = 2;</code>
     * @param \Google\Cloud\Orchestration\Airflow\Service\V1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Orchestration\Airflow\Service\V1\Environment::class);
        $this->environment = $var;

        return $this;
    }

}

