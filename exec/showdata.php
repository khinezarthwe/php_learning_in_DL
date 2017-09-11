<?php 
try {
		$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
		$q = $db->query('SELECT * FROM dishes ORDER BY price');
		$dishes = $q->fetchAll();
		if (count($dishes) == 0){
		 $html = "No dishes to display <br>";
		} else {
			$html = "<table>";
			$html .= "<tr><th>Dish Name </th><th>Price</th><th>Spicy</th></tr>";
			foreach ($dishes as $dish) {
				$html .= '<tr><td>' . 
				htmlentities($dish['dish_name']) . '</td><td>' .
				sprintf('%0.2f',$dish['price']) . '</td><td>' . 
				($dish['is_spicy'] ? 'yes' : 'no') . '</td></tr><br>';
			}
			$html .= "</table>";
		}
	} catch (PDOException $e) {
		print "Couldn't connect to the database: " . $e->getMessage();
	}

    print $html;
 ?>

