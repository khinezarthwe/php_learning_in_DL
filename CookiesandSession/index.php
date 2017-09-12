<?php 
	include 'header.php';
 ?>

<form action="includes/login.inc.php" method="POST">
	<input type="text" name="uid" placeholder="User Name"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">Log In</button><br>
</form>


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
<form action="includes/logout.inc.php">
	<button >LOG OUT</button>
</form>



</body>
</html>