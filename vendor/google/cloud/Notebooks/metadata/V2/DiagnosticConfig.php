<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/diagnostic_config.proto

namespace GPBMetadata\Google\Cloud\Notebooks\V2;

class DiagnosticConfig
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
�
1google/cloud/notebooks/v2/diagnostic_config.protogoogle.cloud.notebooks.v2"�
DiagnosticConfig

gcs_bucket (	B�A
relative_path (	B�A
enable_repair_flag (B�A\'
enable_packet_capture_flag (B�A(
enable_copy_home_files_flag (B�AB�
com.google.cloud.notebooks.v2BDiagnosticConfigProtoPZ;cloud.google.com/go/notebooks/apiv2/notebookspb;notebookspb�Google.Cloud.Notebooks.V2�Google\\Cloud\\Notebooks\\V2�Google::Cloud::Notebooks::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

