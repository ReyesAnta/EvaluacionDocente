<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * State information for an ACM's Operator
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.OperatorState</code>
 */
class OperatorState extends \Google\Protobuf\Internal\Message
{
    /**
     * The semenatic version number of the operator
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    private $version = '';
    /**
     * The state of the Operator's deployment
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState deployment_state = 2;</code>
     */
    private $deployment_state = 0;
    /**
     * Install errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.InstallError errors = 3;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The semenatic version number of the operator
     *     @type int $deployment_state
     *           The state of the Operator's deployment
     *     @type array<\Google\Cloud\GkeHub\ConfigManagement\V1\InstallError>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Install errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * The semenatic version number of the operator
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The semenatic version number of the operator
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The state of the Operator's deployment
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState deployment_state = 2;</code>
     * @return int
     */
    public function getDeploymentState()
    {
        return $this->deployment_state;
    }

    /**
     * The state of the Operator's deployment
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1.DeploymentState deployment_state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDeploymentState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\ConfigManagement\V1\DeploymentState::class);
        $this->deployment_state = $var;

        return $this;
    }

    /**
     * Install errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.InstallError errors = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Install errors.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.InstallError errors = 3;</code>
     * @param array<\Google\Cloud\GkeHub\ConfigManagement\V1\InstallError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\ConfigManagement\V1\InstallError::class);
        $this->errors = $arr;

        return $this;
    }

}

