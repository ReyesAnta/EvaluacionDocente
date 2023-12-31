<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha;

use UnexpectedValueException;

/**
 * The supported database engine versions.
 *
 * Protobuf type <code>google.cloud.alloydb.v1alpha.DatabaseVersion</code>
 */
class DatabaseVersion
{
    /**
     * This is an unknown database version.
     *
     * Generated from protobuf enum <code>DATABASE_VERSION_UNSPECIFIED = 0;</code>
     */
    const DATABASE_VERSION_UNSPECIFIED = 0;
    /**
     * DEPRECATED - The database version is Postgres 13.
     *
     * Generated from protobuf enum <code>POSTGRES_13 = 1 [deprecated = true];</code>
     */
    const POSTGRES_13 = 1;
    /**
     * The database version is Postgres 14.
     *
     * Generated from protobuf enum <code>POSTGRES_14 = 2;</code>
     */
    const POSTGRES_14 = 2;
    /**
     * The database version is Postgres 15.
     *
     * Generated from protobuf enum <code>POSTGRES_15 = 3;</code>
     */
    const POSTGRES_15 = 3;

    private static $valueToName = [
        self::DATABASE_VERSION_UNSPECIFIED => 'DATABASE_VERSION_UNSPECIFIED',
        self::POSTGRES_13 => 'POSTGRES_13',
        self::POSTGRES_14 => 'POSTGRES_14',
        self::POSTGRES_15 => 'POSTGRES_15',
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

