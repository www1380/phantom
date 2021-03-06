<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chain.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *payAsset
 *
 * Generated from protobuf message <code>protocol.Asset</code>
 */
class Asset extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.AssetKey key = 1;</code>
     */
    private $key = null;
    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     */
    private $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protocol\AssetKey $key
     *     @type int|string $amount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protocol.AssetKey key = 1;</code>
     * @return \Protocol\AssetKey
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>.protocol.AssetKey key = 1;</code>
     * @param \Protocol\AssetKey $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Protocol\AssetKey::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

}

