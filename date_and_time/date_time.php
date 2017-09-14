<?php 

	$d = new DateTime();
	print 'It is now: ';
	print $d->format('r');
	print "<br>";
	print $d->format('m/d/y');
	$a = new DateTime('10:36 am');
	print $a->format('m/d/y');
	print "<br>";
	$daysToPrint = 4;
	$d = new DateTime('next Friday');
	
	var_dump($d);
	print "<select name='day'>\n";
	for ($i = 0; $i < $daysToPrint; $i++) {
		print " <option>" . $d->format('l F jS') . "</option>\n";
		// Add 2 days to the date
		$d->modify("+2 day");
	}
	print "</select>";

	$now = new DateTime();
	$birthdate = new DateTime('1990-08-2');
	$diff = $birthdate->diff($now);
	var_dump($diff);
	if (($diff->y > 13) && ($diff->invert == 0)) {
		print "You are more than 13 years old.";
	} else {
		print "Sorry, too young.";
	}
	print "<br>";
	print "You live in our world" . $diff->days . "days.";
	print "<br>";
	print "You live in our world" . $diff->y . "year" . $diff->m . "months" .$diff->d . "days" . $diff->h . "hours" . $diff->i . "miuntes" . $diff->s . "seconds.";



?>
