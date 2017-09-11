<?php



if ($_SERVER['REQUEST_METHOD']=='POST'){
	if ($form_errors = validate_form()){
		process_form();
	}else{
		show_form($form_errors);
	}
} else{
	show_form();
}
////print the name when the form is submitted
function process_form(){
	print "Hello  " . $_POST['name'];
}

///showing the form 
function show_form($errors='') {
	if ($errors) {
		print 'Please correct these errors: <ul><li>';
		print implode('</li><li>', $errors);
		print '</li></ul>';
	}

	print<<<_HTML_
<form method="POST" action="$_SERVER[PHP_SELF]">
Your name: <input type="text" name="name">
<br/>
<input type="submit" value="Say Hello">
</form>
_HTML_;
}

function validate_form(){
	$errors = array();
	if (strlen($_POST['my_name']) < 3)
	{
		$errors = "Your name should be more than 3 characters";
	} 
	return $errors;

}

?>