<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1\FeatureValue;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of feature value.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureValue.Metadata</code>
 */
class Metadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Feature generation timestamp. Typically, it is provided by user at
     * feature ingestion time. If not, feature store
     * will use the system timestamp when the data is ingested into feature
     * store. For streaming ingestion, the time, aligned by days, must be no
     * older than five years (1825 days) and no later than one year (366 days)
     * in the future.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 1;</code>
     */
    private $generate_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $generate_time
     *           Feature generation timestamp. Typically, it is provided by user at
     *           feature ingestion time. If not, feature store
     *           will use the system timestamp when the data is ingested into feature
     *           store. For streaming ingestion, the time, aligned by days, must be no
     *           older than five years (1825 days) and no later than one year (366 days)
     *           in the future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Feature generation timestamp. Typically, it is provided by user at
     * feature ingestion time. If not, feature store
     * will use the system timestamp when the data is ingested into feature
     * store. For streaming ingestion, the time, aligned by days, must be no
     * older than five years (1825 days) and no later than one year (366 days)
     * in the future.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getGenerateTime()
    {
        return $this->generate_time;
    }

    public function hasGenerateTime()
    {
        return isset($this->generate_time);
    }

    public function clearGenerateTime()
    {
        unset($this->generate_time);
    }

    /**
     * Feature generation timestamp. Typically, it is provided by user at
     * feature ingestion time. If not, feature store
     * will use the system timestamp when the data is ingested into feature
     * store. For streaming ingestion, the time, aligned by days, must be no
     * older than five years (1825 days) and no later than one year (366 days)
     * in the future.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGenerateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->generate_time = $var;

        return $this;
    }

}


