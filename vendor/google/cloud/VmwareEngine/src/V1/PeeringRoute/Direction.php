<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1\PeeringRoute;

use UnexpectedValueException;

/**
 * The direction of the exchanged routes.
 *
 * Protobuf type <code>google.cloud.vmwareengine.v1.PeeringRoute.Direction</code>
 */
class Direction
{
    /**
     * Unspecified exchanged routes direction. This is default.
     *
     * Generated from protobuf enum <code>DIRECTION_UNSPECIFIED = 0;</code>
     */
    const DIRECTION_UNSPECIFIED = 0;
    /**
     * Routes imported from the peer network.
     *
     * Generated from protobuf enum <code>INCOMING = 1;</code>
     */
    const INCOMING = 1;
    /**
     * Routes exported to the peer network.
     *
     * Generated from protobuf enum <code>OUTGOING = 2;</code>
     */
    const OUTGOING = 2;

    private static $valueToName = [
        self::DIRECTION_UNSPECIFIED => 'DIRECTION_UNSPECIFIED',
        self::INCOMING => 'INCOMING',
        self::OUTGOING => 'OUTGOING',
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


