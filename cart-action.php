<?php
	// print_r($_POST);
	$id = $_POST['proid'];
	// echo $id;

	if(!isset( $_COOKIE['products'])){
		setcookie("products",$id,time()+3600,"/");
		echo "product added in cart";
	}
	else{
		// echo "2nd products onward";
		$cookidata = $_COOKIE['products'];
		// echo $cookidata;
		$finalpro = $cookidata.",".$id;
		// echo $finalpro;
		setcookie("products",$finalpro,time()+3600,"/");
		echo "product updated in cart";
	}
?>