<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Repository for storing artifacts with a specific format.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.Repository</code>
 */
class Repository extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the repository, for example:
     * "projects/p1/locations/us-central1/repositories/repo1".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The format of packages that are stored in the repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository.Format format = 2;</code>
     */
    private $format = 0;
    /**
     * The user-provided description of the repository.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Labels with user-defined metadata.
     * This field may contain up to 64 entries. Label keys and values may be no
     * longer than 63 characters. Label keys must begin with a lowercase letter
     * and may only contain lowercase letters, numeric characters, underscores,
     * and dashes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * The time when the repository was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
     */
    private $create_time = null;
    /**
     * The time when the repository was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     */
    private $update_time = null;
    /**
     * The Cloud KMS resource name of the customer managed encryption key that's
     * used to encrypt the contents of the Repository. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * This value may not be changed after the Repository has been created.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     */
    private $kms_key_name = '';
    protected $format_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1\Repository\MavenRepositoryConfig $maven_config
     *           Maven repository config contains repository level configuration
     *           for the repositories of maven type.
     *     @type string $name
     *           The name of the repository, for example:
     *           "projects/p1/locations/us-central1/repositories/repo1".
     *     @type int $format
     *           The format of packages that are stored in the repository.
     *     @type string $description
     *           The user-provided description of the repository.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels with user-defined metadata.
     *           This field may contain up to 64 entries. Label keys and values may be no
     *           longer than 63 characters. Label keys must begin with a lowercase letter
     *           and may only contain lowercase letters, numeric characters, underscores,
     *           and dashes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time when the repository was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The time when the repository was last updated.
     *     @type string $kms_key_name
     *           The Cloud KMS resource name of the customer managed encryption key that's
     *           used to encrypt the contents of the Repository. Has the form:
     *           `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     *           This value may not be changed after the Repository has been created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * Maven repository config contains repository level configuration
     * for the repositories of maven type.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository.MavenRepositoryConfig maven_config = 9;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\Repository\MavenRepositoryConfig|null
     */
    public function getMavenConfig()
    {
        return $this->readOneof(9);
    }

    public function hasMavenConfig()
    {
        return $this->hasOneof(9);
    }

    /**
     * Maven repository config contains repository level configuration
     * for the repositories of maven type.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository.MavenRepositoryConfig maven_config = 9;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\Repository\MavenRepositoryConfig $var
     * @return $this
     */
    public function setMavenConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\Repository\MavenRepositoryConfig::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The name of the repository, for example:
     * "projects/p1/locations/us-central1/repositories/repo1".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the repository, for example:
     * "projects/p1/locations/us-central1/repositories/repo1".
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The format of packages that are stored in the repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository.Format format = 2;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * The format of packages that are stored in the repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.Repository.Format format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1\Repository\Format::class);
        $this->format = $var;

        return $this;
    }

    /**
     * The user-provided description of the repository.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The user-provided description of the repository.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Labels with user-defined metadata.
     * This field may contain up to 64 entries. Label keys and values may be no
     * longer than 63 characters. Label keys must begin with a lowercase letter
     * and may only contain lowercase letters, numeric characters, underscores,
     * and dashes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels with user-defined metadata.
     * This field may contain up to 64 entries. Label keys and values may be no
     * longer than 63 characters. Label keys must begin with a lowercase letter
     * and may only contain lowercase letters, numeric characters, underscores,
     * and dashes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
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
     * The time when the repository was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
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
     * The time when the repository was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5;</code>
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
     * The time when the repository was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The time when the repository was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The Cloud KMS resource name of the customer managed encryption key that's
     * used to encrypt the contents of the Repository. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * This value may not be changed after the Repository has been created.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The Cloud KMS resource name of the customer managed encryption key that's
     * used to encrypt the contents of the Repository. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * This value may not be changed after the Repository has been created.
     *
     * Generated from protobuf field <code>string kms_key_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormatConfig()
    {
        return $this->whichOneof("format_config");
    }

}

