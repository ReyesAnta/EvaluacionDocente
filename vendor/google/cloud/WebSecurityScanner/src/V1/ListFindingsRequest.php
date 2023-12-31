<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/web_security_scanner.proto

namespace Google\Cloud\WebSecurityScanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListFindings` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.ListFindingsRequest</code>
 */
class ListFindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, which should be a scan run resource name in the
     *           format
     *           'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *     @type string $filter
     *           The filter expression. The expression must be in the format: <field>
     *           <operator> <value>.
     *           Supported field: 'finding_type'.
     *           Supported operator: '='.
     *     @type string $page_token
     *           A token identifying a page of results to be returned. This should be a
     *           `next_page_token` value returned from a previous List request.
     *           If unspecified, the first page of results is returned.
     *     @type int $page_size
     *           The maximum number of Findings to return, can be limited by server.
     *           If not specified or not positive, the implementation will select a
     *           reasonable value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, which should be a scan run resource name in the
     * format
     * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression. The expression must be in the format: <field>
     * <operator> <value>.
     * Supported field: 'finding_type'.
     * Supported operator: '='.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of Findings to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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

