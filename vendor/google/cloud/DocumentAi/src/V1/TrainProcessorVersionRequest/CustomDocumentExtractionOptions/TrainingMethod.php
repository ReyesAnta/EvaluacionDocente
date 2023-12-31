<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\TrainProcessorVersionRequest\CustomDocumentExtractionOptions;

use UnexpectedValueException;

/**
 * Training Method for CDE. `TRAINING_METHOD_UNSPECIFIED` will fall back to
 * `MODEL_BASED`.
 *
 * Protobuf type <code>google.cloud.documentai.v1.TrainProcessorVersionRequest.CustomDocumentExtractionOptions.TrainingMethod</code>
 */
class TrainingMethod
{
    /**
     * Generated from protobuf enum <code>TRAINING_METHOD_UNSPECIFIED = 0;</code>
     */
    const TRAINING_METHOD_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>MODEL_BASED = 1;</code>
     */
    const MODEL_BASED = 1;
    /**
     * Generated from protobuf enum <code>TEMPLATE_BASED = 2;</code>
     */
    const TEMPLATE_BASED = 2;

    private static $valueToName = [
        self::TRAINING_METHOD_UNSPECIFIED => 'TRAINING_METHOD_UNSPECIFIED',
        self::MODEL_BASED => 'MODEL_BASED',
        self::TEMPLATE_BASED => 'TEMPLATE_BASED',
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


