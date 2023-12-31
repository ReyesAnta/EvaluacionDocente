<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata type for the operation returned by
 * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.UpdateDatabaseDdlMetadata</code>
 */
class UpdateDatabaseDdlMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The database being modified.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.resource_reference) = {</code>
     */
    private $database = '';
    /**
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     *
     * Generated from protobuf field <code>repeated string statements = 2;</code>
     */
    private $statements;
    /**
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     */
    private $commit_timestamps;
    /**
     * Output only. When true, indicates that the operation is throttled e.g.
     * due to resource constraints. When resources become available the operation
     * will resume and this field will be false again.
     *
     * Generated from protobuf field <code>bool throttled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $throttled = false;
    /**
     * The progress of the
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]
     * operations. All DDL statements will have continuously updating progress,
     * and `progress[i]` is the operation progress for `statements[i]`. Also,
     * `progress[i]` will have start time and end time populated with commit
     * timestamp of operation, as well as a progress of 100% once the operation
     * has completed.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.OperationProgress progress = 5;</code>
     */
    private $progress;
    /**
     * The brief action info for the DDL statements.
     * `actions[i]` is the brief info for `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.DdlStatementActionInfo actions = 6;</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           The database being modified.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $statements
     *           For an update this list contains all the statements. For an
     *           individual statement, this list contains only that statement.
     *     @type array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $commit_timestamps
     *           Reports the commit timestamps of all statements that have
     *           succeeded so far, where `commit_timestamps[i]` is the commit
     *           timestamp for the statement `statements[i]`.
     *     @type bool $throttled
     *           Output only. When true, indicates that the operation is throttled e.g.
     *           due to resource constraints. When resources become available the operation
     *           will resume and this field will be false again.
     *     @type array<\Google\Cloud\Spanner\Admin\Database\V1\OperationProgress>|\Google\Protobuf\Internal\RepeatedField $progress
     *           The progress of the
     *           [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]
     *           operations. All DDL statements will have continuously updating progress,
     *           and `progress[i]` is the operation progress for `statements[i]`. Also,
     *           `progress[i]` will have start time and end time populated with commit
     *           timestamp of operation, as well as a progress of 100% once the operation
     *           has completed.
     *     @type array<\Google\Cloud\Spanner\Admin\Database\V1\DdlStatementActionInfo>|\Google\Protobuf\Internal\RepeatedField $actions
     *           The brief action info for the DDL statements.
     *           `actions[i]` is the brief info for `statements[i]`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The database being modified.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * The database being modified.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     *
     * Generated from protobuf field <code>repeated string statements = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * For an update this list contains all the statements. For an
     * individual statement, this list contains only that statement.
     *
     * Generated from protobuf field <code>repeated string statements = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->statements = $arr;

        return $this;
    }

    /**
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommitTimestamps()
    {
        return $this->commit_timestamps;
    }

    /**
     * Reports the commit timestamps of all statements that have
     * succeeded so far, where `commit_timestamps[i]` is the commit
     * timestamp for the statement `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Timestamp commit_timestamps = 3;</code>
     * @param array<\Google\Protobuf\Timestamp>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommitTimestamps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Timestamp::class);
        $this->commit_timestamps = $arr;

        return $this;
    }

    /**
     * Output only. When true, indicates that the operation is throttled e.g.
     * due to resource constraints. When resources become available the operation
     * will resume and this field will be false again.
     *
     * Generated from protobuf field <code>bool throttled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getThrottled()
    {
        return $this->throttled;
    }

    /**
     * Output only. When true, indicates that the operation is throttled e.g.
     * due to resource constraints. When resources become available the operation
     * will resume and this field will be false again.
     *
     * Generated from protobuf field <code>bool throttled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setThrottled($var)
    {
        GPBUtil::checkBool($var);
        $this->throttled = $var;

        return $this;
    }

    /**
     * The progress of the
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]
     * operations. All DDL statements will have continuously updating progress,
     * and `progress[i]` is the operation progress for `statements[i]`. Also,
     * `progress[i]` will have start time and end time populated with commit
     * timestamp of operation, as well as a progress of 100% once the operation
     * has completed.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.OperationProgress progress = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * The progress of the
     * [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl]
     * operations. All DDL statements will have continuously updating progress,
     * and `progress[i]` is the operation progress for `statements[i]`. Also,
     * `progress[i]` will have start time and end time populated with commit
     * timestamp of operation, as well as a progress of 100% once the operation
     * has completed.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.OperationProgress progress = 5;</code>
     * @param array<\Google\Cloud\Spanner\Admin\Database\V1\OperationProgress>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProgress($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Database\V1\OperationProgress::class);
        $this->progress = $arr;

        return $this;
    }

    /**
     * The brief action info for the DDL statements.
     * `actions[i]` is the brief info for `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.DdlStatementActionInfo actions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * The brief action info for the DDL statements.
     * `actions[i]` is the brief info for `statements[i]`.
     *
     * Generated from protobuf field <code>repeated .google.spanner.admin.database.v1.DdlStatementActionInfo actions = 6;</code>
     * @param array<\Google\Cloud\Spanner\Admin\Database\V1\DdlStatementActionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\Admin\Database\V1\DdlStatementActionInfo::class);
        $this->actions = $arr;

        return $this;
    }

}

