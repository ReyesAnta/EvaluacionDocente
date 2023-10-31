<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/snapshots.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a snapshot of a job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.Snapshot</code>
 */
class Snapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique ID of this snapshot.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The project this snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     */
    private $project_id = '';
    /**
     * The job this snapshot was created from.
     *
     * Generated from protobuf field <code>string source_job_id = 3;</code>
     */
    private $source_job_id = '';
    /**
     * The time this snapshot was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 4;</code>
     */
    private $creation_time = null;
    /**
     * The time after which this snapshot will be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 5;</code>
     */
    private $ttl = null;
    /**
     * State of the snapshot.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SnapshotState state = 6;</code>
     */
    private $state = 0;
    /**
     * Pub/Sub snapshot metadata.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubsubSnapshotMetadata pubsub_metadata = 7;</code>
     */
    private $pubsub_metadata;
    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     */
    private $description = '';
    /**
     * The disk byte size of the snapshot. Only available for snapshots in READY
     * state.
     *
     * Generated from protobuf field <code>int64 disk_size_bytes = 9;</code>
     */
    private $disk_size_bytes = 0;
    /**
     * Cloud region where this snapshot lives in, e.g., "us-central1".
     *
     * Generated from protobuf field <code>string region = 10;</code>
     */
    private $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique ID of this snapshot.
     *     @type string $project_id
     *           The project this snapshot belongs to.
     *     @type string $source_job_id
     *           The job this snapshot was created from.
     *     @type \Google\Protobuf\Timestamp $creation_time
     *           The time this snapshot was created.
     *     @type \Google\Protobuf\Duration $ttl
     *           The time after which this snapshot will be automatically deleted.
     *     @type int $state
     *           State of the snapshot.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\PubsubSnapshotMetadata>|\Google\Protobuf\Internal\RepeatedField $pubsub_metadata
     *           Pub/Sub snapshot metadata.
     *     @type string $description
     *           User specified description of the snapshot. Maybe empty.
     *     @type int|string $disk_size_bytes
     *           The disk byte size of the snapshot. Only available for snapshots in READY
     *           state.
     *     @type string $region
     *           Cloud region where this snapshot lives in, e.g., "us-central1".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Snapshots::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique ID of this snapshot.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique ID of this snapshot.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The project this snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project this snapshot belongs to.
     *
     * Generated from protobuf field <code>string project_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The job this snapshot was created from.
     *
     * Generated from protobuf field <code>string source_job_id = 3;</code>
     * @return string
     */
    public function getSourceJobId()
    {
        return $this->source_job_id;
    }

    /**
     * The job this snapshot was created from.
     *
     * Generated from protobuf field <code>string source_job_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_job_id = $var;

        return $this;
    }

    /**
     * The time this snapshot was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreationTime()
    {
        return $this->creation_time;
    }

    public function hasCreationTime()
    {
        return isset($this->creation_time);
    }

    public function clearCreationTime()
    {
        unset($this->creation_time);
    }

    /**
     * The time this snapshot was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->creation_time = $var;

        return $this;
    }

    /**
     * The time after which this snapshot will be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * The time after which this snapshot will be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ttl = $var;

        return $this;
    }

    /**
     * State of the snapshot.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SnapshotState state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of the snapshot.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.SnapshotState state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\SnapshotState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Pub/Sub snapshot metadata.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubsubSnapshotMetadata pubsub_metadata = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPubsubMetadata()
    {
        return $this->pubsub_metadata;
    }

    /**
     * Pub/Sub snapshot metadata.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.PubsubSnapshotMetadata pubsub_metadata = 7;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\PubsubSnapshotMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPubsubMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\PubsubSnapshotMetadata::class);
        $this->pubsub_metadata = $arr;

        return $this;
    }

    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User specified description of the snapshot. Maybe empty.
     *
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The disk byte size of the snapshot. Only available for snapshots in READY
     * state.
     *
     * Generated from protobuf field <code>int64 disk_size_bytes = 9;</code>
     * @return int|string
     */
    public function getDiskSizeBytes()
    {
        return $this->disk_size_bytes;
    }

    /**
     * The disk byte size of the snapshot. Only available for snapshots in READY
     * state.
     *
     * Generated from protobuf field <code>int64 disk_size_bytes = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_bytes = $var;

        return $this;
    }

    /**
     * Cloud region where this snapshot lives in, e.g., "us-central1".
     *
     * Generated from protobuf field <code>string region = 10;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Cloud region where this snapshot lives in, e.g., "us-central1".
     *
     * Generated from protobuf field <code>string region = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

