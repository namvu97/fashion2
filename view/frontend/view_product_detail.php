<?php  
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
    //Lay 1 ban ghi
$product = $this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
?>
<div id="product-286" class="product">
	<div class="row">
		<div class="col-xs-12">
			<div class="rt_woocommerce-product-gallery">
				<figure class="rt-woocommerce-product-gallery-figure">
					<div class="vertival">
						<img height="500" width="500" class="xzoom" id="xzoom-default" src="public/upload/product/<?php echo $product->c_img; ?>"   >
					</div>
					<div class="xzoom-thumbs">
						<div class="rt-woocommerce-product-image-simple"><a href="public/upload/product/<?php echo $product->c_img; ?>">
								<img class="xzoom" src="public/upload/product/<?php echo $product->c_img; ?>" >
							</a>
						</div>
						<div class="rt-woocommerce-product-image-simple"><a href="public/upload/product/<?php echo $product->c_img2; ?>">
								<img class="xzoom" src="public/upload/product/<?php echo $product->c_img2; ?>" >
							</a>
						</div>
						<div class="rt-woocommerce-product-image-simple"><a href="public/upload/product/<?php echo $product->c_img3; ?>">
								<img class="xzoom" src="public/upload/product/<?php echo $product->c_img3; ?>" >
							</a>
						</div>
						<div class="rt-woocommerce-product-image-simple"><a href="public/upload/product/<?php echo $product->c_img4; ?>">
								<img class="xzoom" src="public/upload/product/<?php echo $product->c_img4; ?>" >
							</a>
						</div>
					</div>
				</figure>
				<script type="text/javascript">
					jQuery("document").ready(function($){
						jQuery(".xzoom").xzoom({tint: '#333', Xoffset: 15});
					});
				</script>
			</div>
			<div class="rt-summary entry-summary">
				<h1 class="product_title entry-title"><?php echo $product->c_name; ?></h1>
				<ul class='attribute-single number-one'>        
					<li class="sku_wrapper">
						<span class="left">
						Mã:          </span>
						<span class="right" itemprop="sku">
							<?php echo $product->pk_product_id; ?></span>
						</li>
					</ul>	
					<div class="rt_woocommerce_single_product_summary clearfix">
						<div class="">
							<p class="price_single_pro"><span class='price_pro'>Giá bán : <label><?php echo $product->c_price; ?> đ </label></span> </p>
						</div>
					</div>
					<div class='box_map_sale'>			
						<div class="map_pro">
							<div class="map_items">
								<a href="#">Chỉ đường đến ANT</a>
							</div>
							<div class="map_items">
								<a href="##">Hướng dẫn mua hàng</a>
							</div>
							<div class="map_items">
								<a href="###">Giao hàng toàn quốc</a>
							</div>
						</div>
					</div>	
					<form class="cart" method="post" enctype="multipart/form-data">
						<div class="quantity_wanted_p">
							<div class="quantity">
								<label for="quantity-detail" class="quantity-selector slg_g">Số lượng</label>
								<a class="btn_num button_qty" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" type="button">-</a>
								<input id="qty" type="text" class="input-text qty text" name="quantity" value="1" title="SL">
								<a class="btn_num button_qty" onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" type="button">+</a>
							</div>
						</div>
						<button type="submit" name="add-to-cart" value="286" class="rt_qv_btn" onclick="window.location.href='index.php?controller=cart&act=add&id=<?php echo $product->pk_product_id; ?>'">MUA NGAY<div class="cart_text">Giao hàng tận nơi toàn quốc</div></button>
					</form>
					<div class="purchase_address">
						<h5 class="time_word">Giờ làm việc: 8h00-20h00 (Tất cả các ngày)</h5>
						<h4 class="address_title">Địa chỉ mua hàng</h4>
						<div class="address_item">
							<span>Showroom 01 -	</span>147 Mai Dịch, Cầu Giấy, Hà Nội. 
						</div>
						<div class="address_item">
							<span>Showroom 02 -	</span> Tầng 3, C14  Bắc Hà, Tố Hữu (Lê Văn Lương kéo dài).
						</div>
							<div class="address_item">
								<span>Showroom 03 -	</span>  Số 72 Phương Mai, Đống Đa, Hà Nội.
							</div>
							</div>
						</div>
					</div><!-- .col-xs-12 -->
				</div>
			</div><!-- .summary -->
			<div class="post-286 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock sale shipping-taxable purchasable product-type-simple">
				<div class="woocommerce-tabs wc-tabs-wrapper">
					<ul class="rt_woocommerce_tabs wc-tabs list-unstyled clearfix" role="tablist">
						<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
							<a href="#tab-description">Thông tin sản phẩm</a>
						</li>
						<li class="description2_tab" id="tab-title-description2" role="tab" aria-controls="tab-description2">
							<a href="#tab-description2">Thông số kỹ thuật</a>
						</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
						<p><?php echo $product->c_description; ?></p>
						<div class="rt-social"><a class="rt-link rt-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Facebook</a><a class="rt-link rt-twitter" href="https://twitter.com/intent/tweet?text=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng&amp;url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;via=rt" target="_blank">Twitter</a><a class="rt-link rt-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Google+</a><a class="rt-link rt-pinterest" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;media=http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058.jpg&amp;description=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng" data-pin-custom="true" target="_blank">Pin It</a></div>
					</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description2 panel entry-content wc-tab" id="tab-description2" role="tabpanel" aria-labelledby="tab-title-description2">
						<p><?php echo $product->c_content; ?></p>
						<div class="rt-social"><a class="rt-link rt-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Facebook</a><a class="rt-link rt-twitter" href="https://twitter.com/intent/tweet?text=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng&amp;url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;via=rt" target="_blank">Twitter</a><a class="rt-link rt-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang" target="_blank">Google+</a><a class="rt-link rt-pinterest" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fkhomaudepraothue.com%2Ffashion2%2F%3Fproduct%3Ddh927-dam-suong-no-ruy-bang&amp;media=http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/phong-cach-thoi-thuong-cua-tin-do-thoi-trang-viet-ngay-giao-mua-37-.8058.jpg&amp;description=DH927%20%c4%90%e1%ba%a7m%20su%c3%b4ng%20n%c6%a1%20ruy%20b%c4%83ng" data-pin-custom="true" target="_blank">Pin It</a></div>
					</div>
				</div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-comments" data-href="http://khomaudepraothue.com/fashion2/?product=dh927-dam-suong-no-ruy-bang" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
				<div class="related">
					<h3 class="headingss">Sản phẩm liên quan</h3>
					<ul class="list-unstyled row product-style rt-view grid">
						<?php
							$id = isset($_GET["id"]) ? $_GET["id"] : 0;
            				//liet ke san pham lien quan
						$hotproduct = $this->model->get_all("select * from tbl_product where fk_category_product_id=$product->fk_category_product_id and fk_type_product_id=$product->fk_type_product_id and c_sex=$product->c_sex limit 0,8");
						foreach($hotproduct as $rows):
							?>
							<li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-280 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock shipping-taxable purchasable product-type-simple">
								<div class="product_item">
									<div class='rt-thumb'>
										<a class='rt-tooltip' data-tooltip='{"image": "http://khomaudepraothue.com/fashion2/wp-content/uploads/2018/06/20160215-032929-9_600x600.jpg"}' href='san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>'>
											<img width="600" height="600" src="public/upload/product/<?php echo $rows->c_img; ?>" class="attachment-600x0 size-600x0 wp-post-image" alt="<?php echo $rows->c_name; ?>" sizes="(max-width: 600px) 100vw, 600px" />
										</a><input type="hidden" class="xcp-hidden-id" value="285">
										<div class="rt_add_to_cart clearfix">
											<a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="view_product"><i class="fa fa-search-plus"></i></a>
											<a rel="nofollow" href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" data-quantity="1" data-product_id="285" data-product_sku="A0001-3-7-1-8" class="button product_type_simple ajax_add_to_cart">Đặt mua
											</a>
										</div>
									</div>      
									<div class="content">
										<h3><a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="rt_woocommerce_title"><?php echo $rows->c_name; ?></a>
										</h3>
										<div class='star_pro'>                  
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
										<p class="price"><span>Giá : <?php echo $rows->c_price; ?></span></p>         
										<div class='des_pro_ex'>
											<h3>Mô tả ngắn </h3>
											<div class="woocommerce-product-details__short-description">
												<p><?php echo $rows->c_description; ?></p>
											</div>
										</div>      
									</div>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>