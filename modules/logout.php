<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['loggedin']);
	$_SESSION['message'] = "You are logged out";
	header('location:http://localhost/ojtest/index.php');
?>