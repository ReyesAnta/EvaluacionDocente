<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.getSlate.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.GetSlateRequest</code>
 */
class GetSlateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the slate to be retrieved, of the slate, in the form
     * of `projects/{project_number}/locations/{location}/slates/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the slate to be retrieved, of the slate, in the form
     *                     of `projects/{project_number}/locations/{location}/slates/{id}`. Please see
     *                     {@see VideoStitcherServiceClient::slateName()} for help formatting this field.
     *
     * @return \Google\Cloud\Video\Stitcher\V1\GetSlateRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the slate to be retrieved, of the slate, in the form
     *           of `projects/{project_number}/locations/{location}/slates/{id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the slate to be retrieved, of the slate, in the form
     * of `projects/{project_number}/locations/{location}/slates/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the slate to be retrieved, of the slate, in the form
     * of `projects/{project_number}/locations/{location}/slates/{id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

