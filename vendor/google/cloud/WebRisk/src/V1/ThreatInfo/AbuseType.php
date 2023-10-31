<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1\ThreatInfo;

use UnexpectedValueException;

/**
 * The abuse type found on the URI.
 *
 * Protobuf type <code>google.cloud.webrisk.v1.ThreatInfo.AbuseType</code>
 */
class AbuseType
{
    /**
     * Default.
     *
     * Generated from protobuf enum <code>ABUSE_TYPE_UNSPECIFIED = 0;</code>
     */
    const ABUSE_TYPE_UNSPECIFIED = 0;
    /**
     * The URI contains malware.
     *
     * Generated from protobuf enum <code>MALWARE = 1;</code>
     */
    const MALWARE = 1;
    /**
     * The URI contains social engineering.
     *
     * Generated from protobuf enum <code>SOCIAL_ENGINEERING = 2;</code>
     */
    const SOCIAL_ENGINEERING = 2;
    /**
     * The URI contains unwanted software.
     *
     * Generated from protobuf enum <code>UNWANTED_SOFTWARE = 3;</code>
     */
    const UNWANTED_SOFTWARE = 3;

    private static $valueToName = [
        self::ABUSE_TYPE_UNSPECIFIED => 'ABUSE_TYPE_UNSPECIFIED',
        self::MALWARE => 'MALWARE',
        self::SOCIAL_ENGINEERING => 'SOCIAL_ENGINEERING',
        self::UNWANTED_SOFTWARE => 'UNWANTED_SOFTWARE',
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
class_alias(AbuseType::class, \Google\Cloud\WebRisk\V1\ThreatInfo_AbuseType::class);

