<?php 
echo "Logout clicked";
session_start();
session_destroy();
header("Location: ../index.php");
?>