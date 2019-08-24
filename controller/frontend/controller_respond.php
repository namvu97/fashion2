<?php 
	class controller_respond{
		public $model;
		public function __construct(){
			$this->model = new model();
			//-----
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = $_POST["hovaten"];
				$email = $_POST["email"];
				$noidung = $_POST["noidung"];
				//insert ban ghi vao tbl_customer, lay ra customer_id vua insert
				$pk_respond_id = $this->model->execute("insert into tbl_respond set hovaten='$hovaten',email='$email',noidung='$noidung', thoigian=now()");
			}
			//-----
			include "view/frontend/view_contact.php";
			//-----
		}
	}
	new controller_respond();
 ?>