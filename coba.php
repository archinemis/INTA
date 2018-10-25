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
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$requestMethod = 'GET';
$getfield = '?q=#Gempa';

// Perform the request
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();


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
             $url = 'https://api.twitter.com/1.1/search/tweets.json';
             $requestMethod = 'GET';
             $getfield = '?q=#Gempa';
             
             // Perform the request
             $twitter = new TwitterAPIExchange($settings);
             echo $twitter->setGetfield($getfield)
                          ->buildOauth($url, $requestMethod)
                          ->performRequest();
             
