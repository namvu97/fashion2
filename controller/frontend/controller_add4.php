<?php  
	class controller_product_add4{
		public $model;
		public function __construct(){
			$this->model = new model();
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 6;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select c_name from tbl_product where fk_type_product_id=1 and c_sex=1");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------			
			$arr = $this->model->get_all("select * from tbl_product where fk_type_product_id=1 and c_sex=1 order by pk_product_id  desc limit $from,$record_per_page");
			//load view
			include "view/frontend/view_product_add4.php";
		}
	}
	new controller_product_add4();
?>