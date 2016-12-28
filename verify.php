<?php
$access_token = 'yAYJRvP+6++198PijMZa8tIto/ld9SKN/RU+kV0wDHn83WL5UdfhRriv87jLqCXsSMf3HAET3q+G9oVeH7AXJB3cJei57Bfd7hhn1u0OnR6ofCVm9lxM+YlhBSxi+TW9uehMvsd1jqbXKUX1gAqj7gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>