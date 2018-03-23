<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Api;

/**
 */
class StorageClient extends \Grpc\BaseStub {

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
    public function CreateDir(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/CreateDir',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/Delete',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\MoveReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Move(\Api\MoveReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/Move',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Inspect(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/Inspect',
        $argument,
        ['\Api\MetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFolder(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Storage/ListFolder',
        $argument,
        ['\Api\MetadataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\EmptyReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StartWriteTx(\Api\EmptyReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/StartWriteTx',
        $argument,
        ['\Api\TxInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WriteChunk($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/api.Storage/WriteChunk',
        ['\Api\WriteSummaryResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\TxEnd $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FinishWriteTx(\Api\TxEnd $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/FinishWriteTx',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadFile(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Storage/ReadFile',
        $argument,
        ['\Api\DataChunkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListRevisions(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Storage/ListRevisions',
        $argument,
        ['\Api\RevisionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\RevisionReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ReadRevision(\Api\RevisionReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Storage/ReadRevision',
        $argument,
        ['\Api\DataChunkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\RevisionReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RestoreRevision(\Api\RevisionReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/RestoreRevision',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListRecycle(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Storage/ListRecycle',
        $argument,
        ['\Api\RecycleEntryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\RecycleEntryReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RestoreRecycleEntry(\Api\RecycleEntryReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/RestoreRecycleEntry',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\PathReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EmptyRecycle(\Api\PathReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Storage/EmptyRecycle',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

}
