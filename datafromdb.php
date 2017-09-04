<?php

print <<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
ZipCode: <input type="text" name="zipcode" />
</br>
<button type="submit"> Submit zipcode </button>
</form>
_HTML_;

$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);
if ($zip_length !=5){
	print "Please enter 5 character zipcode";
}


?>