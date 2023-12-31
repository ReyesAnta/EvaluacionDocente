<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to import a state file passed to a 'ImportStatefile' call.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.ImportStatefileRequest</code>
 */
class ImportStatefileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent in whose context the statefile is listed. The parent
     * value is in the format:
     * 'projects/{project_id}/locations/{location}/deployments/{deployment}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Lock ID of the lock file to verify that the user who is importing
     * the state file previously locked the Deployment.
     *
     * Generated from protobuf field <code>int64 lock_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lock_id = 0;
    /**
     * Optional.
     *
     * Generated from protobuf field <code>bool skip_draft = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $skip_draft = false;

    /**
     * @param string $parent Required. The parent in whose context the statefile is listed. The parent
     *                       value is in the format:
     *                       'projects/{project_id}/locations/{location}/deployments/{deployment}'. Please see
     *                       {@see ConfigClient::deploymentName()} for help formatting this field.
     * @param int    $lockId Required. Lock ID of the lock file to verify that the user who is importing
     *                       the state file previously locked the Deployment.
     *
     * @return \Google\Cloud\Config\V1\ImportStatefileRequest
     *
     * @experimental
     */
    public static function build(string $parent, int $lockId): self
    {
        return (new self())
            ->setParent($parent)
            ->setLockId($lockId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent in whose context the statefile is listed. The parent
     *           value is in the format:
     *           'projects/{project_id}/locations/{location}/deployments/{deployment}'.
     *     @type int|string $lock_id
     *           Required. Lock ID of the lock file to verify that the user who is importing
     *           the state file previously locked the Deployment.
     *     @type bool $skip_draft
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent in whose context the statefile is listed. The parent
     * value is in the format:
     * 'projects/{project_id}/locations/{location}/deployments/{deployment}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent in whose context the statefile is listed. The parent
     * value is in the format:
     * 'projects/{project_id}/locations/{location}/deployments/{deployment}'.
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
     * Required. Lock ID of the lock file to verify that the user who is importing
     * the state file previously locked the Deployment.
     *
     * Generated from protobuf field <code>int64 lock_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getLockId()
    {
        return $this->lock_id;
    }

    /**
     * Required. Lock ID of the lock file to verify that the user who is importing
     * the state file previously locked the Deployment.
     *
     * Generated from protobuf field <code>int64 lock_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLockId($var)
    {
        GPBUtil::checkInt64($var);
        $this->lock_id = $var;

        return $this;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>bool skip_draft = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSkipDraft()
    {
        return $this->skip_draft;
    }

    /**
     * Optional.
     *
     * Generated from protobuf field <code>bool skip_draft = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipDraft($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_draft = $var;

        return $this;
    }

}

