<?php 

	try {
		$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
	} catch (PDOException $e) {
		print "Couldn't connect to database: " . $e->getMessage();
		exit();
	}
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="dishes.csv"');
	$fh = fopen('php://output','wb');
	$dishes = $db->query('SELECT dish_name,price,is_spicy FROM dishes');
	while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
		fputcsv($fh,$row);
	}
?>