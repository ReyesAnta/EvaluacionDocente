<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Terraform info of a Resource.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.ResourceTerraformInfo</code>
 */
class ResourceTerraformInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * TF resource address that uniquely identifies this resource within this
     * deployment.
     *
     * Generated from protobuf field <code>string address = 1;</code>
     */
    protected $address = '';
    /**
     * TF resource type
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * ID attribute of the TF resource
     *
     * Generated from protobuf field <code>string id = 3;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           TF resource address that uniquely identifies this resource within this
     *           deployment.
     *     @type string $type
     *           TF resource type
     *     @type string $id
     *           ID attribute of the TF resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * TF resource address that uniquely identifies this resource within this
     * deployment.
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * TF resource address that uniquely identifies this resource within this
     * deployment.
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * TF resource type
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * TF resource type
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
     * ID attribute of the TF resource
     *
     * Generated from protobuf field <code>string id = 3;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID attribute of the TF resource
     *
     * Generated from protobuf field <code>string id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

