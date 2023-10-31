<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/resources.proto

namespace Google\Cloud\AlloyDb\V1beta\Instance;

use UnexpectedValueException;

/**
 * Type of an Instance
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.Instance.InstanceType</code>
 */
class InstanceType
{
    /**
     * The type of the instance is unknown.
     *
     * Generated from protobuf enum <code>INSTANCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const INSTANCE_TYPE_UNSPECIFIED = 0;
    /**
     * PRIMARY instances support read and write operations.
     *
     * Generated from protobuf enum <code>PRIMARY = 1;</code>
     */
    const PRIMARY = 1;
    /**
     * READ POOL instances support read operations only. Each read pool instance
     * consists of one or more homogeneous nodes.
     *  * Read pool of size 1 can only have zonal availability.
     *  * Read pools with node count of 2 or more can have regional
     *    availability (nodes are present in 2 or more zones in a region).
     *
     * Generated from protobuf enum <code>READ_POOL = 2;</code>
     */
    const READ_POOL = 2;
    /**
     * SECONDARY instances support read operations only. SECONDARY instance
     * is a cross-region read replica
     *
     * Generated from protobuf enum <code>SECONDARY = 3;</code>
     */
    const SECONDARY = 3;

    private static $valueToName = [
        self::INSTANCE_TYPE_UNSPECIFIED => 'INSTANCE_TYPE_UNSPECIFIED',
        self::PRIMARY => 'PRIMARY',
        self::READ_POOL => 'READ_POOL',
        self::SECONDARY => 'SECONDARY',
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


