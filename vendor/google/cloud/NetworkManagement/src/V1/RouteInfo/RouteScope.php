<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\RouteInfo;

use UnexpectedValueException;

/**
 * Indicates where routes are applicable.
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.RouteInfo.RouteScope</code>
 */
class RouteScope
{
    /**
     * Unspecified scope. Default value.
     *
     * Generated from protobuf enum <code>ROUTE_SCOPE_UNSPECIFIED = 0;</code>
     */
    const ROUTE_SCOPE_UNSPECIFIED = 0;
    /**
     * Route is applicable to packets in Network.
     *
     * Generated from protobuf enum <code>NETWORK = 1;</code>
     */
    const NETWORK = 1;
    /**
     * Route is applicable to packets using NCC Hub's routing table.
     *
     * Generated from protobuf enum <code>NCC_HUB = 2;</code>
     */
    const NCC_HUB = 2;

    private static $valueToName = [
        self::ROUTE_SCOPE_UNSPECIFIED => 'ROUTE_SCOPE_UNSPECIFIED',
        self::NETWORK => 'NETWORK',
        self::NCC_HUB => 'NCC_HUB',
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


