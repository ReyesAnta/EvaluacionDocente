<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1\DeleteDeploymentRequest;

use UnexpectedValueException;

/**
 * Policy on how resources actuated by the deployment should be deleted.
 *
 * Protobuf type <code>google.cloud.config.v1.DeleteDeploymentRequest.DeletePolicy</code>
 */
class DeletePolicy
{
    /**
     * Unspecified policy, resources will be deleted.
     *
     * Generated from protobuf enum <code>DELETE_POLICY_UNSPECIFIED = 0;</code>
     */
    const DELETE_POLICY_UNSPECIFIED = 0;
    /**
     * Deletes resources actuated by the deployment.
     *
     * Generated from protobuf enum <code>DELETE = 1;</code>
     */
    const DELETE = 1;
    /**
     * Abandons resources and only deletes the deployment and its metadata.
     *
     * Generated from protobuf enum <code>ABANDON = 2;</code>
     */
    const ABANDON = 2;

    private static $valueToName = [
        self::DELETE_POLICY_UNSPECIFIED => 'DELETE_POLICY_UNSPECIFIED',
        self::DELETE => 'DELETE',
        self::ABANDON => 'ABANDON',
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


