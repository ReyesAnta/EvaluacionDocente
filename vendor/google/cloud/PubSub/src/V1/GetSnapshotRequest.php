<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the GetSnapshot method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.GetSnapshotRequest</code>
 */
class GetSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $snapshot = '';

    /**
     * @param string $snapshot Required. The name of the snapshot to get.
     *                         Format is `projects/{project}/snapshots/{snap}`. Please see
     *                         {@see SubscriberClient::snapshotName()} for help formatting this field.
     *
     * @return \Google\Cloud\PubSub\V1\GetSnapshotRequest
     *
     * @experimental
     */
    public static function build(string $snapshot): self
    {
        return (new self())
            ->setSnapshot($snapshot);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $snapshot
     *           Required. The name of the snapshot to get.
     *           Format is `projects/{project}/snapshots/{snap}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * Required. The name of the snapshot to get.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot = $var;

        return $this;
    }

}
