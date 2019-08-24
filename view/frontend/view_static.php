<?php 
    if(isset($_SESSION["static"]) == false){ 
        //update so truy cap tang len 1
        $this->model->execute("update tbl_static set sotruycap=sotruycap+1");
        $_SESSION["static"] = true;
    }
    //lay so truy cap de hien thi
    $record = $this->model->get_a_record("select sotruycap from tbl_static");
    //---------
    //dem so luong truy cap
 ?>
<!-- static -->
<div class="time">
    <span><i class="fa fa-calendar"></i> Ngày đăng: 05/06/18 </span> 
    <span> <i class="fa fa-eye"></i>  lượt xem: <?php echo $record->sotruycap; ?></span>
</div>
                <!-- end ststic -->