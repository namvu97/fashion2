<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Chi tiết đơn hàng</div>
			<div class="card-body">
				<?php  
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					//Lay 1 ban ghi o bang tbl_customer
					$customer = $this->model->get_a_record("select * from tbl_customer where customer_id= (select customer_id from tbl_order where order_id=$id)");
				?>
				<div style="margin-bottom: 5px;"><a href="admin.php?controller=order_detail&act=giaohang&id=<?php echo $id; ?>" class="btn btn-danger">Xác nhận đã giao hàng</a></div>
				<p>Họ và tên: <?php echo $customer -> hovaten; ?></p>
				<p>Địa chỉ: <?php echo $customer -> diachi; ?></p>
				<p>Điện thoại: <?php echo $customer -> dienthoai; ?></p>
				<p>Ghi chú: <?php echo $customer -> ghichu; ?></p>
				<!-- table -->
				<table class="table table-bordered table-hover">
					<tr>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
					</tr>
					<?php 
						//Lay cac ban ghi trong tbl_order_detail tuong ung voi order_id truyen vao
						$product = $this->model->get_all("select * from tbl_order_detail where order_id=$id");
						foreach ($product as $rows):
							//Lay san pham
							$get_product = $this->model->get_a_record("select c_name, c_price from tbl_product where pk_product_id=".$rows->fk_product_id);
					 ?>
					<tr>
						<td><?php echo $get_product->c_name; ?></td>
						<td><?php echo $rows-> c_number; ?></td>
						<td><?php echo number_format($get_product->c_price); ?></td>
					</tr>
				<?php endforeach; ?>
				</table>
				<!-- end table -->
			</div>
		</div>
	</div>
	<!-- end card -->
</div>
</div>