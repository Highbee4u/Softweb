<?php
include('db.php');
session_start();
              //if (isset($_SESSION['userEmail'])) {
                $Em = $_SESSION['userEmail'];

$Qry = ("SELECT * FROM client WHERE userEmail='$Em'");
$result= mysqli_query($bd, $Qry);
if (!$result) {
    die("Database Query Error: " . mysql_error());
  }
  
  $myrow = mysqli_fetch_array($result);
  
?>
<?php

 if (isset($_POST) & !empty($_POST)){
 		$Ustat=$_POST['txtUst'];
 		$id = $_POST['txtID'];
		$Uname = $_POST['txtuname'];
		$email = $_POST['txtemail'];
	 $password = $_POST['txtpass'];
	 $CPhone = $_POST['txtPhone'];
	 $Cname = $_POST['txtCName'];
	 $CAddress = $_POST['txtAddress'];
	 $CPerson = $_POST['txtCPerson'];
	 $cCode = $_POST['txtCode'];
	


			  $query = "UPDATE client SET UserID='".$id."',companyName='".$Cname."',address='".$CAddress."',userName='".$Uname."',password='".$password."',userEmail='".$email."',userStatus='".$Ustat."',contactPerson= '".$CPerson."',Phone='".$CPhone."',confirmationCode='".$cCode."' WHERE userEmail = '".$email."'";
				$result = mysqli_query($bd, $query);
				if (!$result) {
					die("Database Query Error: " .mysql_error());
				}
				else
				{
					header("location: UpdateSuccessful.php");
				}
 }
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Client Signup | Softweb ICT</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" method="post" autocomplete="off">
        <h2 align="center">Update Your Registration Details</h2><hr />
        <h6 align="center">**All Fields Are Required And Must be filled**</h6>
        <table width="591" align="center">
       	  <input type="Hidden" name="txtID" value="<?php echo $myrow['UserID'] ?>"/>
       	  <input type="Hidden" name="txtUst" value="<?php echo $myrow['userStatus'] ?>"/>
       	  <input type="Hidden" name="txtCode" value="<?php echo $myrow['confirmationCode'] ?>"/>
       	    <tr>
        		<td>
        	        <label>Username:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" value = "<?php echo $myrow['userName'] ?>"required />
			    </td>
        	        <td>&nbsp;</td>
			    <td>
			        <label>Email:</label></td><td>
			        <input type="Email" class="input-block-level" placeholder="Email address" name="txtemail" readonly value = "<?php echo $myrow['userEmail'] ?>" required />
			    </td>
			</tr>
			<tr>
			     <td>
			        <label>Password:</label></td><td>
	        		<input type="password" class="input-block-level" placeholder="Password" name="txtpass" value = "<?php echo $myrow['password'] ?>" required />
	        	 </td>
			        <td>&nbsp;</td>
	        	 <td>
			        <label>Company's Phone No:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Phone Number" name="txtPhone" value = "<?php echo $myrow['Phone'] ?>" required />
			    </td>
			</tr>
			<tr>
				<td>
			        <label>Company Name:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Company Name" name="txtCName" value = "<?php echo $myrow['companyName'] ?>" required />
			    </td>
			        <td>&nbsp;</td>
			    <td>
			        <label>Address:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Company Address" name="txtAddress" value = "<?php echo $myrow['address'] ?>" required />
	        	</td>
	        </tr>
	        <tr>
			    <td>
			        <label>Contact Person:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Contact Person" name="txtCPerson"  value = "<?php echo $myrow['contactPerson'] ?>" required />
	        	</td>
	        </tr>
	        
	        <tr>
	        	<td colspan="2"> &nbsp;</td>
	            <td>&nbsp;</td>
	            <td colspan="2"><button class="btn btn-large btn-primary" type="submit">Update Details</td>
            </tr>
		</table>
     	<hr />
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>