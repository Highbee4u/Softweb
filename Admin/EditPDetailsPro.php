<?php
	require("db.php");
?>
<?php

 if (isset($_POST['submit'])){
		$id = $_POST['txtPID'];
		$PReg = $_POST['txtPRegNo'];
	 $Title = $_POST['projectTittle'];
	 $Cname = $_POST['CompName'];
	 $CAddress = $_POST['CompAddress'];
	 $SDate = $_POST['ProjectSDate'];
	 $EDate = $_POST['ProjectEDate'];
	 $CPerson = $_POST['CContactPerson'];
	 $PDone = $_POST['PCompLevel'];
	 $OIncharge = $_POST['DevICharge'];
	 $PTBUsed = $_POST['PlatToBeUsed'];
	 $CM = $_POST['txtCEmail']


			  $query = "UPDATE projectProgress SET projectRegNo ='".$PReg."',companyEmail ='".$CM."', Title ='".$Title."', companyName ='".$Cname."', companyAddress='".$CAddress."', startDate='".$SDate."', endDate='".$EDate."', contactPerson='".$CPerson."', percentageDone='".$PDone."', officerInCHarge='".$OIncharge."', PlatformInUse='".$PTBUsed."' WHERE projectID ='".$id."'";
				$result = mysql_query($query);
				if (!$result) {
					die("Database Query Error: " .mysql_error());
				}
				else
				{
					header("location: projectProgress.php");
				}
 }
?>
