<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/projects.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to the
 * [SearchProjects][google.cloud.resourcemanager.v3.Projects.SearchProjects]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.SearchProjectsRequest</code>
 */
class SearchProjectsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A query string for searching for projects that the caller has
     * `resourcemanager.projects.get` permission to. If multiple fields are
     * included in the query, then it will return results that match any of the
     * fields. Some eligible fields are:
     * - **`displayName`, `name`**: Filters by displayName.
     * - **`parent`**: Project's parent (for example: `folders/123`,
     * `organizations/&#42;`). Prefer `parent` field over `parent.type` and
     * `parent.id`.
     * - **`parent.type`**: Parent's type: `folder` or `organization`.
     * - **`parent.id`**: Parent's id number (for example: `123`).
     * - **`id`, `projectId`**: Filters by projectId.
     * - **`state`, `lifecycleState`**: Filters by state.
     * - **`labels`**: Filters by label name or value.
     * - **`labels.<key>` (where `<key>` is the name of a label)**: Filters by label
     * name.
     * Search expressions are case insensitive.
     * Some examples queries:
     * - **`name:how*`**: The project's name starts with "how".
     * - **`name:Howl`**: The project's name is `Howl` or `howl`.
     * - **`name:HOWL`**: Equivalent to above.
     * - **`NAME:howl`**: Equivalent to above.
     * - **`labels.color:*`**: The project has the label `color`.
     * - **`labels.color:red`**:  The project's label `color` has the value `red`.
     * - **`labels.color:red labels.size:big`**: The project's label `color` has
     * the value `red` or its label `size` has the value `big`.
     * If no query is specified, the call will return projects for which the user
     * has the `resourcemanager.projects.get` permission.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $query = '';
    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;

    /**
     * @param string $query Optional. A query string for searching for projects that the caller has
     *                      `resourcemanager.projects.get` permission to. If multiple fields are
     *                      included in the query, then it will return results that match any of the
     *                      fields. Some eligible fields are:
     *
     *                      - **`displayName`, `name`**: Filters by displayName.
     *                      - **`parent`**: Project's parent (for example: `folders/123`,
     *                      `organizations/*`). Prefer `parent` field over `parent.type` and
     *                      `parent.id`.
     *                      - **`parent.type`**: Parent's type: `folder` or `organization`.
     *                      - **`parent.id`**: Parent's id number (for example: `123`).
     *                      - **`id`, `projectId`**: Filters by projectId.
     *                      - **`state`, `lifecycleState`**: Filters by state.
     *                      - **`labels`**: Filters by label name or value.
     *                      - **`labels.<key>` (where `<key>` is the name of a label)**: Filters by label
     *                      name.
     *
     *                      Search expressions are case insensitive.
     *
     *                      Some examples queries:
     *
     *
     *                      - **`name:how*`**: The project's name starts with "how".
     *                      - **`name:Howl`**: The project's name is `Howl` or `howl`.
     *                      - **`name:HOWL`**: Equivalent to above.
     *                      - **`NAME:howl`**: Equivalent to above.
     *                      - **`labels.color:*`**: The project has the label `color`.
     *                      - **`labels.color:red`**:  The project's label `color` has the value `red`.
     *                      - **`labels.color:red labels.size:big`**: The project's label `color` has
     *                      the value `red` or its label `size` has the value `big`.
     *
     *                      If no query is specified, the call will return projects for which the user
     *                      has the `resourcemanager.projects.get` permission.
     *
     * @return \Google\Cloud\ResourceManager\V3\SearchProjectsRequest
     *
     * @experimental
     */
    public static function build(string $query): self
    {
        return (new self())
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           Optional. A query string for searching for projects that the caller has
     *           `resourcemanager.projects.get` permission to. If multiple fields are
     *           included in the query, then it will return results that match any of the
     *           fields. Some eligible fields are:
     *           - **`displayName`, `name`**: Filters by displayName.
     *           - **`parent`**: Project's parent (for example: `folders/123`,
     *           `organizations/&#42;`). Prefer `parent` field over `parent.type` and
     *           `parent.id`.
     *           - **`parent.type`**: Parent's type: `folder` or `organization`.
     *           - **`parent.id`**: Parent's id number (for example: `123`).
     *           - **`id`, `projectId`**: Filters by projectId.
     *           - **`state`, `lifecycleState`**: Filters by state.
     *           - **`labels`**: Filters by label name or value.
     *           - **`labels.<key>` (where `<key>` is the name of a label)**: Filters by label
     *           name.
     *           Search expressions are case insensitive.
     *           Some examples queries:
     *           - **`name:how*`**: The project's name starts with "how".
     *           - **`name:Howl`**: The project's name is `Howl` or `howl`.
     *           - **`name:HOWL`**: Equivalent to above.
     *           - **`NAME:howl`**: Equivalent to above.
     *           - **`labels.color:*`**: The project has the label `color`.
     *           - **`labels.color:red`**:  The project's label `color` has the value `red`.
     *           - **`labels.color:red labels.size:big`**: The project's label `color` has
     *           the value `red` or its label `size` has the value `big`.
     *           If no query is specified, the call will return projects for which the user
     *           has the `resourcemanager.projects.get` permission.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to
     *           [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     *           indicates from where listing should continue.
     *     @type int $page_size
     *           Optional. The maximum number of projects to return in the response.
     *           The server can return fewer projects than requested.
     *           If unspecified, server picks an appropriate default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A query string for searching for projects that the caller has
     * `resourcemanager.projects.get` permission to. If multiple fields are
     * included in the query, then it will return results that match any of the
     * fields. Some eligible fields are:
     * - **`displayName`, `name`**: Filters by displayName.
     * - **`parent`**: Project's parent (for example: `folders/123`,
     * `organizations/&#42;`). Prefer `parent` field over `parent.type` and
     * `parent.id`.
     * - **`parent.type`**: Parent's type: `folder` or `organization`.
     * - **`parent.id`**: Parent's id number (for example: `123`).
     * - **`id`, `projectId`**: Filters by projectId.
     * - **`state`, `lifecycleState`**: Filters by state.
     * - **`labels`**: Filters by label name or value.
     * - **`labels.<key>` (where `<key>` is the name of a label)**: Filters by label
     * name.
     * Search expressions are case insensitive.
     * Some examples queries:
     * - **`name:how*`**: The project's name starts with "how".
     * - **`name:Howl`**: The project's name is `Howl` or `howl`.
     * - **`name:HOWL`**: Equivalent to above.
     * - **`NAME:howl`**: Equivalent to above.
     * - **`labels.color:*`**: The project has the label `color`.
     * - **`labels.color:red`**:  The project's label `color` has the value `red`.
     * - **`labels.color:red labels.size:big`**: The project's label `color` has
     * the value `red` or its label `size` has the value `big`.
     * If no query is specified, the call will return projects for which the user
     * has the `resourcemanager.projects.get` permission.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Optional. A query string for searching for projects that the caller has
     * `resourcemanager.projects.get` permission to. If multiple fields are
     * included in the query, then it will return results that match any of the
     * fields. Some eligible fields are:
     * - **`displayName`, `name`**: Filters by displayName.
     * - **`parent`**: Project's parent (for example: `folders/123`,
     * `organizations/&#42;`). Prefer `parent` field over `parent.type` and
     * `parent.id`.
     * - **`parent.type`**: Parent's type: `folder` or `organization`.
     * - **`parent.id`**: Parent's id number (for example: `123`).
     * - **`id`, `projectId`**: Filters by projectId.
     * - **`state`, `lifecycleState`**: Filters by state.
     * - **`labels`**: Filters by label name or value.
     * - **`labels.<key>` (where `<key>` is the name of a label)**: Filters by label
     * name.
     * Search expressions are case insensitive.
     * Some examples queries:
     * - **`name:how*`**: The project's name starts with "how".
     * - **`name:Howl`**: The project's name is `Howl` or `howl`.
     * - **`name:HOWL`**: Equivalent to above.
     * - **`NAME:howl`**: Equivalent to above.
     * - **`labels.color:*`**: The project has the label `color`.
     * - **`labels.color:red`**:  The project's label `color` has the value `red`.
     * - **`labels.color:red labels.size:big`**: The project's label `color` has
     * the value `red` or its label `size` has the value `big`.
     * If no query is specified, the call will return projects for which the user
     * has the `resourcemanager.projects.get` permission.
     *
     * Generated from protobuf field <code>string query = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to
     * [ListProjects] [google.cloud.resourcemanager.v3.Projects.ListProjects] that
     * indicates from where listing should continue.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of projects to return in the response.
     * The server can return fewer projects than requested.
     * If unspecified, server picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

