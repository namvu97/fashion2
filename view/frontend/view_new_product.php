<h2 class="heading">
    <a href="hang-moi-ve">
        Hàng mới về                                 
    </a>
</h2>
<div class="home-product  row">
    <ul class="woocommerce product_style_2">
        <?php 
          //liet ke san pham moi
        $product = $this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,8");
        foreach($product as $rows):
           ?>
           <li class="col-lg-3 lg-4-cl col-md-3 md-4-cl col-sm-4 sm-3-cl col-xs-6 xs-2-cl post-285 product type-product status-publish has-post-thumbnail product_cat-san-pham product_cat-bo-suu-tap product_cat-hang-moi-ve product_cat-lookbook-bo-suu-tap product_cat-noi-that-noi-bat product_cat-sale product_cat-san-pham-ban-chay product_cat-san-pham-noi-bat instock shipping-taxable product-type-simple">
            <div class="product_item">
                <div class='rt-thumb'>
                    <a class='rt-tooltip'  href='san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>'>
                        <img width="600" height="600" src="public/upload/product/<?php echo $rows->c_img; ?>" class="attachment-600x0 size-600x0 wp-post-image" alt="<?php echo $rows->c_name; ?>" sizes="(max-width: 600px) 100vw, 600px" />
                    </a>
                    <input type="hidden" class="xcp-hidden-id" value="285">
                    <div class="rt_add_to_cart clearfix">
                        <a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="view_product"><i class="fa fa-search-plus"></i></a>
                        <a rel="nofollow" href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" data-quantity="1" data-product_id="285" data-product_sku="A0001-3-7-1-8" class="button product_type_simple ajax_add_to_cart">Đặt mua</a>
                    </div>
                    <?php if($rows->c_saleproduct == "1") echo "<span class='percent'>-3%</span>" ?>
                </div>      
                <div class="content">
                    <h3><a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" class="rt_woocommerce_title"><?php echo $rows->c_name; ?></a></h3>
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
                    <div class='des_pro_ex'><h3>Mô tả ngắn </h3>
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