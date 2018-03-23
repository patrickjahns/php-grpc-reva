<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * maybe add checksum data ?
 *
 * Generated from protobuf message <code>api.TxChunk</code>
 */
class TxChunk extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tx_id = 1;</code>
     */
    private $tx_id = '';
    /**
     * Generated from protobuf field <code>uint64 length = 2;</code>
     */
    private $length = 0;
    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     */
    private $offset = 0;
    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    private $data = '';

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string tx_id = 1;</code>
     * @return string
     */
    public function getTxId()
    {
        return $this->tx_id;
    }

    /**
     * Generated from protobuf field <code>string tx_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tx_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 length = 2;</code>
     * @return int|string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Generated from protobuf field <code>uint64 length = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkUint64($var);
        $this->length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>uint64 offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}
