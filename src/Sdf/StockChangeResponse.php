<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stocker.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.StockChangeResponse</code>
 */
class StockChangeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     */
    private $RequestId = '';
    /**
     * Generated from protobuf field <code>bool Success = 2;</code>
     */
    private $Success = false;

    public function __construct() {
        \GPBMetadata\Stocker::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RequestId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Success = 2;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Generated from protobuf field <code>bool Success = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->Success = $var;

        return $this;
    }

}
