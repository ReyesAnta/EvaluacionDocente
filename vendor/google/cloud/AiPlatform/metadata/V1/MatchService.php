<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/match_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class MatchService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Index::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/aiplatform/v1/match_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto&google/cloud/aiplatform/v1/index.proto"�
FindNeighborsRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint
deployed_index_id (	G
queries (26.google.cloud.aiplatform.v1.FindNeighborsRequest.Query
return_full_datapoint (�
QueryB
	datapoint (2*.google.cloud.aiplatform.v1.IndexDatapointB�A
neighbor_count (-
%per_crowding_attribute_neighbor_count ("
approximate_neighbor_count (.
&fraction_leaf_nodes_to_search_override ("�
FindNeighborsResponse]
nearest_neighbors (2B.google.cloud.aiplatform.v1.FindNeighborsResponse.NearestNeighbors[
Neighbor=
	datapoint (2*.google.cloud.aiplatform.v1.IndexDatapoint
distance (m
NearestNeighbors

id (	M
	neighbors (2:.google.cloud.aiplatform.v1.FindNeighborsResponse.Neighbor"�
ReadIndexDatapointsRequestG
index_endpoint (	B/�A�A)
\'aiplatform.googleapis.com/IndexEndpoint
deployed_index_id (	
ids (	"]
ReadIndexDatapointsResponse>

datapoints (2*.google.cloud.aiplatform.v1.IndexDatapoint2�
MatchService�

ReadIndexDatapoints6.google.cloud.aiplatform.v1.ReadIndexDatapointsRequest7.google.cloud.aiplatform.v1.ReadIndexDatapointsResponse"[���U"P/v1/{index_endpoint=projects/*/locations/*/indexEndpoints/*}:readIndexDatapoints:*M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BMatchServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
