<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/text_extraction.proto

namespace GPBMetadata\Google\Cloud\Automl\V1;

class TextExtraction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1\TextSegment::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/automl/v1/text_extraction.protogoogle.cloud.automl.v1"t
TextExtractionAnnotation;
text_segment (2#.google.cloud.automl.v1.TextSegmentH 
score (B

annotation"�
TextExtractionEvaluationMetrics
au_prc (r
confidence_metrics_entries (2N.google.cloud.automl.v1.TextExtractionEvaluationMetrics.ConfidenceMetricsEntryk
ConfidenceMetricsEntry
confidence_threshold (
recall (
	precision (
f1_score (B�
com.google.cloud.automl.v1PZ2cloud.google.com/go/automl/apiv1/automlpb;automlpb�Google.Cloud.AutoML.V1�Google\\Cloud\\AutoMl\\V1�Google::Cloud::AutoML::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

