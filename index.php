<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "model/model.php";
	//lay bien controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : "home";
	//noi cac thanh phan de ra duong dan vat ly
	$file_controller = "controller/frontend/controller_$controller.php";
	//load file master
	//kiem tra neu ton tai MVC o phan main thi load file master-trangcon.php, con neu khong ton tai MVC o phan main thi load file master-trangchu.php
	if(file_exists($file_controller)){
		if($controller=="product_detail"){
					include "view/frontend/master-trangcon-2.php";
				}
		else include "view/frontend/master-trangcon.php";
	}
	else
		include "view/frontend/master-trangchu.php";
 ?>