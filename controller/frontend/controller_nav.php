<?php 
	class controller_nav{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_nav.php";
		}

	}
	new controller_nav();
 ?>