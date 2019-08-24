<?php  
	class controller_about{
		public $model;
		public function __construct(){
			$this->model = new model();
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//load view
			include "view/frontend/view_about.php";
		}
	}
	new controller_about();
?>