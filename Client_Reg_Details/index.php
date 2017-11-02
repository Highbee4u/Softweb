<?php
ini_set('max_execution_time', 300);
require_once('db.php');
if(isset($_POST) & !empty($_POST)){
  $dbEmail ="";
  $UEmail = $_POST['txtemail'];
  $password = $_POST['txtupass'];

  $sql = "SELECT * FROM `client` WHERE  userEmail='$UEmail' AND password='$password'";
  $res = mysqli_query($bd, $sql);
  while ($result = mysqli_fetch_assoc($res)) {

    $UState = $result['userStatus'];
    $dbEmail = $result['userEmail'];
    $dbPass = $result['password'];
    
  }
  // if ($result!=0) {
    if ($UEmail==$dbEmail&&$password==$dbPass) 
    {
      if($UState == 'Y')
      {

        session_start();
        $_SESSION['userEmail'] = $UEmail;
        header("location: Welcome.php");
      }
      else
      {
        echo"<div class='alert alert-error'>
          <button class='close' data-dismiss='alert'>&times;</button>
          <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
        </div>";
      }
    }
  else
  {
    echo"<div class='alert alert-error'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry!</strong> The Email And Password you entered do not match. 
          </div>";
  }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Client Login | Softweb ICT</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" method="post" autocomplete="off">
        <h2 align="center">Sign In.</h2><hr />
        <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
        <input type="password" class="input-block-level" placeholder="Password" name="txtupass" required />
     	<hr />
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a href="signup.php" style="float:right;" class="btn btn-large">Sign Up</a><hr />
        <a href="fpass.php">Lost your Password ? </a>
      </form>

    </div> <!-- /container -->
    <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>