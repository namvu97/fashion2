

<h1 class="heading"><span>Thanh toán</span></h1>
<div class="entry-content">
	<div class="woocommerce">
		<form name="checkout" method="post" class="checkout woocommerce-checkout" action="index.php?controller=checkout" enctype="multipart/form-data" >
			<div class="col3-set clear">
				<div class="col col-1">
					<div class="woocommerce-billing-fields">
						<h3 class="checkout-col-title">THÔNG TIN MUA HÀNG</h3>
						<div class="woocommerce-billing-fields__field-wrapper">
							<p class="form-row validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="">Họ và Tên <abbr class="required" title="bắt buộc">*</abbr></label>
								<input type="text" class="input-text " name="hovaten" required placeholder="Họ và Tên" value="" autocomplete="given-name" autofocus="autofocus">
							</p>
							<p class="form-row form-row-wide address-field validate-required"  data-priority="50"><label for="billing_address_1" class="">Địa chỉ của bạn <abbr class="required" title="bắt buộc">*</abbr></label>
								<input type="text" class="input-text " name="diachi" placeholder="Địa chỉ của bạn" value="" autocomplete="address-line1">
							</p>
							<p class="form-row validate-required validate-phone"  data-priority="100"><label for="billing_phone" class="">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label>
								<input type="tel" class="input-text " name="dienthoai" placeholder="Số điện thoại của bạn" value="" autocomplete="tel">
							</p>
						</div>
					</div>
				</div>
				<div class="col col-2">
					<h3 class="checkout-col-title"></h3>
					<div class="clear"></div>
					<div class="woocommerce-shipping-fields">
					</div>
					<div class="woocommerce-additional-fields">
						<h3>Thông tin thêm</h3>
						<div class="woocommerce-additional-fields__field-wrapper">
							<p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="">Ghi chú đơn hàng</label><textarea name="ghichu" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5"></textarea>
							</p>
						</div>
					</div>
				</div>
				<div class="col col-3">
					<div id="payment" class="woocommerce-checkout-payment">
						<div class="place-order clear">
							<input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Mua hàng" data-value="Đặt hàng">
							<input type="hidden" id="_wpnonce" name="_wpnonce" value="3f44819a55"><input type="hidden" name="_wp_http_referer" value="/fashion2/?wc-ajax=update_order_review">	
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>