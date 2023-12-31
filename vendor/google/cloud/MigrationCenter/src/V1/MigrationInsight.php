<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An insight about potential migrations for an asset.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.MigrationInsight</code>
 */
class MigrationInsight extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Description of how well the asset this insight is associated
     * with fits the proposed migration.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor fit = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $fit = null;
    protected $migration_target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\FitDescriptor $fit
     *           Output only. Description of how well the asset this insight is associated
     *           with fits the proposed migration.
     *     @type \Google\Cloud\MigrationCenter\V1\ComputeEngineMigrationTarget $compute_engine_target
     *           Output only. A Google Compute Engine target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Description of how well the asset this insight is associated
     * with fits the proposed migration.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor fit = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\MigrationCenter\V1\FitDescriptor|null
     */
    public function getFit()
    {
        return $this->fit;
    }

    public function hasFit()
    {
        return isset($this->fit);
    }

    public function clearFit()
    {
        unset($this->fit);
    }

    /**
     * Output only. Description of how well the asset this insight is associated
     * with fits the proposed migration.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.FitDescriptor fit = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\MigrationCenter\V1\FitDescriptor $var
     * @return $this
     */
    public function setFit($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\FitDescriptor::class);
        $this->fit = $var;

        return $this;
    }

    /**
     * Output only. A Google Compute Engine target.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ComputeEngineMigrationTarget compute_engine_target = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\MigrationCenter\V1\ComputeEngineMigrationTarget|null
     */
    public function getComputeEngineTarget()
    {
        return $this->readOneof(10);
    }

    public function hasComputeEngineTarget()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. A Google Compute Engine target.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.ComputeEngineMigrationTarget compute_engine_target = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\MigrationCenter\V1\ComputeEngineMigrationTarget $var
     * @return $this
     */
    public function setComputeEngineTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\ComputeEngineMigrationTarget::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMigrationTarget()
    {
        return $this->whichOneof("migration_target");
    }

}

