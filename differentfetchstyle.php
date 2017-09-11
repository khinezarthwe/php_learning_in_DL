<?php 
	try {
		$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
	} catch (PDOException $e) {
		print "Couldn't connect to the database: " . $e->getMessage();
	}
	$q = $db->query('SELECT first_name,last_name,age,address FROM user');
	while ($row = $q->fetch(PDO::FETCH_NUM)) {
		#print implode(',', $row) . "<br>";
	}

	$q = $db->query('SELECT first_name,last_name,age,address FROM user');
		while ($row = $q->fetch(PDO::FETCH_OBJ)) {
		#print "{$row->first_name}" . "{$row->last_name}" . "has age {$row->age} and lived in {$row->address} <br>";
	}
	 print <<<_HTML_
    <form method="post" action="$_SERVER[PHP_SELF]">
    Search <input type="text" name="search" />
    <br/>
    <button type="submit">Search</button>
   </form>
_HTML_;
	
	$name = $db->quote($_POST['search']);
	var_dump($name);
	$name = strtr($name, array('_' => '\_', '%' => '\%'));
	var_dump($name);
	$stmt = $db->query("SELECT first_name FROM user WHERE first_name LIKE 'Kh%'");
	var_dump($stmt);
	while ($row = $stmt->fetch(PDO::FETCH_NUM)){
		print implode(',', $row) . "<br>";
	}
 ?>
 
