<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/regression.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Regression
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/automl/v1beta1/regression.protogoogle.cloud.automl.v1beta1"�
RegressionEvaluationMetrics
root_mean_squared_error (
mean_absolute_error (&
mean_absolute_percentage_error (
	r_squared (#
root_mean_squared_log_error (B�
com.google.cloud.automl.v1beta1BRegressionProtoZAgoogle.golang.org/genproto/googleapis/cloud/automl/v1beta1;automl�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

