<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/control.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class Control
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$google/cloud/retail/v2/control.protogoogle.cloud.retail.v2google/api/resource.proto#google/cloud/retail/v2/common.proto"�
Control,
rule (2.google.cloud.retail.v2.RuleH 
name (	B�A
display_name (	B�A*
associated_serving_config_ids (	B�AD
solution_types (2$.google.cloud.retail.v2.SolutionTypeB�A�AO
search_solution_use_case (2-.google.cloud.retail.v2.SearchSolutionUseCase:q�An
retail.googleapis.com/ControlMprojects/{project}/locations/{location}/catalogs/{catalog}/controls/{control}B	
controlB�
com.google.cloud.retail.v2BControlProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

