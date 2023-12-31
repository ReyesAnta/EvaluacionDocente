<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance flexibility Policy allowing a mixture of VM shapes and provisioning
 * models.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.InstanceFlexibilityPolicy</code>
 */
class InstanceFlexibilityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $instance_selection_list;
    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $instance_selection_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection>|\Google\Protobuf\Internal\RepeatedField $instance_selection_list
     *           Optional. List of instance selection options that the group will use when
     *           creating new VMs.
     *     @type array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult>|\Google\Protobuf\Internal\RepeatedField $instance_selection_results
     *           Output only. A list of instance selection results in the group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceSelectionList()
    {
        return $this->instance_selection_list;
    }

    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceSelectionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection::class);
        $this->instance_selection_list = $arr;

        return $this;
    }

    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceSelectionResults()
    {
        return $this->instance_selection_results;
    }

    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceSelectionResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult::class);
        $this->instance_selection_results = $arr;

        return $this;
    }

}

