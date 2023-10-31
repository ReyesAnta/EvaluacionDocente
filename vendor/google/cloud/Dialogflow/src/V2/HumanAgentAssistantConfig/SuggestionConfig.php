<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detail human agent assistant config.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfig</code>
 */
class SuggestionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Configuration of different suggestion features. One feature can have only
     * one config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionFeatureConfig feature_configs = 2;</code>
     */
    private $feature_configs;
    /**
     * If `group_suggestion_responses` is false, and there are multiple
     * `feature_configs` in `event based suggestion` or
     * StreamingAnalyzeContent, we will try to deliver suggestions to customers
     * as soon as we get new suggestion. Different type of suggestions based on
     * the same context will be in  separate Pub/Sub event or
     * `StreamingAnalyzeContentResponse`.
     * If `group_suggestion_responses` set to true. All the suggestions to the
     * same participant based on the same context will be grouped into a single
     * Pub/Sub event or StreamingAnalyzeContentResponse.
     *
     * Generated from protobuf field <code>bool group_suggestion_responses = 3;</code>
     */
    private $group_suggestion_responses = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionFeatureConfig>|\Google\Protobuf\Internal\RepeatedField $feature_configs
     *           Configuration of different suggestion features. One feature can have only
     *           one config.
     *     @type bool $group_suggestion_responses
     *           If `group_suggestion_responses` is false, and there are multiple
     *           `feature_configs` in `event based suggestion` or
     *           StreamingAnalyzeContent, we will try to deliver suggestions to customers
     *           as soon as we get new suggestion. Different type of suggestions based on
     *           the same context will be in  separate Pub/Sub event or
     *           `StreamingAnalyzeContentResponse`.
     *           If `group_suggestion_responses` set to true. All the suggestions to the
     *           same participant based on the same context will be grouped into a single
     *           Pub/Sub event or StreamingAnalyzeContentResponse.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration of different suggestion features. One feature can have only
     * one config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionFeatureConfig feature_configs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatureConfigs()
    {
        return $this->feature_configs;
    }

    /**
     * Configuration of different suggestion features. One feature can have only
     * one config.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionFeatureConfig feature_configs = 2;</code>
     * @param array<\Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionFeatureConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatureConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig\SuggestionFeatureConfig::class);
        $this->feature_configs = $arr;

        return $this;
    }

    /**
     * If `group_suggestion_responses` is false, and there are multiple
     * `feature_configs` in `event based suggestion` or
     * StreamingAnalyzeContent, we will try to deliver suggestions to customers
     * as soon as we get new suggestion. Different type of suggestions based on
     * the same context will be in  separate Pub/Sub event or
     * `StreamingAnalyzeContentResponse`.
     * If `group_suggestion_responses` set to true. All the suggestions to the
     * same participant based on the same context will be grouped into a single
     * Pub/Sub event or StreamingAnalyzeContentResponse.
     *
     * Generated from protobuf field <code>bool group_suggestion_responses = 3;</code>
     * @return bool
     */
    public function getGroupSuggestionResponses()
    {
        return $this->group_suggestion_responses;
    }

    /**
     * If `group_suggestion_responses` is false, and there are multiple
     * `feature_configs` in `event based suggestion` or
     * StreamingAnalyzeContent, we will try to deliver suggestions to customers
     * as soon as we get new suggestion. Different type of suggestions based on
     * the same context will be in  separate Pub/Sub event or
     * `StreamingAnalyzeContentResponse`.
     * If `group_suggestion_responses` set to true. All the suggestions to the
     * same participant based on the same context will be grouped into a single
     * Pub/Sub event or StreamingAnalyzeContentResponse.
     *
     * Generated from protobuf field <code>bool group_suggestion_responses = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGroupSuggestionResponses($var)
    {
        GPBUtil::checkBool($var);
        $this->group_suggestion_responses = $var;

        return $this;
    }

}


