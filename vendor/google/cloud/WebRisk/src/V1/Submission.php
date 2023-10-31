<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1/webrisk.proto

namespace Google\Cloud\WebRisk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wraps a URI that might be displaying malicious content.
 *
 * Generated from protobuf message <code>google.cloud.webrisk.v1.Submission</code>
 */
class Submission extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI that is being reported for malicious content to be
     * analyzed.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uri = '';
    /**
     * Output only. ThreatTypes found to be associated with the submitted URI
     * after reviewing it. This might be empty if the URI was not added to any
     * list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $threat_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The URI that is being reported for malicious content to be
     *           analyzed.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $threat_types
     *           Output only. ThreatTypes found to be associated with the submitted URI
     *           after reviewing it. This might be empty if the URI was not added to any
     *           list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Webrisk\V1\Webrisk::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI that is being reported for malicious content to be
     * analyzed.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI that is being reported for malicious content to be
     * analyzed.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Output only. ThreatTypes found to be associated with the submitted URI
     * after reviewing it. This might be empty if the URI was not added to any
     * list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThreatTypes()
    {
        return $this->threat_types;
    }

    /**
     * Output only. ThreatTypes found to be associated with the submitted URI
     * after reviewing it. This might be empty if the URI was not added to any
     * list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.webrisk.v1.ThreatType threat_types = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThreatTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\WebRisk\V1\ThreatType::class);
        $this->threat_types = $arr;

        return $this;
    }

}

