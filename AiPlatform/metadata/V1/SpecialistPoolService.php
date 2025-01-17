<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/specialist_pool_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class SpecialistPoolService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\SpecialistPool::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/aiplatform/v1/specialist_pool_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto*google/cloud/aiplatform/v1/operation.proto0google/cloud/aiplatform/v1/specialist_pool.proto#google/longrunning/operations.proto google/protobuf/field_mask.proto"�
CreateSpecialistPoolRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationH
specialist_pool (2*.google.cloud.aiplatform.v1.SpecialistPoolB�A"w
%CreateSpecialistPoolOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"Z
GetSpecialistPoolRequest>
name (	B0�A�A*
(aiplatform.googleapis.com/SpecialistPool"�
ListSpecialistPoolsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	-
	read_mask (2.google.protobuf.FieldMask"|
ListSpecialistPoolsResponseD
specialist_pools (2*.google.cloud.aiplatform.v1.SpecialistPool
next_page_token (	"l
DeleteSpecialistPoolRequest>
name (	B0�A�A*
(aiplatform.googleapis.com/SpecialistPool
force ("�
UpdateSpecialistPoolRequestH
specialist_pool (2*.google.cloud.aiplatform.v1.SpecialistPoolB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
%UpdateSpecialistPoolOperationMetadataI
specialist_pool (	B0�A�A*
(aiplatform.googleapis.com/SpecialistPoolN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata2�

SpecialistPoolService�
CreateSpecialistPool7.google.cloud.aiplatform.v1.CreateSpecialistPoolRequest.google.longrunning.Operation"����F"3/v1/{parent=projects/*/locations/*}/specialistPools:specialist_pool�Aparent,specialist_pool�A7
SpecialistPool%CreateSpecialistPoolOperationMetadata�
GetSpecialistPool4.google.cloud.aiplatform.v1.GetSpecialistPoolRequest*.google.cloud.aiplatform.v1.SpecialistPool"B���53/v1/{name=projects/*/locations/*/specialistPools/*}�Aname�
ListSpecialistPools6.google.cloud.aiplatform.v1.ListSpecialistPoolsRequest7.google.cloud.aiplatform.v1.ListSpecialistPoolsResponse"D���53/v1/{parent=projects/*/locations/*}/specialistPools�Aparent�
DeleteSpecialistPool7.google.cloud.aiplatform.v1.DeleteSpecialistPoolRequest.google.longrunning.Operation"u���5*3/v1/{name=projects/*/locations/*/specialistPools/*}�Aname�A0
google.protobuf.EmptyDeleteOperationMetadata�
UpdateSpecialistPool7.google.cloud.aiplatform.v1.UpdateSpecialistPoolRequest.google.longrunning.Operation"����V2C/v1/{specialist_pool.name=projects/*/locations/*/specialistPools/*}:specialist_pool�Aspecialist_pool,update_mask�A7
SpecialistPool%UpdateSpecialistPoolOperationMetadataM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BSpecialistPoolServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

