<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversation.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines context of the conversation
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ConversationContext</code>
 */
class ConversationContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The current list of documents the user is seeing.
     * It contains the document resource references.
     *
     * Generated from protobuf field <code>repeated string context_documents = 1;</code>
     */
    private $context_documents;
    /**
     * The current active document the user opened.
     * It contains the document resource reference.
     *
     * Generated from protobuf field <code>string active_document = 2;</code>
     */
    protected $active_document = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $context_documents
     *           The current list of documents the user is seeing.
     *           It contains the document resource references.
     *     @type string $active_document
     *           The current active document the user opened.
     *           It contains the document resource reference.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * The current list of documents the user is seeing.
     * It contains the document resource references.
     *
     * Generated from protobuf field <code>repeated string context_documents = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextDocuments()
    {
        return $this->context_documents;
    }

    /**
     * The current list of documents the user is seeing.
     * It contains the document resource references.
     *
     * Generated from protobuf field <code>repeated string context_documents = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContextDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->context_documents = $arr;

        return $this;
    }

    /**
     * The current active document the user opened.
     * It contains the document resource reference.
     *
     * Generated from protobuf field <code>string active_document = 2;</code>
     * @return string
     */
    public function getActiveDocument()
    {
        return $this->active_document;
    }

    /**
     * The current active document the user opened.
     * It contains the document resource reference.
     *
     * Generated from protobuf field <code>string active_document = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_document = $var;

        return $this;
    }

}

