<?php 

try {
		$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$q = $db->exec('CREATE TABLE dishes (dish_id INT,dish_name VARCHAR(255), price DECIMAL(4,2), is_spicy INT)');
	} catch (PDOException $e) {
		print "Couldn't connect to the database: " . $e->getMessage();
	}
 ?>