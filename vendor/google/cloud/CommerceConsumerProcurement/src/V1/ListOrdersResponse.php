<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/procurement_service.proto

namespace Google\Cloud\Commerce\Consumer\Procurement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ConsumerProcurementService.ListOrders][google.cloud.commerce.consumer.procurement.v1.ConsumerProcurementService.ListOrders].
 *
 * Generated from protobuf message <code>google.cloud.commerce.consumer.procurement.v1.ListOrdersResponse</code>
 */
class ListOrdersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of orders in this response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Order orders = 1;</code>
     */
    private $orders;
    /**
     * The token for fetching the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Commerce\Consumer\Procurement\V1\Order>|\Google\Protobuf\Internal\RepeatedField $orders
     *           The list of orders in this response.
     *     @type string $next_page_token
     *           The token for fetching the next page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Commerce\Consumer\Procurement\V1\ProcurementService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of orders in this response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Order orders = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * The list of orders in this response.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Order orders = 1;</code>
     * @param array<\Google\Cloud\Commerce\Consumer\Procurement\V1\Order>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Commerce\Consumer\Procurement\V1\Order::class);
        $this->orders = $arr;

        return $this;
    }

    /**
     * The token for fetching the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token for fetching the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
