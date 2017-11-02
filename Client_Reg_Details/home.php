<?php
// session_start();
// require_once 'class.user.php';
// $user_home = new USER();

// if(!$user_home->is_logged_in())
// {
// 	$user_home->redirect('index.php');
// }

// $stmt = $user_home->runQuery("SELECT * FROM client WHERE userID=:uid");
// $stmt->execute(array(":uid"=>$_SESSION['userSession']));
// $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $row['userEmail']; ?></title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <style type="text/css">
            #NAV a:hover{ 
            color: pink; 
            } 
            NAV A{
            display: inline;
            text-decoration: none;
            color:white;
            text-align: center;
        }
        </style>
    </head>
    
    <body bgcolor="Blue">
        <div id="mainDivContainer" style="Position: relative; width: 100%; margin-top: 0px; margin-bottom: 0px;">
            <div style="width: 960px; margin-top: 5px; margin-left: auto; margin-right:auto">
                <div id="topnav" style="float:left;width: 960px; heigth: 20px; word-spacing: 5px; font-size: 90%; padding-align:left; background-color: black; padding: 50">
                    <nav id ="NAV">
                        <a href="#">Home</a>|<a href="aboutus.html">About Us</a>|<a href="contactus.html">Contact Us</a> |<a href="logout.php">Logout</a>
                    </nav>
                </div>
                <div style="width: 960px; height: auto; position: relative; margin:0px; padding: 29px; overflow: hidden; background-color: white; border-radius=20%">

            </div>
        </div>


        






<!--         <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Member Home</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> 
								<?php echo $row['userEmail']; ?> <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="http://www.codingcage.com/">Coding Cage</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Tutorials <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li><a href="http://www.codingcage.com/search/label/PHP OOP">PHP OOP</a></li>
                                    <li><a href="http://www.codingcage.com/search/label/PDO">PHP PDO</a></li>
                                    <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
                                    <li><a href="http://www.codingcage.com/search/label/Bootstrap">Bootstrap</a></li>
                                    <li><a href="http://www.codingcage.com/search/label/CRUD">CRUD</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://www.codingcage.com/2015/09/login-registration-email-verification-forgot-password-php.html">Tutorial Link</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
     <!--           </div>
            </div>
        </div>
        
        <!--/.fluid-container-->
       <!-- <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/scripts.js"></script>-->
 </body>

</html>