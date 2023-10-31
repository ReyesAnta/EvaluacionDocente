<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeconnect/v1/tether.proto

namespace Google\Cloud\ApigeeConnect\V1;

use UnexpectedValueException;

/**
 * HTTP Scheme.
 *
 * Protobuf type <code>google.cloud.apigeeconnect.v1.Scheme</code>
 */
class Scheme
{
    /**
     * Unspecified scheme.
     *
     * Generated from protobuf enum <code>SCHEME_UNSPECIFIED = 0;</code>
     */
    const SCHEME_UNSPECIFIED = 0;
    /**
     * HTTPS protocol.
     *
     * Generated from protobuf enum <code>HTTPS = 1;</code>
     */
    const HTTPS = 1;

    private static $valueToName = [
        self::SCHEME_UNSPECIFIED => 'SCHEME_UNSPECIFIED',
        self::HTTPS => 'HTTPS',
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

