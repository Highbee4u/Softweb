
<?php
include('src/Header.php');
?>
<?php
include ('db.php');
  $NID = $_GET['id'];

  $query = ("SELECT * FROM projectprogress WHERE projectID = '$NID'");
  $result = mysql_query($query);
  if (!$result) {
    die("Database Query Error: " . mysql_error());
  }
  
  $myrow = mysql_fetch_array($result);
  //$surname=$myrow['Surname']
?>
<fieldset>
	<legend><h2>Edit Project Details Here</h2></legend>
  <form method="post" action="#">
		
	<p><b>Tittle:</b></p>
	<input type="text" name="Tittle" required  value=<?php echo$myrow['Title']?> readonly="true"/>
		<p><b>Client Company Name:</b></p>
	<input type="text" name="CName"  readonly="true" cols="100" rows="50" required value=<?php echo$myrow['companyName']?> />
	<p><b>Client Company Address:</b></p>
	<input type="text" name="CAddress" readonly="true" cols="100" rows="50" required value=<?php echo$myrow['companyAddress']?> />
	<p><b>Project Proposed Start Date:</b></p>
	<input type="text" name="SDate" readonly="true" required value=<?php echo$myrow['startDate']?> />
	<p><b>Project Proposed End Date:</b></p>
	<input type="text" name="EDate" readonly="true" required value=<?php echo$myrow['endDate']?> />
	<p><b>Client Contact Person:</b></p>
	<input type="text" name="CCPerson" readonly="true" required value=<?php echo$myrow['contactPerson']?> />
	<p><b>Project Completion Level:</b></p>
	<input type="text" name="PLevel" readonly="true" required value=<?php echo$myrow['percentageDone']?> />
	<p><b>Developer In Charge:</b></p>
	<input type="text" name="DICharge" readonly="true" required value=<?php echo$myrow['officerInCHarge']?> />
	<p><b>Platform To be Used:<b></p>
	<input type="text" name="PTBUsed" readonly="true" required value=<?php echo$myrow['platformInUse']?> />
    </form>


</fieldset>
<?php
include('src/footer.html');
?>