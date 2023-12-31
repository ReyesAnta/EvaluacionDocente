<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes measured latency distribution.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.LatencyDistribution</code>
 */
class LatencyDistribution extends \Google\Protobuf\Internal\Message
{
    /**
     * Representative latency percentiles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.LatencyPercentile latency_percentiles = 1;</code>
     */
    private $latency_percentiles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkManagement\V1\LatencyPercentile>|\Google\Protobuf\Internal\RepeatedField $latency_percentiles
     *           Representative latency percentiles.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        parent::__construct($data);
    }

    /**
     * Representative latency percentiles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.LatencyPercentile latency_percentiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLatencyPercentiles()
    {
        return $this->latency_percentiles;
    }

    /**
     * Representative latency percentiles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkmanagement.v1.LatencyPercentile latency_percentiles = 1;</code>
     * @param array<\Google\Cloud\NetworkManagement\V1\LatencyPercentile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLatencyPercentiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkManagement\V1\LatencyPercentile::class);
        $this->latency_percentiles = $arr;

        return $this;
    }

}

