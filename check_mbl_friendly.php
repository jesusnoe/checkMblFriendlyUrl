<?php
/**
 * @param $url
 * @param $apiKey
 * @return mixed
 */

// Get params from url
$url =	$_GET['url'];
$apiKey = $_GET['apiKey'];

//result as an array
$result = json_decode(isMobileFriendly($url, $apiKey), true);

var_dump($result);


/*
 * Function definition
 */
function isMobileFriendly($url, $apiKey)
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER     => array('Content-Type:application/json'),
    	CURLOPT_POSTFIELDS     => json_encode(array(
        'url' => $url
    	)),
        CURLOPT_URL => 'https://searchconsole.googleapis.com/v1/urlTestingTools/mobileFriendlyTest:run?key='.$apiKey,
    ));
    $resp = curl_exec($curl);
    curl_close($curl);

    return $resp;
}
