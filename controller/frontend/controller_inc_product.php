<?php 
	class controller_inc_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_inc_product.php";
		}

	}
	new controller_inc_product();
 ?>