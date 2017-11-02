<?php
	require("db.php");
	 $name = $_POST['name'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];

//this section will check if the user has enter values in the box provided
 if (isset($_POST['submit'])){

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

	// this section will deal with the photo being uploaded
	//$temp_name=$_FILES['photo']['tmp_name'];
	//$type= $_FILES['photo']['type'];	
	//$image=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	//$image_name=addslashes($_FILES['photo']['name']);

	//$target = "Gallery/";


	//$target = $target .$image_name; 

	//if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
	///		  	echo "";
		//	  }
		//	  else{
		//	  	echo "<h2>your image was not uploaded successfully</h2>";
		//	  }

			  $query = "INSERT INTO admin (name, username, password) VALUES ('$name', '$username', '$password');";
				$result = mysql_query($query);
				if (!$result) {
					die("Database Query Error: " . mysql_error());
				}

			header("location: users.php");
}

 ?>