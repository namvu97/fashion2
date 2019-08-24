<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit brand</div>
			<div class="card-body">
				<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tiêu đề</div>
							<div class="col-md-10">
								<input type="text" name="c_name" value="<?php echo isset($arr->c_name)?$arr->c_name:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Xuất xứ</div>
							<div class="col-md-10">
								<textarea name="c_addr">
									<?php echo isset($arr->c_addr)?$arr->c_addr:""; ?>
								</textarea>
								<script type="text/javascript">
									CKEDITOR.replace("c_addr");
								</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
								<input type="file" name="c_img">
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