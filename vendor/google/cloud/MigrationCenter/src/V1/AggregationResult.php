<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message describing a result of an aggregation.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.AggregationResult</code>
 */
class AggregationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *     @type \Google\Cloud\MigrationCenter\V1\AggregationResult\Count $count
     *     @type \Google\Cloud\MigrationCenter\V1\AggregationResult\Sum $sum
     *     @type \Google\Cloud\MigrationCenter\V1\AggregationResult\Histogram $histogram
     *     @type \Google\Cloud\MigrationCenter\V1\AggregationResult\Frequency $frequency
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Count count = 2;</code>
     * @return \Google\Cloud\MigrationCenter\V1\AggregationResult\Count|null
     */
    public function getCount()
    {
        return $this->readOneof(2);
    }

    public function hasCount()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Count count = 2;</code>
     * @param \Google\Cloud\MigrationCenter\V1\AggregationResult\Count $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\AggregationResult\Count::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Sum sum = 3;</code>
     * @return \Google\Cloud\MigrationCenter\V1\AggregationResult\Sum|null
     */
    public function getSum()
    {
        return $this->readOneof(3);
    }

    public function hasSum()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Sum sum = 3;</code>
     * @param \Google\Cloud\MigrationCenter\V1\AggregationResult\Sum $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\AggregationResult\Sum::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Histogram histogram = 4;</code>
     * @return \Google\Cloud\MigrationCenter\V1\AggregationResult\Histogram|null
     */
    public function getHistogram()
    {
        return $this->readOneof(4);
    }

    public function hasHistogram()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Histogram histogram = 4;</code>
     * @param \Google\Cloud\MigrationCenter\V1\AggregationResult\Histogram $var
     * @return $this
     */
    public function setHistogram($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\AggregationResult\Histogram::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Frequency frequency = 5;</code>
     * @return \Google\Cloud\MigrationCenter\V1\AggregationResult\Frequency|null
     */
    public function getFrequency()
    {
        return $this->readOneof(5);
    }

    public function hasFrequency()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.AggregationResult.Frequency frequency = 5;</code>
     * @param \Google\Cloud\MigrationCenter\V1\AggregationResult\Frequency $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\AggregationResult\Frequency::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}
