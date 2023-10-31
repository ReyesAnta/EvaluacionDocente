<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientgateways/v1/client_gateways_service.proto

namespace GPBMetadata\Google\Cloud\Beyondcorp\Clientgateways\V1;

class ClientGatewaysService
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Ggoogle/cloud/beyondcorp/clientgateways/v1/client_gateways_service.proto)google.cloud.beyondcorp.clientgateways.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"�
ClientGateway
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AR
state (2>.google.cloud.beyondcorp.clientgateways.v1.ClientGateway.StateB�A
id (	B�A%
client_connector_service (	B�A"j
State
STATE_UNSPECIFIED 
CREATING
UPDATING
DELETING
RUNNING
DOWN	
ERROR:u�Ar
\'beyondcorp.googleapis.com/ClientGatewayGprojects/{project}/locations/{location}/clientGateways/{client_gateway}"�
ListClientGatewaysRequest?
parent (	B/�A�A)\'beyondcorp.googleapis.com/ClientGateway
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListClientGatewaysResponseQ
client_gateways (28.google.cloud.beyondcorp.clientgateways.v1.ClientGateway
next_page_token (	
unreachable (	"X
GetClientGatewayRequest=
name (	B/�A�A)
\'beyondcorp.googleapis.com/ClientGateway"�
CreateClientGatewayRequest?
parent (	B/�A�A)\'beyondcorp.googleapis.com/ClientGateway
client_gateway_id (	B�AU
client_gateway (28.google.cloud.beyondcorp.clientgateways.v1.ClientGatewayB�A

request_id (	B�A
validate_only (B�A"�
DeleteClientGatewayRequest=
name (	B/�A�A)
\'beyondcorp.googleapis.com/ClientGateway

request_id (	B�A
validate_only (B�A"�
ClientGatewayOperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
ClientGatewaysService�
ListClientGatewaysD.google.cloud.beyondcorp.clientgateways.v1.ListClientGatewaysRequestE.google.cloud.beyondcorp.clientgateways.v1.ListClientGatewaysResponse"C���42/v1/{parent=projects/*/locations/*}/clientGateways�Aparent�
GetClientGatewayB.google.cloud.beyondcorp.clientgateways.v1.GetClientGatewayRequest8.google.cloud.beyondcorp.clientgateways.v1.ClientGateway"A���42/v1/{name=projects/*/locations/*/clientGateways/*}�Aname�
CreateClientGatewayE.google.cloud.beyondcorp.clientgateways.v1.CreateClientGatewayRequest.google.longrunning.Operation"����D"2/v1/{parent=projects/*/locations/*}/clientGateways:client_gateway�A\'parent,client_gateway,client_gateway_id�A/
ClientGatewayClientGatewayOperationMetadata�
DeleteClientGatewayE.google.cloud.beyondcorp.clientgateways.v1.DeleteClientGatewayRequest.google.longrunning.Operation"{���4*2/v1/{name=projects/*/locations/*/clientGateways/*}�Aname�A7
google.protobuf.EmptyClientGatewayOperationMetadataM�Abeyondcorp.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
-com.google.cloud.beyondcorp.clientgateways.v1BClientGatewaysServiceProtoPZUcloud.google.com/go/beyondcorp/clientgateways/apiv1/clientgatewayspb;clientgatewayspb�)Google.Cloud.BeyondCorp.ClientGateways.V1�)Google\\Cloud\\BeyondCorp\\ClientGateways\\V1�-Google::Cloud::BeyondCorp::ClientGateways::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

