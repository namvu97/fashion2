<h2 class="heading">
    <a href="index.php?controller=news">Bài viết mới nhất</a>
</h2>
<div class="list-news row">
    <?php  
        //Liet ke tin tuc moi nhat
    $news = $this->model->get_all("select * from tbl_news order by pk_news_id desc limit 0,3");
    foreach ($news as $rows):
        ?>
        <div class="news-post col-md-4">
            <div class="box">
                <div class="post-thumbnail">
                    <a href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>">
                        <img width="300" height="200" src="public/upload/news/<?php echo $rows->c_img; ?>" class="attachment-medium size-medium wp-post-image" alt="<?php echo $rows->c_name; ?>" sizes="(max-width: 300px) 100vw, 300px" />                  
                    </a>
                    <div class="time">
                        <span><i class="fa fa-calendar"></i> Ngày đăng: 05/06/18 </span> 
                    </div>
                </div>
                <div class="content">
                    <a class="news-title" href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>" title="<?php echo $rows->c_description; ?>"><?php echo $rows->c_name; ?></a>
                    <p><?php echo $rows->c_description; ?><a class='more-link' href='tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>'></a></p>                   
                    <a class="view-link" href="tin-tuc/chi-tiet/<?php echo $rows->pk_news_id; ?>">Xem chi tiết</a>
                </div>

            </div>
        </div>
    <?php endforeach; ?>
</div>