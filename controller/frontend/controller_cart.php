<?php
	class controller_cart{
		public $model;
		public function __construct(){			
			$this->model = new model();
			//khoi tao gio hang
			if(isset($_SESSION["cart"]) == false)
				$_SESSION["cart"] = array();
			//-----------
			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//-----
			switch($act){
				case "add":
					//them 1 san pham vao gio hang
					$this->cart_add($id);
					//quay tro lai trang gio hang
					//header("location:index.php?controller=cart");
					echo "<script>location.href='gio-hang';</script>";
				break;
				case "delete":
					//xoa san pham khoi gio hang
					$this->cart_delete($id);
					echo "<script>location.href='gio-hang';</script>";
				break;
				case "destroy":
					//huy toan bo gio hang
					$this->cart_destroy();
					echo "<script>location.href='gio-hang';</script>";
				break;
				case "update":
					//cap nhat so luong san pham trong gio hang
					//duyet tung phan tu trong gio hang, thuc hien update lai so luong
					foreach($_SESSION["cart"] as $product){
						$pk_product_id = $product["pk_product_id"];
						$soluong = $_POST["$pk_product_id"];
						//goi ham cap nhat so luong
						$this->cart_update($pk_product_id,$soluong);
					}
					echo "<script>location.href='gio-hang';</script>";
				break;
			}
			//===========
			//load view
			include "view/frontend/view_cart.php";
			//=================
		}

		public function cart_add($pk_product_id){
		    if(isset($_SESSION['cart'][$pk_product_id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$pk_product_id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        $product = $this->model->get_a_record("select * from tbl_product where pk_product_id=$pk_product_id");
		        
		        $_SESSION['cart'][$pk_product_id] = array(
		            'pk_product_id' => $pk_product_id,
		            'c_name' => $product->c_name,
		            'c_img' => $product->c_img,
		            'number' => 1,
		            'c_price' => $product->c_price
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($pk_product_id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$pk_product_id]);
		    } else {
		        $_SESSION['cart'][$pk_product_id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($pk_product_id){
		    unset($_SESSION['cart'][$pk_product_id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	new controller_cart();
?>