<?php
$access_token = 'WkzCZMRu/faiuu/WL1p5N/M5yGUuHUOpIg0C/e2PXviIYUKixikQHVP4T+C/kGKVSgH9rSYLgbz84hXitQYR3c1qgDjdT9a8SXjPIPs0TIOJdhVbufDQSCMvze0V83WnDGG5NODVog6znmdfzekfuQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
