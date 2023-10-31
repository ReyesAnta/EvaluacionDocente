<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Multiplexing settings for output stream.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.MuxStream</code>
 */
class MuxStream extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * The container format. The default is `fmp4`.
     * Supported container formats:
     * - `fmp4` - the corresponding file extension is `.m4s`
     * - `ts` - the corresponding file extension is `.ts`
     *
     * Generated from protobuf field <code>string container = 3;</code>
     */
    private $container = '';
    /**
     * List of `ElementaryStream`
     * [key][google.cloud.video.livestream.v1.ElementaryStream.key]s multiplexed
     * in this stream.
     * - For `fmp4` container, must contain either one video or one audio stream.
     * - For `ts` container, must contain exactly one audio stream and up to one
     * video stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     */
    private $elementary_streams;
    /**
     * Segment settings for `fmp4` and `ts`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.SegmentSettings segment_settings = 5;</code>
     */
    private $segment_settings = null;
    /**
     * Identifier of the encryption configuration to use. If omitted, output
     * will be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 6;</code>
     */
    private $encryption_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           A unique key for this multiplexed stream.
     *     @type string $container
     *           The container format. The default is `fmp4`.
     *           Supported container formats:
     *           - `fmp4` - the corresponding file extension is `.m4s`
     *           - `ts` - the corresponding file extension is `.ts`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $elementary_streams
     *           List of `ElementaryStream`
     *           [key][google.cloud.video.livestream.v1.ElementaryStream.key]s multiplexed
     *           in this stream.
     *           - For `fmp4` container, must contain either one video or one audio stream.
     *           - For `ts` container, must contain exactly one audio stream and up to one
     *           video stream.
     *     @type \Google\Cloud\Video\LiveStream\V1\SegmentSettings $segment_settings
     *           Segment settings for `fmp4` and `ts`.
     *     @type string $encryption_id
     *           Identifier of the encryption configuration to use. If omitted, output
     *           will be unencrypted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * A unique key for this multiplexed stream.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The container format. The default is `fmp4`.
     * Supported container formats:
     * - `fmp4` - the corresponding file extension is `.m4s`
     * - `ts` - the corresponding file extension is `.ts`
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The container format. The default is `fmp4`.
     * Supported container formats:
     * - `fmp4` - the corresponding file extension is `.m4s`
     * - `ts` - the corresponding file extension is `.ts`
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->container = $var;

        return $this;
    }

    /**
     * List of `ElementaryStream`
     * [key][google.cloud.video.livestream.v1.ElementaryStream.key]s multiplexed
     * in this stream.
     * - For `fmp4` container, must contain either one video or one audio stream.
     * - For `ts` container, must contain exactly one audio stream and up to one
     * video stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElementaryStreams()
    {
        return $this->elementary_streams;
    }

    /**
     * List of `ElementaryStream`
     * [key][google.cloud.video.livestream.v1.ElementaryStream.key]s multiplexed
     * in this stream.
     * - For `fmp4` container, must contain either one video or one audio stream.
     * - For `ts` container, must contain exactly one audio stream and up to one
     * video stream.
     *
     * Generated from protobuf field <code>repeated string elementary_streams = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElementaryStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->elementary_streams = $arr;

        return $this;
    }

    /**
     * Segment settings for `fmp4` and `ts`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.SegmentSettings segment_settings = 5;</code>
     * @return \Google\Cloud\Video\LiveStream\V1\SegmentSettings|null
     */
    public function getSegmentSettings()
    {
        return $this->segment_settings;
    }

    public function hasSegmentSettings()
    {
        return isset($this->segment_settings);
    }

    public function clearSegmentSettings()
    {
        unset($this->segment_settings);
    }

    /**
     * Segment settings for `fmp4` and `ts`.
     *
     * Generated from protobuf field <code>.google.cloud.video.livestream.v1.SegmentSettings segment_settings = 5;</code>
     * @param \Google\Cloud\Video\LiveStream\V1\SegmentSettings $var
     * @return $this
     */
    public function setSegmentSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\LiveStream\V1\SegmentSettings::class);
        $this->segment_settings = $var;

        return $this;
    }

    /**
     * Identifier of the encryption configuration to use. If omitted, output
     * will be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 6;</code>
     * @return string
     */
    public function getEncryptionId()
    {
        return $this->encryption_id;
    }

    /**
     * Identifier of the encryption configuration to use. If omitted, output
     * will be unencrypted.
     *
     * Generated from protobuf field <code>string encryption_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryption_id = $var;

        return $this;
    }

}
