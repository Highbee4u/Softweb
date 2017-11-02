<?php
session_start();
session_destroy($_SESSION['userEmail']);
if(session_destroy())
{
header("Location: index.php");
}
?>