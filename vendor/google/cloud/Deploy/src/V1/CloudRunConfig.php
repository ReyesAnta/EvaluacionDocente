<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CloudRunConfig contains the Cloud Run runtime configuration.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CloudRunConfig</code>
 */
class CloudRunConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether Cloud Deploy should update the traffic stanza in a Cloud Run
     * Service on the user's behalf to facilitate traffic splitting. This is
     * required to be true for CanaryDeployments, but optional for
     * CustomCanaryDeployments.
     *
     * Generated from protobuf field <code>bool automatic_traffic_control = 1;</code>
     */
    private $automatic_traffic_control = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $automatic_traffic_control
     *           Whether Cloud Deploy should update the traffic stanza in a Cloud Run
     *           Service on the user's behalf to facilitate traffic splitting. This is
     *           required to be true for CanaryDeployments, but optional for
     *           CustomCanaryDeployments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether Cloud Deploy should update the traffic stanza in a Cloud Run
     * Service on the user's behalf to facilitate traffic splitting. This is
     * required to be true for CanaryDeployments, but optional for
     * CustomCanaryDeployments.
     *
     * Generated from protobuf field <code>bool automatic_traffic_control = 1;</code>
     * @return bool
     */
    public function getAutomaticTrafficControl()
    {
        return $this->automatic_traffic_control;
    }

    /**
     * Whether Cloud Deploy should update the traffic stanza in a Cloud Run
     * Service on the user's behalf to facilitate traffic splitting. This is
     * required to be true for CanaryDeployments, but optional for
     * CustomCanaryDeployments.
     *
     * Generated from protobuf field <code>bool automatic_traffic_control = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutomaticTrafficControl($var)
    {
        GPBUtil::checkBool($var);
        $this->automatic_traffic_control = $var;

        return $this;
    }

}

