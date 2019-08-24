<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh sách đơn hàng</div>
			<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Thời gian</th>
						<th style="width: 80px;"></th>
						<th style="width: 70px;"></th>
					</tr>
					<?php foreach ($arr as $rows):?>
					<?php  
						//Lay thong tin tu bang tbl_customer
						$respond = $this->model->get_a_record("select * from tbl_respond where pk_respond_id=".$rows->pk_respond_id);
					?>
					<tr>
						<td><?php echo $respond->hovaten; ?></td>
						<td><?php echo $respond->email; ?></td>
						<td><?php echo $respond->noidung; ?></td>
						<td>
							<?php  
								$date = date_create($rows->thoigian);
								echo date_format($date,"d/m/Y");
							?>
						</td>
						<td style="text-align: center;">
							<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=respond&act=delete&id=<?php echo $rows->pk_respond_id; ?>">Delete</a>
						</td>
					</tr>
					<?php endforeach; ?>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=respond&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end card -->
</div>
</div>