<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/provisioning.proto

namespace Google\Cloud\BareMetalSolution\V2\NetworkConfig;

use UnexpectedValueException;

/**
 * Service network block.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.NetworkConfig.ServiceCidr</code>
 */
class ServiceCidr
{
    /**
     * Unspecified value.
     *
     * Generated from protobuf enum <code>SERVICE_CIDR_UNSPECIFIED = 0;</code>
     */
    const SERVICE_CIDR_UNSPECIFIED = 0;
    /**
     * Services are disabled for the given network.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Use the highest /26 block of the network to host services.
     *
     * Generated from protobuf enum <code>HIGH_26 = 2;</code>
     */
    const HIGH_26 = 2;
    /**
     * Use the highest /27 block of the network to host services.
     *
     * Generated from protobuf enum <code>HIGH_27 = 3;</code>
     */
    const HIGH_27 = 3;
    /**
     * Use the highest /28 block of the network to host services.
     *
     * Generated from protobuf enum <code>HIGH_28 = 4;</code>
     */
    const HIGH_28 = 4;

    private static $valueToName = [
        self::SERVICE_CIDR_UNSPECIFIED => 'SERVICE_CIDR_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::HIGH_26 => 'HIGH_26',
        self::HIGH_27 => 'HIGH_27',
        self::HIGH_28 => 'HIGH_28',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServiceCidr::class, \Google\Cloud\BareMetalSolution\V2\NetworkConfig_ServiceCidr::class);

