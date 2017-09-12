<?php 
try {
      $db = new PDO('mysql:host=localhost;dbname=kzt','root','');
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $q = $db->exec('CREATE TABLE User (user_id INT PRIMARY KEY,user_name VARCHAR(100), password VARCHAR(25), Address VARCHAR(255))');
   } catch (PDOException $e) {
      print "Couldn't connect to the database: " . $e->getMessage();
   }
 ?>