<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/service.proto

namespace GPBMetadata\Google\Cloud\Servicedirectory\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\Endpoint::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/servicedirectory/v1/service.proto google.cloud.servicedirectory.v1google/api/resource.proto/google/cloud/servicedirectory/v1/endpoint.proto"�
Service
name (	B�AT
annotations (2:.google.cloud.servicedirectory.v1.Service.AnnotationsEntryB�AB
	endpoints (2*.google.cloud.servicedirectory.v1.EndpointB�A2
AnnotationsEntry
key (	
value (	:8:�A|
\'servicedirectory.googleapis.com/ServiceQprojects/{project}/locations/{location}/namespaces/{namespace}/services/{service}B�
$com.google.cloud.servicedirectory.v1BServiceProtoPZPcloud.google.com/go/servicedirectory/apiv1/servicedirectorypb;servicedirectorypb�� Google.Cloud.ServiceDirectory.V1� Google\\Cloud\\ServiceDirectory\\V1�#Google::Cloud::ServiceDirectory::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

