<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2\StreamingRecognitionFeatures;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Events that a timeout can be set on for voice activity.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.StreamingRecognitionFeatures.VoiceActivityTimeout</code>
 */
class VoiceActivityTimeout extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration to timeout the stream if no speech begins. If this is set and
     * no speech is detected in this duration at the start of the stream, the
     * server will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     */
    private $speech_start_timeout = null;
    /**
     * Duration to timeout the stream after speech ends. If this is set and no
     * speech is detected in this duration after speech was detected, the server
     * will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     */
    private $speech_end_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $speech_start_timeout
     *           Duration to timeout the stream if no speech begins. If this is set and
     *           no speech is detected in this duration at the start of the stream, the
     *           server will close the stream.
     *     @type \Google\Protobuf\Duration $speech_end_timeout
     *           Duration to timeout the stream after speech ends. If this is set and no
     *           speech is detected in this duration after speech was detected, the server
     *           will close the stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration to timeout the stream if no speech begins. If this is set and
     * no speech is detected in this duration at the start of the stream, the
     * server will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechStartTimeout()
    {
        return $this->speech_start_timeout;
    }

    public function hasSpeechStartTimeout()
    {
        return isset($this->speech_start_timeout);
    }

    public function clearSpeechStartTimeout()
    {
        unset($this->speech_start_timeout);
    }

    /**
     * Duration to timeout the stream if no speech begins. If this is set and
     * no speech is detected in this duration at the start of the stream, the
     * server will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_start_timeout = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechStartTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_start_timeout = $var;

        return $this;
    }

    /**
     * Duration to timeout the stream after speech ends. If this is set and no
     * speech is detected in this duration after speech was detected, the server
     * will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSpeechEndTimeout()
    {
        return $this->speech_end_timeout;
    }

    public function hasSpeechEndTimeout()
    {
        return isset($this->speech_end_timeout);
    }

    public function clearSpeechEndTimeout()
    {
        unset($this->speech_end_timeout);
    }

    /**
     * Duration to timeout the stream after speech ends. If this is set and no
     * speech is detected in this duration after speech was detected, the server
     * will close the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration speech_end_timeout = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSpeechEndTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->speech_end_timeout = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VoiceActivityTimeout::class, \Google\Cloud\Speech\V2\StreamingRecognitionFeatures_VoiceActivityTimeout::class);
