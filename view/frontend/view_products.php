<header class="woocommerce-products-header">
	<div class="imges_cate"> 
		<a href="http://khomaudepraothue.com/fashion2/?product_cat=san-pham#"><img src="././public/product.png" alt=""></a>    
	</div>
	<div class="term-description"><p><span style="font-size: 18pt; color: #ff4081;">TẠI SAO CHỌN Fashion2</span></p>
		<p>Fashion2<br>
			• Chất liệu hạng sang nhập khẩu được fashion2 nghiên cứu và lưạ chọn rất kĩ càng.<br>
			• Gam mầu thời trang không lỗi mốt, theo kịp với xu hướng .<br>
			• Độ thẩm mỹ hoàn hảo, vì có nhiều khách hàng chưng minh.<br>
			• Rõ ràng với kết cấu bên trong, ở fashion2 được kiểm chứng và xác thực ngay tại cửa hàng<br>
			• Rất nhiều sản phẩm sofa phòng khách ở showroom để cho khách hàng lựa chọn<br>
			• Thời gian bảo hành sản phẩm ở đây lên đến 2 tháng, lâu nhất trên thị trường<br>
			• Cơ sở vật chất rộng rãi sang trọng, đúng như thương hiệu công khai về cơ sở vật chất<br>
			• Tính năng chăm sóc sức khoẻ tích hợp trên sofa là giá trị vượt trội hơn các nơi khác ở hai góc độ: các điểm phần ngồi được tính toán theo các đốt trên cột sống người dùng ngả lưng và sofa ANT đã chạm được các điểm trên cột sống và giảm mệt mỏi cho người dùng.
		</p>
	</div>		
	<h1 class="woocommerce-products-header__title page-title">Sản phẩm				
		<span class="rt_grid_layout">
			<a href="http://khomaudepraothue.com/fashion2/?product_cat=san-pham#" id="grid" title="grid">
				<span class="grid-view"><i class="fa fa-th"></i>Lưới</span>
			</a>
			<a href="http://khomaudepraothue.com/fashion2/?product_cat=san-pham#" id="list" title="list">
				<span class="exerpt-view"><i class="fa fa-list-ul"></i>Cột</span>
			</a>
		</span>
	</h1>
</header>
<div class="result_count-ordering clearfix">
</div>
<ul class="list-unstyled row product-style rt-view grid">
	<?php 
	foreach($arr as $rows):
		?>
		<li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-286 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock sale shipping-taxable purchasable product-type-simple">
			<div class="product_item">
				<div class="rt-thumb">
					<a class="rt-tooltip" data-tooltip="{&quot;image&quot;: &quot;http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058.jpg&quot;}" href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>"><img width="600" height="600" src="public/upload/product/<?php echo $rows->c_img; ?>" class="attachment-600x0 size-600x0 wp-post-image" alt="<?php echo $rows->c_name; ?>"  sizes="(max-width: 600px) 100vw, 600px"></a>
					<input type="hidden" class="xcp-hidden-id" value="286">
					<div class="rt_add_to_cart clearfix">
						<a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="view_product"><i class="fa fa-search-plus"></i></a>
						<a rel="nofollow" href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" data-quantity="1" data-product_id="285" data-product_sku="A0001-3-7-1-8" class="button product_type_simple ajax_add_to_cart">Đặt mua
						</a>
					</div>
					<?php if($rows->c_saleproduct == "1") echo "<span class='percent'>-3%</span>" ?>
				</div>		
				<div class="content">
					<h3><a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="rt_woocommerce_title"><?php echo $rows->c_name; ?></a></h3>
					<div class="star_pro">				
						<?php if($rows->c_price<200000){
						echo '<i class="far fa-star"></i>';
					} ?>
					<?php if($rows->c_price>200000&&$rows->c_price<400000){
						echo '<i class="far fa-star"></i><i class="far fa-star"></i>';
					} ?>
					<?php if($rows->c_price>400000&&$rows->c_price<600000){
						echo '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					} ?>
					<?php if($rows->c_price>600000&&$rows->c_price<1000000){
						echo '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					} ?>
					<?php if($rows->c_price>1000000){
						echo '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
					} ?>
					</div>			
					<p class="price"><span> Giá : <?php echo $rows->c_price; ?> đ </span></p>			
					<div class="des_pro_ex"><h3>Mô tả ngắn </h3>
						<div class="woocommerce-product-details__short-description">
							<p><?php echo $rows->c_description; ?></p>
						</div>
					</div>		
				</div>
			</div>
		</li>
	<?php endforeach; ?>
</ul>
<div class="wp-pagenavi">
	<ul class="page-numbers">
		<?php for($i = 1; $i<=$num_page; $i++): ?>
			<li><a class="page-numbers" href="index.php?controller=products&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endfor; ?>
	</ul>
</div>