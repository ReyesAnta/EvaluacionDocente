<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConfidentialSpaceInfo contains information related to the Confidential Space
 * TEE.
 *
 * Generated from protobuf message <code>google.cloud.confidentialcomputing.v1.ConfidentialSpaceInfo</code>
 */
class ConfidentialSpaceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A list of signed entities containing container image signatures
     * that can be used for server-side signature verification.
     *
     * Generated from protobuf field <code>repeated .google.cloud.confidentialcomputing.v1.SignedEntity signed_entities = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $signed_entities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ConfidentialComputing\V1\SignedEntity>|\Google\Protobuf\Internal\RepeatedField $signed_entities
     *           Optional. A list of signed entities containing container image signatures
     *           that can be used for server-side signature verification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Confidentialcomputing\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A list of signed entities containing container image signatures
     * that can be used for server-side signature verification.
     *
     * Generated from protobuf field <code>repeated .google.cloud.confidentialcomputing.v1.SignedEntity signed_entities = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignedEntities()
    {
        return $this->signed_entities;
    }

    /**
     * Optional. A list of signed entities containing container image signatures
     * that can be used for server-side signature verification.
     *
     * Generated from protobuf field <code>repeated .google.cloud.confidentialcomputing.v1.SignedEntity signed_entities = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\ConfidentialComputing\V1\SignedEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignedEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ConfidentialComputing\V1\SignedEntity::class);
        $this->signed_entities = $arr;

        return $this;
    }

}

