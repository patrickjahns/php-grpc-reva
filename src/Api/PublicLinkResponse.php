<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.PublicLinkResponse</code>
 */
class PublicLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.api.StatusCode status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>.api.PublicLink publicLink = 2;</code>
     */
    private $publicLink = null;

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
     * Generated from protobuf field <code>.api.PublicLink publicLink = 2;</code>
     * @return \Api\PublicLink
     */
    public function getPublicLink()
    {
        return $this->publicLink;
    }

    /**
     * Generated from protobuf field <code>.api.PublicLink publicLink = 2;</code>
     * @param \Api\PublicLink $var
     * @return $this
     */
    public function setPublicLink($var)
    {
        GPBUtil::checkMessage($var, \Api\PublicLink::class);
        $this->publicLink = $var;

        return $this;
    }

}

