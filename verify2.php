<?php
$access_token = '3Ijg/pg3qWlfYiYSUjYDz3Gj/zL84P/wHUTyzeYvZCYR45P4HyHsTrA/lKVdblzmx3LoCku4fQeupqkuVx+bHZDn8Z+TR+1iLihrfstR9PkEzv+rXj07CX3louJJcQ/rySYO14B8z5+iZ/nf0Xh88QdB04t89/1O/w1cDnyilFU=';
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
