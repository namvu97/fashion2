<!-- danh mục sản phẩm -->
<div class="box-container">
    <div class="product-category">
        <div class="header"><span>Danh mục sản phẩm</span></div>
        <div id="product_category">
            <ul>
                <?php 
                $category = $this->model->get_all("select * from tbl_category_product");
                foreach($category as $rows):
                   ?>
                   <li>
                       <a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id; ?>"><span><?php echo $rows->c_name; ?></span></a>
                   </li>   
               <?php endforeach; ?>                       
           </ul>
       </div>
   </div>
</div>
<!-- hết danh mục sản phẩm -->

<div id="nav_menu-3" class="widget widget_nav_menu"><h3 class="widget-title">Danh mục sản phẩm</h3>
    <div class="menu-danh-muc-san-pham-container">
        <ul id="menu-danh-muc-san-pham" class="menu">
            <li id="menu-item-342" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-342">
                <a href="index9864.html?product_cat=hang-moi-ve">Hàng mới về</a>
            </li>
            <li id="menu-item-215" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-menu-item menu-item-has-children menu-item-215">
                <a href="index6785.html?product_cat=san-pham">Sản phẩm</a>
                <ul class="sub-menu">
                    <li id="menu-item-348" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-348">
                        <a href="index577c.html?product_cat=san-pham-ban-chay">Sản phẩm bán chạy</a>
                    </li>
                </ul>
            </li>
            <li id="menu-item-343" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-343"><a href="index1619.html?product_cat=noi-that-noi-bat">Nội thất nổi bật</a>
            </li>
            <li id="menu-item-344" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-344"><a href="index577c.html?product_cat=san-pham-ban-chay">Sản phẩm bán chạy</a>
            </li>
            <li id="menu-item-345" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-345"><a href="index40a4.html?product_cat=san-pham-noi-bat">Sản phẩm nổi bật</a>
            </li>
        </ul>
    </div>
</div>