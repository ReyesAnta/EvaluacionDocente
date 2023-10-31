<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/index.proto

namespace Google\Cloud\Firestore\Admin\V1\Index;

use UnexpectedValueException;

/**
 * API Scope defines the APIs (Firestore Native, or Firestore in
 * Datastore Mode) that are supported for queries.
 *
 * Protobuf type <code>google.firestore.admin.v1.Index.ApiScope</code>
 */
class ApiScope
{
    /**
     * The index can only be used by the Firestore Native query API.
     * This is the default.
     *
     * Generated from protobuf enum <code>ANY_API = 0;</code>
     */
    const ANY_API = 0;
    /**
     * The index can only be used by the Firestore in Datastore Mode query API.
     *
     * Generated from protobuf enum <code>DATASTORE_MODE_API = 1;</code>
     */
    const DATASTORE_MODE_API = 1;

    private static $valueToName = [
        self::ANY_API => 'ANY_API',
        self::DATASTORE_MODE_API => 'DATASTORE_MODE_API',
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
class_alias(ApiScope::class, \Google\Cloud\Firestore\Admin\V1\Index_ApiScope::class);

