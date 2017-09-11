<?php
$first_name = $_POST['user_firstname'];
$last_name  = $_POST['user_lastname'];
$age 		= $_POST['age'];
$hostname	 = "localhost";
$username	 = "root";
$password	 = "";
$database_name = "kzt";
$dbConnected = @mysql_connect($hostname,$username,$password);
$dbSelected  = @mysql_select_db($database_name,$dbConnected);
$dbSuccess 	 = true;
	if ($dbConnected) {
		if(!$dbSelected){
			echo "DB Connection Failed";
			$dbSuccess = false;
		}
	}else  {
		echo "SQL Connection Failed";
		$dbSuccess = false;
	}

if ($dbSuccess) {
 	$sql = 'SELECT first_name, last_name, age, address FROM user';
   	mysql_select_db('$database_name');
    $retval = mysql_query( $sql, $dbConnected );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Username  :{$row['first_name']}  {$row['last_name']}  <br> ".
         "Age : {$row['age']} <br> ".
         "Address : {$row['address']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";




   $sql = "INSERT INTO user (first_name, last_name, age, address)
           VALUES ('$first_name','$last_name','$age', 'Pazaungdaungs')";
   
   mysql_select_db('kzt');
   $retval = mysql_query( $sql, $dbConnected );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
}
?>



