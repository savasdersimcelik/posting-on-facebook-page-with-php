<?php

require_once __DIR__ . '/vendor/autoload.php';
use \Facebook\Facebook;

$app_id = '735389XXXXXXXXX';                            // Uygulama ID
$page_id = '165094XXXXXXXXXX';                          // Sayfa ID
$app_secret = 'b6615209e79XXXXXXXXXXXXXXXXXXXXX';       // Uygulama App Secret Key
$default_graph_version = 'v2.5';
$default_access_token = 'XXXXXXXXXXXXXXXXXXXXXX';       // Varsayılan Access Token

$fb = new Facebook([
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.5'
]);

$longLivedToken = $fb->getOAuth2Client()->getLongLivedAccessToken($default_access_token);

$fb->setDefaultAccessToken($longLivedToken);

$response = $fb->sendRequest('GET', $page_id, ['fields' => 'access_token'])
    ->getDecodedBody();

$foreverPageAccessToken = $response['access_token'];

$fb->setDefaultAccessToken($foreverPageAccessToken);

/**
 * Sayfaya metin ve link paylaşmak için kullanılan sistem
 */

$fb->sendRequest('POST', "$page_id/feed", [
    'message' => 'Merhaba Dünya! Youtube Kanalımı Ziyaret Edin',
    'link' => 'https://www.youtube.com/channel/UCCPqWRK_IEDFYcBgn0f7lyw',
]);

/**
 * Sayfaya resim yüklemek için kullanılan sistem
 */

$fb->sendRequest('POST', "$page_id/photos", [
    'url' => 'https://i.pinimg.com/originals/47/36/2c/47362c5a957f824fcbfa5fcfcedeb232.jpg',
]);
