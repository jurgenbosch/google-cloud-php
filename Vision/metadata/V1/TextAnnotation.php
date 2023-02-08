<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class TextAnnotation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/vision/v1/text_annotation.protogoogle.cloud.vision.v1"�
TextAnnotation+
pages (2.google.cloud.vision.v1.Page
text (	=
DetectedLanguage
language_code (	

confidence (�
DetectedBreakL
type (2>.google.cloud.vision.v1.TextAnnotation.DetectedBreak.BreakType
	is_prefix ("c
	BreakType
UNKNOWN 	
SPACE

SURE_SPACE
EOL_SURE_SPACE

HYPHEN

LINE_BREAK�
TextPropertyS
detected_languages (27.google.cloud.vision.v1.TextAnnotation.DetectedLanguageL
detected_break (24.google.cloud.vision.v1.TextAnnotation.DetectedBreak"�
PageE
property (23.google.cloud.vision.v1.TextAnnotation.TextProperty
width (
height (-
blocks (2.google.cloud.vision.v1.Block

confidence ("�
BlockE
property (23.google.cloud.vision.v1.TextAnnotation.TextProperty:
bounding_box (2$.google.cloud.vision.v1.BoundingPoly5

paragraphs (2!.google.cloud.vision.v1.Paragraph;

block_type (2\'.google.cloud.vision.v1.Block.BlockType

confidence ("R
	BlockType
UNKNOWN 
TEXT	
TABLE
PICTURE	
RULER
BARCODE"�
	ParagraphE
property (23.google.cloud.vision.v1.TextAnnotation.TextProperty:
bounding_box (2$.google.cloud.vision.v1.BoundingPoly+
words (2.google.cloud.vision.v1.Word

confidence ("�
WordE
property (23.google.cloud.vision.v1.TextAnnotation.TextProperty:
bounding_box (2$.google.cloud.vision.v1.BoundingPoly/
symbols (2.google.cloud.vision.v1.Symbol

confidence ("�
SymbolE
property (23.google.cloud.vision.v1.TextAnnotation.TextProperty:
bounding_box (2$.google.cloud.vision.v1.BoundingPoly
text (	

confidence (Bq
com.google.cloud.vision.v1BTextAnnotationProtoPZ2cloud.google.com/go/vision/apiv1/visionpb;visionpb��GCVNbproto3'
        , true);

        static::$is_initialized = true;
    }
}

