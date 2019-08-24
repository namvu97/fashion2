<header class="woocommerce-products-header">
	<div class="imges_cate"> 
	</div>
	<h1 class="woocommerce-products-header__title page-title">VẬN CHUYỂN
	</h1>
</header>
  <style>
    #accordion-container {
      padding: 5px 10px 10px 10px;
    }

    .accordion-header, .accordion-subHeader {
      font-weight: bold;
                        font-size:15px;
      margin: 5px 0 0 0;
      padding: 5px 20px;
      cursor: pointer;
      color: black;
      border-bottom: 1px solid #dedede;
    }

    .active-header, .active-subHeader {
      background-repeat: no-repeat;
      background-position: right 50%;
    }

    .active-header:hover, .active-subHeader:hover {
      background-repeat: no-repeat;
      background-position: right 50%;
    }

    .inactive-header, .inactive-subHeader {
      background-repeat: no-repeat;
      background-position: right 50%;
    }

    .inactive-header:hover, .inactive-subHeader:hover {
      background-repeat: no-repeat;
      background-position: right 50%;
    }

    .accordion-content, .accordion-subContent {
      display: none;
      padding: 20px;
    }
                
                .accordion-subContent ul {
      padding-left: 5%;
    }

  </style>

<div id="accordion-container"> 
      <h2 class="accordion-header">1.CƯỚC PHÍ VẬN CHUYỂN<img src="public/double-down.png" style="float:right; width:20px; height:auto;"></h2> 
      <div class="accordion-content" style="width: 640px; display: block;">
        <!-- sub Content --> 
        <ul>
            <li>Miễn phí giao hàng với tất cả đơn hàng có giá trị từ 499,000 vnđ trở lên tại tất cả tỉnh thành trên toàn quốc.</li>
            <li>Đối với những đơn hàng có giá trị dưới 499,000 vnđ, Fashion2 áp dụng biểu phí giao hàng theo từng khu vực được quy định dưới đây. Biểu phí này áp dụng từ 24/08/2017 cho đến khi có thay đổi.</li>
          </ul> 
      </div>

      <h2 class="accordion-header">2.THỜI GIAN VẬN CHUYỂN<img src="public/double-down.png" style="float:right; width:20px; height:auto;"></h2> 
      <div class="accordion-content" style="width: 640px;">
        <!-- sub Content --> 
          <ul>
            <li>Tuyến nội thành Hà Nội: giao hàng trong vòng 24h kể từ khi hệ thống xác nhận qua sms/email</li>
            <li>Tuyến ngoại thành Hà Nội: giao hàng trong vòng 48h kể từ khi hệ thống xác nhận qua sms/email.</li>
            <li>Tuyến Đà Nẵng, TP.HCM: giao hàng trong vòng 3 ngày kể từ khi hệ thống xác nhận qua sms/email.</li>
            <li>Tất cả thành phố khác: giao hàng trong vòng từ 3- 7 ngày kể từ khi hệ thống xác nhận qua sms/ email.</li>
            <li>Thời gian giao hàng không tính thứ bảy, chủ nhật hay các ngày lễ tết.</li>
          </ul> 
      </div>

      <h2 class="accordion-header">3.ĐƠN HÀNG ĐƯỢC GIAO TỐI ĐA MẤY LẦN ?<img src="public/double-down.png" style="float:right; width:20px; height:auto;"></h2> 
<div class="accordion-content" style="width: 640px;">
        <!-- sub Content --> 
          <ul>
            <li>Đơn hàng được giao tối đa 3 lần (Nếu lần 1 đơn hàng giao không thành công, nhân viên vận chuyển sẽ liên hệ lại bạn lần 2 sau 1-2 ngày làm việc kế tiếp . Như vậy sau 3 lần giao dịch không thành công đơn hàng sẽ hủy)</li>
           
          </ul> 
      </div>
      <h2 class="accordion-header">4.KiỂM TRA TÌNH TRẠNG ĐƠN HÀNG<img src="public/double-down.png" style="float:right; width:20px; height:auto;"></h2> 
<div class="accordion-content" style="width: 640px;">
        <!-- sub Content --> 
          <ul>
            <li>Để kiểm tra thông tin hoặc tình trạng đơn hàng bạn vui lòng sử dụng MÃ ĐƠN HÀNG đã được gửi trong email xác nhận hoặc tin nhắn xác nhận để thông báo tới bộ phận Chăm sóc khách hàng (tổng đài miễn phí cước gọi 1800 6061 nhánh 1)</li>
           
          </ul> 
      </div>
            <h2 class="accordion-header">5.KHI NHẬN ĐƠN HÀNG CÓ ĐƯỢC XEM SẢN PHẨM TRƯỚC KHI THANH TOÁN ?<img src="public/double-down.png" style="float:right; width:20px; height:auto;"></h2> 
<div class="accordion-content" style="width: 640px;">
        <!-- sub Content --> 
          <ul>
            <li>Bạn hoàn toàn có thể mở gói hàng kiểm tra sản phẩm trước khi thanh toán hoặc trước khi vận chuyển rời đi.</li>
           <li>Trong trường hợp bạn gặp vấn đề phát sinh bạn liên hệ ngay đến chúng tôi 1800 6061 nhánh 1 để được hỗ trợ kịp thời.</li>
          </ul> 
      </div>
</div>

<script type="text/javascript">// <![CDATA[
(function($) {
  
//Add Inactive Class To All Accordion Headers
      $('.accordion-header').toggleClass('inactive-header');

      //Set The Accordion Content Width
      var contentwidth = $('.accordion-header').width();
      $('.accordion-content').css({'width' : contentwidth });
      
      //Open The First Accordion Section When Page Loads
      $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
      $('.accordion-content').first().slideDown().toggleClass('open-content');
      
      // The Accordion Effect
      $('.accordion-header').click(function () {
        if($(this).is('.inactive-header')) {
          $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
          $(this).toggleClass('active-header').toggleClass('inactive-header');
          $(this).next().slideToggle().toggleClass('open-content');
        }
        
        else {
          $(this).toggleClass('active-header').toggleClass('inactive-header');
          $(this).next().slideToggle().toggleClass('open-content');
        }
      });
      
      return false;

})(jQuery);
// ]]></script>

<script type="text/javascript">// <![CDATA[
(function($) {
  
//Add Inactive Class To All Accordion Headers
      $('.accordion-subHeader').toggleClass('inactive-subHeader');

      //Set The Accordion Content Width
      var contentsubWidth = $('.accordion-subHeader').width();
      $('.accordion-subContent').css({'width' : contentsubWidth });
      
      //Open The First Accordion Section When Page Loads
      $('.accordion-subHeader').first().toggleClass('active-subHeader').toggleClass('inactive-subHeader');
      $('.accordion-subContent').first().slideDown().toggleClass('open-subContent');
      
      // The Accordion Effect
      $('.accordion-subHeader').click(function () {
        if($(this).is('.inactive-subHeader')) {
          $('.active-subHeader').toggleClass('active-subHeader').toggleClass('inactive-subHeader').next().slideToggle().toggleClass('open-subContent');
          $(this).toggleClass('active-subHeader').toggleClass('inactive-subHeader');
          $(this).next().slideToggle().toggleClass('open-subContent');
        }
        
        else {
          $(this).toggleClass('active-subHeader').toggleClass('inactive-subHeader');
          $(this).next().slideToggle().toggleClass('open-subContent');
        }
      });
      
      return false;

})(jQuery);
// ]]></script>

