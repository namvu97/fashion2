
	<header class="woocommerce-products-header">
		<div class="imges_cate"> 
		</div>
		<h1 class="woocommerce-products-header__title page-title" style="text-align:center;">Loại sản phẩm : <?php 
                                        $type = $this->model->get_a_record("select c_name from tbl_type_product where pk_type_product_id=$id");
                                        echo $type->c_name;
                                     ?>			
			<span class="rt_grid_layout">
				<a href="http://khomaudepraothue.com/fashion2/?product_cat=hang-moi-ve#" id="grid" title="grid"><span class="grid-view"><i class="fa fa-th"></i>Lưới</span></a>
				<a href="http://khomaudepraothue.com/fashion2/?product_cat=hang-moi-ve#" id="list" title="list"><span class="exerpt-view"><i class="fa fa-list-ul"></i>Cột</span></a>
			</span>
		</h1>
	</header>
	<div class="result_count-ordering clearfix">
	</div>
	<ul class="list-unstyled row product-style rt-view grid">
		<?php 
			//liet ke san pham moi
			foreach($arr1 as $rows):
		?>
		<li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-279 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock shipping-taxable purchasable product-type-simple">
			<div class="product_item">
				<div class="rt-thumb">
					<a class="rt-tooltip" data-tooltip="{&quot;image&quot;: &quot;http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/quynh-anh-shyn-dien-style-prep-2867-8737-1437982179.jpg&quot;}" href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>"><img width="600" height="600" src="public/upload/product/<?php echo $rows->c_img; ?>" class="attachment-600x0 size-600x0 wp-post-image" alt="<?php echo $rows->c_name; ?>"  sizes="(max-width: 600px) 100vw, 600px"></a><input type="hidden" class="xcp-hidden-id" value="279">
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
					<p class="price"><span>Giá : <?php echo $rows->c_price; ?> đ</span></p>			
					<div class="des_pro_ex"><h3>Mô tả ngắn </h3>
						<div class="woocommerce-product-details__short-description">
							<p>Với váy suông không thể giúp bạn gái khoe ngực đầy, eo thon hay vòng 3 quyến rũ. Nhưng bù lại với những cô nàng có vòng 2 không thon gọn, vòng 1 khiêm tốn và vòng 3 thiếu gợi cảm thì sẽ biến mất trong chiếc đầm suông và nó dồn tất cả sự chú ý vào khuôn mặt và đôi chân thon của người mặc.</p>
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
			<li><a class="page-numbers" href="index.php?controller=product_type&id=<?php echo $id; ?>&id1=<?php echo $id1; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endfor; ?>
	</ul>
</div>