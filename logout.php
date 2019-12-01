<?php
session_start();
if (session_destroy()) {  //destroying sesssion
	header("location:loginScreen.php"); //redirecting to login page
}
?>

