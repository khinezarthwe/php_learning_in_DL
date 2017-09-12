<?php 
	include 'header.php';
 ?>
<?php 
	
	if(isset($_SESSION['id'])){
		echo "You are already log in with the user id" .$_SESSION['id'];
	} else{

		echo "You are not logged in ";
	}

 ?>

<br>
<br>
<br>

<form action="includes/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="First Name"><br>
	<input type="text" name="last" placeholder="Last Name"><br>
	<input type="text" name="uid" placeholder="User Name"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">SIGN UP</button><br>
</form>



</body>
</html>