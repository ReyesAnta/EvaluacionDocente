<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preserved state for a given instance.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PreservedState</code>
 */
class PreservedState extends \Google\Protobuf\Internal\Message
{
    /**
     * Preserved disks defined for this instance. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.PreservedStatePreservedDisk> disks = 95594102;</code>
     */
    private $disks;
    /**
     * Preserved metadata defined for this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 86866735;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $disks
     *           Preserved disks defined for this instance. This map is keyed with the device names of the disks.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Preserved metadata defined for this instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Preserved disks defined for this instance. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.PreservedStatePreservedDisk> disks = 95594102;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDisks()
    {
        return $this->disks;
    }

    /**
     * Preserved disks defined for this instance. This map is keyed with the device names of the disks.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.PreservedStatePreservedDisk> disks = 95594102;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDisks($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\PreservedStatePreservedDisk::class);
        $this->disks = $arr;

        return $this;
    }

    /**
     * Preserved metadata defined for this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 86866735;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Preserved metadata defined for this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 86866735;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

