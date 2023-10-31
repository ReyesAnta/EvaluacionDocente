<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for GlobalAddresses.Move. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.MoveGlobalAddressRequest</code>
 */
class MoveGlobalAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the address resource to move.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $address = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalAddressesMoveRequest global_addresses_move_request_resource = 302807283 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $global_addresses_move_request_resource = null;
    /**
     * Source project ID which the Address is moved from.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;

    /**
     * @param string                                              $project                            Source project ID which the Address is moved from.
     * @param string                                              $address                            Name of the address resource to move.
     * @param \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest $globalAddressesMoveRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\MoveGlobalAddressRequest
     *
     * @experimental
     */
    public static function build(string $project, string $address, \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest $globalAddressesMoveRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setAddress($address)
            ->setGlobalAddressesMoveRequestResource($globalAddressesMoveRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           Name of the address resource to move.
     *     @type \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest $global_addresses_move_request_resource
     *           The body resource for this request
     *     @type string $project
     *           Source project ID which the Address is moved from.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the address resource to move.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Name of the address resource to move.
     *
     * Generated from protobuf field <code>string address = 462920692 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalAddressesMoveRequest global_addresses_move_request_resource = 302807283 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest|null
     */
    public function getGlobalAddressesMoveRequestResource()
    {
        return $this->global_addresses_move_request_resource;
    }

    public function hasGlobalAddressesMoveRequestResource()
    {
        return isset($this->global_addresses_move_request_resource);
    }

    public function clearGlobalAddressesMoveRequestResource()
    {
        unset($this->global_addresses_move_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GlobalAddressesMoveRequest global_addresses_move_request_resource = 302807283 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest $var
     * @return $this
     */
    public function setGlobalAddressesMoveRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GlobalAddressesMoveRequest::class);
        $this->global_addresses_move_request_resource = $var;

        return $this;
    }

    /**
     * Source project ID which the Address is moved from.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Source project ID which the Address is moved from.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

