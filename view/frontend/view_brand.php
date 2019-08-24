<?php  
  $brand = $this->model->get_all("select * from tbl_brand order by pk_brand_id desc");
?>
<div class="image-partner">
    <?php 
            foreach ($brand as $rows):
        ?>
    <div class="slide">
        
        <div class="image-item">                                
            <a href="#"   title="">
                <img src="public/upload/brand/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>" />
            </a>
        </div>
        
    </div>
    <?php endforeach; ?>
</div>