<?php
	session_start();
	//unset($_SESSION['USERID']);
	//unset($_SESSION['USERNAME']);
	session_destroy(); 
	header("location:login.php");
?>