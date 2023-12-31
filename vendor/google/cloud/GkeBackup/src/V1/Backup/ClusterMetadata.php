<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup.proto

namespace Google\Cloud\GkeBackup\V1\Backup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the GKE cluster from which this Backup was created.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.Backup.ClusterMetadata</code>
 */
class ClusterMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The source cluster from which this Backup was created.
     * Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     * This is inherited from the parent BackupPlan's
     * [cluster][google.cloud.gkebackup.v1.BackupPlan.cluster] field.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     */
    private $cluster = '';
    /**
     * The Kubernetes server version of the source cluster.
     *
     * Generated from protobuf field <code>string k8s_version = 2;</code>
     */
    private $k8s_version = '';
    /**
     * A list of the Backup for GKE CRD versions found in the cluster.
     *
     * Generated from protobuf field <code>map<string, string> backup_crd_versions = 3;</code>
     */
    private $backup_crd_versions;
    protected $platform_version;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster
     *           The source cluster from which this Backup was created.
     *           Valid formats:
     *             - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *             - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *           This is inherited from the parent BackupPlan's
     *           [cluster][google.cloud.gkebackup.v1.BackupPlan.cluster] field.
     *     @type string $k8s_version
     *           The Kubernetes server version of the source cluster.
     *     @type array|\Google\Protobuf\Internal\MapField $backup_crd_versions
     *           A list of the Backup for GKE CRD versions found in the cluster.
     *     @type string $gke_version
     *           GKE version
     *     @type string $anthos_version
     *           Anthos version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * The source cluster from which this Backup was created.
     * Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     * This is inherited from the parent BackupPlan's
     * [cluster][google.cloud.gkebackup.v1.BackupPlan.cluster] field.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * The source cluster from which this Backup was created.
     * Valid formats:
     *   - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *   - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     * This is inherited from the parent BackupPlan's
     * [cluster][google.cloud.gkebackup.v1.BackupPlan.cluster] field.
     *
     * Generated from protobuf field <code>string cluster = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * The Kubernetes server version of the source cluster.
     *
     * Generated from protobuf field <code>string k8s_version = 2;</code>
     * @return string
     */
    public function getK8SVersion()
    {
        return $this->k8s_version;
    }

    /**
     * The Kubernetes server version of the source cluster.
     *
     * Generated from protobuf field <code>string k8s_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setK8SVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->k8s_version = $var;

        return $this;
    }

    /**
     * A list of the Backup for GKE CRD versions found in the cluster.
     *
     * Generated from protobuf field <code>map<string, string> backup_crd_versions = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getBackupCrdVersions()
    {
        return $this->backup_crd_versions;
    }

    /**
     * A list of the Backup for GKE CRD versions found in the cluster.
     *
     * Generated from protobuf field <code>map<string, string> backup_crd_versions = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setBackupCrdVersions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->backup_crd_versions = $arr;

        return $this;
    }

    /**
     * GKE version
     *
     * Generated from protobuf field <code>string gke_version = 4;</code>
     * @return string
     */
    public function getGkeVersion()
    {
        return $this->readOneof(4);
    }

    public function hasGkeVersion()
    {
        return $this->hasOneof(4);
    }

    /**
     * GKE version
     *
     * Generated from protobuf field <code>string gke_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGkeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Anthos version
     *
     * Generated from protobuf field <code>string anthos_version = 5;</code>
     * @return string
     */
    public function getAnthosVersion()
    {
        return $this->readOneof(5);
    }

    public function hasAnthosVersion()
    {
        return $this->hasOneof(5);
    }

    /**
     * Anthos version
     *
     * Generated from protobuf field <code>string anthos_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAnthosVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPlatformVersion()
    {
        return $this->whichOneof("platform_version");
    }

}


