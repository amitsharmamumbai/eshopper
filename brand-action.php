<?php
	require_once 'connect.php';
	// print_r($_POST);
	if( empty($_POST['brname'])){
		echo "Invalid Category Name";
	}
	else{
		$name = $_POST['brname'];
		// echo $name;
		$str = "insert into pr_brand (br_name) values ('$name')";
		// echo $str;
		$result = $conn->query($str) or die($conn->error);

		if($result){
			echo "Brand Added";
		}
	}
	require_once 'disconnect.php';
?>