<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_event.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed completion information including completion attribution token and
 * clicked completion info.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.CompletionInfo</code>
 */
class CompletionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 1;</code>
     */
    protected $selected_suggestion = '';
    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 2;</code>
     */
    protected $selected_position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selected_suggestion
     *           End user selected
     *           [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion].
     *     @type int $selected_position
     *           End user selected
     *           [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion]
     *           position, starting from 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 1;</code>
     * @return string
     */
    public function getSelectedSuggestion()
    {
        return $this->selected_suggestion;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion].
     *
     * Generated from protobuf field <code>string selected_suggestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelectedSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->selected_suggestion = $var;

        return $this;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 2;</code>
     * @return int
     */
    public function getSelectedPosition()
    {
        return $this->selected_position;
    }

    /**
     * End user selected
     * [CompleteQueryResponse.QuerySuggestion.suggestion][google.cloud.discoveryengine.v1.CompleteQueryResponse.QuerySuggestion.suggestion]
     * position, starting from 0.
     *
     * Generated from protobuf field <code>int32 selected_position = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectedPosition($var)
    {
        GPBUtil::checkInt32($var);
        $this->selected_position = $var;

        return $this;
    }

}

