<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Api;

/**
 */
class AuthClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Api\CreateTokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateToken(\Api\CreateTokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Auth/CreateToken',
        $argument,
        ['\Api\TokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\VerifyTokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VerifyToken(\Api\VerifyTokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Auth/VerifyToken',
        $argument,
        ['\Api\UserResponse', 'decode'],
        $metadata, $options);
    }

}
