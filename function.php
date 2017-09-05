<?php
function countdown($top){
	while ($top > 0){
		print "$top..";
		$top--;
	}
	print "boom!";
}

$counter = 5;
countdown($counter);
print "Now, counter is $counter";



function resturatant($meal,$tax,$tip){
$tax_amount = $meal *($tax/100);
$tip_amont  = $tip * ($tip/100);
$totalamount_without_tip = $meal + $tax_amount;
$totalamount = $meal+$tax_amount+$tip_amont;
return array($totalamount,$totalamount_without_tip);
}

function paymentmethod($cash_on_hand,$total){
	if ($cash_on_hand>$total){
		print "cash";
	}
	else {
		print "Credit card";
	}
}

$total = resturatant(10,7,2);
$method = paymentmethod(7,$total[0]);

print "I will pay with $method";
print "\n";


	$dinner = 'Curry Cuttlefish';
	function vegetarian_dinner() {
		print "Dinner is $dinner, or ";
		$dinner = 'Sauteed Pea Shoots';
		print $dinner;
		print "\n";
	}
	function kosher_dinner() {
		print "Dinner is $dinner, or ";
		$dinner = 'Kung Pao Chicken';
		print $dinner;
		print "\n";
	}
	print "\n";
	print "Vegetarian ";
	vegetarian_dinner();
	print "Kosher ";
	kosher_dinner();
	print "Regular dinner is $dinner";





?>




