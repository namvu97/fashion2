<?php  
	class controller_faq{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//load view
			include "view/frontend/view_faq.php";
		}
	}
	new controller_faq();
?>