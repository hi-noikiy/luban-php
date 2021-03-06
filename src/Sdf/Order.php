<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shopex.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Order</code>
 */
class Order extends \Google\Protobuf\Internal\Message
{
    /**
     *交易单号
     *
     * Generated from protobuf field <code>string TradeBn = 1;</code>
     */
    private $TradeBn = '';
    /**
     * 库存key
     *
     * Generated from protobuf field <code>string StockKey = 2;</code>
     */
    private $StockKey = '';
    /**
     * 商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     */
    private $SkuId = '';
    /**
     * 商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     */
    private $SkuName = '';
    /**
     * 数量
     *
     * Generated from protobuf field <code>int64 Quantity = 5;</code>
     */
    private $Quantity = 0;
    /**
     * 商品类别ID
     *
     * Generated from protobuf field <code>string CatId = 6;</code>
     */
    private $CatId = '';
    /**
     * 价格
     *
     * Generated from protobuf field <code>double Price = 7;</code>
     */
    private $Price = 0.0;
    /**
     * 买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     */
    private $Customization = '';
    /**
     * 发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     */
    private $ConsignTime = 0;
    /**
     * Generated from protobuf field <code>repeated .luban.Meta meta = 12;</code>
     */
    private $meta;

    public function __construct() {
        \GPBMetadata\Shopex::initOnce();
        parent::__construct();
    }

    /**
     *交易单号
     *
     * Generated from protobuf field <code>string TradeBn = 1;</code>
     * @return string
     */
    public function getTradeBn()
    {
        return $this->TradeBn;
    }

    /**
     *交易单号
     *
     * Generated from protobuf field <code>string TradeBn = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeBn($var)
    {
        GPBUtil::checkString($var, True);
        $this->TradeBn = $var;

        return $this;
    }

    /**
     * 库存key
     *
     * Generated from protobuf field <code>string StockKey = 2;</code>
     * @return string
     */
    public function getStockKey()
    {
        return $this->StockKey;
    }

    /**
     * 库存key
     *
     * Generated from protobuf field <code>string StockKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStockKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->StockKey = $var;

        return $this;
    }

    /**
     * 商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     * @return string
     */
    public function getSkuId()
    {
        return $this->SkuId;
    }

    /**
     * 商品id
     *
     * Generated from protobuf field <code>string SkuId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SkuId = $var;

        return $this;
    }

    /**
     * 商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     * @return string
     */
    public function getSkuName()
    {
        return $this->SkuName;
    }

    /**
     * 商品名称
     *
     * Generated from protobuf field <code>string SkuName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSkuName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SkuName = $var;

        return $this;
    }

    /**
     * 数量
     *
     * Generated from protobuf field <code>int64 Quantity = 5;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * 数量
     *
     * Generated from protobuf field <code>int64 Quantity = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->Quantity = $var;

        return $this;
    }

    /**
     * 商品类别ID
     *
     * Generated from protobuf field <code>string CatId = 6;</code>
     * @return string
     */
    public function getCatId()
    {
        return $this->CatId;
    }

    /**
     * 商品类别ID
     *
     * Generated from protobuf field <code>string CatId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCatId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CatId = $var;

        return $this;
    }

    /**
     * 价格
     *
     * Generated from protobuf field <code>double Price = 7;</code>
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * 价格
     *
     * Generated from protobuf field <code>double Price = 7;</code>
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
     * 买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     * @return string
     */
    public function getCustomization()
    {
        return $this->Customization;
    }

    /**
     * 买家信息
     *
     * Generated from protobuf field <code>string Customization = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomization($var)
    {
        GPBUtil::checkString($var, True);
        $this->Customization = $var;

        return $this;
    }

    /**
     * 发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     * @return int|string
     */
    public function getConsignTime()
    {
        return $this->ConsignTime;
    }

    /**
     * 发货时间	
     *
     * Generated from protobuf field <code>int64 ConsignTime = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConsignTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->ConsignTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta meta = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.Meta meta = 12;</code>
     * @param \Shopex\Luban\Sdf\Meta[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMeta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\Meta::class);
        $this->meta = $arr;

        return $this;
    }

}

