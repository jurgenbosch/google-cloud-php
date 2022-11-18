<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for LabelVideo.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.LabelVideoRequest</code>
 */
class LabelVideoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the dataset to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $basic_config = null;
    /**
     * Required. The type of video labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelVideoRequest.Feature feature = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feature = 0;
    protected $request_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig $video_classification_config
     *           Configuration for video classification task.
     *           One of video_classification_config, object_detection_config,
     *           object_tracking_config and event_config is required.
     *     @type \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionConfig $object_detection_config
     *           Configuration for video object detection task.
     *           One of video_classification_config, object_detection_config,
     *           object_tracking_config and event_config is required.
     *     @type \Google\Cloud\DataLabeling\V1beta1\ObjectTrackingConfig $object_tracking_config
     *           Configuration for video object tracking task.
     *           One of video_classification_config, object_detection_config,
     *           object_tracking_config and event_config is required.
     *     @type \Google\Cloud\DataLabeling\V1beta1\EventConfig $event_config
     *           Configuration for video event task.
     *           One of video_classification_config, object_detection_config,
     *           object_tracking_config and event_config is required.
     *     @type string $parent
     *           Required. Name of the dataset to request labeling task, format:
     *           projects/{project_id}/datasets/{dataset_id}
     *     @type \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $basic_config
     *           Required. Basic human annotation config.
     *     @type int $feature
     *           Required. The type of video labeling task.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration for video classification task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.VideoClassificationConfig video_classification_config = 4;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig|null
     */
    public function getVideoClassificationConfig()
    {
        return $this->readOneof(4);
    }

    public function hasVideoClassificationConfig()
    {
        return $this->hasOneof(4);
    }

    /**
     * Configuration for video classification task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.VideoClassificationConfig video_classification_config = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig $var
     * @return $this
     */
    public function setVideoClassificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\VideoClassificationConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Configuration for video object detection task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectDetectionConfig object_detection_config = 5;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionConfig|null
     */
    public function getObjectDetectionConfig()
    {
        return $this->readOneof(5);
    }

    public function hasObjectDetectionConfig()
    {
        return $this->hasOneof(5);
    }

    /**
     * Configuration for video object detection task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectDetectionConfig object_detection_config = 5;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionConfig $var
     * @return $this
     */
    public function setObjectDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ObjectDetectionConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Configuration for video object tracking task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectTrackingConfig object_tracking_config = 6;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ObjectTrackingConfig|null
     */
    public function getObjectTrackingConfig()
    {
        return $this->readOneof(6);
    }

    public function hasObjectTrackingConfig()
    {
        return $this->hasOneof(6);
    }

    /**
     * Configuration for video object tracking task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ObjectTrackingConfig object_tracking_config = 6;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ObjectTrackingConfig $var
     * @return $this
     */
    public function setObjectTrackingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ObjectTrackingConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Configuration for video event task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EventConfig event_config = 7;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EventConfig|null
     */
    public function getEventConfig()
    {
        return $this->readOneof(7);
    }

    public function hasEventConfig()
    {
        return $this->hasOneof(7);
    }

    /**
     * Configuration for video event task.
     * One of video_classification_config, object_detection_config,
     * object_tracking_config and event_config is required.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EventConfig event_config = 7;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EventConfig $var
     * @return $this
     */
    public function setEventConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EventConfig::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Required. Name of the dataset to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the dataset to request labeling task, format:
     * projects/{project_id}/datasets/{dataset_id}
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
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig|null
     */
    public function getBasicConfig()
    {
        return $this->basic_config;
    }

    public function hasBasicConfig()
    {
        return isset($this->basic_config);
    }

    public function clearBasicConfig()
    {
        unset($this->basic_config);
    }

    /**
     * Required. Basic human annotation config.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig $var
     * @return $this
     */
    public function setBasicConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\HumanAnnotationConfig::class);
        $this->basic_config = $var;

        return $this;
    }

    /**
     * Required. The type of video labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelVideoRequest.Feature feature = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Required. The type of video labeling task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelVideoRequest.Feature feature = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFeature($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\LabelVideoRequest\Feature::class);
        $this->feature = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestConfig()
    {
        return $this->whichOneof("request_config");
    }

}

