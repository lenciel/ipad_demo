<?PHP
error_reporting(0);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,            "http://207.245.49.198:8090/rps/2/providers" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POST,           1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,     "body goes here" );
curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain'));

$result=curl_exec ($ch);

print $result
?>