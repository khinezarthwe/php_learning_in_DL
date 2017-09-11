<?php 
try {
	$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
} catch (PDOException $e) {
	print "Couldn't connect to database: " . $e->getMessage();
	exit();
}
	$fh = fopen('dish.csv','rb');
	$stmt = $db->prepare('INSERT INTO dishes (dish_name,price,is_spicy) VALUES (?,?,?)');
 while ((! feof($fh)) && ($info = fgetcsv($fh))) {
 	 $stmt->execute($info);
 	 print "Inserted $info[0]<br>";
 }
 fclose($fh);
	$fh = fopen('dish-list.csv','wb');
	$dishes = $db->query('SELECT dish_name, price, is_spicy FROM dishes');
	var_dump($dishes);
	while ($row = $dishes->fetch(PDO::FETCH_NUM)) {
		fputcsv($fh, $row);
	}
fclose($fh);
 ?>