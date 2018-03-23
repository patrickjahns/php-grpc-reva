<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Api;

/**
 */
class PreviewClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadPreview(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Preview/ReadPreview',
        $argument,
        ['\Api\DataChunkResponse', 'decode'],
        $metadata, $options);
    }

}
