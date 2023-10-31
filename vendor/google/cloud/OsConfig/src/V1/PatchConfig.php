<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Patch configuration specifications. Contains details on how to apply the
 * patch(es) to a VM instance.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.PatchConfig</code>
 */
class PatchConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Post-patch reboot settings.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig.RebootConfig reboot_config = 1;</code>
     */
    private $reboot_config = 0;
    /**
     * Apt update settings. Use this setting to override the default `apt` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.AptSettings apt = 3;</code>
     */
    private $apt = null;
    /**
     * Yum update settings. Use this setting to override the default `yum` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.YumSettings yum = 4;</code>
     */
    private $yum = null;
    /**
     * Goo update settings. Use this setting to override the default `goo` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.GooSettings goo = 5;</code>
     */
    private $goo = null;
    /**
     * Zypper update settings. Use this setting to override the default `zypper`
     * patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ZypperSettings zypper = 6;</code>
     */
    private $zypper = null;
    /**
     * Windows update settings. Use this override the default windows patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.WindowsUpdateSettings windows_update = 7;</code>
     */
    private $windows_update = null;
    /**
     * The `ExecStep` to run before the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep pre_step = 8;</code>
     */
    private $pre_step = null;
    /**
     * The `ExecStep` to run after the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep post_step = 9;</code>
     */
    private $post_step = null;
    /**
     * Allows the patch job to run on Managed instance groups (MIGs).
     *
     * Generated from protobuf field <code>bool mig_instances_allowed = 10;</code>
     */
    private $mig_instances_allowed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $reboot_config
     *           Post-patch reboot settings.
     *     @type \Google\Cloud\OsConfig\V1\AptSettings $apt
     *           Apt update settings. Use this setting to override the default `apt` patch
     *           rules.
     *     @type \Google\Cloud\OsConfig\V1\YumSettings $yum
     *           Yum update settings. Use this setting to override the default `yum` patch
     *           rules.
     *     @type \Google\Cloud\OsConfig\V1\GooSettings $goo
     *           Goo update settings. Use this setting to override the default `goo` patch
     *           rules.
     *     @type \Google\Cloud\OsConfig\V1\ZypperSettings $zypper
     *           Zypper update settings. Use this setting to override the default `zypper`
     *           patch rules.
     *     @type \Google\Cloud\OsConfig\V1\WindowsUpdateSettings $windows_update
     *           Windows update settings. Use this override the default windows patch rules.
     *     @type \Google\Cloud\OsConfig\V1\ExecStep $pre_step
     *           The `ExecStep` to run before the patch update.
     *     @type \Google\Cloud\OsConfig\V1\ExecStep $post_step
     *           The `ExecStep` to run after the patch update.
     *     @type bool $mig_instances_allowed
     *           Allows the patch job to run on Managed instance groups (MIGs).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Post-patch reboot settings.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig.RebootConfig reboot_config = 1;</code>
     * @return int
     */
    public function getRebootConfig()
    {
        return $this->reboot_config;
    }

    /**
     * Post-patch reboot settings.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.PatchConfig.RebootConfig reboot_config = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRebootConfig($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1\PatchConfig\RebootConfig::class);
        $this->reboot_config = $var;

        return $this;
    }

    /**
     * Apt update settings. Use this setting to override the default `apt` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.AptSettings apt = 3;</code>
     * @return \Google\Cloud\OsConfig\V1\AptSettings|null
     */
    public function getApt()
    {
        return $this->apt;
    }

    public function hasApt()
    {
        return isset($this->apt);
    }

    public function clearApt()
    {
        unset($this->apt);
    }

    /**
     * Apt update settings. Use this setting to override the default `apt` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.AptSettings apt = 3;</code>
     * @param \Google\Cloud\OsConfig\V1\AptSettings $var
     * @return $this
     */
    public function setApt($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\AptSettings::class);
        $this->apt = $var;

        return $this;
    }

    /**
     * Yum update settings. Use this setting to override the default `yum` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.YumSettings yum = 4;</code>
     * @return \Google\Cloud\OsConfig\V1\YumSettings|null
     */
    public function getYum()
    {
        return $this->yum;
    }

    public function hasYum()
    {
        return isset($this->yum);
    }

    public function clearYum()
    {
        unset($this->yum);
    }

    /**
     * Yum update settings. Use this setting to override the default `yum` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.YumSettings yum = 4;</code>
     * @param \Google\Cloud\OsConfig\V1\YumSettings $var
     * @return $this
     */
    public function setYum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\YumSettings::class);
        $this->yum = $var;

        return $this;
    }

    /**
     * Goo update settings. Use this setting to override the default `goo` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.GooSettings goo = 5;</code>
     * @return \Google\Cloud\OsConfig\V1\GooSettings|null
     */
    public function getGoo()
    {
        return $this->goo;
    }

    public function hasGoo()
    {
        return isset($this->goo);
    }

    public function clearGoo()
    {
        unset($this->goo);
    }

    /**
     * Goo update settings. Use this setting to override the default `goo` patch
     * rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.GooSettings goo = 5;</code>
     * @param \Google\Cloud\OsConfig\V1\GooSettings $var
     * @return $this
     */
    public function setGoo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\GooSettings::class);
        $this->goo = $var;

        return $this;
    }

    /**
     * Zypper update settings. Use this setting to override the default `zypper`
     * patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ZypperSettings zypper = 6;</code>
     * @return \Google\Cloud\OsConfig\V1\ZypperSettings|null
     */
    public function getZypper()
    {
        return $this->zypper;
    }

    public function hasZypper()
    {
        return isset($this->zypper);
    }

    public function clearZypper()
    {
        unset($this->zypper);
    }

    /**
     * Zypper update settings. Use this setting to override the default `zypper`
     * patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ZypperSettings zypper = 6;</code>
     * @param \Google\Cloud\OsConfig\V1\ZypperSettings $var
     * @return $this
     */
    public function setZypper($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\ZypperSettings::class);
        $this->zypper = $var;

        return $this;
    }

    /**
     * Windows update settings. Use this override the default windows patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.WindowsUpdateSettings windows_update = 7;</code>
     * @return \Google\Cloud\OsConfig\V1\WindowsUpdateSettings|null
     */
    public function getWindowsUpdate()
    {
        return $this->windows_update;
    }

    public function hasWindowsUpdate()
    {
        return isset($this->windows_update);
    }

    public function clearWindowsUpdate()
    {
        unset($this->windows_update);
    }

    /**
     * Windows update settings. Use this override the default windows patch rules.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.WindowsUpdateSettings windows_update = 7;</code>
     * @param \Google\Cloud\OsConfig\V1\WindowsUpdateSettings $var
     * @return $this
     */
    public function setWindowsUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\WindowsUpdateSettings::class);
        $this->windows_update = $var;

        return $this;
    }

    /**
     * The `ExecStep` to run before the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep pre_step = 8;</code>
     * @return \Google\Cloud\OsConfig\V1\ExecStep|null
     */
    public function getPreStep()
    {
        return $this->pre_step;
    }

    public function hasPreStep()
    {
        return isset($this->pre_step);
    }

    public function clearPreStep()
    {
        unset($this->pre_step);
    }

    /**
     * The `ExecStep` to run before the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep pre_step = 8;</code>
     * @param \Google\Cloud\OsConfig\V1\ExecStep $var
     * @return $this
     */
    public function setPreStep($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\ExecStep::class);
        $this->pre_step = $var;

        return $this;
    }

    /**
     * The `ExecStep` to run after the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep post_step = 9;</code>
     * @return \Google\Cloud\OsConfig\V1\ExecStep|null
     */
    public function getPostStep()
    {
        return $this->post_step;
    }

    public function hasPostStep()
    {
        return isset($this->post_step);
    }

    public function clearPostStep()
    {
        unset($this->post_step);
    }

    /**
     * The `ExecStep` to run after the patch update.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.ExecStep post_step = 9;</code>
     * @param \Google\Cloud\OsConfig\V1\ExecStep $var
     * @return $this
     */
    public function setPostStep($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\ExecStep::class);
        $this->post_step = $var;

        return $this;
    }

    /**
     * Allows the patch job to run on Managed instance groups (MIGs).
     *
     * Generated from protobuf field <code>bool mig_instances_allowed = 10;</code>
     * @return bool
     */
    public function getMigInstancesAllowed()
    {
        return $this->mig_instances_allowed;
    }

    /**
     * Allows the patch job to run on Managed instance groups (MIGs).
     *
     * Generated from protobuf field <code>bool mig_instances_allowed = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setMigInstancesAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->mig_instances_allowed = $var;

        return $this;
    }

}

