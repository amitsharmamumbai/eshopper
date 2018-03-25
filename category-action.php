<?php
	require_once 'connect.php';
	// print_r($_POST);
	if( empty($_POST['catname'])){
		echo "Invalid Category Name";
	}
	else{
		$name = $_POST['catname'];
		// echo $name;
		$str = "insert into pr_category (ca_name) values ('$name')";
		// echo $str;
		$result = $conn->query($str) or die($conn->error);

		if($result){
			echo "Category Added";
		}
	}
	require_once 'disconnect.php';
?>