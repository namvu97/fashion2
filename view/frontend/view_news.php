<div class="rt-news-style-1"><h1 class="heading"><span>Tin tức</span></h1>
<div class="new-list">
  <?php  

  foreach ($arr as $rows):
    ?>
    <div class="news-post clearfix">
      <div class="date_time_post">
        <div class="mon">05</div>
        <div class="mon">2018</div>
        <div class="date_times">06</div>
      </div>
      <div class="rt-post-image">
        <a href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>" title="<?php echo $rows->c_name; ?>">
          <img width="300" height="200" src="public/upload/news/<?php echo $rows->c_img; ?>" class="attachment-medium size-medium wp-post-image" alt="<?php echo $rows->c_name; ?>" sizes="(max-width: 300px) 100vw, 300px" />                            
        </a>
        <div class="overlay">
          <div class="texts">
            <a href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>"><i class="fa fa-eye"></i><br>Xem chi tiết</a>
          </div>
        </div>
      </div>
      <div class="rt-post-content">
        <h3><a class="title" href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>" title="<?php echo $rows->c_name; ?>"><?php echo $rows->c_name; ?></a></h3>
        <p><?php echo $rows->c_description; ?>...</br><a class='more-link' href='tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>'>Đọc Thêm</a></p>                            
        <div class='rt-post-info'>
          <span class='rt-post-archive'><i class='fa fa-folder-o' aria-hidden='true'></i> <a href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>"> | Tin tức</a></span>
          <span class='rt-post-comment'><i class='fa fa-comment-o' aria-hidden='true'></i> 0 bình luận</span>
          <span class='rt-post-time'><i class='fa fa-calendar' aria-hidden='true'></i> 5-Tháng Sáu-2018</span>
          <span class='rt-post-time'><i class='fa fa-book'></i><a href='tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>'> Đọc thêm </a></span>
        </div>                        
      </div>
    </div>
    <div class="wp-pagenavi">
    </div>
  <?php endforeach; ?>
</div>
<div class="wp-pagenavi">
  <ul class="page-numbers">
    <?php for($i = 1; $i<=$num_page; $i++): ?>
      <li><a class="page-numbers" href="index.php?controller=news&id=<?php echo $id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
  </ul>
</div>