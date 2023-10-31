<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for BigtableService.MutateRows.
 *
 * Generated from protobuf message <code>google.bigtable.v2.MutateRowsResponse</code>
 */
class MutateRowsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * One or more results for Entries from the batch request.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     */
    private $entries;
    /**
     * Information about how client should limit the rate (QPS). Primirily used by
     * supported official Cloud Bigtable clients. If unset, the rate limit info is
     * not provided by the server.
     *
     * Generated from protobuf field <code>optional .google.bigtable.v2.RateLimitInfo rate_limit_info = 3;</code>
     */
    private $rate_limit_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Bigtable\V2\MutateRowsResponse\Entry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           One or more results for Entries from the batch request.
     *     @type \Google\Cloud\Bigtable\V2\RateLimitInfo $rate_limit_info
     *           Information about how client should limit the rate (QPS). Primirily used by
     *           supported official Cloud Bigtable clients. If unset, the rate limit info is
     *           not provided by the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct($data);
    }

    /**
     * One or more results for Entries from the batch request.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * One or more results for Entries from the batch request.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v2.MutateRowsResponse.Entry entries = 1;</code>
     * @param array<\Google\Cloud\Bigtable\V2\MutateRowsResponse\Entry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\V2\MutateRowsResponse\Entry::class);
        $this->entries = $arr;

        return $this;
    }

    /**
     * Information about how client should limit the rate (QPS). Primirily used by
     * supported official Cloud Bigtable clients. If unset, the rate limit info is
     * not provided by the server.
     *
     * Generated from protobuf field <code>optional .google.bigtable.v2.RateLimitInfo rate_limit_info = 3;</code>
     * @return \Google\Cloud\Bigtable\V2\RateLimitInfo|null
     */
    public function getRateLimitInfo()
    {
        return $this->rate_limit_info;
    }

    public function hasRateLimitInfo()
    {
        return isset($this->rate_limit_info);
    }

    public function clearRateLimitInfo()
    {
        unset($this->rate_limit_info);
    }

    /**
     * Information about how client should limit the rate (QPS). Primirily used by
     * supported official Cloud Bigtable clients. If unset, the rate limit info is
     * not provided by the server.
     *
     * Generated from protobuf field <code>optional .google.bigtable.v2.RateLimitInfo rate_limit_info = 3;</code>
     * @param \Google\Cloud\Bigtable\V2\RateLimitInfo $var
     * @return $this
     */
    public function setRateLimitInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\RateLimitInfo::class);
        $this->rate_limit_info = $var;

        return $this;
    }

}
