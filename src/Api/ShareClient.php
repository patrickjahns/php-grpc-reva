<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Api;

/**
 */
class ShareClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Api\NewLinkReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreatePublicLink(\Api\NewLinkReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/CreatePublicLink',
        $argument,
        ['\Api\PublicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\UpdateLinkReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdatePublicLink(\Api\UpdateLinkReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/UpdatePublicLink',
        $argument,
        ['\Api\PublicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\TokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InspectPublicLink(\Api\TokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/InspectPublicLink',
        $argument,
        ['\Api\PublicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\TokenReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RevokePublicLink(\Api\TokenReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/RevokePublicLink',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\EmptyReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPublicLinks(\Api\EmptyReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Share/ListPublicLinks',
        $argument,
        ['\Api\PublicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\NewFolderShareReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddFolderShare(\Api\NewFolderShareReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/AddFolderShare',
        $argument,
        ['\Api\FolderShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\UpdateFolderShareReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFolderShare(\Api\UpdateFolderShareReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/UpdateFolderShare',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\ListFolderSharesReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFolderShares(\Api\ListFolderSharesReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Share/ListFolderShares',
        $argument,
        ['\Api\FolderShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\UnshareFolderReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UnshareFolder(\Api\UnshareFolderReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/UnshareFolder',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\EmptyReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListReceivedShares(\Api\EmptyReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/api.Share/ListReceivedShares',
        $argument,
        ['\Api\ReceivedShareResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\ReceivedShareReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MountReceivedShare(\Api\ReceivedShareReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/MountReceivedShare',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Api\ReceivedShareReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UnmountReceivedShare(\Api\ReceivedShareReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/api.Share/UnmountReceivedShare',
        $argument,
        ['\Api\EmptyResponse', 'decode'],
        $metadata, $options);
    }

}
