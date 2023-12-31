<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta\Instance;

use UnexpectedValueException;

/**
 * The Availability type of an instance. Potential values:
 * - ZONAL: The instance serves data from only one zone. Outages in that
 *     zone affect instance availability.
 * - REGIONAL: The instance can serve data from more than one zone in a
 *     region (it is highly available).
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.Instance.AvailabilityType</code>
 */
class AvailabilityType
{
    /**
     * This is an unknown Availability type.
     *
     * Generated from protobuf enum <code>AVAILABILITY_TYPE_UNSPECIFIED = 0;</code>
     */
    const AVAILABILITY_TYPE_UNSPECIFIED = 0;
    /**
     * Zonal available instance.
     *
     * Generated from protobuf enum <code>ZONAL = 1;</code>
     */
    const ZONAL = 1;
    /**
     * Regional (or Highly) available instance.
     *
     * Generated from protobuf enum <code>REGIONAL = 2;</code>
     */
    const REGIONAL = 2;

    private static $valueToName = [
        self::AVAILABILITY_TYPE_UNSPECIFIED => 'AVAILABILITY_TYPE_UNSPECIFIED',
        self::ZONAL => 'ZONAL',
        self::REGIONAL => 'REGIONAL',
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


