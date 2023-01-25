<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.ResetVcenterCredentials][google.cloud.vmwareengine.v1.VmwareEngine.ResetVcenterCredentials]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ResetVcenterCredentialsRequest</code>
 */
class ResetVcenterCredentialsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the private cloud
     * to reset credentials for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $private_cloud = '';
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $private_cloud
     *           Required. The resource name of the private cloud
     *           to reset credentials for.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server guarantees that a
     *           request doesn't result in creation of duplicate commitments for at least 60
     *           minutes.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the private cloud
     * to reset credentials for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPrivateCloud()
    {
        return $this->private_cloud;
    }

    /**
     * Required. The resource name of the private cloud
     * to reset credentials for.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateCloud($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_cloud = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

