<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.RevisionResponse</code>
 */
class RevisionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.StatusCode status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>.api.Revision revision = 2;</code>
     */
    private $revision = null;

    public function __construct() {
        \GPBMetadata\Api\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.api.StatusCode status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.api.StatusCode status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Api\StatusCode::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.api.Revision revision = 2;</code>
     * @return \Api\Revision
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Generated from protobuf field <code>.api.Revision revision = 2;</code>
     * @param \Api\Revision $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkMessage($var, \Api\Revision::class);
        $this->revision = $var;

        return $this;
    }

}

