<?php 

function returnjson($json){
	$feed = json_decode($json,true);//changing to json code to array.
	$major_number = array_keys($feed); // selecting array
	rsort($major_number);
	$biggest_major_number = $major_number[0];
	$version = $feed[$biggest_major_number]['version'];
	return "The latest version of PHP released is $version.";
}
$json = file_get_contents("http://php.net/releases/?json");
//extracting json form using file get contents
if ($json === false){
	echo "There is no releases";
}
else {
	
	echo returnjson($json);
}


$c = curl_init("http://php.net/releases/?json");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($c);
if ($json === false){
	echo "There is no releases";
}
else {
	echo returnjson($json);
}
?>