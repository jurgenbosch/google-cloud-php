<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_dataset.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class ConversationDataset
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
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Gcs::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/dialogflow/v2/conversation_dataset.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto$google/cloud/dialogflow/v2/gcs.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto".
ConversationInfo
language_code (	B�A"U
InputConfig<

gcs_source (2&.google.cloud.dialogflow.v2.GcsSourcesH B
source"�
ConversationDataset
name (	B�A
display_name (	B�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�AB
input_config (2\'.google.cloud.dialogflow.v2.InputConfigB�AL
conversation_info (2,.google.cloud.dialogflow.v2.ConversationInfoB�A
conversation_count (B�A:��A�
-dialogflow.googleapis.com/ConversationDatasetSprojects/{project}/locations/{location}/conversationDatasets/{conversation_dataset}"�
 CreateConversationDatasetRequest
parent (	B�AR
conversation_dataset (2/.google.cloud.dialogflow.v2.ConversationDatasetB�A"d
GetConversationDatasetRequestC
name (	B5�A�A/
-dialogflow.googleapis.com/ConversationDataset"�
ListConversationDatasetsRequestE
parent (	B5�A�A/-dialogflow.googleapis.com/ConversationDataset
	page_size (B�A

page_token (	B�A"�
 ListConversationDatasetsResponseN
conversation_datasets (2/.google.cloud.dialogflow.v2.ConversationDataset
next_page_token (	"g
 DeleteConversationDatasetRequestC
name (	B5�A�A/
-dialogflow.googleapis.com/ConversationDataset"�
ImportConversationDataRequestC
name (	B5�A�A/
-dialogflow.googleapis.com/ConversationDatasetB
input_config (2\'.google.cloud.dialogflow.v2.InputConfigB�A"�
\'ImportConversationDataOperationMetadataP
conversation_dataset (	B2�A/
-dialogflow.googleapis.com/ConversationDataset,
partial_failures (2.google.rpc.Status/
create_time (2.google.protobuf.Timestamp"�
\'ImportConversationDataOperationResponseP
conversation_dataset (	B2�A/
-dialogflow.googleapis.com/ConversationDataset
import_count ("~
*CreateConversationDatasetOperationMetadataP
conversation_dataset (	B2�A/
-dialogflow.googleapis.com/ConversationDataset",
*DeleteConversationDatasetOperationMetadata2�
ConversationDatasets�
CreateConversationDataset<.google.cloud.dialogflow.v2.CreateConversationDatasetRequest.google.longrunning.Operation"����P"8/v2/{parent=projects/*/locations/*}/conversationDatasets:conversation_dataset�Aparent,conversation_dataset�AA
ConversationDataset*CreateConversationDatasetOperationMetadata�
GetConversationDataset9.google.cloud.dialogflow.v2.GetConversationDatasetRequest/.google.cloud.dialogflow.v2.ConversationDataset"w���j,/v2/{name=projects/*/conversationDatasets/*}Z:8/v2/{name=projects/*/locations/*/conversationDatasets/*}�Aname�
ListConversationDatasets;.google.cloud.dialogflow.v2.ListConversationDatasetsRequest<.google.cloud.dialogflow.v2.ListConversationDatasetsResponse"y���j,/v2/{parent=projects/*}/conversationDatasetsZ:8/v2/{parent=projects/*/locations/*}/conversationDatasets�Aparent�
DeleteConversationDataset<.google.cloud.dialogflow.v2.DeleteConversationDatasetRequest.google.longrunning.Operation"����:*8/v2/{name=projects/*/locations/*/conversationDatasets/*}�Aname�AC
google.protobuf.Empty*DeleteConversationDatasetOperationMetadata�
ImportConversationData9.google.cloud.dialogflow.v2.ImportConversationDataRequest.google.longrunning.Operation"�����"C/v2/{name=projects/*/conversationDatasets/*}:importConversationData:*ZT"O/v2/{name=projects/*/locations/*/conversationDatasets/*}:importConversationData:*�AR
\'ImportConversationDataOperationResponse\'ImportConversationDataOperationMetadatax�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BConversationDatasetProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

