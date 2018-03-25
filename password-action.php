<?php
	session_start();
	require_once 'connect.php';
	// print_r($_POST);

	if(empty($_POST['cpass']) || empty($_POST['npass']) || empty($_POST['cnpass'])) {
		echo "please fill all data";
	}
	else if($_POST['npass']!=$_POST['cnpass']){
		echo "new pass mismatch with confirm new password";
	}
	else if($_POST['npass']==$_POST['cpass']){
		echo "new pass should be diff from current password";
	}
	else{
		// print_r($_SESSION);
		$userid = $_SESSION['pro_userid'];
		// echo $userid;
		$str = "select user_password from pr_login where user_id='$userid'";
		// echo $str;
		$res = $conn->query($str) or die($conn->error);
		// print_r($res);
		$ans = $res->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);
		if( sha1($_POST['cpass']) != $ans['user_password'] ){
			echo "Current password mismatch";
		}
		else{
			// echo "ok";
			$newpass = sha1($_POST['npass']);
			$str = "update pr_login set user_password='$newpass' where user_id='$userid'";
			$conn->query($str) or die($conn->error);
			echo "Password Updated";	
		}
	}
?>