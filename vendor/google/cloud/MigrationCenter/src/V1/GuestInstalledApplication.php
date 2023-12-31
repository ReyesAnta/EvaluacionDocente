<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Guest installed application information.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.GuestInstalledApplication</code>
 */
class GuestInstalledApplication extends \Google\Protobuf\Internal\Message
{
    /**
     * Installed application name.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     */
    protected $application_name = '';
    /**
     * Installed application vendor.
     *
     * Generated from protobuf field <code>string vendor = 2;</code>
     */
    protected $vendor = '';
    /**
     * The time when the application was installed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 3;</code>
     */
    protected $install_time = null;
    /**
     * Source path.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     */
    protected $path = '';
    /**
     * Installed application version.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application_name
     *           Installed application name.
     *     @type string $vendor
     *           Installed application vendor.
     *     @type \Google\Protobuf\Timestamp $install_time
     *           The time when the application was installed.
     *     @type string $path
     *           Source path.
     *     @type string $version
     *           Installed application version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Installed application name.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     * @return string
     */
    public function getApplicationName()
    {
        return $this->application_name;
    }

    /**
     * Installed application name.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_name = $var;

        return $this;
    }

    /**
     * Installed application vendor.
     *
     * Generated from protobuf field <code>string vendor = 2;</code>
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Installed application vendor.
     *
     * Generated from protobuf field <code>string vendor = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVendor($var)
    {
        GPBUtil::checkString($var, True);
        $this->vendor = $var;

        return $this;
    }

    /**
     * The time when the application was installed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getInstallTime()
    {
        return $this->install_time;
    }

    public function hasInstallTime()
    {
        return isset($this->install_time);
    }

    public function clearInstallTime()
    {
        unset($this->install_time);
    }

    /**
     * The time when the application was installed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp install_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setInstallTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->install_time = $var;

        return $this;
    }

    /**
     * Source path.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Source path.
     *
     * Generated from protobuf field <code>string path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Installed application version.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Installed application version.
     *
     * Generated from protobuf field <code>string version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

