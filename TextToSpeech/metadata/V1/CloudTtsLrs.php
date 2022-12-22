<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts_lrs.proto

namespace GPBMetadata\Google\Cloud\Texttospeech\V1;

class CloudTtsLrs
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
        \GPBMetadata\Google\Cloud\Texttospeech\V1\CloudTts::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

0google/cloud/texttospeech/v1/cloud_tts_lrs.protogoogle.cloud.texttospeech.v1google/api/client.protogoogle/api/field_behavior.proto,google/cloud/texttospeech/v1/cloud_tts.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
SynthesizeLongAudioRequest
parent (	@
input (2,.google.cloud.texttospeech.v1.SynthesisInputB�AD
audio_config (2).google.cloud.texttospeech.v1.AudioConfigB�A
output_gcs_uri (	A
voice (22.google.cloud.texttospeech.v1.VoiceSelectionParams"
SynthesizeLongAudioResponse"�
SynthesizeLongAudioMetadata.

start_time (2.google.protobuf.Timestamp4
last_update_time (2.google.protobuf.Timestamp
progress_percentage (2�
TextToSpeechLongAudioSynthesize�
SynthesizeLongAudio8.google.cloud.texttospeech.v1.SynthesizeLongAudioRequest.google.longrunning.Operation"����E"@/v1/{parent=projects/*/locations/*/voices/*}:SynthesizeLongAudio:*�A:
SynthesizeLongAudioResponseSynthesizeLongAudioMetadataO�Atexttospeech.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.texttospeech.v1B#TextToSpeechLongAudioSynthesisProtoPZHgoogle.golang.org/genproto/googleapis/cloud/texttospeech/v1;texttospeech��Google.Cloud.TextToSpeech.V1�Google\\Cloud\\TextToSpeech\\V1�Google::Cloud::TextToSpeech::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

