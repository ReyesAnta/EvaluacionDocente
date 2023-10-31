<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\SoleTenantConfig\NodeAffinity;

use UnexpectedValueException;

/**
 * Operator allows user to specify affinity or anti-affinity for the
 * given key values.
 *
 * Protobuf type <code>google.container.v1.SoleTenantConfig.NodeAffinity.Operator</code>
 */
class Operator
{
    /**
     * Invalid or unspecified affinity operator.
     *
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Affinity operator.
     *
     * Generated from protobuf enum <code>IN = 1;</code>
     */
    const IN = 1;
    /**
     * Anti-affinity operator.
     *
     * Generated from protobuf enum <code>NOT_IN = 2;</code>
     */
    const NOT_IN = 2;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::IN => 'IN',
        self::NOT_IN => 'NOT_IN',
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
class_alias(Operator::class, \Google\Cloud\Container\V1\SoleTenantConfig_NodeAffinity_Operator::class);

