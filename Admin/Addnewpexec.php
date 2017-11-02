<?php
	require("db.php");
	 $Title = $_POST['Tittle'];
	 $CName = $_POST['CName'];
	 $CAddress = $_POST['CAddress'];
	 $SDate = $_POST['SDate'];
	 $EDate = $_POST['EDate'];
	 $CCPerson = $_POST['CCPerson'];
	 $PLevel = $_POST['PLevel'];
	 $DICharge = $_POST['DICharge'];
	 $PTBUsed = $_POST['PTBUsed'];
	 $PRegNo = $_POST['PRegNo'];


 if (isset($_POST['submit'])){

			  $query = "INSERT INTO projectprogress (projectID, projectRegNo, Title, companyName, companyAddress, startDate, endDate, contactPerson, percentageDone, officerInCHarge, platformInUse) VALUES (null, '$PRegNo', '$Title', '$CName', '$CAddress', '$SDate', '$EDate', '$CCPerson', '$PLevel', '$DICharge', '$PTBUsed');";
				$result = mysql_query($query);
				if (!$result) {
					die("Database Query Error: " . mysql_error());
				}

			header("location: projectprogress.php");
}

 ?>