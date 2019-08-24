<?php 
	//file config.php su dung de luu thong tin ket noi
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "php31_fashion2";
	$db = mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($db,"UTF8");
 ?>
 