
<?php
$access_token = '3Fa9KNGEYRuURJ/p3qa4n0BR5cOeDm1N2Wz4eXTo6oUwkybau5B62CaN125LpY8iwPDtfeH8LA5H0wxDa9AMgoPxKVtyd2WyXq2M2MGsXfqJwXVdrkVab6jNctxT4Pp1l0xt+v1fyx/LCyKIajBAzAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;