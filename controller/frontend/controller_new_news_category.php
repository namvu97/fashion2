<?php 
	class controller_new_news_category{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_new_news_category.php";
		}
	}
	new controller_new_news_category();
 ?>