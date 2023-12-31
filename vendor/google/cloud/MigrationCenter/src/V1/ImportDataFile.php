<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that represents a payload file in an import job.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ImportDataFile</code>
 */
class ImportDataFile extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the file.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * User-friendly display name. Maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    protected $display_name = '';
    /**
     * Required. The payload format.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportJobFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $format = 0;
    /**
     * Output only. The timestamp when the file was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The state of the import data file.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportDataFile.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    protected $file_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the file.
     *     @type string $display_name
     *           User-friendly display name. Maximum length is 63 characters.
     *     @type int $format
     *           Required. The payload format.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the file was created.
     *     @type int $state
     *           Output only. The state of the import data file.
     *     @type \Google\Cloud\MigrationCenter\V1\UploadFileInfo $upload_file_info
     *           Information about a file that is uploaded to a storage service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the file.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the file.
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
     * User-friendly display name. Maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User-friendly display name. Maximum length is 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. The payload format.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportJobFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Required. The payload format.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportJobFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\ImportJobFormat::class);
        $this->format = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when the file was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when the file was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The state of the import data file.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportDataFile.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the import data file.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ImportDataFile.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\ImportDataFile\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Information about a file that is uploaded to a storage service.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.UploadFileInfo upload_file_info = 5;</code>
     * @return \Google\Cloud\MigrationCenter\V1\UploadFileInfo|null
     */
    public function getUploadFileInfo()
    {
        return $this->readOneof(5);
    }

    public function hasUploadFileInfo()
    {
        return $this->hasOneof(5);
    }

    /**
     * Information about a file that is uploaded to a storage service.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.UploadFileInfo upload_file_info = 5;</code>
     * @param \Google\Cloud\MigrationCenter\V1\UploadFileInfo $var
     * @return $this
     */
    public function setUploadFileInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\UploadFileInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFileInfo()
    {
        return $this->whichOneof("file_info");
    }

}

