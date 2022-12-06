<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AzureClusters.GetAzureClient` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GetAzureClientRequest</code>
 */
class GetAzureClientRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] resource to describe.
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] names are formatted as
     * `projects/<project-id>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] resource to describe.
     *           [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] names are formatted as
     *           `projects/<project-id>/locations/<region>/azureClients/<client-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] resource to describe.
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] names are formatted as
     * `projects/<project-id>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] resource to describe.
     * [AzureClient][google.cloud.gkemulticloud.v1.AzureClient] names are formatted as
     * `projects/<project-id>/locations/<region>/azureClients/<client-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

