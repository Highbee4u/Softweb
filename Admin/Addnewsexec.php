<?php
	require("db.php");

	//this section will deal with the photo being uploaded
$temp_name=$_FILES['uploaded']['tmp_name'];
	  $type= $_FILES['uploaded']['type'];	
	  $image=addslashes(file_get_contents($_FILES['uploaded']['tmp_name']));
		$image_name=addslashes($_FILES['uploaded']['name']);
	  
	  //Check Image Size
	  list($width,$height) = getimagesize($temp_name);
	  $newwidth=100;
	  $newheight1<=100;
	  $newheight2<=120;
	  

	
	  
	  //Check for image type
	  if (($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp") || ($type=="image/png")){
	  echo"";
	  }
	  else{
	  echo "Your File Must be in jpeg, jpg or bmp";
			exit;
	  }
	  $target = "Gallery/";
	  $target = $target .$image_name; 
	  
	  if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) {
			  	echo "";
			  }
			  else{
			  	echo "<h2>your image was not uploaded successfully</h2>";
			  }
	  
$Tittle = $_POST['Tittle'];
$Description = $_POST['Description'];

			  $query = "INSERT INTO news (Tittle, Description, Photo) VALUES ('$Tittle', '$Description', '$image_name');";
				$result = mysql_query($query);
				if (!$result) {
					die("Database Query Error: " . mysql_error());
				}

			header("location: Dashboard.php");


 ?>