<?php

$hostname = "localhost" ;
$username = "root" ;
$password = "";
$databaseName = "kzt";
$dbConnected = @mysql_connect($hostname,$username,$password);
$dbSelected = @mysql_select_db($databaseName,$dbConnected);
if ($dbConnected) {
	echo "My SQL connected OK <br/> <br/>";
	if ($dbSelected) {
		echo "DB connected Ok<br/>";
		}
	} else {
		echo "MySQL connection failed";
}

?>