<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shopex.proto

namespace Shopex\Luban\Sdf;

/**
 * Protobuf enum <code>Luban\OrderStatus</code>
 */
class OrderStatus
{
    /**
     * 没有创建支付宝交易
     *
     * Generated from protobuf enum <code>TRADE_NO_CREATE_PAY = 0;</code>
     */
    const TRADE_NO_CREATE_PAY = 0;
    /**
     * 等待买家付款
     *
     * Generated from protobuf enum <code>WAIT_BUYER_PAY = 1;</code>
     */
    const WAIT_BUYER_PAY = 1;
    /**
     * 等待卖家发货,即:买家已付款
     *
     * Generated from protobuf enum <code>WAIT_SELLER_SEND_GOODS = 2;</code>
     */
    const WAIT_SELLER_SEND_GOODS = 2;
    /**
     * 等待买家确认收货,即:卖家已发货
     *
     * Generated from protobuf enum <code>WAIT_BUYER_CONFIRM_GOODS = 3;</code>
     */
    const WAIT_BUYER_CONFIRM_GOODS = 3;
    /**
     * 买家已签收,货到付款专用
     *
     * Generated from protobuf enum <code>TRADE_BUYER_SIGNED = 4;</code>
     */
    const TRADE_BUYER_SIGNED = 4;
    /**
     * 交易成功
     *
     * Generated from protobuf enum <code>TRADE_FINISHED = 5;</code>
     */
    const TRADE_FINISHED = 5;
    /**
     * 付款以后用户退款成功，交易自动关闭
     *
     * Generated from protobuf enum <code>TRADE_CLOSED = 6;</code>
     */
    const TRADE_CLOSED = 6;
    /**
     * 付款以前，卖家或买家主动关闭交易)PAY_PENDING(国际信用卡支付付款确认中
     *
     * Generated from protobuf enum <code>TRADE_CLOSED_BY_TAOBAO = 7;</code>
     */
    const TRADE_CLOSED_BY_TAOBAO = 7;
}
