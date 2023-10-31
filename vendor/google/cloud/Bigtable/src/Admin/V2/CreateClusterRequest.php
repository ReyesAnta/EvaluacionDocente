<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.CreateCluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateClusterRequest</code>
 */
class CreateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/{project}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_id = '';
    /**
     * Required. The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster = null;

    /**
     * @param string                                  $parent    Required. The unique name of the instance in which to create the new cluster.
     *                                                           Values are of the form
     *                                                           `projects/{project}/instances/{instance}`. Please see
     *                                                           {@see BigtableInstanceAdminClient::instanceName()} for help formatting this field.
     * @param string                                  $clusterId Required. The ID to be used when referring to the new cluster within its instance,
     *                                                           e.g., just `mycluster` rather than
     *                                                           `projects/myproject/instances/myinstance/clusters/mycluster`.
     * @param \Google\Cloud\Bigtable\Admin\V2\Cluster $cluster   Required. The cluster to be created.
     *                                                           Fields marked `OutputOnly` must be left blank.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\CreateClusterRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $clusterId, \Google\Cloud\Bigtable\Admin\V2\Cluster $cluster): self
    {
        return (new self())
            ->setParent($parent)
            ->setClusterId($clusterId)
            ->setCluster($cluster);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The unique name of the instance in which to create the new cluster.
     *           Values are of the form
     *           `projects/{project}/instances/{instance}`.
     *     @type string $cluster_id
     *           Required. The ID to be used when referring to the new cluster within its instance,
     *           e.g., just `mycluster` rather than
     *           `projects/myproject/instances/myinstance/clusters/mycluster`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\Cluster $cluster
     *           Required. The cluster to be created.
     *           Fields marked `OutputOnly` must be left blank.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/{project}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/{project}/instances/{instance}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Required. The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

}

