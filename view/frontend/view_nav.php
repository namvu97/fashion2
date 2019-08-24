<nav id="ubermenu-main-22-primary-2" class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-22 ubermenu-loc-primary ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-horizontal ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-black-white-2 ubermenu-has-border ubermenu-bar-align-full ubermenu-items-align-auto ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
    <ul id="ubermenu-nav-main-22-primary" class="ubermenu-nav">
        <li id="menu-item-106" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-current-menu-item ubermenu-current_page_item ubermenu-item-home ubermenu-item-106 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="trang-chu" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Trang chủ</span></a>
        </li>
        <li id="menu-item-211" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-211 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">NAM</span><i class="ubermenu-sub-indicator fas fa-angle-down"></i></a>
            <ul  class="ubermenu-submenu ubermenu-submenu-id-211 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width ubermenu-autoclear ubermenu-submenu-bkg-img"  >
                <li id="menu-item-363" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-363 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-cong-so/1"><span class="ubermenu-target-title ubermenu-target-text">Thời trang công sở</span>
                    </a>
                    <ul class="ubermenu-submenu ubermenu-submenu-id-363 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product where c_name<>'Váy' AND c_name<>'Đầm' ");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-364" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-364 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" >
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="cong-so/<?php echo $rows->pk_category_product_id; ?>/1"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li id="menu-item-373" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-373 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-dao-pho/1"><span class="ubermenu-target-title ubermenu-target-text">Thời trang dạo phố</span></a>
                    <ul  class="ubermenu-submenu ubermenu-submenu-id-373 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product where c_name<>'Váy' AND c_name<>'Đầm' ");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-374" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-374 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="dao-pho/<?php echo $rows->pk_category_product_id; ?>/1"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li id="menu-item-383" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-383 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-da-tiec/1"><span class="ubermenu-target-title ubermenu-target-text">Thời trang dạ tiệc</span></a>
                    <ul  class="ubermenu-submenu ubermenu-submenu-id-383 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product where c_name<>'Váy' AND c_name<>'Đầm' ");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-384" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-384 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="thoi-trang-da-tiec/<?php echo $rows->pk_category_product_id; ?>/1"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>
        <li id="menu-item-212" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-212 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">NỮ</span><i class="ubermenu-sub-indicator fas fa-angle-down"></i></a>
            <ul  class="ubermenu-submenu ubermenu-submenu-id-212 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width ubermenu-autoclear ubermenu-submenu-bkg-img"  >
                <li id="menu-item-363" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-363 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-cong-so/0"><span class="ubermenu-target-title ubermenu-target-text">Thời trang công sở</span>
                    </a>
                    <ul class="ubermenu-submenu ubermenu-submenu-id-363 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-364" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-364 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" >
                            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="cong-so/<?php echo $rows->pk_category_product_id; ?>/0"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li id="menu-item-373" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-373 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-dao-pho/0"><span class="ubermenu-target-title ubermenu-target-text">Thời trang dạo phố</span></a>
                    <ul  class="ubermenu-submenu ubermenu-submenu-id-373 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-374" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-374 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="dao-pho/<?php echo $rows->pk_category_product_id; ?>/0"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li id="menu-item-383" class="ubermenu-item ubermenu-item-type-custom ubermenu-item-object-custom ubermenu-item-has-children ubermenu-item-383 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-1-4 ubermenu-has-submenu-stack" >
                    <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-image_right" href="thoi-trang-da-tiec/0"><span class="ubermenu-target-title ubermenu-target-text">Thời trang dạ tiệc</span></a>
                    <ul  class="ubermenu-submenu ubermenu-submenu-id-383 ubermenu-submenu-type-auto ubermenu-submenu-type-stack">
                        <?php 
                            //Liet ke danh muc san phan
                            $category=$this->model->get_all("select * from tbl_category_product");
                            foreach ($category as $rows):
                        ?>
                        <li id="menu-item-384" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-384 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-2 ubermenu-column ubermenu-column-auto" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="da-tiec/<?php echo $rows->pk_category_product_id; ?>/0"><span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->c_name; ?></span></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>
        <li id="menu-item-277" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-current-product-ancestor ubermenu-current-menu-parent ubermenu-current-product-parent ubermenu-item-277 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto" >
            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham-giam-gia" tabindex="0">
                <span class="ubermenu-target-title ubermenu-target-text">Sale</span>
            </a>
        </li>
        <li id="menu-item-278" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-current-product-ancestor ubermenu-current-menu-parent ubermenu-current-product-parent ubermenu-item-has-children ubermenu-item-278 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-flyout" >
            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="bo-suu-tap" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Bộ sưu tập</span><i class="ubermenu-sub-indicator fas fa-angle-down"></i></a>
            <ul  class="ubermenu-submenu ubermenu-submenu-id-278 ubermenu-submenu-type-flyout ubermenu-submenu-drop ubermenu-submenu-align-left_edge_item"  >
                <li id="menu-item-394" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-current-product-ancestor ubermenu-current-menu-parent ubermenu-current-product-parent ubermenu-item-394 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-1" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham-ban-chay"><span class="ubermenu-target-title ubermenu-target-text">Sản phẩm nổi bật</span></a>
                </li>
                <li id="menu-item-396" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-current-product-ancestor ubermenu-current-menu-parent ubermenu-current-product-parent ubermenu-item-396 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-1" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="hang-moi-ve"><span class="ubermenu-target-title ubermenu-target-text">Hàng mới về</span></a>
                </li>
                <li id="menu-item-395" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-current-product-ancestor ubermenu-current-menu-parent ubermenu-current-product-parent ubermenu-item-395 ubermenu-item-auto ubermenu-item-normal ubermenu-item-level-1" ><a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="tin-tuc"><span class="ubermenu-target-title ubermenu-target-text">Tin tức mới</span></a>
                </li>
         
            </ul>
        </li>
        <li id="menu-item-22" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-category ubermenu-item-22 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto" >
            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="tin-tuc" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Tin tức</span></a>
        </li>
        <li id="menu-item-19" class="ubermenu-item ubermenu-item-type-post_type ubermenu-item-object-page ubermenu-item-19 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto" >
            <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="lien-he" tabindex="0"><span class="ubermenu-target-title ubermenu-target-text">Liên hệ</span></a>
        </li>
    </ul>
</nav>