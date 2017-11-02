<?php
	$username = 'root';
	$password = '';
	$hostname = 'localhost';
	$database = 'softweb';
	$db = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database) || die("Unable to connect");
?>