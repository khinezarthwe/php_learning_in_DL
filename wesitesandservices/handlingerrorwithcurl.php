<?php 
$c = curl_init('https://api.example.gov/');
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($c);
$info = curl_getinfo($c);
var_dump($result);
var_dump($info);

if ($result === false){
	print "Error #" . curl_errno($c) . "<br>";
}

else if($info['http_code'] >= 400){
	print "The server says HTTP error {$info['http_code']} . <br>";
}
else{
	print "A Successful result!";
}
print "By the way, this request took {$info['total_time']} seconds.\n";

?>
