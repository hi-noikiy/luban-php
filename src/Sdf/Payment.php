<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shopex.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Payment</code>
 */
class Payment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string TradeId = 1;</code>
     */
    private $TradeId;
    /**
     * Generated from protobuf field <code>double Amount = 2;</code>
     */
    private $Amount = 0.0;
    /**
     * alipay-h5  alipay-app 具体支付方法
     *
     * Generated from protobuf field <code>string Method = 3;</code>
     */
    private $Method = '';
    /**
     *支付渠道
     *
     * Generated from protobuf field <code>string Channel = 4;</code>
     */
    private $Channel = '';
    /**
     *支付流水号
     *
     * Generated from protobuf field <code>string TransId = 5;</code>
     */
    private $TransId = '';
    /**
     * Generated from protobuf field <code>.luban.Payment.EnumStatus Status = 6;</code>
     */
    private $Status = 0;

    public function __construct() {
        \GPBMetadata\Shopex::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated string TradeId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTradeId()
    {
        return $this->TradeId;
    }

    /**
     * Generated from protobuf field <code>repeated string TradeId = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTradeId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->TradeId = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Amount = 2;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Generated from protobuf field <code>double Amount = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->Amount = $var;

        return $this;
    }

    /**
     * alipay-h5  alipay-app 具体支付方法
     *
     * Generated from protobuf field <code>string Method = 3;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->Method;
    }

    /**
     * alipay-h5  alipay-app 具体支付方法
     *
     * Generated from protobuf field <code>string Method = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->Method = $var;

        return $this;
    }

    /**
     *支付渠道
     *
     * Generated from protobuf field <code>string Channel = 4;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->Channel;
    }

    /**
     *支付渠道
     *
     * Generated from protobuf field <code>string Channel = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->Channel = $var;

        return $this;
    }

    /**
     *支付流水号
     *
     * Generated from protobuf field <code>string TransId = 5;</code>
     * @return string
     */
    public function getTransId()
    {
        return $this->TransId;
    }

    /**
     *支付流水号
     *
     * Generated from protobuf field <code>string TransId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTransId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TransId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.Payment.EnumStatus Status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Generated from protobuf field <code>.luban.Payment.EnumStatus Status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\Payment_EnumStatus::class);
        $this->Status = $var;

        return $this;
    }

}

