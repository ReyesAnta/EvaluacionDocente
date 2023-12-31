<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/order.proto

namespace Google\Cloud\Commerce\Consumer\Procurement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User-provided Parameters.
 *
 * Generated from protobuf message <code>google.cloud.commerce.consumer.procurement.v1.Parameter</code>
 */
class Parameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Value of parameter.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Parameter.Value value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the parameter.
     *     @type \Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter\Value $value
     *           Value of parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Commerce\Consumer\Procurement\V1\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the parameter.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the parameter.
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
     * Value of parameter.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Parameter.Value value = 2;</code>
     * @return \Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Value of parameter.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Parameter.Value value = 2;</code>
     * @param \Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter\Value::class);
        $this->value = $var;

        return $this;
    }

}

