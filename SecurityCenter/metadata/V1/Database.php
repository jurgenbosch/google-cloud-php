<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/database.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Database
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
-google/cloud/securitycenter/v1/database.protogoogle.cloud.securitycenter.v1"b
Database
name (	
display_name (	
	user_name (	
query (	
grantees (	B�
"com.google.cloud.securitycenter.v1BDatabaseProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

