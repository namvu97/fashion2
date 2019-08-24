<?php  
$slide = $this->model->get_all("select * from tbl_slide order by pk_slide_id desc");
?>
<!-- meta slider --> 
<div style="width: 100%;" class="ml-slider-3-8-1 metaslider metaslider-nivo metaslider-12 ml-slider">
	<div id="metaslider_container_12">
		<div class='slider-wrapper theme-default'>
			<div class='ribbon'></div>
			<div id='metaslider_12' class='nivoSlider'>
				<?php 
					foreach ($slide as $rows):
				?>
					<img src="public/upload/slide/<?php echo $rows->c_img; ?>"  height="735" width="1920" title="slide" alt="<?php echo $rows->c_name; ?>" class="slider-12 slide-402">
				<?php 
					endforeach; 
				?>
			</div>
		</div>
	</div>
</div>

