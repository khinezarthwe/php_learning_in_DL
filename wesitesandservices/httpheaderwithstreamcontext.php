<?php 
define('NDB_API_KEY','SVbY34JM6f71SrEbE2CPEgfc5mtfVotAFzPLf0lG');
$params = array('api_key' => NDB_API_KEY,
				'q'		  => 'black pepper',
				'format'  => 'json'	);
$url = "http://api.nal.usda.gov/ndb/search?" . http_build_query($params);
$options = array('header' => 'Content-Type: application/json');
$context = stream_context_create(array('http' => $options));
print file_get_contents($url,false,$context);

?>