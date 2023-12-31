<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/storage_pool.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StoragePool is a container for volumes with a service level and capacity.
 * Volumes can be created in a pool of sufficient available capacity.
 * StoragePool capacity is what you are billed for.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.StoragePool</code>
 */
class StoragePool extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the storage pool
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Service level of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_level = 0;
    /**
     * Required. Capacity in GIB of the pool
     *
     * Generated from protobuf field <code>int64 capacity_gib = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $capacity_gib = 0;
    /**
     * Output only. Allocated size of all volumes in GIB in the storage pool
     *
     * Generated from protobuf field <code>int64 volume_capacity_gib = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $volume_capacity_gib = 0;
    /**
     * Output only. Volume count of the storage pool
     *
     * Generated from protobuf field <code>int32 volume_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $volume_count = 0;
    /**
     * Output only. State of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.StoragePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. State details of the storage pool
     *
     * Generated from protobuf field <code>string state_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_details = '';
    /**
     * Output only. Create time of the storage pool
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Description of the storage pool
     *
     * Generated from protobuf field <code>string description = 9;</code>
     */
    protected $description = '';
    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     */
    private $labels;
    /**
     * Required. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Specifies the Active Directory to be used for creating a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 12 [(.google.api.resource_reference) = {</code>
     */
    protected $active_directory = '';
    /**
     * Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 13 [(.google.api.resource_reference) = {</code>
     */
    protected $kms_config = '';
    /**
     * Flag indicating if the pool is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 14;</code>
     */
    protected $ldap_enabled = false;
    /**
     * Name of the Private Service Access allocated range. If
     * not provided, any available range will be chosen.
     *
     * Generated from protobuf field <code>string psa_range = 15;</code>
     */
    protected $psa_range = '';
    /**
     * Output only. Specifies the current pool encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $encryption_type = 0;
    /**
     * Optional. Allows SO pool to access AD or DNS server from other regions.
     *
     * Generated from protobuf field <code>optional bool global_access_allowed = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $global_access_allowed = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the storage pool
     *     @type int $service_level
     *           Required. Service level of the storage pool
     *     @type int|string $capacity_gib
     *           Required. Capacity in GIB of the pool
     *     @type int|string $volume_capacity_gib
     *           Output only. Allocated size of all volumes in GIB in the storage pool
     *     @type int $volume_count
     *           Output only. Volume count of the storage pool
     *     @type int $state
     *           Output only. State of the storage pool
     *     @type string $state_details
     *           Output only. State details of the storage pool
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the storage pool
     *     @type string $description
     *           Description of the storage pool
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels as key value pairs
     *     @type string $network
     *           Required. VPC Network name.
     *           Format: projects/{project}/global/networks/{network}
     *     @type string $active_directory
     *           Specifies the Active Directory to be used for creating a SMB volume.
     *     @type string $kms_config
     *           Specifies the KMS config to be used for volume encryption.
     *     @type bool $ldap_enabled
     *           Flag indicating if the pool is NFS LDAP enabled or not.
     *     @type string $psa_range
     *           Name of the Private Service Access allocated range. If
     *           not provided, any available range will be chosen.
     *     @type int $encryption_type
     *           Output only. Specifies the current pool encryption key source.
     *     @type bool $global_access_allowed
     *           Optional. Allows SO pool to access AD or DNS server from other regions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\StoragePool::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the storage pool
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the storage pool
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
     * Required. Service level of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->service_level;
    }

    /**
     * Required. Service level of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.ServiceLevel service_level = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setServiceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\ServiceLevel::class);
        $this->service_level = $var;

        return $this;
    }

    /**
     * Required. Capacity in GIB of the pool
     *
     * Generated from protobuf field <code>int64 capacity_gib = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getCapacityGib()
    {
        return $this->capacity_gib;
    }

    /**
     * Required. Capacity in GIB of the pool
     *
     * Generated from protobuf field <code>int64 capacity_gib = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacityGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity_gib = $var;

        return $this;
    }

    /**
     * Output only. Allocated size of all volumes in GIB in the storage pool
     *
     * Generated from protobuf field <code>int64 volume_capacity_gib = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getVolumeCapacityGib()
    {
        return $this->volume_capacity_gib;
    }

    /**
     * Output only. Allocated size of all volumes in GIB in the storage pool
     *
     * Generated from protobuf field <code>int64 volume_capacity_gib = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setVolumeCapacityGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->volume_capacity_gib = $var;

        return $this;
    }

    /**
     * Output only. Volume count of the storage pool
     *
     * Generated from protobuf field <code>int32 volume_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVolumeCount()
    {
        return $this->volume_count;
    }

    /**
     * Output only. Volume count of the storage pool
     *
     * Generated from protobuf field <code>int32 volume_count = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVolumeCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->volume_count = $var;

        return $this;
    }

    /**
     * Output only. State of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.StoragePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the storage pool
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.StoragePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\StoragePool\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. State details of the storage pool
     *
     * Generated from protobuf field <code>string state_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetails()
    {
        return $this->state_details;
    }

    /**
     * Output only. State details of the storage pool
     *
     * Generated from protobuf field <code>string state_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

    /**
     * Output only. Create time of the storage pool
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time of the storage pool
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Description of the storage pool
     *
     * Generated from protobuf field <code>string description = 9;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the storage pool
     *
     * Generated from protobuf field <code>string description = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Required. VPC Network name.
     * Format: projects/{project}/global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 11 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Specifies the Active Directory to be used for creating a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 12 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getActiveDirectory()
    {
        return $this->active_directory;
    }

    /**
     * Specifies the Active Directory to be used for creating a SMB volume.
     *
     * Generated from protobuf field <code>string active_directory = 12 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setActiveDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_directory = $var;

        return $this;
    }

    /**
     * Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 13 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsConfig()
    {
        return $this->kms_config;
    }

    /**
     * Specifies the KMS config to be used for volume encryption.
     *
     * Generated from protobuf field <code>string kms_config = 13 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_config = $var;

        return $this;
    }

    /**
     * Flag indicating if the pool is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 14;</code>
     * @return bool
     */
    public function getLdapEnabled()
    {
        return $this->ldap_enabled;
    }

    /**
     * Flag indicating if the pool is NFS LDAP enabled or not.
     *
     * Generated from protobuf field <code>bool ldap_enabled = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setLdapEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ldap_enabled = $var;

        return $this;
    }

    /**
     * Name of the Private Service Access allocated range. If
     * not provided, any available range will be chosen.
     *
     * Generated from protobuf field <code>string psa_range = 15;</code>
     * @return string
     */
    public function getPsaRange()
    {
        return $this->psa_range;
    }

    /**
     * Name of the Private Service Access allocated range. If
     * not provided, any available range will be chosen.
     *
     * Generated from protobuf field <code>string psa_range = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPsaRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->psa_range = $var;

        return $this;
    }

    /**
     * Output only. Specifies the current pool encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Output only. Specifies the current pool encryption key source.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.EncryptionType encryption_type = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\EncryptionType::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Optional. Allows SO pool to access AD or DNS server from other regions.
     *
     * Generated from protobuf field <code>optional bool global_access_allowed = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getGlobalAccessAllowed()
    {
        return isset($this->global_access_allowed) ? $this->global_access_allowed : false;
    }

    public function hasGlobalAccessAllowed()
    {
        return isset($this->global_access_allowed);
    }

    public function clearGlobalAccessAllowed()
    {
        unset($this->global_access_allowed);
    }

    /**
     * Optional. Allows SO pool to access AD or DNS server from other regions.
     *
     * Generated from protobuf field <code>optional bool global_access_allowed = 17 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setGlobalAccessAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->global_access_allowed = $var;

        return $this;
    }

}

