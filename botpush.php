<?php



require "vendor/autoload.php";

$access_token = 'Y70P0dwqbPTdMtBmy47uA7eF//ENZXJqHb5mjLsrr4wEzv4U4vWX2lPOB/OpHi7BRnIaXlaaYa9ErKwVtbD9LGAvGYXCk+Z1j2A2DQ4LXOA7w307mQqdiadnU/KQLfH++gQRyIsXkdNQ9R3fxLSMaQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cba1729c4428c1c3c893046ec82d74ab';

$pushID = 'U77bfaae6b2b30dbfc7913b1ac3f10eb9';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







