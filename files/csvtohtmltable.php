<?php 
	$html = '<html>
 			<head>
 			<title>CSV to HTML Table</title>
 			</head>
 			<body>
 			<table>
 			<th>Name</th><th>Price</th><th>Spicy</th>';
	$fh = fopen('dish.csv', 'r');
	if(!$fh){
		print("Error opening dishes.txt: $php_errormsg");
	} else{

		while ((! feof($fh)) && ($info = fgetcsv($fh))) {	
		 	
		 $html .= '<tr><td>'. $info[0] . '</td>' . '<td>'. $info[1] . '</td>' . '<td>' . ($info[2] == 1 ? 'yes' : 'no') . '</td></tr>';
		 #$html .= ($info[2] == 1 ? 'yes' : 'no');
		 #$html .=  '</td></tr>'; 
		}
		if (!fclose($fh)){
			print "Error closing dishes.txt: $php_errormsg";
		}
	}
	$html .= '</table> </body></html>';
	print $html;
 ?>

 
 