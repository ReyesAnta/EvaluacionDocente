<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource represents a Google Cloud Platform resource actuated by IM.
 * Resources are child resources of Revisions.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name.
     * Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}/resources/{resource}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Terraform-specific info if this resource was created using
     * Terraform.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ResourceTerraformInfo terraform_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $terraform_info = null;
    /**
     * Output only. Map of Cloud Asset Inventory (CAI) type to CAI info (e.g. CAI
     * ID). CAI type format follows
     * https://cloud.google.com/asset-inventory/docs/supported-asset-types
     *
     * Generated from protobuf field <code>map<string, .google.cloud.config.v1.ResourceCAIInfo> cai_assets = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cai_assets;
    /**
     * Output only. Intent of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.Intent intent = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $intent = 0;
    /**
     * Output only. Current state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name.
     *           Format:
     *           `projects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}/resources/{resource}`
     *     @type \Google\Cloud\Config\V1\ResourceTerraformInfo $terraform_info
     *           Output only. Terraform-specific info if this resource was created using
     *           Terraform.
     *     @type array|\Google\Protobuf\Internal\MapField $cai_assets
     *           Output only. Map of Cloud Asset Inventory (CAI) type to CAI info (e.g. CAI
     *           ID). CAI type format follows
     *           https://cloud.google.com/asset-inventory/docs/supported-asset-types
     *     @type int $intent
     *           Output only. Intent of the resource.
     *     @type int $state
     *           Output only. Current state of the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name.
     * Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}/resources/{resource}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name.
     * Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}/revisions/{revision}/resources/{resource}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Terraform-specific info if this resource was created using
     * Terraform.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ResourceTerraformInfo terraform_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Config\V1\ResourceTerraformInfo|null
     */
    public function getTerraformInfo()
    {
        return $this->terraform_info;
    }

    public function hasTerraformInfo()
    {
        return isset($this->terraform_info);
    }

    public function clearTerraformInfo()
    {
        unset($this->terraform_info);
    }

    /**
     * Output only. Terraform-specific info if this resource was created using
     * Terraform.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.ResourceTerraformInfo terraform_info = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Config\V1\ResourceTerraformInfo $var
     * @return $this
     */
    public function setTerraformInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\ResourceTerraformInfo::class);
        $this->terraform_info = $var;

        return $this;
    }

    /**
     * Output only. Map of Cloud Asset Inventory (CAI) type to CAI info (e.g. CAI
     * ID). CAI type format follows
     * https://cloud.google.com/asset-inventory/docs/supported-asset-types
     *
     * Generated from protobuf field <code>map<string, .google.cloud.config.v1.ResourceCAIInfo> cai_assets = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCaiAssets()
    {
        return $this->cai_assets;
    }

    /**
     * Output only. Map of Cloud Asset Inventory (CAI) type to CAI info (e.g. CAI
     * ID). CAI type format follows
     * https://cloud.google.com/asset-inventory/docs/supported-asset-types
     *
     * Generated from protobuf field <code>map<string, .google.cloud.config.v1.ResourceCAIInfo> cai_assets = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCaiAssets($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Config\V1\ResourceCAIInfo::class);
        $this->cai_assets = $arr;

        return $this;
    }

    /**
     * Output only. Intent of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.Intent intent = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Output only. Intent of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.Intent intent = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setIntent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Resource\Intent::class);
        $this->intent = $var;

        return $this;
    }

    /**
     * Output only. Current state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the resource.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Resource.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Resource\State::class);
        $this->state = $var;

        return $this;
    }

}

