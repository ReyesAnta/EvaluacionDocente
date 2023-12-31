<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace Google\Cloud\GkeBackup\V1\BackupPlan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RetentionPolicy defines a Backup retention policy for a BackupPlan.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy</code>
 */
class RetentionPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum age for Backups created via this BackupPlan (in days).
     * This field MUST be an integer value between 0-90 (inclusive).
     * A Backup created under this BackupPlan will NOT be deletable until it
     * reaches Backup's (create_time + backup_delete_lock_days).
     * Updating this field of a BackupPlan does NOT affect existing Backups
     * under it. Backups created AFTER a successful update will inherit
     * the new value.
     * Default: 0 (no delete blocking)
     *
     * Generated from protobuf field <code>int32 backup_delete_lock_days = 1;</code>
     */
    private $backup_delete_lock_days = 0;
    /**
     * The default maximum age of a Backup created via this BackupPlan.
     * This field MUST be an integer value >= 0 and <= 365.
     * If specified, a Backup created under this BackupPlan will be
     * automatically deleted after its age reaches (create_time +
     * backup_retain_days).
     * If not specified, Backups created under this BackupPlan will NOT be
     * subject to automatic deletion.
     * Updating this field does NOT affect existing Backups under it. Backups
     * created AFTER a successful update will automatically pick up the new
     * value.
     * NOTE: backup_retain_days must be >=
     * [backup_delete_lock_days][google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy.backup_delete_lock_days].
     * If
     * [cron_schedule][google.cloud.gkebackup.v1.BackupPlan.Schedule.cron_schedule]
     * is defined, then this must be
     * <= 360 * the creation interval.
     * Default: 0 (no automatic deletion)
     *
     * Generated from protobuf field <code>int32 backup_retain_days = 2;</code>
     */
    private $backup_retain_days = 0;
    /**
     * This flag denotes whether the retention policy of this BackupPlan is
     * locked.  If set to True, no further update is allowed on this policy,
     * including the `locked` field itself.
     * Default: False
     *
     * Generated from protobuf field <code>bool locked = 3;</code>
     */
    private $locked = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $backup_delete_lock_days
     *           Minimum age for Backups created via this BackupPlan (in days).
     *           This field MUST be an integer value between 0-90 (inclusive).
     *           A Backup created under this BackupPlan will NOT be deletable until it
     *           reaches Backup's (create_time + backup_delete_lock_days).
     *           Updating this field of a BackupPlan does NOT affect existing Backups
     *           under it. Backups created AFTER a successful update will inherit
     *           the new value.
     *           Default: 0 (no delete blocking)
     *     @type int $backup_retain_days
     *           The default maximum age of a Backup created via this BackupPlan.
     *           This field MUST be an integer value >= 0 and <= 365.
     *           If specified, a Backup created under this BackupPlan will be
     *           automatically deleted after its age reaches (create_time +
     *           backup_retain_days).
     *           If not specified, Backups created under this BackupPlan will NOT be
     *           subject to automatic deletion.
     *           Updating this field does NOT affect existing Backups under it. Backups
     *           created AFTER a successful update will automatically pick up the new
     *           value.
     *           NOTE: backup_retain_days must be >=
     *           [backup_delete_lock_days][google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy.backup_delete_lock_days].
     *           If
     *           [cron_schedule][google.cloud.gkebackup.v1.BackupPlan.Schedule.cron_schedule]
     *           is defined, then this must be
     *           <= 360 * the creation interval.
     *           Default: 0 (no automatic deletion)
     *     @type bool $locked
     *           This flag denotes whether the retention policy of this BackupPlan is
     *           locked.  If set to True, no further update is allowed on this policy,
     *           including the `locked` field itself.
     *           Default: False
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\BackupPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum age for Backups created via this BackupPlan (in days).
     * This field MUST be an integer value between 0-90 (inclusive).
     * A Backup created under this BackupPlan will NOT be deletable until it
     * reaches Backup's (create_time + backup_delete_lock_days).
     * Updating this field of a BackupPlan does NOT affect existing Backups
     * under it. Backups created AFTER a successful update will inherit
     * the new value.
     * Default: 0 (no delete blocking)
     *
     * Generated from protobuf field <code>int32 backup_delete_lock_days = 1;</code>
     * @return int
     */
    public function getBackupDeleteLockDays()
    {
        return $this->backup_delete_lock_days;
    }

    /**
     * Minimum age for Backups created via this BackupPlan (in days).
     * This field MUST be an integer value between 0-90 (inclusive).
     * A Backup created under this BackupPlan will NOT be deletable until it
     * reaches Backup's (create_time + backup_delete_lock_days).
     * Updating this field of a BackupPlan does NOT affect existing Backups
     * under it. Backups created AFTER a successful update will inherit
     * the new value.
     * Default: 0 (no delete blocking)
     *
     * Generated from protobuf field <code>int32 backup_delete_lock_days = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBackupDeleteLockDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->backup_delete_lock_days = $var;

        return $this;
    }

    /**
     * The default maximum age of a Backup created via this BackupPlan.
     * This field MUST be an integer value >= 0 and <= 365.
     * If specified, a Backup created under this BackupPlan will be
     * automatically deleted after its age reaches (create_time +
     * backup_retain_days).
     * If not specified, Backups created under this BackupPlan will NOT be
     * subject to automatic deletion.
     * Updating this field does NOT affect existing Backups under it. Backups
     * created AFTER a successful update will automatically pick up the new
     * value.
     * NOTE: backup_retain_days must be >=
     * [backup_delete_lock_days][google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy.backup_delete_lock_days].
     * If
     * [cron_schedule][google.cloud.gkebackup.v1.BackupPlan.Schedule.cron_schedule]
     * is defined, then this must be
     * <= 360 * the creation interval.
     * Default: 0 (no automatic deletion)
     *
     * Generated from protobuf field <code>int32 backup_retain_days = 2;</code>
     * @return int
     */
    public function getBackupRetainDays()
    {
        return $this->backup_retain_days;
    }

    /**
     * The default maximum age of a Backup created via this BackupPlan.
     * This field MUST be an integer value >= 0 and <= 365.
     * If specified, a Backup created under this BackupPlan will be
     * automatically deleted after its age reaches (create_time +
     * backup_retain_days).
     * If not specified, Backups created under this BackupPlan will NOT be
     * subject to automatic deletion.
     * Updating this field does NOT affect existing Backups under it. Backups
     * created AFTER a successful update will automatically pick up the new
     * value.
     * NOTE: backup_retain_days must be >=
     * [backup_delete_lock_days][google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy.backup_delete_lock_days].
     * If
     * [cron_schedule][google.cloud.gkebackup.v1.BackupPlan.Schedule.cron_schedule]
     * is defined, then this must be
     * <= 360 * the creation interval.
     * Default: 0 (no automatic deletion)
     *
     * Generated from protobuf field <code>int32 backup_retain_days = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBackupRetainDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->backup_retain_days = $var;

        return $this;
    }

    /**
     * This flag denotes whether the retention policy of this BackupPlan is
     * locked.  If set to True, no further update is allowed on this policy,
     * including the `locked` field itself.
     * Default: False
     *
     * Generated from protobuf field <code>bool locked = 3;</code>
     * @return bool
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * This flag denotes whether the retention policy of this BackupPlan is
     * locked.  If set to True, no further update is allowed on this policy,
     * including the `locked` field itself.
     * Default: False
     *
     * Generated from protobuf field <code>bool locked = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->locked = $var;

        return $this;
    }

}


