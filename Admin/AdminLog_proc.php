<?php
ini_set('max_execution_time', 300);
require_once('db.php');

if(isset($_POST['btn-login'])){
  
  $Username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `admin` WHERE  username='$Username' AND password='$password'";
  $res = mysql_query($sql);
  while ($result = mysql_fetch_assoc($res)) {

    $dbEmail = $result['username'];
    $dbPass = $result['password'];
    
  }
    if ($Username==$dbEmail&&$password==$dbPass) 
    {
       session_start();
        $_SESSION['username'] = $Username;
        header("location: Dashboard.php");
    }
      else
      {
        header("location: login_Fail.php");
      }
    }

?>
