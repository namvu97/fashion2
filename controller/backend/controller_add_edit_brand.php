<?php 
	class controller_add_edit_brand{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_brand&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_brand where pk_brand_id=$id");
					//load view
					include "view/backend/view_add_edit_brand.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_addr = $_POST["c_addr"];
					//edit ban ghi
					$this->model->execute("update tbl_brand set c_name='$c_name',c_addr='$c_addr' where pk_brand_id=$id");
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img trong table tbl_brand ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img from tbl_brand where pk_brand_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/brand/".$old_img->c_img)&&$old_img->c_img!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/brand/".$old_img->c_img);
						}
						//-----------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/brand/$c_img");
						//update truong c_img cua ban ghi co id truyen vao
						$this->model->execute("update tbl_brand set c_img='$c_img' where pk_brand_id=$id");
					}
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=brand");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_brand&act=do_add";
					//load view
					include "view/backend/view_add_edit_brand.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_addr = $_POST["c_addr"];
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/brand/$c_img");
					}
					//them ban ghi vao csdl
					$this->model->execute("insert into tbl_brand(c_name,c_addr,c_img) values('$c_name','$c_description','$c_img')");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=brand");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_brand();
 ?>