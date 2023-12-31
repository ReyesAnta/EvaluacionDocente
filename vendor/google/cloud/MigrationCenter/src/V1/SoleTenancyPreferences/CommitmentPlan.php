<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\SoleTenancyPreferences;

use UnexpectedValueException;

/**
 * Type of committed use discount.
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.SoleTenancyPreferences.CommitmentPlan</code>
 */
class CommitmentPlan
{
    /**
     * Unspecified commitment plan.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_UNSPECIFIED = 0;</code>
     */
    const COMMITMENT_PLAN_UNSPECIFIED = 0;
    /**
     * No commitment plan (on-demand usage).
     *
     * Generated from protobuf enum <code>ON_DEMAND = 1;</code>
     */
    const ON_DEMAND = 1;
    /**
     * 1 year commitment.
     *
     * Generated from protobuf enum <code>COMMITMENT_1_YEAR = 2;</code>
     */
    const COMMITMENT_1_YEAR = 2;
    /**
     * 3 years commitment.
     *
     * Generated from protobuf enum <code>COMMITMENT_3_YEAR = 3;</code>
     */
    const COMMITMENT_3_YEAR = 3;

    private static $valueToName = [
        self::COMMITMENT_PLAN_UNSPECIFIED => 'COMMITMENT_PLAN_UNSPECIFIED',
        self::ON_DEMAND => 'ON_DEMAND',
        self::COMMITMENT_1_YEAR => 'COMMITMENT_1_YEAR',
        self::COMMITMENT_3_YEAR => 'COMMITMENT_3_YEAR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


