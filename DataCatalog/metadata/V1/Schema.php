<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/schema.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/datacatalog/v1/schema.protogoogle.cloud.datacatalog.v1"D
Schema:
columns (2).google.cloud.datacatalog.v1.ColumnSchema"�
ColumnSchema
column (	B�A
type (	B�A
description (	B�A
mode (	B�AB

subcolumns (2).google.cloud.datacatalog.v1.ColumnSchemaB�AB�
com.google.cloud.datacatalog.v1PZAcloud.google.com/go/datacatalog/apiv1/datacatalogpb;datacatalogpb��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

