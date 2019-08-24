<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit product</div>
			<div class="card-body">
				<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên sản phẩm</div>
							<div class="col-md-10">
								<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục</div>
							<div class="col-md-10">
								<select name="fk_category_product_id">
									<option value="0"></option>
									<?php 
									//lay toan bo ban ghi trong tbl_category_product
									$category = $this->model->get_all("select * from tbl_category_product");
									foreach($category as $rows)
									{
										?>
										<option <?php if(isset($arr->fk_category_product_id)&&$arr->fk_category_product_id==$rows->pk_category_product_id){ echo "selected"; } ?> value="<?php echo $rows->pk_category_product_id; ?>"><?php echo $rows->c_name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Loại</div>
							<div class="col-md-10">
								<select name="fk_type_product_id">
									<option value="0"></option>
									<?php 
									//lay toan bo ban ghi trong tbl_category_product
									$type = $this->model->get_all("select * from tbl_type_product");
									foreach($type as $rows)
									{
										?>
										<option <?php if(isset($arr->fk_type_product_id)&&$arr->fk_type_product_id==$rows->pk_type_product_id){ echo "selected"; } ?> value="<?php echo $rows->pk_type_product_id; ?>"><?php echo $rows->c_name; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới tính</div>
							<div class="col-md-10">
									
								    <select name="c_sex">
								    <option value="">Lựa chọn</option>
								    <option <?php if("selected"){ isset($arr->c_sex)?$arr->c_sex=0:0; } ?> value="<?php echo isset($arr->c_sex)?$arr->c_sex:0; ?>">Nữ</option>
								    <option <?php if("selected"){ isset($arr->c_sex)?$arr->c_sex=1:1; } ?>  value="<?php echo isset($arr->c_sex)?$arr->c_sex:1; ?>">Nam</option>
								    </select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
								<textarea name="c_description">
									<?php echo isset($arr->c_description)?$arr->c_description:""; ?>
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace("c_description");
								</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Chi tiết</div>
							<div class="col-md-10">
								<textarea name="c_content">
									<?php echo isset($arr->c_content)?$arr->c_content:""; ?>								
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace("c_content");
								</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giá</div>
							<div class="col-md-10">
								<input type="text" name="c_price" value="<?php echo isset($arr->c_price)?$arr->c_price:0; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="checkbox" <?php echo isset($arr->c_hotproduct)&&$arr->c_hotproduct==1 ? "checked":""; ?> name="c_hotproduct"> Sản phẩm nổi bật
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="checkbox" <?php echo isset($arr->c_saleproduct)&&$arr->c_saleproduct==1 ? "checked":""; ?> name="c_saleproduct"> Sản phẩm giảm giá
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh 1</div>
							<div class="col-md-10">
								<input type="file" name="c_img">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh 2</div>
							<div class="col-md-10">
								<input type="file" name="c_img2">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh 3</div>
							<div class="col-md-10">
								<input type="file" name="c_img3">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh 4</div>
							<div class="col-md-10">
								<input type="file" name="c_img4">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>