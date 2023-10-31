<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A accelerator type that a Node can be configured with.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.AcceleratorType</code>
 */
class AcceleratorType extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The accelerator type.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * The accelerator config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.AcceleratorConfig accelerator_configs = 3;</code>
     */
    private $accelerator_configs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name.
     *     @type string $type
     *           The accelerator type.
     *     @type array<\Google\Cloud\Tpu\V2\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $accelerator_configs
     *           The accelerator config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The accelerator type.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The accelerator type.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The accelerator config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.AcceleratorConfig accelerator_configs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAcceleratorConfigs()
    {
        return $this->accelerator_configs;
    }

    /**
     * The accelerator config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v2.AcceleratorConfig accelerator_configs = 3;</code>
     * @param array<\Google\Cloud\Tpu\V2\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAcceleratorConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tpu\V2\AcceleratorConfig::class);
        $this->accelerator_configs = $arr;

        return $this;
    }

}

