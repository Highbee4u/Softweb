
<?php
include('src/Header.php');
?>
<?php
include("db.php");
  $NID = $_GET['id'];

  $query = ("SELECT * FROM admin where id = '$NID'");
  $result = mysql_query($query);
  if (!$result) {
    die("Database Query Error: " . mysql_error());
  }
  
  $myrow = mysql_fetch_array($result);
  
?>
<fieldset>
	<legend><h2>Edit Users Details </h2></legend>
		<form method="post" action="EditAdminDetails_pro.php" enctype="multipart/form-data">
		
        
        
		<input type="Hidden" name="id" value = "<?php echo $myrow['id'] ?>" cols="100" rows="50"/>
		
        <p>FullName:</p>
		<input type="text" name="name" value = "<?php echo $myrow['name'] ?>" cols="100" rows="50"/>
		<p>Username:</p>
		<input type="text" name="username" value = "<?php echo $myrow['username'] ?>" cols="100" rows="50"/>
		<p>Password:</p>
		<input type="password" name="password" value = "<?php echo $myrow['password'] ?>" cols="100" rows="50"/><br/>
		<input type="submit" class="btn" name="submit" value="Update Details" />
	</form>


</fieldset>
<?php
include('src/footer.html');
?>