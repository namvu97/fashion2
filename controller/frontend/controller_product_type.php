<?php 
	class controller_product_type{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$id1 = isset($_GET["id1"]) ? $_GET["id1"] : 0;
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select c_name from tbl_product where fk_type_product_id=$id and c_sex=$id1");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr1 = $this->model->get_all("select * from tbl_product where fk_type_product_id=$id and c_sex=$id1 order by pk_product_id desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_product_type.php";
			//------------
		}
	}
	new controller_product_type();
 ?> 