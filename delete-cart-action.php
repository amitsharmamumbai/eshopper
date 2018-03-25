<?php
	// print_r($_POST);
	$id = $_POST['proid'];
	// echo $id;
	$cookiedata = $_COOKIE['products'];
	// echo $cookiedata;
	$arr = explode(",",$cookiedata);
	// print_r($arr);
	foreach($arr as $key=>$val){
		// echo $val;
		if($val == $id){
			// echo $key;
			unset($arr[$key]);
		}
	}
	// print_r($arr);
	$finalstr = implode(",",$arr);
	// echo $finalstr;
	setcookie("products",$finalstr,time()+3600,"/");
?>