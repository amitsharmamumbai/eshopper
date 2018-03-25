<?php 
	session_start();
	require_once 'connect.php';
	// print_r($_POST);
	if(empty($_POST['useremail'])){
		echo "Invalid Username";
	}
	else if(empty($_POST['userpass'])){
		echo "Invalid Password";
	}
	else{
		// echo "ok";
		// auth
		$email = $_POST['useremail'];
		$pass = sha1($_POST['userpass']);
		// echo $pass;

		//select * from pr_login where user_email='$email'
		$str = "select * from pr_login where user_email='$email'";
		// echo $str;

		$result = $conn->query($str) or die($conn->error);
		// print_r($result);
		if($result->num_rows > 0){
			$ans = $result->fetch_array(MYSQLI_ASSOC);
			// print_r($ans); 
			$dbpass = $ans['user_password'];
			// echo $dbpass;
			if($pass != $dbpass){
				echo "Password mismatch";
			}
			else{
				// echo "ok";
				$_SESSION['pro_userid'] = $ans['user_id'];
				$_SESSION['pro_username'] = $ans['user_name'];
				$_SESSION['pro_usermobile'] = $ans['user_mobile'];
				$_SESSION['pro_useremail'] = $ans['user_email'];

				header("location:index.php");
			}
		}
		else{
			echo "No emailid Found";
		}
	}
?>