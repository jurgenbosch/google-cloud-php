<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/image.proto

namespace GPBMetadata\Grafeas\V1;

class Image
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
grafeas/v1/image.proto
grafeas.v1"-
Layer
	directive (	
	arguments (	"@
Fingerprint
v1_name (	
v2_blob (	
v2_name (	"O
	ImageNote
resource_url (	,
fingerprint (2.grafeas.v1.Fingerprint"�
ImageOccurrence,
fingerprint (2.grafeas.v1.Fingerprint
distance (%

layer_info (2.grafeas.v1.Layer
base_resource_url (	BQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

