<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: chain.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.OperationSetMetadata</code>
 */
class OperationSetMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    private $value = '';
    /**
     *Optional. The version number of metadata. If set, it must be the same as the existing metadata_version of the account.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     */
    private $version = 0;
    /**
     * Generated from protobuf field <code>bool delete_flag = 4;</code>
     */
    private $delete_flag = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *     @type string $value
     *     @type int|string $version
     *          Optional. The version number of metadata. If set, it must be the same as the existing metadata_version of the account.
     *     @type bool $delete_flag
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     *Optional. The version number of metadata. If set, it must be the same as the existing metadata_version of the account.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     *Optional. The version number of metadata. If set, it must be the same as the existing metadata_version of the account.
     *
     * Generated from protobuf field <code>int64 version = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool delete_flag = 4;</code>
     * @return bool
     */
    public function getDeleteFlag()
    {
        return $this->delete_flag;
    }

    /**
     * Generated from protobuf field <code>bool delete_flag = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_flag = $var;

        return $this;
    }

}

