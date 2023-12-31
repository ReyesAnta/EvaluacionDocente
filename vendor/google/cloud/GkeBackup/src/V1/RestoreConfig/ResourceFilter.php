<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/restore.proto

namespace Google\Cloud\GkeBackup\V1\RestoreConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceFilter specifies matching criteria to limit the scope of a
 * change to a specific set of kubernetes resources that are selected for
 * restoration from a backup.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RestoreConfig.ResourceFilter</code>
 */
class ResourceFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * (Filtering parameter) Any resource subject to transformation must be
     * contained within one of the listed Kubernetes Namespace in the Backup.
     * If this field is not provided, no namespace filtering will be performed
     * (all resources in all Namespaces, including all cluster-scoped resources,
     * will be candidates for transformation).
     * To mix cluster-scoped and namespaced resources in the same rule, use an
     * empty string ("") as one of the target namespaces.
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     */
    private $namespaces;
    /**
     * (Filtering parameter) Any resource subject to transformation must belong
     * to one of the listed "types". If this field is not provided, no type
     * filtering will be performed (all resources of all types matching previous
     * filtering parameters will be candidates for transformation).
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kinds = 2;</code>
     */
    private $group_kinds;
    /**
     * This is a [JSONPath]
     * (https://github.com/json-path/JsonPath/blob/master/README.md)
     * expression that matches specific fields of candidate
     * resources and it operates as a filtering parameter (resources that
     * are not matched with this expression will not be candidates for
     * transformation).
     *
     * Generated from protobuf field <code>string json_path = 3;</code>
     */
    private $json_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $namespaces
     *           (Filtering parameter) Any resource subject to transformation must be
     *           contained within one of the listed Kubernetes Namespace in the Backup.
     *           If this field is not provided, no namespace filtering will be performed
     *           (all resources in all Namespaces, including all cluster-scoped resources,
     *           will be candidates for transformation).
     *           To mix cluster-scoped and namespaced resources in the same rule, use an
     *           empty string ("") as one of the target namespaces.
     *     @type array<\Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind>|\Google\Protobuf\Internal\RepeatedField $group_kinds
     *           (Filtering parameter) Any resource subject to transformation must belong
     *           to one of the listed "types". If this field is not provided, no type
     *           filtering will be performed (all resources of all types matching previous
     *           filtering parameters will be candidates for transformation).
     *     @type string $json_path
     *           This is a [JSONPath]
     *           (https://github.com/json-path/JsonPath/blob/master/README.md)
     *           expression that matches specific fields of candidate
     *           resources and it operates as a filtering parameter (resources that
     *           are not matched with this expression will not be candidates for
     *           transformation).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Restore::initOnce();
        parent::__construct($data);
    }

    /**
     * (Filtering parameter) Any resource subject to transformation must be
     * contained within one of the listed Kubernetes Namespace in the Backup.
     * If this field is not provided, no namespace filtering will be performed
     * (all resources in all Namespaces, including all cluster-scoped resources,
     * will be candidates for transformation).
     * To mix cluster-scoped and namespaced resources in the same rule, use an
     * empty string ("") as one of the target namespaces.
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNamespaces()
    {
        return $this->namespaces;
    }

    /**
     * (Filtering parameter) Any resource subject to transformation must be
     * contained within one of the listed Kubernetes Namespace in the Backup.
     * If this field is not provided, no namespace filtering will be performed
     * (all resources in all Namespaces, including all cluster-scoped resources,
     * will be candidates for transformation).
     * To mix cluster-scoped and namespaced resources in the same rule, use an
     * empty string ("") as one of the target namespaces.
     *
     * Generated from protobuf field <code>repeated string namespaces = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNamespaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->namespaces = $arr;

        return $this;
    }

    /**
     * (Filtering parameter) Any resource subject to transformation must belong
     * to one of the listed "types". If this field is not provided, no type
     * filtering will be performed (all resources of all types matching previous
     * filtering parameters will be candidates for transformation).
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kinds = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupKinds()
    {
        return $this->group_kinds;
    }

    /**
     * (Filtering parameter) Any resource subject to transformation must belong
     * to one of the listed "types". If this field is not provided, no type
     * filtering will be performed (all resources of all types matching previous
     * filtering parameters will be candidates for transformation).
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.RestoreConfig.GroupKind group_kinds = 2;</code>
     * @param array<\Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupKinds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\RestoreConfig\GroupKind::class);
        $this->group_kinds = $arr;

        return $this;
    }

    /**
     * This is a [JSONPath]
     * (https://github.com/json-path/JsonPath/blob/master/README.md)
     * expression that matches specific fields of candidate
     * resources and it operates as a filtering parameter (resources that
     * are not matched with this expression will not be candidates for
     * transformation).
     *
     * Generated from protobuf field <code>string json_path = 3;</code>
     * @return string
     */
    public function getJsonPath()
    {
        return $this->json_path;
    }

    /**
     * This is a [JSONPath]
     * (https://github.com/json-path/JsonPath/blob/master/README.md)
     * expression that matches specific fields of candidate
     * resources and it operates as a filtering parameter (resources that
     * are not matched with this expression will not be candidates for
     * transformation).
     *
     * Generated from protobuf field <code>string json_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJsonPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_path = $var;

        return $this;
    }

}


