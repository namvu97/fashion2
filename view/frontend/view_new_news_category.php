<?php  
    $news = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit 0,4");
    foreach ($news as $rows):
?>
<div class="featured-post">
    <div class="align-left"><img width="300" height="200" src="public/upload/news/<?php echo $rows->c_img; ?>" class="attachment-medium size-medium wp-post-image" alt="<?php echo $rows->c_name; ?>" sizes="(max-width: 300px) 100vw, 300px" />
    </div>                
    <a class="news-title" href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a>
</div>
<?php endforeach; ?>
