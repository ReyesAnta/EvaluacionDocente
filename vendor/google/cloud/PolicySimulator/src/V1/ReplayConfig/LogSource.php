<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/simulator.proto

namespace Google\Cloud\PolicySimulator\V1\ReplayConfig;

use UnexpectedValueException;

/**
 * The source of the logs to use for a
 * [Replay][google.cloud.policysimulator.v1.Replay].
 *
 * Protobuf type <code>google.cloud.policysimulator.v1.ReplayConfig.LogSource</code>
 */
class LogSource
{
    /**
     * An unspecified log source.
     * If the log source is unspecified, the
     * [Replay][google.cloud.policysimulator.v1.Replay] defaults to using
     * `RECENT_ACCESSES`.
     *
     * Generated from protobuf enum <code>LOG_SOURCE_UNSPECIFIED = 0;</code>
     */
    const LOG_SOURCE_UNSPECIFIED = 0;
    /**
     * All access logs from the last 90 days. These logs may not include logs
     * from the most recent 7 days.
     *
     * Generated from protobuf enum <code>RECENT_ACCESSES = 1;</code>
     */
    const RECENT_ACCESSES = 1;

    private static $valueToName = [
        self::LOG_SOURCE_UNSPECIFIED => 'LOG_SOURCE_UNSPECIFIED',
        self::RECENT_ACCESSES => 'RECENT_ACCESSES',
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


