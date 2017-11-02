<?php
	require("db.php");
?>
<?php

 if (isset($_POST['submit'])){
		$id = $_POST['id'];
	 $name = $_POST['name'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];

//this section will check if the user has enter values in the box provided


	if (empty($name)){
	echo "<h3>Enter your fullname</h3>";
	exit;
	}
	if (empty($username)){
	echo "<h3>Enter your username</h3>";
	exit;
	}
	if (empty($password)){
	echo "<h3>Enter your password</h3>";
	exit;
	}

	

			  $query = "UPDATE admin SET name ='".$name."', username ='".$username."', password='".$password."' WHERE id ='".$id."'";
				$result = mysql_query($query);
				if (!$result) {
					die("Database Query Error: " . mysql_error());
				}
				else
				{
					header("location: users.php");
				}
 }
?>
