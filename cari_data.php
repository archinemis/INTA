<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1037015761062060032-pBC2dEPOmnbJ5A2kBxozpZTiztpoDB",
    'oauth_access_token_secret' => "LgkQR5nEt6cJwJvR9M2vPhadgmpMOIE4swBGU5XHlEsB7",
    'consumer_key' => "ZtfR11E97qBdbcfcGjupdcoHn",
    'consumer_secret' => "M7TE8qFnGz9jiD9ZwMV7aC43dvDMWmDxQYO78Y61dIeMLueW9v"
);

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$getdata = $_GET["cari"];
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?q='.$getdata.'&result_type=recent&count=50';

// Perform the request
$twitter = new TwitterAPIExchange($settings);
$json_data = $twitter->setGetfield($getfield)
                     ->buildOauth($url, $requestMethod)
                     ->performRequest();

// echo $json_data;

$array_data = json_decode($json_data,true);
// print_r($array_data);
// var_dump($array_data);
// echo '<b>@'.$array_data[0]->user->screen_name.'</b><small> '.date('d M Y H:i A', strtotime($array_data[0]->created_at)).'</small><br>';
// echo $array_data->statuses->text[0];
