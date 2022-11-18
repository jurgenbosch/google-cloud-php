<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_issuance_config.proto

namespace Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig\CertificateAuthorityConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information required to contact CA service.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.CertificateIssuanceConfig.CertificateAuthorityConfig.CertificateAuthorityServiceConfig</code>
 */
class CertificateAuthorityServiceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A CA pool resource used to issue a certificate.
     * The CA pool string has a relative resource path following the form
     * "projects/{project}/locations/{location}/caPools/{ca_pool}".
     *
     * Generated from protobuf field <code>string ca_pool = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $ca_pool = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ca_pool
     *           Required. A CA pool resource used to issue a certificate.
     *           The CA pool string has a relative resource path following the form
     *           "projects/{project}/locations/{location}/caPools/{ca_pool}".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateIssuanceConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A CA pool resource used to issue a certificate.
     * The CA pool string has a relative resource path following the form
     * "projects/{project}/locations/{location}/caPools/{ca_pool}".
     *
     * Generated from protobuf field <code>string ca_pool = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCaPool()
    {
        return $this->ca_pool;
    }

    /**
     * Required. A CA pool resource used to issue a certificate.
     * The CA pool string has a relative resource path following the form
     * "projects/{project}/locations/{location}/caPools/{ca_pool}".
     *
     * Generated from protobuf field <code>string ca_pool = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCaPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_pool = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CertificateAuthorityServiceConfig::class, \Google\Cloud\CertificateManager\V1\CertificateIssuanceConfig_CertificateAuthorityConfig_CertificateAuthorityServiceConfig::class);

