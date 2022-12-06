<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for connection properties specific to Azure.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.AzureProperties</code>
 */
class AzureProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string application = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $application = '';
    /**
     * Output only. The client id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client_id = '';
    /**
     * Output only. The object id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string object_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $object_id = '';
    /**
     * The id of customer's directory that host the data.
     *
     * Generated from protobuf field <code>string customer_tenant_id = 4;</code>
     */
    protected $customer_tenant_id = '';
    /**
     * The URL user will be redirected to after granting consent during connection
     * setup.
     *
     * Generated from protobuf field <code>string redirect_uri = 5;</code>
     */
    protected $redirect_uri = '';
    /**
     * The client id of the user's Azure Active Directory Application used for a
     * federated connection.
     *
     * Generated from protobuf field <code>string federated_application_client_id = 6;</code>
     */
    protected $federated_application_client_id = '';
    /**
     * Output only. A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's Azure Active Directory
     * Application.
     *
     * Generated from protobuf field <code>string identity = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application
     *           Output only. The name of the Azure Active Directory Application.
     *     @type string $client_id
     *           Output only. The client id of the Azure Active Directory Application.
     *     @type string $object_id
     *           Output only. The object id of the Azure Active Directory Application.
     *     @type string $customer_tenant_id
     *           The id of customer's directory that host the data.
     *     @type string $redirect_uri
     *           The URL user will be redirected to after granting consent during connection
     *           setup.
     *     @type string $federated_application_client_id
     *           The client id of the user's Azure Active Directory Application used for a
     *           federated connection.
     *     @type string $identity
     *           Output only. A unique Google-owned and Google-generated identity for the Connection.
     *           This identity will be used to access the user's Azure Active Directory
     *           Application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string application = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Output only. The name of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string application = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApplication($var)
    {
        GPBUtil::checkString($var, True);
        $this->application = $var;

        return $this;
    }

    /**
     * Output only. The client id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Output only. The client id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string client_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

    /**
     * Output only. The object id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string object_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * Output only. The object id of the Azure Active Directory Application.
     *
     * Generated from protobuf field <code>string object_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_id = $var;

        return $this;
    }

    /**
     * The id of customer's directory that host the data.
     *
     * Generated from protobuf field <code>string customer_tenant_id = 4;</code>
     * @return string
     */
    public function getCustomerTenantId()
    {
        return $this->customer_tenant_id;
    }

    /**
     * The id of customer's directory that host the data.
     *
     * Generated from protobuf field <code>string customer_tenant_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_tenant_id = $var;

        return $this;
    }

    /**
     * The URL user will be redirected to after granting consent during connection
     * setup.
     *
     * Generated from protobuf field <code>string redirect_uri = 5;</code>
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * The URL user will be redirected to after granting consent during connection
     * setup.
     *
     * Generated from protobuf field <code>string redirect_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRedirectUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->redirect_uri = $var;

        return $this;
    }

    /**
     * The client id of the user's Azure Active Directory Application used for a
     * federated connection.
     *
     * Generated from protobuf field <code>string federated_application_client_id = 6;</code>
     * @return string
     */
    public function getFederatedApplicationClientId()
    {
        return $this->federated_application_client_id;
    }

    /**
     * The client id of the user's Azure Active Directory Application used for a
     * federated connection.
     *
     * Generated from protobuf field <code>string federated_application_client_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFederatedApplicationClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->federated_application_client_id = $var;

        return $this;
    }

    /**
     * Output only. A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's Azure Active Directory
     * Application.
     *
     * Generated from protobuf field <code>string identity = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Output only. A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's Azure Active Directory
     * Application.
     *
     * Generated from protobuf field <code>string identity = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

}

