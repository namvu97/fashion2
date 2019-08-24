<h1 class="heading"><span>Giỏ hàng</span></h1>
<div class="entry-content">
	<div class="woocommerce">
		<form class="woocommerce-cart-form" method="post" action="index.php?controller=cart&act=update">
			<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
				<thead>
					<tr>
						<th class="product-remove">&nbsp;</th>
						<th class="product-thumbnail">&nbsp;</th>
						<th class="product-name">Sản phẩm</th>
						<th class="product-price">Giá</th>
						<th class="product-quantity">Số lượng</th>
						<th class="product-subtotal">Tổng cộng</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($_SESSION["cart"] as $product): ?>
					<tr class="woocommerce-cart-form__cart-item cart_item">
						<td class="product-remove">
							<a href="index.php?controller=cart&act=delete&id=<?php echo $product['pk_product_id']; ?>" class="remove" aria-label="Xóa sản phẩm này" data-product_id="280" data-product_sku="A0001-3-7-1-3">×</a>						
						</td>
						<td class="product-thumbnail">
							<a href="san-pham/chi-tiet/<?php echo $product["pk_product_id"]; ?>"><img width="50" height="50" src="public/upload/product/<?php echo $product["c_img"]; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="<?php echo $product["c_name"]; ?>" sizes="(max-width: 180px) 100vw, 180px"></a>					
						</td>
						<td class="product-name" data-title="Sản phẩm">
							<a href="san-pham/chi-tiet/<?php echo $product["pk_product_id"]; ?>"><?php echo $product["c_name"]; ?></a>
						</td>
						<td class="product-price" data-title="Giá">
							<span class="woocommerce-Price-amount amount"><?php echo $product["c_price"]; ?><span class="woocommerce-Price-currencySymbol">₫</span></span>						
						</td>
						<td class="product-quantity" data-title="Số lượng">
							<div class="quantity">
								<div class="qty-adjust">
									<input type="number" name="<?php echo $product['pk_product_id']; ?>" style="width: 80px;" min="0" value="<?php echo $product['number']; ?>">
								</div>
							</div>
						</td>
						<td class="product-subtotal" data-title="Tổng cộng">
							<span class="woocommerce-Price-amount amount"><?php echo number_format($this->cart_total()); ?><span class="woocommerce-Price-currencySymbol">₫</span></span>
						</td>
					</tr>
					<?php endforeach; ?>
					<tr>
						<td colspan="6" class="actions">
							<?php if($this->cart_number() > 0): ?>
								<input type="submit" class="button" name="update_cart" value="Cập nhật giỏ hàng">&nbsp;
							<?php endif; ?>	
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<div class="cart-collaterals">
			<div class="cart_totals ">
				<h2>Tổng</h2>
				<table cellspacing="0" class="shop_table shop_table_responsive">
					<tbody>
						<tr class="cart-subtotal">
							<th>Tổng cộng</th>
							<td data-title="Tổng cộng"><span class="woocommerce-Price-amount amount"><?php echo number_format($this->cart_total()); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></td>
						</tr>
						<tr class="order-total">
							<th>Tổng cộng</th>
							<td data-title="Tổng cộng"><strong><span class="woocommerce-Price-amount amount"><?php echo number_format($this->cart_total()); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
						</tr>
					</tbody>
				</table>
				<div class="wc-proceed-to-checkout">
					<a href="thanh-toan" class="checkout-button button alt wc-forward">
					Thanh toán</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>