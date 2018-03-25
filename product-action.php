<?php
	require_once 'connect.php';

	// echo "<pre>";
	// print_r($_POST);

	// echo "<pre>";
	// print_r($_FILES);

	if(empty($_POST['proname'])){
		echo "Please enter product";
	}
	else if(empty($_POST['proprice']) || !is_numeric($_POST['proprice']) ||  $_POST['proprice']<=0 ){
		echo "Please enter price";
	}
	else if(empty($_POST['prodiscount']) || !ctype_digit($_POST['prodiscount']) || $_POST['prodiscount']<0 || $_POST['prodiscount']>99){
		echo "Please enter discount";
	}
	else if(empty($_POST['procat'])){
		echo "Please  select category";
	}
	else if(empty($_POST['probr'])){
		echo "Please  select brand";
	}
	else if(empty($_POST['prodesc'])){
		echo "Please  Enter Desc";
	}
	else if(empty($_FILES['propath']['name'])){
		echo "please select image";
	}
	else if($_FILES['propath']['type'] == "image/jpeg" || $_FILES['propath']['type'] == "image/png" || $_FILES['propath']['type'] == "image/gif"){

		if($_FILES['propath']['size'] > 2*1024*1024 ){
			echo "File Size large";
		}
		else{
			$tmp = $_FILES['propath']['tmp_name'];
			$name =  $_FILES['propath']['name'];
			$dest = "uploads/".time().$name;
			// echo $dest;
			$result = move_uploaded_file($tmp , $dest);
			// var_dump($result);
			if($result){
				$proname = $_POST['proname'];
				$proprice = $_POST['proprice'];
				$prodiscount = $_POST['prodiscount'];
				$procat = $_POST['procat'];
				$probr = $_POST['probr'];
				$prodesc = $_POST['prodesc'];
				$propath =$dest;
				
				$q = "insert into pr_product (pro_name,pro_price,pro_discount,pro_cid,pro_brid,pro_desc,pro_path) values ('$proname','$proprice','$prodiscount','$procat','$probr','$prodesc','$propath')";
				$conn->query($q) or die($conn->error);
				echo "Product Added";
			}
			else{
				echo "File Upload error";
			}
		}
	}
	else{
		echo "Invalid image uploaded";
	}

?>