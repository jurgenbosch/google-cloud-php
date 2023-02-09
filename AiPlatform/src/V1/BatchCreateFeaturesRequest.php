<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.BatchCreateFeatures][google.cloud.aiplatform.v1.FeaturestoreService.BatchCreateFeatures].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchCreateFeaturesRequest</code>
 */
class BatchCreateFeaturesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType to create the batch of
     * Features under. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The request message specifying the Features to create. All
     * Features must be created under the same parent EntityType. The `parent`
     * field in each child request message can be omitted. If `parent` is set in a
     * child request, then the value must match the `parent` value in this request
     * message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CreateFeatureRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the EntityType to create the batch of
     *           Features under. Format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *     @type array<\Google\Cloud\AIPlatform\V1\CreateFeatureRequest>|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The request message specifying the Features to create. All
     *           Features must be created under the same parent EntityType. The `parent`
     *           field in each child request message can be omitted. If `parent` is set in a
     *           child request, then the value must match the `parent` value in this request
     *           message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the EntityType to create the batch of
     * Features under. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the EntityType to create the batch of
     * Features under. Format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
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
     * Required. The request message specifying the Features to create. All
     * Features must be created under the same parent EntityType. The `parent`
     * field in each child request message can be omitted. If `parent` is set in a
     * child request, then the value must match the `parent` value in this request
     * message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CreateFeatureRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. The request message specifying the Features to create. All
     * Features must be created under the same parent EntityType. The `parent`
     * field in each child request message can be omitted. If `parent` is set in a
     * child request, then the value must match the `parent` value in this request
     * message.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.CreateFeatureRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\CreateFeatureRequest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\CreateFeatureRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

