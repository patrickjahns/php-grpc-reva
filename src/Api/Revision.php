<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.Revision</code>
 */
class Revision extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string rev_key = 1;</code>
     */
    private $rev_key = '';
    /**
     * Generated from protobuf field <code>uint64 size = 2;</code>
     */
    private $size = 0;
    /**
     * Generated from protobuf field <code>uint64 mtime = 3;</code>
     */
    private $mtime = 0;
    /**
     * Generated from protobuf field <code>bool is_dir = 4;</code>
     */
    private $is_dir = false;

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string rev_key = 1;</code>
     * @return string
     */
    public function getRevKey()
    {
        return $this->rev_key;
    }

    /**
     * Generated from protobuf field <code>string rev_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRevKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->rev_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>uint64 size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 mtime = 3;</code>
     * @return int|string
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * Generated from protobuf field <code>uint64 mtime = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMtime($var)
    {
        GPBUtil::checkUint64($var);
        $this->mtime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_dir = 4;</code>
     * @return bool
     */
    public function getIsDir()
    {
        return $this->is_dir;
    }

    /**
     * Generated from protobuf field <code>bool is_dir = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDir($var)
    {
        GPBUtil::checkBool($var);
        $this->is_dir = $var;

        return $this;
    }

}

