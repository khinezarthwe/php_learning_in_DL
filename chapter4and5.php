$vegetables['corn']='yellow';

$letters[0] = 'A';
$letters[1] = 'B';
$letters[3] = 'D';
$letters[2] = 'C';
foreach ($letters as $letter) { print $letter;
}



$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus'); 

$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');


foreach($dinner as $key => $value){
	print " \$dinner: $key $value\n";
}