<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/geometry.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Geometry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/automl/v1beta1/geometry.protogoogle.cloud.automl.v1beta1"(
NormalizedVertex	
x (	
y ("Z
BoundingPolyJ
normalized_vertices (2-.google.cloud.automl.v1beta1.NormalizedVertexB�
com.google.cloud.automl.v1beta1PZ7cloud.google.com/go/automl/apiv1beta1/automlpb;automlpb�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

