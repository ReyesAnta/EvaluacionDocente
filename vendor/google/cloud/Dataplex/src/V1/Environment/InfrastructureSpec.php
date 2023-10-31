<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/analyze.proto

namespace Google\Cloud\Dataplex\V1\Environment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for the underlying infrastructure used to run workloads.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Environment.InfrastructureSpec</code>
 */
class InfrastructureSpec extends \Google\Protobuf\Internal\Message
{
    protected $resources;
    protected $runtime;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\ComputeResources $compute
     *           Optional. Compute resources needed for analyze interactive workloads.
     *     @type \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\OsImageRuntime $os_image
     *           Required. Software Runtime Configuration for analyze interactive
     *           workloads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Analyze::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Compute resources needed for analyze interactive workloads.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec.ComputeResources compute = 50 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\ComputeResources|null
     */
    public function getCompute()
    {
        return $this->readOneof(50);
    }

    public function hasCompute()
    {
        return $this->hasOneof(50);
    }

    /**
     * Optional. Compute resources needed for analyze interactive workloads.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec.ComputeResources compute = 50 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\ComputeResources $var
     * @return $this
     */
    public function setCompute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\ComputeResources::class);
        $this->writeOneof(50, $var);

        return $this;
    }

    /**
     * Required. Software Runtime Configuration for analyze interactive
     * workloads.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec.OsImageRuntime os_image = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\OsImageRuntime|null
     */
    public function getOsImage()
    {
        return $this->readOneof(100);
    }

    public function hasOsImage()
    {
        return $this->hasOneof(100);
    }

    /**
     * Required. Software Runtime Configuration for analyze interactive
     * workloads.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment.InfrastructureSpec.OsImageRuntime os_image = 100 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\OsImageRuntime $var
     * @return $this
     */
    public function setOsImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment\InfrastructureSpec\OsImageRuntime::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResources()
    {
        return $this->whichOneof("resources");
    }

    /**
     * @return string
     */
    public function getRuntime()
    {
        return $this->whichOneof("runtime");
    }

}


