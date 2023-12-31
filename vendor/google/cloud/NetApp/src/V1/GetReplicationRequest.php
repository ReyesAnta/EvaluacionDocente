<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/replication.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetReplicationRequest gets the state of a replication.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.GetReplicationRequest</code>
 */
class GetReplicationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The replication resource name, in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The replication resource name, in the format
     *                     `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *                     Please see {@see NetAppClient::replicationName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetApp\V1\GetReplicationRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The replication resource name, in the format
     *           `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The replication resource name, in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The replication resource name, in the format
     * `projects/{project_id}/locations/{location}/volumes/{volume_id}/replications/{replication_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

