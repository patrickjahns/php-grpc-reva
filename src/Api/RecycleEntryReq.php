<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.RecycleEntryReq</code>
 */
class RecycleEntryReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string restore_key = 1;</code>
     */
    private $restore_key = '';

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string restore_key = 1;</code>
     * @return string
     */
    public function getRestoreKey()
    {
        return $this->restore_key;
    }

    /**
     * Generated from protobuf field <code>string restore_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRestoreKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->restore_key = $var;

        return $this;
    }

}

