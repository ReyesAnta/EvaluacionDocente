<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_monitoring.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of how features in Featurestore are monitored.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig</code>
 */
class FeaturestoreMonitoringConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The config for Snapshot Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysis snapshot_analysis = 1;</code>
     */
    private $snapshot_analysis = null;
    /**
     * The config for ImportFeatures Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis import_features_analysis = 2;</code>
     */
    private $import_features_analysis = null;
    /**
     * Threshold for numerical features of anomaly detection.
     * This is shared by all objectives of Featurestore Monitoring for numerical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) DOUBLE
     * or INT64).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig numerical_threshold_config = 3;</code>
     */
    private $numerical_threshold_config = null;
    /**
     * Threshold for categorical features of anomaly detection.
     * This is shared by all types of Featurestore Monitoring for categorical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL or
     * STRING).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig categorical_threshold_config = 4;</code>
     */
    private $categorical_threshold_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\SnapshotAnalysis $snapshot_analysis
     *           The config for Snapshot Analysis Based Feature Monitoring.
     *     @type \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis $import_features_analysis
     *           The config for ImportFeatures Analysis Based Feature Monitoring.
     *     @type \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig $numerical_threshold_config
     *           Threshold for numerical features of anomaly detection.
     *           This is shared by all objectives of Featurestore Monitoring for numerical
     *           features (i.e. Features with type
     *           ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) DOUBLE
     *           or INT64).
     *     @type \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig $categorical_threshold_config
     *           Threshold for categorical features of anomaly detection.
     *           This is shared by all types of Featurestore Monitoring for categorical
     *           features (i.e. Features with type
     *           ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL or
     *           STRING).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * The config for Snapshot Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysis snapshot_analysis = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\SnapshotAnalysis|null
     */
    public function getSnapshotAnalysis()
    {
        return $this->snapshot_analysis;
    }

    public function hasSnapshotAnalysis()
    {
        return isset($this->snapshot_analysis);
    }

    public function clearSnapshotAnalysis()
    {
        unset($this->snapshot_analysis);
    }

    /**
     * The config for Snapshot Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.SnapshotAnalysis snapshot_analysis = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\SnapshotAnalysis $var
     * @return $this
     */
    public function setSnapshotAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\SnapshotAnalysis::class);
        $this->snapshot_analysis = $var;

        return $this;
    }

    /**
     * The config for ImportFeatures Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis import_features_analysis = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis|null
     */
    public function getImportFeaturesAnalysis()
    {
        return $this->import_features_analysis;
    }

    public function hasImportFeaturesAnalysis()
    {
        return isset($this->import_features_analysis);
    }

    public function clearImportFeaturesAnalysis()
    {
        unset($this->import_features_analysis);
    }

    /**
     * The config for ImportFeatures Analysis Based Feature Monitoring.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ImportFeaturesAnalysis import_features_analysis = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis $var
     * @return $this
     */
    public function setImportFeaturesAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ImportFeaturesAnalysis::class);
        $this->import_features_analysis = $var;

        return $this;
    }

    /**
     * Threshold for numerical features of anomaly detection.
     * This is shared by all objectives of Featurestore Monitoring for numerical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) DOUBLE
     * or INT64).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig numerical_threshold_config = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig|null
     */
    public function getNumericalThresholdConfig()
    {
        return $this->numerical_threshold_config;
    }

    public function hasNumericalThresholdConfig()
    {
        return isset($this->numerical_threshold_config);
    }

    public function clearNumericalThresholdConfig()
    {
        unset($this->numerical_threshold_config);
    }

    /**
     * Threshold for numerical features of anomaly detection.
     * This is shared by all objectives of Featurestore Monitoring for numerical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) DOUBLE
     * or INT64).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig numerical_threshold_config = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig $var
     * @return $this
     */
    public function setNumericalThresholdConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig::class);
        $this->numerical_threshold_config = $var;

        return $this;
    }

    /**
     * Threshold for categorical features of anomaly detection.
     * This is shared by all types of Featurestore Monitoring for categorical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL or
     * STRING).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig categorical_threshold_config = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig|null
     */
    public function getCategoricalThresholdConfig()
    {
        return $this->categorical_threshold_config;
    }

    public function hasCategoricalThresholdConfig()
    {
        return isset($this->categorical_threshold_config);
    }

    public function clearCategoricalThresholdConfig()
    {
        unset($this->categorical_threshold_config);
    }

    /**
     * Threshold for categorical features of anomaly detection.
     * This is shared by all types of Featurestore Monitoring for categorical
     * features (i.e. Features with type
     * ([Feature.ValueType][google.cloud.aiplatform.v1.Feature.ValueType]) BOOL or
     * STRING).
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeaturestoreMonitoringConfig.ThresholdConfig categorical_threshold_config = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig $var
     * @return $this
     */
    public function setCategoricalThresholdConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeaturestoreMonitoringConfig\ThresholdConfig::class);
        $this->categorical_threshold_config = $var;

        return $this;
    }

}

