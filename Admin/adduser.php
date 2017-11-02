
<?php
include('src/Header.php');
?>
<fieldset>
	<legend><h2>Add New User Here</h2></legend>
		<form method="post" action="adduserexec.php" enctype="multipart/form-data">
		
		<p>FullName</p>
		<input type="text" name="name" />
		<p>Username</p>
		<input type="text" name="username" />
		<p>Password</p>
		<input type="password" name="password" />
		<input type="submit" class="btn" name="submit" value="Add Admin" />
	</form>


</fieldset>
<?php
include('src/footer.html');
?>