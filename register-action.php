<?php 
	require_once 'connect.php';
	// print_r($_POST);
	if(empty($_POST['username'])){
		echo "Invalid Username";
	}
	else if(empty($_POST['usermobile'])){
		echo "Invalid Mobile";
	}
	else if(empty($_POST['useremail'])){
		echo "Invalid Emailid";
	}
	else if(empty($_POST['userpass'])){
		echo "Invalid Password";
	}
	else if(empty($_POST['usercpass']) || $_POST['userpass']!=$_POST['usercpass']){
		echo "Invalid Confirm Password";
	}
	else{
		$name = $_POST['username'];
		$mob = $_POST['usermobile'];
		$email = $_POST['useremail'];
		$pass = sha1($_POST['userpass']);
		// echo $pass;

		$str = "insert into pr_login (user_name,user_mobile,user_email,user_password) values ('$name','$mob','$email','$pass')";
		// echo $str;
		$result = $conn->query($str) or die($conn->error);

		if($result){
			echo "User Added";
			// mail
			$res_email = mail($email,"Registration Process","Thank You for registration with eshopper");
			var_dump($res_email);
			// mail

			/* SMS */
			$username = "schnyadav162@gmail.com";
			$hash = "ab221ff00e4410a5984606db9b51bae257510516368fc5b5b6214a9d761d74e3";

			// Config variables. Consult http://api.textlocal.in/docs for more info.
			$test = "0";

			// Data for text message. This is the text message data.
			$sender = "TXTLCL"; // This is who the message appears to be from.
			$numbers = "91$mob"; // A single number or a comma-seperated list of numbers
			$message = "Thank You for registration with eshopper";
			// 612 chars or less
			// A single number or a comma-seperated list of numbers
			$message = urlencode($message);
			$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			$ch = curl_init('http://api.textlocal.in/send/?');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch); // This is the result from the API

			print_r($result);

			curl_close($ch);
			/* SMS */

			
		}
	}
	require_once 'disconnect.php';

?>