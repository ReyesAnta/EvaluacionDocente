<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/explanations.proto

namespace Google\Cloud\PolicySimulator\V1\BindingExplanation;

use UnexpectedValueException;

/**
 * Whether a role includes a specific permission.
 *
 * Protobuf type <code>google.cloud.policysimulator.v1.BindingExplanation.RolePermission</code>
 */
class RolePermission
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>ROLE_PERMISSION_UNSPECIFIED = 0;</code>
     */
    const ROLE_PERMISSION_UNSPECIFIED = 0;
    /**
     * The permission is included in the role.
     *
     * Generated from protobuf enum <code>ROLE_PERMISSION_INCLUDED = 1;</code>
     */
    const ROLE_PERMISSION_INCLUDED = 1;
    /**
     * The permission is not included in the role.
     *
     * Generated from protobuf enum <code>ROLE_PERMISSION_NOT_INCLUDED = 2;</code>
     */
    const ROLE_PERMISSION_NOT_INCLUDED = 2;
    /**
     * The user who created the
     * [Replay][google.cloud.policysimulator.v1.Replay] is not
     * allowed to access the binding.
     *
     * Generated from protobuf enum <code>ROLE_PERMISSION_UNKNOWN_INFO_DENIED = 3;</code>
     */
    const ROLE_PERMISSION_UNKNOWN_INFO_DENIED = 3;

    private static $valueToName = [
        self::ROLE_PERMISSION_UNSPECIFIED => 'ROLE_PERMISSION_UNSPECIFIED',
        self::ROLE_PERMISSION_INCLUDED => 'ROLE_PERMISSION_INCLUDED',
        self::ROLE_PERMISSION_NOT_INCLUDED => 'ROLE_PERMISSION_NOT_INCLUDED',
        self::ROLE_PERMISSION_UNKNOWN_INFO_DENIED => 'ROLE_PERMISSION_UNKNOWN_INFO_DENIED',
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


