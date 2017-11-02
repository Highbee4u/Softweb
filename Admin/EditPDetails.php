
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
  <form method="post" action="EditPDetailsPro.php">
  	<input type="Hidden" name="txtPID" value=<?php echo $myrow['projectRegNo'] ?> cols="100" rows="50" />
		<p>Project Reg. No:</p>
	<input type="text" name="txtPRegNo" required value=<?php echo $myrow['projectRegNo'] ?> cols="100" rows="50" />
		<p>Company Email:</p>
	<input type="text" name="txtCEmail" required value=<?php echo $myrow['companyEmail'] ?> cols="100" rows="50" />
		<p>Tittle:</p>
	<input type="text" name="projectTittle" required  value=<?php echo $myrow['Title'] ?> cols="100" rows="50"/>
		<p>Client Company Name:</p>
	<input type="text" name="CompName" required value=<?php echo $myrow['companyName'] ?>  cols="100" rows="50"/>
	<p>Client Company Address:</p>
	<input type="text" name="CompAddress" required value=<?php echo $myrow['companyAddress'] ?> cols="100" rows="50" />
	<p>Project Proposed Start Date:</p>
	<input type="text" name="ProjectSDate" required value=<?php echo $myrow['startDate'] ?>  cols="100" rows="50"/>
	<p>Project Proposed End Date:</p>
	<input type="text" name="ProjectEDate" required value=<?php echo $myrow['endDate'] ?> cols="100" rows="50" />
	<p>Client Contact Person:</p>
	<input type="text" name="CContactPerson" required value=<?php echo $myrow['contactPerson'] ?> cols="100" rows="50" />
	<p>Project Completion Level:</p>
	<input type="text" name="PCompLevel" required value=<?php echo $myrow['percentageDone'] ?> cols="100" rows="50" />
	<p>Developer In Charge:</p>
	<input type="text" name="DevICharge" required value=<?php echo $myrow['officerInCHarge'] ?> cols="100" rows="50" />
	<p>Platform To be Used:</p>
	<input type="text" name="PlatToBeUsed" required value=<?php echo $myrow['platformInUse'] ?>  cols="100" rows="50" />
	<p>
	  <input type="submit" class="btn" name="submit" value="Update Details" />
    </p>
    </form>


</fieldset>
<?php
include('src/footer.html');
?>