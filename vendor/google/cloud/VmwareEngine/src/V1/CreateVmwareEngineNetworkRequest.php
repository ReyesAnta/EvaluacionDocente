<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.CreateVmwareEngineNetwork][google.cloud.vmwareengine.v1.VmwareEngine.CreateVmwareEngineNetwork]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.CreateVmwareEngineNetworkRequest</code>
 */
class CreateVmwareEngineNetworkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the location to create the new VMware Engine
     * network in. A VMware Engine network of type
     * `LEGACY` is a regional resource, and a VMware
     * Engine network of type `STANDARD` is a global resource.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names. For example:
     * `projects/my-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The user-provided identifier of the new VMware Engine network.
     * This identifier must be unique among VMware Engine network resources
     * within the parent and becomes the final token in the name URI. The
     * identifier must meet the following requirements:
     * * For networks of type LEGACY, adheres to the format:
     * `{region-id}-default`. Replace `{region-id}` with the region where you want
     * to create the VMware Engine network. For example, "us-central1-default".
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string vmware_engine_network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vmware_engine_network_id = '';
    /**
     * Required. The initial description of the new VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork vmware_engine_network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vmware_engine_network = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * @param string                                            $parent                Required. The resource name of the location to create the new VMware Engine
     *                                                                                 network in. A VMware Engine network of type
     *                                                                                 `LEGACY` is a regional resource, and a VMware
     *                                                                                 Engine network of type `STANDARD` is a global resource.
     *                                                                                 Resource names are schemeless URIs that follow the conventions in
     *                                                                                 https://cloud.google.com/apis/design/resource_names. For example:
     *                                                                                 `projects/my-project/locations/global`
     *                                                                                 Please see {@see VmwareEngineClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork $vmwareEngineNetwork   Required. The initial description of the new VMware Engine network.
     * @param string                                            $vmwareEngineNetworkId Required. The user-provided identifier of the new VMware Engine network.
     *                                                                                 This identifier must be unique among VMware Engine network resources
     *                                                                                 within the parent and becomes the final token in the name URI. The
     *                                                                                 identifier must meet the following requirements:
     *
     *                                                                                 * For networks of type LEGACY, adheres to the format:
     *                                                                                 `{region-id}-default`. Replace `{region-id}` with the region where you want
     *                                                                                 to create the VMware Engine network. For example, "us-central1-default".
     *                                                                                 * Only contains 1-63 alphanumeric characters and hyphens
     *                                                                                 * Begins with an alphabetical character
     *                                                                                 * Ends with a non-hyphen character
     *                                                                                 * Not formatted as a UUID
     *                                                                                 * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *                                                                                 (section 3.5)
     *
     * @return \Google\Cloud\VmwareEngine\V1\CreateVmwareEngineNetworkRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork $vmwareEngineNetwork, string $vmwareEngineNetworkId): self
    {
        return (new self())
            ->setParent($parent)
            ->setVmwareEngineNetwork($vmwareEngineNetwork)
            ->setVmwareEngineNetworkId($vmwareEngineNetworkId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the location to create the new VMware Engine
     *           network in. A VMware Engine network of type
     *           `LEGACY` is a regional resource, and a VMware
     *           Engine network of type `STANDARD` is a global resource.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names. For example:
     *           `projects/my-project/locations/global`
     *     @type string $vmware_engine_network_id
     *           Required. The user-provided identifier of the new VMware Engine network.
     *           This identifier must be unique among VMware Engine network resources
     *           within the parent and becomes the final token in the name URI. The
     *           identifier must meet the following requirements:
     *           * For networks of type LEGACY, adheres to the format:
     *           `{region-id}-default`. Replace `{region-id}` with the region where you want
     *           to create the VMware Engine network. For example, "us-central1-default".
     *           * Only contains 1-63 alphanumeric characters and hyphens
     *           * Begins with an alphabetical character
     *           * Ends with a non-hyphen character
     *           * Not formatted as a UUID
     *           * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *           (section 3.5)
     *     @type \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork $vmware_engine_network
     *           Required. The initial description of the new VMware Engine network.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server guarantees that a
     *           request doesn't result in creation of duplicate commitments for at least 60
     *           minutes.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the location to create the new VMware Engine
     * network in. A VMware Engine network of type
     * `LEGACY` is a regional resource, and a VMware
     * Engine network of type `STANDARD` is a global resource.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names. For example:
     * `projects/my-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the location to create the new VMware Engine
     * network in. A VMware Engine network of type
     * `LEGACY` is a regional resource, and a VMware
     * Engine network of type `STANDARD` is a global resource.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names. For example:
     * `projects/my-project/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The user-provided identifier of the new VMware Engine network.
     * This identifier must be unique among VMware Engine network resources
     * within the parent and becomes the final token in the name URI. The
     * identifier must meet the following requirements:
     * * For networks of type LEGACY, adheres to the format:
     * `{region-id}-default`. Replace `{region-id}` with the region where you want
     * to create the VMware Engine network. For example, "us-central1-default".
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string vmware_engine_network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVmwareEngineNetworkId()
    {
        return $this->vmware_engine_network_id;
    }

    /**
     * Required. The user-provided identifier of the new VMware Engine network.
     * This identifier must be unique among VMware Engine network resources
     * within the parent and becomes the final token in the name URI. The
     * identifier must meet the following requirements:
     * * For networks of type LEGACY, adheres to the format:
     * `{region-id}-default`. Replace `{region-id}` with the region where you want
     * to create the VMware Engine network. For example, "us-central1-default".
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string vmware_engine_network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVmwareEngineNetworkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vmware_engine_network_id = $var;

        return $this;
    }

    /**
     * Required. The initial description of the new VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork vmware_engine_network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork|null
     */
    public function getVmwareEngineNetwork()
    {
        return $this->vmware_engine_network;
    }

    public function hasVmwareEngineNetwork()
    {
        return isset($this->vmware_engine_network);
    }

    public function clearVmwareEngineNetwork()
    {
        unset($this->vmware_engine_network);
    }

    /**
     * Required. The initial description of the new VMware Engine network.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.VmwareEngineNetwork vmware_engine_network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork $var
     * @return $this
     */
    public function setVmwareEngineNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\VmwareEngineNetwork::class);
        $this->vmware_engine_network = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server guarantees that a
     * request doesn't result in creation of duplicate commitments for at least 60
     * minutes.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

