<?php
require_once __DIR__.'/../vendor/autoload.php';

$client= new \Api\AuthClient('localhost:1093', [
	'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

$req = new \Api\CreateTokenReq();
$req->setClientId('username');
$req->setClientSecret('password');
/** @var $response \Api\TokenResponse */
list($response, $status) = $client->CreateToken($req)->wait();

$token = $response->getToken()->getToken();

$authArray = ['authorization' => [ 'bearer '.$token]];


$storageClient = new \Api\StorageClient('localhost:1093', [
	'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);
//$pathRequest = new \Api\PathReq();
//$pathRequest->setPath("/home");
//$items = $storageClient->ListFolder($pathRequest, $authArray);
//$responseItem = $items->responses();
//foreach ($responseItem as $item) {
//	/** @var $item \Api\Metadata */
//	$item->getPath():
//
//}

$getFileReq = new \Api\PathReq();
$getFileReq->setPath('/home/final.png');
$itemsCall = $storageClient->ReadFile($getFileReq, $authArray);
$responseItem = $itemsCall->responses();
/** @var $responseItem */
foreach ($responseItem as $item) {
	/** @var $item \Api\DataChunk **/
	echo $item->getData();
}