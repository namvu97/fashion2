<?php 
	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_product&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
					//load view
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_sex = $_POST["c_sex"];
					$c_price = $_POST["c_price"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_saleproduct = isset($_POST["c_saleproduct"])?1:0;
					$fk_category_product_id = $_POST["fk_category_product_id"];
					$fk_type_product_id = $_POST["fk_type_product_id"];
					//edit ban ghi
					$this->model->execute("update tbl_product set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotproduct=$c_hotproduct,c_saleproduct=$c_saleproduct,fk_category_product_id=$fk_category_product_id,fk_type_product_id=$fk_type_product_id,c_price=$c_price,c_sex=$c_sex where pk_product_id=$id");					
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img trong table tbl_product ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img from tbl_product where pk_product_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/product/".$old_img->c_img)&&$old_img->c_img!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/product/".$old_img->c_img);
						}
						//-----------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/product/$c_img");
						//update truong c_img cua ban ghi co id truyen vao
						$this->model->execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");
					}
					$c_img2 = "";
					if($_FILES["c_img2"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img2 trong table tbl_product ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img2 from tbl_product where pk_product_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/product/".$old_img->c_img2)&&$old_img->c_img2!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/product/".$old_img->c_img2);
						}
						//-----------
						$c_img2 = time().$_FILES["c_img2"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img2"]["tmp_name"], "public/upload/product/$c_img2");
						//update truong c_img2 cua ban ghi co id truyen vao
						$this->model->execute("update tbl_product set c_img2='$c_img2' where pk_product_id=$id");
					}
					$c_img3 = "";
					if($_FILES["c_img3"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img3 trong table tbl_product ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img3 from tbl_product where pk_product_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/product/".$old_img->c_img3)&&$old_img->c_img3!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/product/".$old_img->c_img3);
						}
						//-----------
						$c_img3 = time().$_FILES["c_img3"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img3"]["tmp_name"], "public/upload/product/$c_img3");
						//update truong c_img3 cua ban ghi co id truyen vao
						$this->model->execute("update tbl_product set c_img3='$c_img3' where pk_product_id=$id");
					}
					$c_img4 = "";
					if($_FILES["c_img4"]["name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img4 trong table tbl_product ung voi id truyen vao
						$old_img = $this->model->get_a_record("select c_img4 from tbl_product where pk_product_id=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/upload/product/".$old_img->c_img4)&&$old_img->c_img4!=""){
							//xoa anh bang ham unlink
							unlink("public/upload/product/".$old_img->c_img4);
						}
						//-----------
						$c_img4 = time().$_FILES["c_img4"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img4"]["tmp_name"], "public/upload/product/$c_img4");
						//update truong c_img4 cua ban ghi co id truyen vao
						$this->model->execute("update tbl_product set c_img4='$c_img4' where pk_product_id=$id");
					}
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=product");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_product&act=do_add";
					//load view
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$fk_category_product_id = $_POST["fk_category_product_id"];
					$fk_type_product_id = $_POST["fk_type_product_id"];
					$c_sex = $_POST["c_sex"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_price = $_POST["c_price"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$c_saleproduct = isset($_POST["c_saleproduct"])?1:0;
					//upload image
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/product/$c_img");
					}
					$c_img2 = "";
					if($_FILES["c_img2"]["name"] != ""){
						$c_img2 = time().$_FILES["c_img2"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img2"]["tmp_name"], "public/upload/product/$c_img2");
					}
					$c_img3 = "";
					if($_FILES["c_img3"]["name"] != ""){
						$c_img3 = time().$_FILES["c_img3"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img3"]["tmp_name"], "public/upload/product/$c_img3");
					}
					$c_img4 = "";
					if($_FILES["c_img4"]["name"] != ""){
						$c_img4 = time().$_FILES["c_img4"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img4"]["tmp_name"], "public/upload/product/$c_img4");
					}
					//them ban ghi vao csdl
					$this->model->execute("insert into tbl_product(c_name,c_description,c_content,c_img,c_img2,c_img3,c_img4,c_price,fk_category_product_id,fk_type_product_id,c_hotproduct,c_saleproduct,c_sex) values('$c_name','$c_description','$c_content','$c_img','$c_img2','$c_img3','$c_img4',$c_price,$fk_category_product_id,$fk_type_product_id,$c_hotproduct,$c_saleproduct,$c_sex)");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=product");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_product();
 ?>