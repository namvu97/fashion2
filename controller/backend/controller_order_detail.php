<?php 
	class controller_order_detail{
		//tao bien model
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			switch ($act) {
				case "giaohang":
					$this->model->execute("update tbl_order set trangthai=1 where order_id=$id");
					header("location:admin.php?controller=order");
				break;
			}
			//-----
			//load view
			include "view/backend/view_order_detail.php";
		}
	}
	new controller_order_detail();
 ?>