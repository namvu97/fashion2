<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_category_news&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
			<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Danh mục tin tức</th>
						<th style="width: 150px;"></th>
					</tr>
					<?php 
					foreach($arr as $rows)
					{
						?>
						<tr>
							<td><?php echo $rows->c_name; ?></td>
							<td style="text-align: center;">
								<a href="admin.php?controller=add_edit_category_news&act=edit&id=<?php echo $rows->pk_category_news_id; ?>"><img src="public/frontend/images/icon-edit.jpg" style="width:25px;" />Edit</a>&nbsp;&nbsp;
								<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=category_news&act=delete&id=<?php echo $rows->pk_category_news_id; ?>"><img src="public/frontend/images/icon-remove.jpg" style="width:25px;" />Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- end card -->
</div>
</div>