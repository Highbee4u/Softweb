
<?php
include('src/Header.php');
?>
<fieldset>
	<legend><h2>Upload New Project Details Here</h2></legend>
  <form method="post" action="Addnewpexec.php" enctype="multipart/form-data">
		<p>Project Reg. No::</p>
	<input type="text" name="PRegNo"  cols="100" rows="50" required />
		<p>Tittle:</p>
	<input type="text" name="Tittle" required />
		<p>Client Company Name:</p>
	<input type="text" name="CName" cols="100" rows="50" required/>
	<p>Client Company Address:</p>
	<input type="text" name="CAddress" cols="100" rows="50" required/>
	<p>Project Proposed Start Date:</p>
	<input type="text" name="SDate" cols="100" rows="50" required />
	<p>Project Proposed End Date:</p>
	<input type="text" name="EDate" cols="100" rows="50" required />
	<p>Client Contact Person:</p>
	<input type="text" name="CCPerson" cols="100" rows="50" required />
	<p>Project Completion Level:</p>
	<input type="text" name="PLevel" cols="100" rows="50" required />
	<p>Developer In Charge:</p>
	<input type="text" name="DICharge" cols="100" rows="50" required />
	<p>Platform To be Used:</p>
	<input type="text" name="PTBUsed" required cols="100" rows="50" />
	<p>
	  <input type="submit" class="btn" name="submit" value="Upload Details" />
    </p>
    </form>


</fieldset>
<?php
include('src/footer.html');
?>