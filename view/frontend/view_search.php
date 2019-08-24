  					<div class="search-result">
				<h2 class="heading"><span>Kết quả tìm kiếm : </span></h2>
				<div class="search-value row">
					<?php                                 
        foreach($arr as $rows):
           ?>
											<div class="news-post col-md-4">
						    <a href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" title="<?php echo $rows->c_name; ?>">
						    <img width="300" height="300" src="public/upload/product/<?php echo $rows->c_img; ?>" class="attachment-medium size-medium wp-post-image" alt="<?php echo $rows->c_name; ?>"  sizes="(max-width: 300px) 100vw, 300px">						    </a>
						    <a class="title" href="san-pham/chi-tiet/<?php echo $rows->pk_product_id; ?>" title="<?php echo $rows->c_name; ?>"><?php echo $rows->c_name; ?></a>
						    <?php if($rows->c_saleproduct == "1") echo "<span class='percent'>-3%</span>" ?>
						</div>
					<?php endforeach; ?>
											
									</div>
	        </div>