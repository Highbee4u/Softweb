<?php
include('Head.php');
$myrow = "";
?>
<?php
include ('db.php');
if (isset($_POST['btnSubmit'])) {
	$Preg = $_POST['txtpRegNo'];
 $query = ("SELECT * FROM projectprogress WHERE projectRegNo = '$Preg'");
  $result = mysqli_query($bd, $query);
  if (!$result) {
    die("Database Query Error: " . mysqli_error());
  }
  
  $myrow = mysqli_fetch_array($result);
}
?>
<div id="site_content">
      <div class="content">
  <form method="post" action="" id="contact" autocomplete="off">
	<div align="center">
	<table cellpadding="1" cellspacing="1" id="resultTable">
		<tr>
			<td><strong>Tittle:</strong></td>
			<td><?php echo $myrow['Title'] ?> </td>
		</tr>
		<tr>
			<td><strong>Client Company Name:</strong></td>
			<td><?php echo $myrow['companyName'] ?> </td>
		</tr>
		<tr>
			<td><strong>Client Company Address:</strong></td>
			<td><?php echo $myrow['companyAddress'] ?> </td>
		</tr>
		<tr>
			<td><strong>Project Proposed Start Date:</strong></td>
			<td><?php echo $myrow['startDate'] ?></td>
		</tr>
		<tr>
			<td><strong>Project Proposed End Date:</strong></td>
			<td><?php echo $myrow['endDate'] ?></td>
		</tr>
		<tr>
			<td><strong>Client Contact Person:</strong></td>
			<td><?php echo $myrow['contactPerson'] ?></td>
		</tr>
		<tr>
			<td><strong>Project Completion Level:</strong></td>
			<td><?php echo $myrow['percentageDone'] ?> </td>
		</tr>
		<tr>
			<td><strong>Platform To be Used:</strong></td>
			<td><?php echo $myrow['platformInUse'] ?></td>
		</tr>
		<tr>
			
		</tr>
	</table>
	</div>
    </form>
</div>
</div>
      	
<?php
include('footer.php');
?>