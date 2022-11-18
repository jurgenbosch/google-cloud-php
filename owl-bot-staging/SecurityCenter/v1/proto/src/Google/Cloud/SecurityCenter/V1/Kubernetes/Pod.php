<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V1\Kubernetes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Kubernetes Pod.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Kubernetes.Pod</code>
 */
class Pod extends \Google\Protobuf\Internal\Message
{
    /**
     * Kubernetes Pod namespace.
     *
     * Generated from protobuf field <code>string ns = 1;</code>
     */
    protected $ns = '';
    /**
     * Kubernetes Pod name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Pod labels.  For Kubernetes containers, these are applied to the
     * container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Label labels = 3;</code>
     */
    private $labels;
    /**
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Container containers = 4;</code>
     */
    private $containers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ns
     *           Kubernetes Pod namespace.
     *     @type string $name
     *           Kubernetes Pod name.
     *     @type array<\Google\Cloud\SecurityCenter\V1\Label>|\Google\Protobuf\Internal\RepeatedField $labels
     *           Pod labels.  For Kubernetes containers, these are applied to the
     *           container.
     *     @type array<\Google\Cloud\SecurityCenter\V1\Container>|\Google\Protobuf\Internal\RepeatedField $containers
     *           Pod containers associated with this finding, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Kubernetes::initOnce();
        parent::__construct($data);
    }

    /**
     * Kubernetes Pod namespace.
     *
     * Generated from protobuf field <code>string ns = 1;</code>
     * @return string
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * Kubernetes Pod namespace.
     *
     * Generated from protobuf field <code>string ns = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNs($var)
    {
        GPBUtil::checkString($var, True);
        $this->ns = $var;

        return $this;
    }

    /**
     * Kubernetes Pod name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Kubernetes Pod name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Pod labels.  For Kubernetes containers, these are applied to the
     * container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Label labels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Pod labels.  For Kubernetes containers, these are applied to the
     * container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Label labels = 3;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\Label>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\Label::class);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Container containers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Container containers = 4;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\Container>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContainers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\Container::class);
        $this->containers = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Pod::class, \Google\Cloud\SecurityCenter\V1\Kubernetes_Pod::class);

