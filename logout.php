<?php
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['pro_userid']);
	unset($_SESSION['pro_username']);
	unset($_SESSION['pro_usermobile']);
	unset($_SESSION['pro_useremail']);

	header("location:index.php");
?>