<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/order.proto

namespace Google\Cloud\Commerce\Consumer\Procurement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Line item information.
 *
 * Generated from protobuf message <code>google.cloud.commerce.consumer.procurement.v1.LineItemInfo</code>
 */
class LineItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The name of the offer can have either of these formats:
     * 'billingAccounts/{billing_account}/offers/{offer}',
     * or 'services/{service}/standardOffers/{offer}'.
     *
     * Generated from protobuf field <code>string offer = 13 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $offer = '';
    /**
     * Optional. User-provided parameters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Parameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $parameters;
    /**
     * Output only. Information about the subscription created, if applicable.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Subscription subscription = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $subscription = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $offer
     *           Optional. The name of the offer can have either of these formats:
     *           'billingAccounts/{billing_account}/offers/{offer}',
     *           or 'services/{service}/standardOffers/{offer}'.
     *     @type array<\Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Optional. User-provided parameters.
     *     @type \Google\Cloud\Commerce\Consumer\Procurement\V1\Subscription $subscription
     *           Output only. Information about the subscription created, if applicable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Commerce\Consumer\Procurement\V1\Order::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The name of the offer can have either of these formats:
     * 'billingAccounts/{billing_account}/offers/{offer}',
     * or 'services/{service}/standardOffers/{offer}'.
     *
     * Generated from protobuf field <code>string offer = 13 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Optional. The name of the offer can have either of these formats:
     * 'billingAccounts/{billing_account}/offers/{offer}',
     * or 'services/{service}/standardOffers/{offer}'.
     *
     * Generated from protobuf field <code>string offer = 13 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOffer($var)
    {
        GPBUtil::checkString($var, True);
        $this->offer = $var;

        return $this;
    }

    /**
     * Optional. User-provided parameters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Parameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. User-provided parameters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.commerce.consumer.procurement.v1.Parameter parameters = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Commerce\Consumer\Procurement\V1\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

    /**
     * Output only. Information about the subscription created, if applicable.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Subscription subscription = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Commerce\Consumer\Procurement\V1\Subscription|null
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    public function hasSubscription()
    {
        return isset($this->subscription);
    }

    public function clearSubscription()
    {
        unset($this->subscription);
    }

    /**
     * Output only. Information about the subscription created, if applicable.
     *
     * Generated from protobuf field <code>.google.cloud.commerce.consumer.procurement.v1.Subscription subscription = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Commerce\Consumer\Procurement\V1\Subscription $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Commerce\Consumer\Procurement\V1\Subscription::class);
        $this->subscription = $var;

        return $this;
    }

}

