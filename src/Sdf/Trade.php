<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shopex.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Trade</code>
 */
class Trade extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     */
    private $Id = '';
    /**
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     */
    private $BuyerId = '';
    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     */
    private $SellerId = '';
    /**
     * Generated from protobuf field <code>.luban.OrderStatus Status = 4;</code>
     */
    private $Status = 0;
    /**
     * Generated from protobuf field <code>repeated .luban.Order Order = 5;</code>
     */
    private $Order;
    /**
     * Generated from protobuf field <code>double Price = 6;</code>
     */
    private $Price = 0.0;
    /**
     * Generated from protobuf field <code>double PostFee = 7;</code>
     */
    private $PostFee = 0.0;
    /**
     * Generated from protobuf field <code>double DiscountFee = 8;</code>
     */
    private $DiscountFee = 0.0;
    /**
     * Generated from protobuf field <code>double AdjustFee = 9;</code>
     */
    private $AdjustFee = 0.0;
    /**
     * Generated from protobuf field <code>double FinalPrice = 10;</code>
     */
    private $FinalPrice = 0.0;
    /**
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 11;</code>
     */
    private $BuyerAddress = null;
    /**
     * Generated from protobuf field <code>.luban.Contact BuyerContact = 12;</code>
     */
    private $BuyerContact = null;
    /**
     * Generated from protobuf field <code>string DiscountToken = 13;</code>
     */
    private $DiscountToken = '';
    /**
     * Generated from protobuf field <code>string DiscountMemo = 14;</code>
     */
    private $DiscountMemo = '';
    /**
     * Generated from protobuf field <code>string PaymentId = 15;</code>
     */
    private $PaymentId = '';
    /**
     * Generated from protobuf field <code>.luban.Invoice Invoice = 16;</code>
     */
    private $Invoice = null;
    /**
     * Generated from protobuf field <code>string BuyerMessage = 17;</code>
     */
    private $BuyerMessage = '';
    /**
     * Generated from protobuf field <code>int32 CreateTime = 18;</code>
     */
    private $CreateTime = 0;
    /**
     * Generated from protobuf field <code>int32 PayTime = 19;</code>
     */
    private $PayTime = 0;
    /**
     * Generated from protobuf field <code>int32 EndTime = 20;</code>
     */
    private $EndTime = 0;
    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 21;</code>
     */
    private $Meta;

    public function __construct() {
        \GPBMetadata\Shopex::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     * @return string
     */
    public function getBuyerId()
    {
        return $this->BuyerId;
    }

    /**
     * Generated from protobuf field <code>string BuyerId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BuyerId = $var;

        return $this;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     * @return string
     */
    public function getSellerId()
    {
        return $this->SellerId;
    }

    /**
     * 卖家ID
     *
     * Generated from protobuf field <code>string SellerId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSellerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SellerId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.OrderStatus Status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Generated from protobuf field <code>.luban.OrderStatus Status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\OrderStatus::class);
        $this->Status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Order Order = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrder()
    {
        return $this->Order;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Order Order = 5;</code>
     * @param \Shopex\Luban\Sdf\Order[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrder($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Order::class);
        $this->Order = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double Price = 6;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Generated from protobuf field <code>double Price = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->Price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double PostFee = 7;</code>
     * @return float
     */
    public function getPostFee()
    {
        return $this->PostFee;
    }

    /**
     * Generated from protobuf field <code>double PostFee = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setPostFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->PostFee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double DiscountFee = 8;</code>
     * @return float
     */
    public function getDiscountFee()
    {
        return $this->DiscountFee;
    }

    /**
     * Generated from protobuf field <code>double DiscountFee = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setDiscountFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->DiscountFee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double AdjustFee = 9;</code>
     * @return float
     */
    public function getAdjustFee()
    {
        return $this->AdjustFee;
    }

    /**
     * Generated from protobuf field <code>double AdjustFee = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setAdjustFee($var)
    {
        GPBUtil::checkDouble($var);
        $this->AdjustFee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double FinalPrice = 10;</code>
     * @return float
     */
    public function getFinalPrice()
    {
        return $this->FinalPrice;
    }

    /**
     * Generated from protobuf field <code>double FinalPrice = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setFinalPrice($var)
    {
        GPBUtil::checkDouble($var);
        $this->FinalPrice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 11;</code>
     * @return \Shopex\Luban\Sdf\Address
     */
    public function getBuyerAddress()
    {
        return $this->BuyerAddress;
    }

    /**
     * Generated from protobuf field <code>.luban.Address BuyerAddress = 11;</code>
     * @param \Shopex\Luban\Sdf\Address $var
     * @return $this
     */
    public function setBuyerAddress($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Address::class);
        $this->BuyerAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.Contact BuyerContact = 12;</code>
     * @return \Shopex\Luban\Sdf\Contact
     */
    public function getBuyerContact()
    {
        return $this->BuyerContact;
    }

    /**
     * Generated from protobuf field <code>.luban.Contact BuyerContact = 12;</code>
     * @param \Shopex\Luban\Sdf\Contact $var
     * @return $this
     */
    public function setBuyerContact($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Contact::class);
        $this->BuyerContact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DiscountToken = 13;</code>
     * @return string
     */
    public function getDiscountToken()
    {
        return $this->DiscountToken;
    }

    /**
     * Generated from protobuf field <code>string DiscountToken = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscountToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->DiscountToken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DiscountMemo = 14;</code>
     * @return string
     */
    public function getDiscountMemo()
    {
        return $this->DiscountMemo;
    }

    /**
     * Generated from protobuf field <code>string DiscountMemo = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscountMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->DiscountMemo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PaymentId = 15;</code>
     * @return string
     */
    public function getPaymentId()
    {
        return $this->PaymentId;
    }

    /**
     * Generated from protobuf field <code>string PaymentId = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PaymentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.Invoice Invoice = 16;</code>
     * @return \Shopex\Luban\Sdf\Invoice
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * Generated from protobuf field <code>.luban.Invoice Invoice = 16;</code>
     * @param \Shopex\Luban\Sdf\Invoice $var
     * @return $this
     */
    public function setInvoice($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Invoice::class);
        $this->Invoice = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BuyerMessage = 17;</code>
     * @return string
     */
    public function getBuyerMessage()
    {
        return $this->BuyerMessage;
    }

    /**
     * Generated from protobuf field <code>string BuyerMessage = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->BuyerMessage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 CreateTime = 18;</code>
     * @return int
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * Generated from protobuf field <code>int32 CreateTime = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 PayTime = 19;</code>
     * @return int
     */
    public function getPayTime()
    {
        return $this->PayTime;
    }

    /**
     * Generated from protobuf field <code>int32 PayTime = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setPayTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->PayTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 EndTime = 20;</code>
     * @return int
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * Generated from protobuf field <code>int32 EndTime = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 21;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->Meta;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta Meta = 21;</code>
     * @param \Shopex\Luban\Sdf\Meta[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMeta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Meta::class);
        $this->Meta = $arr;

        return $this;
    }

}

