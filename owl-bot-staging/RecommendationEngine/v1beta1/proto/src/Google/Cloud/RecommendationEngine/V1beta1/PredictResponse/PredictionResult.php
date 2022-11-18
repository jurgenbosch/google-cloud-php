<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1\PredictResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PredictionResult represents the recommendation prediction results.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PredictResponse.PredictionResult</code>
 */
class PredictionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the recommended catalog item
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Additional item metadata / annotations.
     * Possible values:
     * * `catalogItem`: JSON representation of the catalogItem. Will be set if
     *   `returnCatalogItem` is set to true in `PredictRequest.params`.
     * * `score`: Prediction score in double value. Will be set if
     *   `returnItemScore` is set to true in `PredictRequest.params`.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> item_metadata = 2;</code>
     */
    private $item_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           ID of the recommended catalog item
     *     @type array|\Google\Protobuf\Internal\MapField $item_metadata
     *           Additional item metadata / annotations.
     *           Possible values:
     *           * `catalogItem`: JSON representation of the catalogItem. Will be set if
     *             `returnCatalogItem` is set to true in `PredictRequest.params`.
     *           * `score`: Prediction score in double value. Will be set if
     *             `returnItemScore` is set to true in `PredictRequest.params`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the recommended catalog item
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of the recommended catalog item
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Additional item metadata / annotations.
     * Possible values:
     * * `catalogItem`: JSON representation of the catalogItem. Will be set if
     *   `returnCatalogItem` is set to true in `PredictRequest.params`.
     * * `score`: Prediction score in double value. Will be set if
     *   `returnItemScore` is set to true in `PredictRequest.params`.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> item_metadata = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getItemMetadata()
    {
        return $this->item_metadata;
    }

    /**
     * Additional item metadata / annotations.
     * Possible values:
     * * `catalogItem`: JSON representation of the catalogItem. Will be set if
     *   `returnCatalogItem` is set to true in `PredictRequest.params`.
     * * `score`: Prediction score in double value. Will be set if
     *   `returnItemScore` is set to true in `PredictRequest.params`.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> item_metadata = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setItemMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->item_metadata = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PredictionResult::class, \Google\Cloud\RecommendationEngine\V1beta1\PredictResponse_PredictionResult::class);

