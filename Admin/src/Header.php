<?php
session_start();
if (isset($_SESSION['username'])) {
                $Em = $_SESSION['username'];
              }else
              {
                header("location: index.php");
              }
?>



<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
                    <a class="alightred" href="logoutUser.php" >
					Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="Dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="users.php">
							<img alt="Statistics" src="img/m-users.png">
							<span>Users</span>
						</a>
				  </li>
					<li>
						<a href="contact.php">
							<img alt="Statistics" src="img/message.png">
							<span>Contacts</span>
						</a>
					</li>
          <li>
            <a href="projectProgress.php">
              <img alt="Statistics" src="img/progress.png">
              <span>Project Details</span>
            </a>
          </li>
          <li>
            <a href="Client.php">
              <img alt="Statistics" src="img/forum.png">
              <span>Client</span>
            </a>
          </li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">