<?php 
include '../config/dbconfig.php';

$dbSuccess = false;
$dbConnected = mysql_connect($db['hostname'],$db['username'],$db['password']);
if($dbConnected){
	$dbSelected = mysql_select_db($db['database_name'],$dbConnected);
	if($dbSelected){
		$dbSuccess = true;
	}
}
if($dbSuccess){
	echo "SUCCESS";
}
?>
