<?php
	//Start session
	session_start();
	session_destroy($_SESSION['username']);
	if (session_destroy()) {
		header("location: index.php");
	}
?>