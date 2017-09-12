<?php 
    try {
		$db = new PDO('mysql:host=localhost;dbname=kzt','root','');
	} catch (PDOException $e) {
		print "Couldn't connect to database: " . $e->getMessage();
		exit();
	}
/**	if (file_exists('/usr/local/htdocs/index.html')) {
	print "Index file is there.";
	} else {
	print "No index file in /usr/local/htdocs.";
	}

	$template_file = 'page.html';
		if (is_readable($template_file)) {
			$template = file_get_contents($template_file);
			print $template;
		} else {
			print "Can't read template file.";
		}
*/
	$fh = fopen('dish.txt', 'wb');
	if(!$fh){
		print("Error opening dishes.txt: $php_errormsg");
	} else{
		$q = $db->query("SELECT dish_name,price FROM dishes");
		while ($row = $q->fetch()) {
			fwrite($fh, "The price of $row[0] is $row[1]");
		}
		if (!fclose($fh)){
			print "Error closing dishes.txt: $php_errormsg";
		}
	}
 ?>