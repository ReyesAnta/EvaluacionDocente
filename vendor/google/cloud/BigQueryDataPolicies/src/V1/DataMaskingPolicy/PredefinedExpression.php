<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datapolicies/v1/datapolicy.proto

namespace Google\Cloud\BigQuery\DataPolicies\V1\DataMaskingPolicy;

use UnexpectedValueException;

/**
 * The available masking rules. Learn more here:
 * https://cloud.google.com/bigquery/docs/column-data-masking-intro#masking_options.
 *
 * Protobuf type <code>google.cloud.bigquery.datapolicies.v1.DataMaskingPolicy.PredefinedExpression</code>
 */
class PredefinedExpression
{
    /**
     * Default, unspecified predefined expression. No masking will take place
     * since no expression is specified.
     *
     * Generated from protobuf enum <code>PREDEFINED_EXPRESSION_UNSPECIFIED = 0;</code>
     */
    const PREDEFINED_EXPRESSION_UNSPECIFIED = 0;
    /**
     * Masking expression to replace data with SHA-256 hash.
     *
     * Generated from protobuf enum <code>SHA256 = 3;</code>
     */
    const SHA256 = 3;
    /**
     * Masking expression to replace data with NULLs.
     *
     * Generated from protobuf enum <code>ALWAYS_NULL = 5;</code>
     */
    const ALWAYS_NULL = 5;
    /**
     * Masking expression to replace data with their default masking values.
     * The default masking values for each type listed as below:
     * * STRING: ""
     * * BYTES: b''
     * * INTEGER: 0
     * * FLOAT: 0.0
     * * NUMERIC: 0
     * * BOOLEAN: FALSE
     * * TIMESTAMP: 1970-01-01 00:00:00 UTC
     * * DATE: 1970-01-01
     * * TIME: 00:00:00
     * * DATETIME: 1970-01-01T00:00:00
     * * GEOGRAPHY: POINT(0 0)
     * * BIGNUMERIC: 0
     * * ARRAY: []
     * * STRUCT: NOT_APPLICABLE
     * * JSON: NULL
     *
     * Generated from protobuf enum <code>DEFAULT_MASKING_VALUE = 7;</code>
     */
    const DEFAULT_MASKING_VALUE = 7;
    /**
     * Masking expression shows the last four characters of text.
     * The masking behavior is as follows:
     * * If text length > 4 characters: Replace text with XXXXX, append last
     * four characters of original text.
     * * If text length <= 4 characters: Apply SHA-256 hash.
     *
     * Generated from protobuf enum <code>LAST_FOUR_CHARACTERS = 9;</code>
     */
    const LAST_FOUR_CHARACTERS = 9;
    /**
     * Masking expression shows the first four characters of text.
     * The masking behavior is as follows:
     * * If text length > 4 characters: Replace text with XXXXX, prepend first
     * four characters of original text.
     * * If text length <= 4 characters: Apply SHA-256 hash.
     *
     * Generated from protobuf enum <code>FIRST_FOUR_CHARACTERS = 10;</code>
     */
    const FIRST_FOUR_CHARACTERS = 10;
    /**
     * Masking expression for email addresses.
     * The masking behavior is as follows:
     * * Syntax-valid email address: Replace username with XXXXX. For example,
     * cloudysanfrancisco&#64;gmail.com becomes XXXXX&#64;gmail.com.
     * * Syntax-invalid email address: Apply SHA-256 hash.
     * For more information, see [Email
     * mask](https://cloud.google.com/bigquery/docs/column-data-masking-intro#masking_options).
     *
     * Generated from protobuf enum <code>EMAIL_MASK = 12;</code>
     */
    const EMAIL_MASK = 12;
    /**
     * Masking expression to only show the year of `Date`,
     * `DateTime` and `TimeStamp`. For example, with the
     * year 2076:
     * * DATE         :  2076-01-01
     * * DATETIME     :  2076-01-01T00:00:00
     * * TIMESTAMP    :  2076-01-01 00:00:00 UTC
     * Truncation occurs according to the UTC time zone. To change this, adjust
     * the default time zone using the `time_zone` system variable.
     * For more information, see the <a
     * href="https://cloud.google.com/bigquery/docs/reference/system-variables">System
     * variables reference</a>.
     *
     * Generated from protobuf enum <code>DATE_YEAR_MASK = 13;</code>
     */
    const DATE_YEAR_MASK = 13;

    private static $valueToName = [
        self::PREDEFINED_EXPRESSION_UNSPECIFIED => 'PREDEFINED_EXPRESSION_UNSPECIFIED',
        self::SHA256 => 'SHA256',
        self::ALWAYS_NULL => 'ALWAYS_NULL',
        self::DEFAULT_MASKING_VALUE => 'DEFAULT_MASKING_VALUE',
        self::LAST_FOUR_CHARACTERS => 'LAST_FOUR_CHARACTERS',
        self::FIRST_FOUR_CHARACTERS => 'FIRST_FOUR_CHARACTERS',
        self::EMAIL_MASK => 'EMAIL_MASK',
        self::DATE_YEAR_MASK => 'DATE_YEAR_MASK',
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


