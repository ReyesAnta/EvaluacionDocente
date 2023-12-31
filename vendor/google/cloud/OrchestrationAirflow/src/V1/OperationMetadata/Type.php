<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/operations.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1\OperationMetadata;

use UnexpectedValueException;

/**
 * Type of longrunning operation.
 *
 * Protobuf type <code>google.cloud.orchestration.airflow.service.v1.OperationMetadata.Type</code>
 */
class Type
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * A resource creation operation.
     *
     * Generated from protobuf enum <code>CREATE = 1;</code>
     */
    const CREATE = 1;
    /**
     * A resource deletion operation.
     *
     * Generated from protobuf enum <code>DELETE = 2;</code>
     */
    const DELETE = 2;
    /**
     * A resource update operation.
     *
     * Generated from protobuf enum <code>UPDATE = 3;</code>
     */
    const UPDATE = 3;
    /**
     * A resource check operation.
     *
     * Generated from protobuf enum <code>CHECK = 4;</code>
     */
    const CHECK = 4;
    /**
     * Saves snapshot of the resource operation.
     *
     * Generated from protobuf enum <code>SAVE_SNAPSHOT = 5;</code>
     */
    const SAVE_SNAPSHOT = 5;
    /**
     * Loads snapshot of the resource operation.
     *
     * Generated from protobuf enum <code>LOAD_SNAPSHOT = 6;</code>
     */
    const LOAD_SNAPSHOT = 6;
    /**
     * Triggers failover of environment's Cloud SQL instance (only for highly
     * resilient environments).
     *
     * Generated from protobuf enum <code>DATABASE_FAILOVER = 7;</code>
     */
    const DATABASE_FAILOVER = 7;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::CREATE => 'CREATE',
        self::DELETE => 'DELETE',
        self::UPDATE => 'UPDATE',
        self::CHECK => 'CHECK',
        self::SAVE_SNAPSHOT => 'SAVE_SNAPSHOT',
        self::LOAD_SNAPSHOT => 'LOAD_SNAPSHOT',
        self::DATABASE_FAILOVER => 'DATABASE_FAILOVER',
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


