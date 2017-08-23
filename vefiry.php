<?php
$access_token = 'pcAXV1P5Zz1B3ptcbkagTBMY1oaTTFYIQQWsW8jluVFnvJx3dImhgAzzmpmdgTJH+yayuggit1UJ9I6lKdYjyclHyLfE/YUe8/1fesCA6NbTVMgyigsmqSevfJ8+HP6ANpUSnoGXroRxYt/PtK8fdwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
