<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time windows constrain the time of an event, such as the arrival time at a
 * visit, or the start and end time of a vehicle.
 * Hard time window bounds, `start_time` and `end_time`, enforce the earliest
 * and latest time of the event, such that `start_time <= event_time <=
 * end_time`. The soft time window lower bound, `soft_start_time`, expresses a
 * preference for the event to happen at or after `soft_start_time` by incurring
 * a cost proportional to how long before soft_start_time the event occurs. The
 * soft time window upper bound, `soft_end_time`, expresses a preference for the
 * event to happen at or before `soft_end_time` by incurring a cost proportional
 * to how long after `soft_end_time` the event occurs. `start_time`, `end_time`,
 * `soft_start_time` and `soft_end_time` should be within the global time limits
 * (see
 * [ShipmentModel.global_start_time][google.cloud.optimization.v1.ShipmentModel.global_start_time]
 * and
 * [ShipmentModel.global_end_time][google.cloud.optimization.v1.ShipmentModel.global_end_time])
 * and should respect:
 * ```
 *   0 <= `start_time` <= `soft_start_time` <= `end_time` and
 *   0 <= `start_time` <= `soft_end_time` <= `end_time`.
 * ```
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.TimeWindow</code>
 */
class TimeWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * The hard time window start time. If unspecified it will be set to
     * `ShipmentModel.global_start_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * The hard time window end time. If unspecified it will be set to
     * `ShipmentModel.global_end_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * The soft start time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_start_time = 3;</code>
     */
    private $soft_start_time = null;
    /**
     * The soft end time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_end_time = 4;</code>
     */
    private $soft_end_time = null;
    /**
     * A cost per hour added to other costs in the model if the event occurs
     * before soft_start_time, computed as:
     * ```
     *    max(0, soft_start_time - t.seconds)
     *                           * cost_per_hour_before_soft_start_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * soft_start_time has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_before_soft_start_time = 5;</code>
     */
    private $cost_per_hour_before_soft_start_time = null;
    /**
     * A cost per hour added to other costs in the model if the event occurs after
     * `soft_end_time`, computed as:
     * ```
     *    max(0, t.seconds - soft_end_time.seconds)
     *                     * cost_per_hour_after_soft_end_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * `soft_end_time` has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_after_soft_end_time = 6;</code>
     */
    private $cost_per_hour_after_soft_end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The hard time window start time. If unspecified it will be set to
     *           `ShipmentModel.global_start_time`.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The hard time window end time. If unspecified it will be set to
     *           `ShipmentModel.global_end_time`.
     *     @type \Google\Protobuf\Timestamp $soft_start_time
     *           The soft start time of the time window.
     *     @type \Google\Protobuf\Timestamp $soft_end_time
     *           The soft end time of the time window.
     *     @type float $cost_per_hour_before_soft_start_time
     *           A cost per hour added to other costs in the model if the event occurs
     *           before soft_start_time, computed as:
     *           ```
     *              max(0, soft_start_time - t.seconds)
     *                                     * cost_per_hour_before_soft_start_time / 3600,
     *           t being the time of the event.
     *           ```
     *           This cost must be positive, and the field can only be set if
     *           soft_start_time has been set.
     *     @type float $cost_per_hour_after_soft_end_time
     *           A cost per hour added to other costs in the model if the event occurs after
     *           `soft_end_time`, computed as:
     *           ```
     *              max(0, t.seconds - soft_end_time.seconds)
     *                               * cost_per_hour_after_soft_end_time / 3600,
     *           t being the time of the event.
     *           ```
     *           This cost must be positive, and the field can only be set if
     *           `soft_end_time` has been set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * The hard time window start time. If unspecified it will be set to
     * `ShipmentModel.global_start_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The hard time window start time. If unspecified it will be set to
     * `ShipmentModel.global_start_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The hard time window end time. If unspecified it will be set to
     * `ShipmentModel.global_end_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The hard time window end time. If unspecified it will be set to
     * `ShipmentModel.global_end_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The soft start time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSoftStartTime()
    {
        return $this->soft_start_time;
    }

    public function hasSoftStartTime()
    {
        return isset($this->soft_start_time);
    }

    public function clearSoftStartTime()
    {
        unset($this->soft_start_time);
    }

    /**
     * The soft start time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSoftStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->soft_start_time = $var;

        return $this;
    }

    /**
     * The soft end time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSoftEndTime()
    {
        return $this->soft_end_time;
    }

    public function hasSoftEndTime()
    {
        return isset($this->soft_end_time);
    }

    public function clearSoftEndTime()
    {
        unset($this->soft_end_time);
    }

    /**
     * The soft end time of the time window.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp soft_end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSoftEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->soft_end_time = $var;

        return $this;
    }

    /**
     * A cost per hour added to other costs in the model if the event occurs
     * before soft_start_time, computed as:
     * ```
     *    max(0, soft_start_time - t.seconds)
     *                           * cost_per_hour_before_soft_start_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * soft_start_time has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_before_soft_start_time = 5;</code>
     * @return float
     */
    public function getCostPerHourBeforeSoftStartTime()
    {
        return isset($this->cost_per_hour_before_soft_start_time) ? $this->cost_per_hour_before_soft_start_time : 0.0;
    }

    public function hasCostPerHourBeforeSoftStartTime()
    {
        return isset($this->cost_per_hour_before_soft_start_time);
    }

    public function clearCostPerHourBeforeSoftStartTime()
    {
        unset($this->cost_per_hour_before_soft_start_time);
    }

    /**
     * A cost per hour added to other costs in the model if the event occurs
     * before soft_start_time, computed as:
     * ```
     *    max(0, soft_start_time - t.seconds)
     *                           * cost_per_hour_before_soft_start_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * soft_start_time has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_before_soft_start_time = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setCostPerHourBeforeSoftStartTime($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost_per_hour_before_soft_start_time = $var;

        return $this;
    }

    /**
     * A cost per hour added to other costs in the model if the event occurs after
     * `soft_end_time`, computed as:
     * ```
     *    max(0, t.seconds - soft_end_time.seconds)
     *                     * cost_per_hour_after_soft_end_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * `soft_end_time` has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_after_soft_end_time = 6;</code>
     * @return float
     */
    public function getCostPerHourAfterSoftEndTime()
    {
        return isset($this->cost_per_hour_after_soft_end_time) ? $this->cost_per_hour_after_soft_end_time : 0.0;
    }

    public function hasCostPerHourAfterSoftEndTime()
    {
        return isset($this->cost_per_hour_after_soft_end_time);
    }

    public function clearCostPerHourAfterSoftEndTime()
    {
        unset($this->cost_per_hour_after_soft_end_time);
    }

    /**
     * A cost per hour added to other costs in the model if the event occurs after
     * `soft_end_time`, computed as:
     * ```
     *    max(0, t.seconds - soft_end_time.seconds)
     *                     * cost_per_hour_after_soft_end_time / 3600,
     * t being the time of the event.
     * ```
     * This cost must be positive, and the field can only be set if
     * `soft_end_time` has been set.
     *
     * Generated from protobuf field <code>optional double cost_per_hour_after_soft_end_time = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setCostPerHourAfterSoftEndTime($var)
    {
        GPBUtil::checkDouble($var);
        $this->cost_per_hour_after_soft_end_time = $var;

        return $this;
    }

}
