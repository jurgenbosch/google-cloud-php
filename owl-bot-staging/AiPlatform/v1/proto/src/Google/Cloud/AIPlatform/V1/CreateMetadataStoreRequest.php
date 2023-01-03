<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.CreateMetadataStore][google.cloud.aiplatform.v1.MetadataService.CreateMetadataStore].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateMetadataStoreRequest</code>
 */
class CreateMetadataStoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location where the MetadataStore should
     * be created.
     * Format: `projects/{project}/locations/{location}/`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The MetadataStore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataStore metadata_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metadata_store = null;
    /**
     * The {metadatastore} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataStores in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataStore.)
     *
     * Generated from protobuf field <code>string metadata_store_id = 3;</code>
     */
    protected $metadata_store_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location where the MetadataStore should
     *           be created.
     *           Format: `projects/{project}/locations/{location}/`
     *     @type \Google\Cloud\AIPlatform\V1\MetadataStore $metadata_store
     *           Required. The MetadataStore to create.
     *     @type string $metadata_store_id
     *           The {metadatastore} portion of the resource name with the format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *           If not provided, the MetadataStore's ID will be a UUID generated by the
     *           service.
     *           Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     *           Must be unique across all MetadataStores in the parent Location.
     *           (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     *           if the caller can't view the preexisting MetadataStore.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location where the MetadataStore should
     * be created.
     * Format: `projects/{project}/locations/{location}/`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location where the MetadataStore should
     * be created.
     * Format: `projects/{project}/locations/{location}/`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The MetadataStore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataStore metadata_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\MetadataStore|null
     */
    public function getMetadataStore()
    {
        return $this->metadata_store;
    }

    public function hasMetadataStore()
    {
        return isset($this->metadata_store);
    }

    public function clearMetadataStore()
    {
        unset($this->metadata_store);
    }

    /**
     * Required. The MetadataStore to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MetadataStore metadata_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\MetadataStore $var
     * @return $this
     */
    public function setMetadataStore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MetadataStore::class);
        $this->metadata_store = $var;

        return $this;
    }

    /**
     * The {metadatastore} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataStores in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataStore.)
     *
     * Generated from protobuf field <code>string metadata_store_id = 3;</code>
     * @return string
     */
    public function getMetadataStoreId()
    {
        return $this->metadata_store_id;
    }

    /**
     * The {metadatastore} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     * If not provided, the MetadataStore's ID will be a UUID generated by the
     * service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all MetadataStores in the parent Location.
     * (Otherwise the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED
     * if the caller can't view the preexisting MetadataStore.)
     *
     * Generated from protobuf field <code>string metadata_store_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataStoreId($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_store_id = $var;

        return $this;
    }

}

