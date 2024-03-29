<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_product&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
			<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">Ảnh</th>
						<th style="width: 100px;">Tên sản phẩm</th>
						<th style="width: 100px;">Danh mục</th>
						<th style="width: 100px;">Loại</th>
						<th style="width: 100px;">Sản phẩm</th>
						
						<th style="width: 100px;">Giá</th>
						<th style="width: 100px;">SP nổi bật</th>
						<th style="width: 100px;">SP giảm giá</th>
						<th style="width: 150px;"></th>
					</tr>
					<?php 
					foreach($arr as $rows)
					{
						?>
						<tr>
							<td>
								<?php if(file_exists("public/upload/product/".$rows->c_img)) { ?>
									<img src="public/upload/product/<?php echo $rows->c_img; ?>" style="width: 150px;">
								<?php } ?>
							</td>
							<td><?php echo $rows->c_name; ?></td>
							<td>
								<?php 
									//lay mot ban ghi, goi ham get_a_record() trong model
								$category = $this->model->get_a_record("select c_name from tbl_category_product where pk_category_product_id=".$rows->fk_category_product_id);
								echo isset($category->c_name)?$category->c_name:"";
								?>
							</td>
							<td>
								<?php 
									//lay mot ban ghi, goi ham get_a_record() trong model
								$type = $this->model->get_a_record("select c_name from tbl_type_product where pk_type_product_id=".$rows->fk_type_product_id);
								echo isset($type->c_name)?$type->c_name:"";
								?>
							</td>
							<td style="text-align: center;">
								<?php if($rows->c_sex == 1){ ?>
									Nam
								<?php } ?>
								<?php if($rows->c_sex == 0){ ?>
									Nữ
								<?php } ?>
							</td>
							
							<td><?php echo $rows->c_price; ?></td>
							<td style="text-align: center;">
								<?php if($rows->c_hotproduct == 1){ ?>
									Hot
								<?php } ?>
							</td>
							<td style="text-align: center;">
								<?php if($rows->c_saleproduct == 1){ ?>
									Sale
								<?php } ?>
							</td>
							<td style="text-align: center;">
								<a href="admin.php?controller=add_edit_product&act=edit&id=<?php echo $rows->pk_product_id; ?>"><img src="public/frontend/images/icon-edit.jpg" style="width:25px;" />Edit</a>&nbsp;&nbsp;
								<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=product&act=delete&id=<?php echo $rows->pk_product_id; ?>"><img src="public/frontend/images/icon-remove.jpg" style="width:25px;" />Delete</a>
							</td>
						</tr>
					<?php } ?>
				</table>
				<!-- end table -->
			</div>
			<div class="card-footer" style="padding:7px !important">
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php
					for($i = 1; $i <= $num_page; $i++)
					{
						?>
						<li class="page-item"><a class="page-link" href="admin.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end card -->
</div>
</div>