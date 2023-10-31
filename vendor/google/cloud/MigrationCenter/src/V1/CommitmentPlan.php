<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use UnexpectedValueException;

/**
 * The plan of commitments for VM resource-based committed use discount (CUD).
 *
 * Protobuf type <code>google.cloud.migrationcenter.v1.CommitmentPlan</code>
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
     * No commitment plan.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_NONE = 1;</code>
     */
    const COMMITMENT_PLAN_NONE = 1;
    /**
     * 1 year commitment.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_ONE_YEAR = 2;</code>
     */
    const COMMITMENT_PLAN_ONE_YEAR = 2;
    /**
     * 3 years commitment.
     *
     * Generated from protobuf enum <code>COMMITMENT_PLAN_THREE_YEARS = 3;</code>
     */
    const COMMITMENT_PLAN_THREE_YEARS = 3;

    private static $valueToName = [
        self::COMMITMENT_PLAN_UNSPECIFIED => 'COMMITMENT_PLAN_UNSPECIFIED',
        self::COMMITMENT_PLAN_NONE => 'COMMITMENT_PLAN_NONE',
        self::COMMITMENT_PLAN_ONE_YEAR => 'COMMITMENT_PLAN_ONE_YEAR',
        self::COMMITMENT_PLAN_THREE_YEARS => 'COMMITMENT_PLAN_THREE_YEARS',
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
