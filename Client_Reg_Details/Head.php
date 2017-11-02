<?php
              include('db.php');
              session_start();
              if (isset($_SESSION['userEmail'])) {
                $Em = $_SESSION['userEmail'];
              }else
              {
                header("location: index.php");
              }
         
  ?>
  
<!DOCTYPE HTML>
<html>

<head>
  <title>Client Homepage</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="ClientHomeStyle/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="Welcome.php">Softweb ICT</a></h1>
         <h2>Welcome:<?php echo $Em?></h2>
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="Welcome.php">Home</a></li>
            <li><a href="projectDetails.php">Project Details</a></li>
            <li><a href="#">Account</a>
              <ul>
                <li><a href= "eDitProfile.php">Edit Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>