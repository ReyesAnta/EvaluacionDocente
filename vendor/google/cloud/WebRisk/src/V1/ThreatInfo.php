<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Context about the submission including the type of abuse found on the URI and
 * supporting details.
 * option (google.api.message_visibility).restriction = "TRUSTED_TESTER";
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.ThreatInfo</code>
 */
class ThreatInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of abuse.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.AbuseType abuse_type = 1;</code>
     */
    private $abuse_type = 0;
    /**
     * Confidence that the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.Confidence threat_confidence = 2;</code>
     */
    private $threat_confidence = null;
    /**
     * Context about why the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.ThreatJustification threat_justification = 3;</code>
     */
    private $threat_justification = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $abuse_type
     *           The type of abuse.
     *     @type \Google\Cloud\WebRisk\V1\ThreatInfo\Confidence $threat_confidence
     *           Confidence that the URI is unsafe.
     *     @type \Google\Cloud\WebRisk\V1\ThreatInfo\ThreatJustification $threat_justification
     *           Context about why the URI is unsafe.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of abuse.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.AbuseType abuse_type = 1;</code>
     * @return int
     */
    public function getAbuseType()
    {
        return $this->abuse_type;
    }

    /**
     * The type of abuse.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.AbuseType abuse_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAbuseType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebRisk\V1\ThreatInfo\AbuseType::class);
        $this->abuse_type = $var;

        return $this;
    }

    /**
     * Confidence that the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.Confidence threat_confidence = 2;</code>
     * @return \Google\Cloud\WebRisk\V1\ThreatInfo\Confidence|null
     */
    public function getThreatConfidence()
    {
        return $this->threat_confidence;
    }

    public function hasThreatConfidence()
    {
        return isset($this->threat_confidence);
    }

    public function clearThreatConfidence()
    {
        unset($this->threat_confidence);
    }

    /**
     * Confidence that the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.Confidence threat_confidence = 2;</code>
     * @param \Google\Cloud\WebRisk\V1\ThreatInfo\Confidence $var
     * @return $this
     */
    public function setThreatConfidence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\ThreatInfo\Confidence::class);
        $this->threat_confidence = $var;

        return $this;
    }

    /**
     * Context about why the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.ThreatJustification threat_justification = 3;</code>
     * @return \Google\Cloud\WebRisk\V1\ThreatInfo\ThreatJustification|null
     */
    public function getThreatJustification()
    {
        return $this->threat_justification;
    }

    public function hasThreatJustification()
    {
        return isset($this->threat_justification);
    }

    public function clearThreatJustification()
    {
        unset($this->threat_justification);
    }

    /**
     * Context about why the URI is unsafe.
     *
     * Generated from protobuf field <code>.google.cloud.webrisk.v1.ThreatInfo.ThreatJustification threat_justification = 3;</code>
     * @param \Google\Cloud\WebRisk\V1\ThreatInfo\ThreatJustification $var
     * @return $this
     */
    public function setThreatJustification($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebRisk\V1\ThreatInfo\ThreatJustification::class);
        $this->threat_justification = $var;

        return $this;
    }

}

