<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/repricing.proto

namespace Google\Cloud\Channel\V1\RepricingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Applies the repricing configuration at the channel partner level.
 * The channel partner value is derived from the resource name. Takes an
 * empty json object.
 * Deprecated: This is no longer supported. Use
 * [RepricingConfig.EntitlementGranularity][google.cloud.channel.v1.RepricingConfig.EntitlementGranularity]
 * instead.
 *
 * @deprecated
 * Generated from protobuf message <code>google.cloud.channel.v1.RepricingConfig.ChannelPartnerGranularity</code>
 */
class ChannelPartnerGranularity extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Repricing::initOnce();
        parent::__construct($data);
    }

}


