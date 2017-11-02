<?php
include('db.php');

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id = base64_decode($_GET['id']);
	$code = md5($_GET['code']);
	
	$qry = ("SELECT * FROM client WHERE userID='$id' AND confirmationCode='$code'");
	$stmt = mysqli_query($bd, $qry);
	while($result = mysqli_fetch_array($stmt)){
			$dpass = $result['password'];
			$dbcName = $result['companyName'];
			$dbAddress = $result['address'];
			$dbUserName = $result['userName'];
			$dbuserEmail = $result['userEmail'];
			$dbContactPerson = $result['contactPerson'];
			$dbPhone = $result['Phone'];
	}
	$Ustat="Y";
		if(isset($_POST['btn-update-password']))
		{
			
 		$id = $_POST['txtID'];
		$Uname = $_POST['txtuname'];
		$email = $_POST['txtemail'];
	 $password = $_POST['txtpass'];
	 $CPhone = $_POST['txtPhone'];
	 $Cname = $_POST['txtCName'];
	 $CAddress = $_POST['txtAddress'];
	 $CPerson = $_POST['txtCPerson'];
	 $cCode = $_POST['txtCode'];
			
			if($cpass!==$pass)
			{
				$msg = "<div class='alert alert-block'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Sorry!</strong>  Password Doesn't match. 
						</div>";
			}
			else
			{
				$query = "UPDATE client SET UserID='".$id."',companyName='".$Cname."',address='".$CAddress."',userName='".$Uname."',password='".$password."',userEmail='".$email."',userStatus='".$Ustat."',contactPerson= '".$CPerson."',Phone='".$CPhone."',confirmationCode='".$cCode."' WHERE userEmail = '".$email."'";
				$result = mysqli_query($bd, $query);
				if (!$result) {
					die("Database Query Error: " .mysql_error());
				}
				else
				{
					$msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Password Changed.
					</div>";
					header("location: UpdateSuccessful.php");
				}
			}
		}	
	else
	{
		$msg = "<div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				No Account Found, Try again
				</div>";
				
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
        <h2 align="center">Client Registration Details</h2><hr />
        <h6 align="center">**All Fields Are Required And Must be filled**</h6>
        <table width="591" align="center">
		<input type="Hidden" name="txtID" value="<?php echo $myrow['UserID'] ?>"/>
       	 <input type="Hidden" name="txtCode" value="<?php echo $myrow['confirmationCode'] ?>"/>
       	  <tr>
        		<td>
        	        <label>Username:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" readonly required value =<?php echo $result['username'] ?> />
			    </td>
        	        <td>&nbsp;</td>
			    <td>
			        <label>Email:</label></td><td>
			        <input type="Email" class="input-block-level" placeholder="Email address" name="txtemail" required readonly value =<?php echo $result['userEmail']?> />
			    </td>
			</tr>
			<tr>
			     <td>
			        <label>Password:</label></td><td>
	        		<input type="password" class="input-block-level" placeholder="Password" name="txtpass" required value =<?php echo "*" ?>/>
	        	 </td>
			        <td>&nbsp;</td>
	        	 <td>
			        <label>Company's Phone No:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Phone Number" name="txtPhone" required readonly value =<?php echo $result['Phone'] ?>/>
			    </td>
			</tr>
			<tr>
				<td>
			        <label>Company Name:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Company Name" name="txtCName" readonly required value =<?php echo $result['companyName'] ?>/>
			    </td>
			        <td>&nbsp;</td>
			    <td>
			        <label>Address:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Company Address" name="txtAddress" readonly required value =<?php echo $result['address'] ?>/>
	        	</td>
	        </tr>
	        <tr>
			    <td>
			        <label>Contact Person:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Contact Person" name="txtCPerson" readonly required value =<?php echo $result['contactPerson'] ?>/>
	        	</td>
	        </tr>
	        
	        <tr>
	        	<td colspan="2"> <button class="btn btn-large btn-primary" type="submit" name="btn-update-password" style="float:right">Update</button></td>
	            <td>&nbsp;</td>
	            <!-- <td colspan="2"><a href="index.php" style="float:left;" class="btn btn-large">Sign In</a></td> -->
            </tr>
		</table>
     	<hr />
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>