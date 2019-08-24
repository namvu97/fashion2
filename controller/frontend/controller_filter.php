<?php  
	class controller_filter{
		public $model;
		public function __construct(){
			$this->model = new model();
			$min = isset($_GET["min"]) ? $_GET["min"] : 0;
			$max = isset($_GET["max"]) ? $_GET["max"] : 0;
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 4;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select c_name from tbl_product where c_price>=$min and c_price<=$max");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------   
			$arr = $this->model->get_all("select * from tbl_product where c_price>=$min and c_price<=$max limit $from,$record_per_page");
			//load view
			include "view/frontend/view_filter.php";
		}
	}
	new controller_filter();
?>