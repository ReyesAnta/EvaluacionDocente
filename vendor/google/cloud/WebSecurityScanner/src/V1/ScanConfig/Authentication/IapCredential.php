<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes authentication configuration for Identity-Aware-Proxy (IAP).
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.ScanConfig.Authentication.IapCredential</code>
 */
class IapCredential extends \Google\Protobuf\Internal\Message
{
    protected $iap_credentials;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential\IapTestServiceAccountInfo $iap_test_service_account_info
     *           Authentication configuration when Web-Security-Scanner service
     *           account is added in Identity-Aware-Proxy (IAP) access policies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Authentication configuration when Web-Security-Scanner service
     * account is added in Identity-Aware-Proxy (IAP) access policies.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.IapCredential.IapTestServiceAccountInfo iap_test_service_account_info = 1;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential\IapTestServiceAccountInfo|null
     */
    public function getIapTestServiceAccountInfo()
    {
        return $this->readOneof(1);
    }

    public function hasIapTestServiceAccountInfo()
    {
        return $this->hasOneof(1);
    }

    /**
     * Authentication configuration when Web-Security-Scanner service
     * account is added in Identity-Aware-Proxy (IAP) access policies.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.IapCredential.IapTestServiceAccountInfo iap_test_service_account_info = 1;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential\IapTestServiceAccountInfo $var
     * @return $this
     */
    public function setIapTestServiceAccountInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential\IapTestServiceAccountInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIapCredentials()
    {
        return $this->whichOneof("iap_credentials");
    }

}


