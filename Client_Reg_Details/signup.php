<?php
include('db.php');

if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$CName = trim($_POST['txtCName']);
	$CAddress = trim($_POST['txtAddress']);
	$CPerson = trim($_POST['txtCPerson']);
	$CPhone = trim($_POST['txtPhone']);
	
	

	$qry = mysqli_query($bd, "SELECT * FROM client WHERE userEmail='$email'");
	$count = 0;
	if(mysqli_fetch_array($qry))
	{
		$count+=1;
		if($count > 0)
		{
			echo "<div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists , Please Try another one
			  </div>
			  ";
		}
	}
		else
		{
			$Code = rand();
			$qrry = "INSERT INTO `client`(`UserID`, `companyName`, `address`,`userName`, `password`,`userEmail`, `contactPerson`, `Phone`, `confirmationCode`) 
					 VALUES ('','$CName','$CAddress','$uname','$upass','$email','$CPerson','$CPhone','$Code')";
			
			if (mysqli_query($bd, $qrry)) 
			{
						$Mess= "
						Hello $uname,
						Welcome to softweb ICT!<br/>
						To complete your registration,  click following link
						<a href='http://localhost:8080/Softweb/Client_Reg_Details/Verification.php?username=$uname&code=$Code'>Click HERE to Activate :)</a>
						Thanks,";
						
						$subject = "Confirm Registration";
						
						echo "
								<div class='alert alert-success'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Success!</strong>  We've sent an email to $email.
			                    Please click on the confirmation link in the email to cerify your account. 
						  		</div>
								";

								mail($email, $subject,$Mess,"From: info@softweb.com");

			}
			else
			{
				echo "<div class='alert alert-success'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<strong>Not!</strong>  Data not Sucessfully Saved 
						  		</div>
								".mysql_error();
			}

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
       	  <tr>
        		<td>
        	        <label>Username:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />
			    </td>
        	        <td>&nbsp;</td>
			    <td>
			        <label>Email:</label></td><td>
			        <input type="Email" class="input-block-level" placeholder="Email address" name="txtemail" required />
			    </td>
			</tr>
			<tr>
			     <td>
			        <label>Password:</label></td><td>
	        		<input type="password" class="input-block-level" placeholder="Password" name="txtpass" required />
	        	 </td>
			        <td>&nbsp;</td>
	        	 <td>
			        <label>Company's Phone No:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Phone Number" name="txtPhone" required />
			    </td>
			</tr>
			<tr>
				<td>
			        <label>Company Name:</label></td><td>
			        <input type="text" class="input-block-level" placeholder="Company Name" name="txtCName" required />
			    </td>
			        <td>&nbsp;</td>
			    <td>
			        <label>Address:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Company Address" name="txtAddress" required />
	        	</td>
	        </tr>
	        <tr>
			    <td>
			        <label>Contact Person:</label></td><td>
	        		<input type="text" class="input-block-level" placeholder="Contact Person" name="txtCPerson" required />
	        	</td>
	        </tr>
	        
	        <tr>
	        	<td colspan="2"> <button class="btn btn-large btn-primary" type="submit" name="btn-signup" style="float:right">Sign Up</button></td>
	            <td>&nbsp;</td>
	            <td colspan="2"><a href="index.php" style="float:left;" class="btn btn-large">Sign In</a></td>
            </tr>
		</table>
     	<hr />
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>