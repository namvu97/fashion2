<?php 
	class controller_category_news{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//-----------
					//thuc hien xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_category_news where pk_category_news_id=$id");
					//quay lai trang tin tuc
					header("location:admin.php?controller=category_news");
					//-----------
				break;
			}
			//------------
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 10;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select c_name from tbl_category_news");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from tbl_category_news order by pk_category_news_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_category_news.php";
			//------------
		}
	}
	new controller_category_news();
 ?>