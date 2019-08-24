<?php 
	class controller_new_news{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_new_news.php";
		}
	}
	new controller_new_news();
 ?>