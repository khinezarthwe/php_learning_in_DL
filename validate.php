<?php 
function validate_form()
{
	$errors = array();
	$input 	= array();

	$input['age'] = filter_input(INPUT_POST,'age', FILTER_VALIDATE_INT);
	if (is_null($input['age'])||($input['age']=== false)){
		$errors[] = 'Please Enter the valid age.';
	}
	$input['price'] = filter_input(INPUT_POST,'price', FILTER_VALIDATE_FLOAT);
	if (is_null($input['price'])|| ($input['price']=== false)){
		$errors[] = 'Please Enter a valid price.';
	}
	$input['name'] = is_null(trim($_POST['name']));
	if (strlen($input['name'])==0){
		$errors[] = "Your name is required.";
	}
	return array($errors,$input);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// If validate_form() returns errors, pass them to show_form()
	list($form_errors, $input) = validate_form();
	if ($form_errors) {
	show_form($form_errors);
	} else {
		process_form($input);
	}	
	} else {
	show_form();
	}
function process_form($input){
	print "Hello  " . $input['name'];
}

///showing the form 
function show_form($errors) {
	print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}







 ?>