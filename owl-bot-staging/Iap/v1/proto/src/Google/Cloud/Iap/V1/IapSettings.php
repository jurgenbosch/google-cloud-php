<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The IAP configurable settings.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.IapSettings</code>
 */
class IapSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the IAP protected resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Top level wrapper for all access related setting in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessSettings access_settings = 5;</code>
     */
    protected $access_settings = null;
    /**
     * Top level wrapper for all application related settings in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.ApplicationSettings application_settings = 6;</code>
     */
    protected $application_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the IAP protected resource.
     *     @type \Google\Cloud\Iap\V1\AccessSettings $access_settings
     *           Top level wrapper for all access related setting in IAP
     *     @type \Google\Cloud\Iap\V1\ApplicationSettings $application_settings
     *           Top level wrapper for all application related settings in IAP
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the IAP protected resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the IAP protected resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Top level wrapper for all access related setting in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessSettings access_settings = 5;</code>
     * @return \Google\Cloud\Iap\V1\AccessSettings|null
     */
    public function getAccessSettings()
    {
        return $this->access_settings;
    }

    public function hasAccessSettings()
    {
        return isset($this->access_settings);
    }

    public function clearAccessSettings()
    {
        unset($this->access_settings);
    }

    /**
     * Top level wrapper for all access related setting in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessSettings access_settings = 5;</code>
     * @param \Google\Cloud\Iap\V1\AccessSettings $var
     * @return $this
     */
    public function setAccessSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\AccessSettings::class);
        $this->access_settings = $var;

        return $this;
    }

    /**
     * Top level wrapper for all application related settings in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.ApplicationSettings application_settings = 6;</code>
     * @return \Google\Cloud\Iap\V1\ApplicationSettings|null
     */
    public function getApplicationSettings()
    {
        return $this->application_settings;
    }

    public function hasApplicationSettings()
    {
        return isset($this->application_settings);
    }

    public function clearApplicationSettings()
    {
        unset($this->application_settings);
    }

    /**
     * Top level wrapper for all application related settings in IAP
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.ApplicationSettings application_settings = 6;</code>
     * @param \Google\Cloud\Iap\V1\ApplicationSettings $var
     * @return $this
     */
    public function setApplicationSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\ApplicationSettings::class);
        $this->application_settings = $var;

        return $this;
    }

}

