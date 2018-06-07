
<?php
$access_token = 'bwLr+NAIExfS1R/pc0NkTVvsi8ftgrwAwuwy3zCtomp3ZuBAYvqb6G7Xf6ZSxoTSkmCluVXDjE+Iu5TFZY2sGa0ZrsZ664ST/bf+AnDEUxxXH8jHGz7Cepf3tfDE/5vyPnYV1NXjTdBpoj31fsJPbAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;