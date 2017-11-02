<!DOCTYPE html>
<html>
  <head>
    <title>Login | Softweb ICT</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
	<?php
include('db.php');
?>
<!--script to check for account Activation-->
<?php
$Username ="";
$Code ="";
?>

<?php
$Username = $_GET['username'];
$Code = $_GET['code'];
$db_code ="";

$qrry = ("SELECT * FROM client WHERE userName='$Username'");
$result = mysql_query($qrry);
if(!$result) {
	die("erro".mysql_error());
}
	$row = mysql_fetch_array($result);
	$db_code = $row['confirmationCode'];
	$id = $row['UserID'];

if ($Code == $db_code) {
	mysql_query("UPDATE client SET userStatus ='Y' WHERE UserID='$id'");
	
					echo "
			           <div class='alert alert-success'>
					   <button class='close' data-dismiss='alert'>&times;</button>
						  <strong>Thank you!</strong>  Your Account is Now Activated Click <a href='index.php'>here</a> to login
				       </div>
				       ";	
		
	}
	else
	{
	echo "
		           <div class='alert alert-success'>
				   <button class='close' data-dismiss='alert'>&times;</button>
					  <strong>Error!</strong>  Something Went Wrong</a>
			       </div>
			       ";	
}
?>
    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>