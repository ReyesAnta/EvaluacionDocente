<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/type/types.proto

namespace Google\Shopping\Type;

use UnexpectedValueException;

/**
 * Destinations available for a product.
 * Destinations are used in Merchant Center to allow you to control where the
 * products from your data feed should be displayed.
 *
 * Protobuf type <code>google.shopping.type.Destination</code>
 */
class Destination
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>DESTINATION_UNSPECIFIED = 0;</code>
     */
    const DESTINATION_UNSPECIFIED = 0;
    /**
     * Shopping ads.
     *
     * Generated from protobuf enum <code>SHOPPING_ADS = 1;</code>
     */
    const SHOPPING_ADS = 1;
    /**
     * Local inventory ads.
     *
     * Generated from protobuf enum <code>LOCAL_INVENTORY_ADS = 2;</code>
     */
    const LOCAL_INVENTORY_ADS = 2;
    /**
     * Free listings.
     *
     * Generated from protobuf enum <code>FREE_LISTINGS = 3;</code>
     */
    const FREE_LISTINGS = 3;
    /**
     * Free local product listings.
     *
     * Generated from protobuf enum <code>FREE_LOCAL_LISTINGS = 4;</code>
     */
    const FREE_LOCAL_LISTINGS = 4;

    private static $valueToName = [
        self::DESTINATION_UNSPECIFIED => 'DESTINATION_UNSPECIFIED',
        self::SHOPPING_ADS => 'SHOPPING_ADS',
        self::LOCAL_INVENTORY_ADS => 'LOCAL_INVENTORY_ADS',
        self::FREE_LISTINGS => 'FREE_LISTINGS',
        self::FREE_LOCAL_LISTINGS => 'FREE_LOCAL_LISTINGS',
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

