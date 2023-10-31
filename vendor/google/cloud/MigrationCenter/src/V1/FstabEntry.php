<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Single fstab entry.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.FstabEntry</code>
 */
class FstabEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The block special device or remote filesystem to be mounted.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     */
    protected $spec = '';
    /**
     * The mount point for the filesystem.
     *
     * Generated from protobuf field <code>string file = 2;</code>
     */
    protected $file = '';
    /**
     * The type of the filesystem.
     *
     * Generated from protobuf field <code>string vfstype = 3;</code>
     */
    protected $vfstype = '';
    /**
     * Mount options associated with the filesystem.
     *
     * Generated from protobuf field <code>string mntops = 4;</code>
     */
    protected $mntops = '';
    /**
     * Used by dump to determine which filesystems need to be dumped.
     *
     * Generated from protobuf field <code>int32 freq = 5;</code>
     */
    protected $freq = 0;
    /**
     * Used by the fsck(8) program to determine the order in which filesystem
     * checks are done at reboot time.
     *
     * Generated from protobuf field <code>int32 passno = 6;</code>
     */
    protected $passno = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $spec
     *           The block special device or remote filesystem to be mounted.
     *     @type string $file
     *           The mount point for the filesystem.
     *     @type string $vfstype
     *           The type of the filesystem.
     *     @type string $mntops
     *           Mount options associated with the filesystem.
     *     @type int $freq
     *           Used by dump to determine which filesystems need to be dumped.
     *     @type int $passno
     *           Used by the fsck(8) program to determine the order in which filesystem
     *           checks are done at reboot time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * The block special device or remote filesystem to be mounted.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     * @return string
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * The block special device or remote filesystem to be mounted.
     *
     * Generated from protobuf field <code>string spec = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec = $var;

        return $this;
    }

    /**
     * The mount point for the filesystem.
     *
     * Generated from protobuf field <code>string file = 2;</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * The mount point for the filesystem.
     *
     * Generated from protobuf field <code>string file = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

    /**
     * The type of the filesystem.
     *
     * Generated from protobuf field <code>string vfstype = 3;</code>
     * @return string
     */
    public function getVfstype()
    {
        return $this->vfstype;
    }

    /**
     * The type of the filesystem.
     *
     * Generated from protobuf field <code>string vfstype = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVfstype($var)
    {
        GPBUtil::checkString($var, True);
        $this->vfstype = $var;

        return $this;
    }

    /**
     * Mount options associated with the filesystem.
     *
     * Generated from protobuf field <code>string mntops = 4;</code>
     * @return string
     */
    public function getMntops()
    {
        return $this->mntops;
    }

    /**
     * Mount options associated with the filesystem.
     *
     * Generated from protobuf field <code>string mntops = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMntops($var)
    {
        GPBUtil::checkString($var, True);
        $this->mntops = $var;

        return $this;
    }

    /**
     * Used by dump to determine which filesystems need to be dumped.
     *
     * Generated from protobuf field <code>int32 freq = 5;</code>
     * @return int
     */
    public function getFreq()
    {
        return $this->freq;
    }

    /**
     * Used by dump to determine which filesystems need to be dumped.
     *
     * Generated from protobuf field <code>int32 freq = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFreq($var)
    {
        GPBUtil::checkInt32($var);
        $this->freq = $var;

        return $this;
    }

    /**
     * Used by the fsck(8) program to determine the order in which filesystem
     * checks are done at reboot time.
     *
     * Generated from protobuf field <code>int32 passno = 6;</code>
     * @return int
     */
    public function getPassno()
    {
        return $this->passno;
    }

    /**
     * Used by the fsck(8) program to determine the order in which filesystem
     * checks are done at reboot time.
     *
     * Generated from protobuf field <code>int32 passno = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPassno($var)
    {
        GPBUtil::checkInt32($var);
        $this->passno = $var;

        return $this;
    }

}

