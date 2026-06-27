    <style>
      .bwg_inst_play {
        background-image: url('/wp-content/plugins/photo-gallery/images/play.png');
      }
      .bwg_inst_play:hover {
          background: url(/wp-content/plugins/photo-gallery/images/play_hover.png) no-repeat;
      }
      .spider_popup_wrap {
        background-color: rgba(255, 255, 255, 1.00);
      }
      .bwg_popup_image {
        max-width: 800px;
        max-height: 440px;
      }
      .bwg_ctrl_btn {
        color: #808080;
        font-size: 20px;
        margin: 10px 7px;
        opacity: 1.00;
      }
      .bwg_toggle_btn {
        color: #808080;
        font-size: 20px;
        opacity: 1.00;
      }
      .bwg_ctrl_btn_container {
				        	min-height: 40px;
				        background-color: rgba(255, 255, 255, 0.85);
        /*background: none repeat scroll 0 0 #FFFFFF;*/
                  bottom: 0;
          border-top-left-radius: 4px;
          border-top-right-radius: 4px;
          
        text-align: center;
      }
      .bwg_toggle_container {
        background: none repeat scroll 0 0 #FFFFFF;
                  border-top-left-radius: 4px;
          border-top-right-radius: 4px;
          /*bottom: 40px;*/
                  margin-left: -50px;
        opacity: 0.85;
        width: 100px;
      }
      .bwg_close_btn {
        opacity: 0.60;
      }
      .spider_popup_close {
        background-color: #FFFFFF;
        border-radius: 16px;
        border: 2px none #FFFFFF;
        box-shadow: ;
        color: #808080;
        height: 30px;
        font-size: 20px;
        right: -15px;
        top: -20px;
        width: 30px;
      }
      .spider_popup_close_fullscreen {
        color: #000000;
        font-size: 20px;
      }
      #spider_popup_left-ico,
      #spider_popup_right-ico {
        background-color: #FFFFFF;
        border-radius: 20px;
        border: 0px none #FFFFFF;
        box-shadow: ;
        color: #ADADAD;
        height: 35px;
        font-size: 25px;
        width: 35px;
        opacity: 0.60;
      }
      #spider_popup_left-ico {
        padding-right: 3.3333333333333px;
      }
      #spider_popup_right-ico {
        padding-left: 3.3333333333333px;
      }
              #spider_popup_left-ico {
        left: 20px;
        }
        #spider_popup_right-ico {
          left: auto;
          right: 20px;
        }
            .bwg_ctrl_btn:hover,
      .bwg_toggle_btn:hover,
      .spider_popup_close:hover,
      .spider_popup_close_fullscreen:hover,
      #spider_popup_left:hover #spider_popup_left-ico,
      #spider_popup_right:hover #spider_popup_right-ico {
        color: #808080;
        cursor: pointer;
      }
      .bwg_comment_container,  .bwg_ecommerce_container {
        background-color: #FFFFFF;
        color: #7A7A7A;
        font-size: 12px;
        font-family: Ubuntu;
        left: -350px;
        width: 350px;
      }
        .bwg_ecommerce_body  p, .bwg_ecommerce_body span, .bwg_ecommerce_body div {
          color:#7A7A7A!important;
        }
        .pge_tabs li{
          float:left;
          border-top: 1px solid #FFFFFF!important;
          border-left: 1px solid #FFFFFF!important;
          border-right: 1px solid #FFFFFF!important;
          margin-right: 1px !important;
          border-radius: 7px 7px 0 0;
          position:relative;
        }
       .pge_tabs li a{
          color:#FFFFFF!important;
        }

      .pge_tabs li.pge_active a, .pge_tabs li a:hover {
          border-radius: 7px;

        }
      .pge_tabs li.pge_active a>span, .pge_tabs li a>span:hover {
        color:#2F2F2F !important;
        border-bottom: 1px solid #2F2F2F;
        padding-bottom: 2px;
      }
       .pge_tabs_container{
          border:1px solid #7A7A7A;
          border-radius: 0 0 7px 7px;
       }

      .pge_pricelist {
        padding:0 !important;
        color:#7A7A7A!important;
      }

      .pge_add_to_cart a{
        border: 1px solid #7A7A7A!important;
        color:#7A7A7A!important;
        border-radius: 7px;
      }
      .bwg_comments , .bwg_ecommerce_panel{
        font-size: 12px;
        font-family: Ubuntu;
      }
      .bwg_comments input[type="submit"], .bwg_ecommerce_panel input[type="button"] {
        background: none repeat scroll 0 0 #2F2F2F;
        border: 1px none #666666;
        border-radius: 7px;
        color: #FFFFFF;
        padding: 10px 10px;
      }
      .bwg_comments .bwg-submit-disabled:hover {
          padding: 10px 10px !important;
          border-radius: 7px !important;
      }
      .bwg_comments input[type="text"],
      .bwg_comments textarea,
      .bwg_ecommerce_panel input[type="text"],
      .bwg_ecommerce_panel input[type="number"],
      .bwg_ecommerce_panel textarea , .bwg_ecommerce_panel select {
        background: none repeat scroll 0 0 #F7F8F9;
        border: 2px none #EBEBEB;
        border-radius: 7px;
        color: #7A7A7A;
        font-size: 12px;
        padding: 5px;
        width: 100%;
      }
      .bwg_comment_header_p {
        border-top: 20px none #383838;
      }
      .bwg_comment_header {
        color: #7A7A7A;
        font-size: 14px;
      }
      .bwg_comment_date {
        color: #7A7A7A;
        float: right;
        font-size: 10px;
      }
      .bwg_comment_body {
        color: #7A7A7A;
        font-size: 12px;
      }
      .bwg_comments_close , .bwg_ecommerce_close{
        text-align: right!important;
      }
      #bwg_rate_form .bwg_rate:hover {
        color: #F9D062;
      }
      .bwg_facebook,
      .bwg_twitter,
      .bwg_pinterest,
      .bwg_tumblr {
        color: #808080;
      }
      .bwg_image_container {
        bottom: 60px;
      }
      .bwg_filmstrip_container {
        display: table;
        height: 60px;
        width: 800px;
        bottom: 0;
      }
      .bwg_filmstrip {
        left: 20px;
        width: 760px;
      }
      .bwg_filmstrip_thumbnails {
        height: 60px;
        left: 0px;
        width: 8928px;
      }
      .bwg_filmstrip_thumbnail {
        height: 60px;
        width: 60px;
        padding: 0 1px;
      }
      .bwg_filmstrip_thumbnail .bwg_filmstrip_thumbnail_img_wrap {
        width:58px;
        height:60px;
        border: 1px none #000000;
        border-radius: 0;
      }
      .bwg_thumb_active .bwg_filmstrip_thumbnail_img_wrap {
        border: 0px solid #FFFFFF;
      }
      .bwg_thumb_deactive {
        opacity: 0.80;
      }
      .bwg_filmstrip_left {
        background-color: #EBEBEB;
        display: table-cell;
        z-index: 99999;
        width: 20px;
        left: 0;
        position: relative;              }
      .bwg_filmstrip_right {
        background-color: #EBEBEB;
        right: 0;
        z-index: 99999;
        width: 20px;
        display: table-cell;
        position: relative;              }
      .bwg_filmstrip_left i,
      .bwg_filmstrip_right i {
        color: #808080;
        font-size: 20px;
      }
      .bwg_watermark_spun {
        text-align: left;
        vertical-align: bottom;
        /*z-index: 10140;*/
      }
      .bwg_watermark_image {
        max-height: 90px;
        max-width: 90px;
        opacity: 0.30;
      }
      .bwg_watermark_text,
      .bwg_watermark_text:hover {
        font-size: 20px;
        font-family: segoe ui;
        color: #FFFFFF !important;
        opacity: 0.30;
      }
      .bwg_image_info_container1 {
        display: none;
      }
      .bwg_image_hit_container1 {
        display: none;;
      }
      .bwg_image_info_spun {
        text-align: left;
        vertical-align: bottom;
      }
      .bwg_image_hit_spun {
        text-align: left;
        vertical-align: bottom;
      }
      .bwg_image_hit {
        background: rgba(0, 0, 0, 0.70);
        border: 1px none #000000;
        border-radius: 0px;
        bottom: 40px;        margin: 0 5px;
        padding: 5px;
              }
      .bwg_image_hits,
      .bwg_image_hits * {
        color: #FFFFFF !important;
        font-family: Ubuntu;
        font-size: 14px;
        font-weight: normal;
      }
      .bwg_image_info {
        background: rgba(255, 255, 255, 0.70);
        border: 1px none #000000;
        border-radius: 0px;
                        width: 100%;
                padding: 10px 7px 44px 10px;
                word-break : break-word;
      }
      .bwg_image_title,
      .bwg_image_title * {
        color: #808080 !important;
        font-family: Ubuntu;
        font-size: 16px;
        font-weight: bold;
        word-wrap: break-word;
      }
      .bwg_image_description,
      .bwg_image_description * {
        color: #B0B0B0 !important;
        font-family: Ubuntu;
        font-size: 13px;
        font-weight: bold;
        word-break: break-word;
      }
      .bwg_image_rate_spun {
        text-align: left;
        vertical-align: top;
      }
      .bwg_image_rate {
                padding: 15px;
              }
      #bwg_rate_form .bwg_hint,
      #bwg_rate_form .bwg-icon-star,
      #bwg_rate_form .bwg-icon-star-half-o,
      #bwg_rate_form .bwg-icon-star-o,
      #bwg_rate_form .bwg-icon-minus-square-o {
        color: #F9D062;
        font-size: 20px;
      }
      .bwg_rate_hover {
        color: #F7B50E !important;
      }
      .bwg_rated {
        color: #F9D062;
        display: none;
        font-size: 18px;
      }
      #bwg_comment_form label {
        color: #7A7A7A;
      }
      @media (max-width: 768px) {
        .bwg_image_info {
          width: 260px;
        }
      }
      @media (max-width: 480px) {
        .bwg_image_info {
          width: 100%;
        }
      }
    </style>
        <div class="bwg_image_wrap">
              <div class="bwg_filmstrip_container" data-direction="horizontal">
          <div class="bwg_filmstrip_left"><i class="bwg-icon-angle-left-sm "></i></div>
          <div class="bwg_filmstrip">
            <div class="bwg_filmstrip_thumbnails" data-all-images-right-left-space="288" data-all-images-top-bottom-space="0">
                              <div id="bwg_filmstrip_thumbnail_0" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/WhatsApp-Image-2023-09-07-at-19.20.25-Copy.jpg?bwg=1697468508"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "0")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "0")'
                      image_id="412"
                      image_key="0" alt="WhatsApp-Image-2023-09-07-at-19.20.25-Copy" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_1" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-100.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "1")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "1")'
                      image_id="269"
                      image_key="1" alt="Ali-Matar-Construction-100" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_2" class="bwg_filmstrip_thumbnail bwg_thumb_active">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-101.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "2")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "2")'
                      image_id="270"
                      image_key="2" alt="Ali-Matar-Construction-101" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_3" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-102.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "3")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "3")'
                      image_id="271"
                      image_key="3" alt="Ali-Matar-Construction-102" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_4" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-104.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "4")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "4")'
                      image_id="273"
                      image_key="4" alt="Ali-Matar-Construction-104" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_5" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-106.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "5")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "5")'
                      image_id="275"
                      image_key="5" alt="Ali-Matar-Construction-106" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_6" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-105.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "6")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "6")'
                      image_id="274"
                      image_key="6" alt="Ali-Matar-Construction-105" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_7" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-107.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "7")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "7")'
                      image_id="276"
                      image_key="7" alt="Ali-Matar-Construction-107" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_8" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-108.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "8")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "8")'
                      image_id="277"
                      image_key="8" alt="Ali-Matar-Construction-108" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_9" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-109.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "9")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "9")'
                      image_id="278"
                      image_key="9" alt="Ali-Matar-Construction-109" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_10" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-11.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "10")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "10")'
                      image_id="279"
                      image_key="10" alt="Ali-Matar-Construction-11" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_11" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-110.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "11")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "11")'
                      image_id="280"
                      image_key="11" alt="Ali-Matar-Construction-110" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_12" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-111.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "12")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "12")'
                      image_id="281"
                      image_key="12" alt="Ali-Matar-Construction-111" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_13" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-112.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "13")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "13")'
                      image_id="282"
                      image_key="13" alt="Ali-Matar-Construction-112" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_14" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-113.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "14")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "14")'
                      image_id="283"
                      image_key="14" alt="Ali-Matar-Construction-113" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_15" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-114.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "15")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "15")'
                      image_id="284"
                      image_key="15" alt="Ali-Matar-Construction-114" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_16" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-115.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "16")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "16")'
                      image_id="285"
                      image_key="16" alt="Ali-Matar-Construction-115" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_17" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80.428954423592px; margin-left: -1px; margin-top: -10.214477211796px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-116.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "17")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "17")'
                      image_id="286"
                      image_key="17" alt="Ali-Matar-Construction-116" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_18" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80.428954423592px; height:60px; margin-left: -11.214477211796px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-117.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "18")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "18")'
                      image_id="287"
                      image_key="18" alt="Ali-Matar-Construction-117" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_19" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-12.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "19")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "19")'
                      image_id="288"
                      image_key="19" alt="Ali-Matar-Construction-12" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_20" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-13.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "20")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "20")'
                      image_id="289"
                      image_key="20" alt="Ali-Matar-Construction-13" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_21" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-14.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "21")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "21")'
                      image_id="290"
                      image_key="21" alt="Ali-Matar-Construction-14" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_22" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-15.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "22")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "22")'
                      image_id="291"
                      image_key="22" alt="Ali-Matar-Construction-15" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_23" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-16.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "23")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "23")'
                      image_id="292"
                      image_key="23" alt="Ali-Matar-Construction-16" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_24" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-17.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "24")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "24")'
                      image_id="293"
                      image_key="24" alt="Ali-Matar-Construction-17" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_25" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-18.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "25")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "25")'
                      image_id="294"
                      image_key="25" alt="Ali-Matar-Construction-18" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_26" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-19.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "26")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "26")'
                      image_id="295"
                      image_key="26" alt="Ali-Matar-Construction-19" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_27" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-2.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "27")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "27")'
                      image_id="296"
                      image_key="27" alt="Ali-Matar-Construction-2" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_28" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-20.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "28")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "28")'
                      image_id="297"
                      image_key="28" alt="Ali-Matar-Construction-20" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_29" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-21.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "29")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "29")'
                      image_id="298"
                      image_key="29" alt="Ali-Matar-Construction-21" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_30" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-22.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "30")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "30")'
                      image_id="299"
                      image_key="30" alt="Ali-Matar-Construction-22" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_31" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-23.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "31")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "31")'
                      image_id="300"
                      image_key="31" alt="Ali-Matar-Construction-23" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_32" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-24.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "32")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "32")'
                      image_id="301"
                      image_key="32" alt="Ali-Matar-Construction-24" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_33" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-25.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "33")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "33")'
                      image_id="302"
                      image_key="33" alt="Ali-Matar-Construction-25" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_34" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-26.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "34")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "34")'
                      image_id="303"
                      image_key="34" alt="Ali-Matar-Construction-26" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_35" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-27.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "35")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "35")'
                      image_id="304"
                      image_key="35" alt="Ali-Matar-Construction-27" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_36" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-28.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "36")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "36")'
                      image_id="305"
                      image_key="36" alt="Ali-Matar-Construction-28" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_37" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-29.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "37")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "37")'
                      image_id="306"
                      image_key="37" alt="Ali-Matar-Construction-29" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_38" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-3.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "38")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "38")'
                      image_id="307"
                      image_key="38" alt="Ali-Matar-Construction-3" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_39" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-30.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "39")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "39")'
                      image_id="308"
                      image_key="39" alt="Ali-Matar-Construction-30" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_40" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-31.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "40")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "40")'
                      image_id="309"
                      image_key="40" alt="Ali-Matar-Construction-31" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_41" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-32.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "41")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "41")'
                      image_id="310"
                      image_key="41" alt="Ali-Matar-Construction-32" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_42" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-34.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "42")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "42")'
                      image_id="312"
                      image_key="42" alt="Ali-Matar-Construction-34" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_43" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-35.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "43")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "43")'
                      image_id="313"
                      image_key="43" alt="Ali-Matar-Construction-35" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_44" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-36.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "44")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "44")'
                      image_id="314"
                      image_key="44" alt="Ali-Matar-Construction-36" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_45" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-37.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "45")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "45")'
                      image_id="315"
                      image_key="45" alt="Ali-Matar-Construction-37" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_46" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-38.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "46")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "46")'
                      image_id="316"
                      image_key="46" alt="Ali-Matar-Construction-38" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_47" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-39.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "47")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "47")'
                      image_id="317"
                      image_key="47" alt="Ali-Matar-Construction-39" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_48" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-1.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "48")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "48")'
                      image_id="267"
                      image_key="48" alt="Ali-Matar-Construction-1" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_49" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-4.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "49")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "49")'
                      image_id="318"
                      image_key="49" alt="Ali-Matar-Construction-4" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_50" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80.428954423592px; margin-left: -1px; margin-top: -10.214477211796px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-10.jpg?bwg=1695326403"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "50")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "50")'
                      image_id="268"
                      image_key="50" alt="Ali-Matar-Construction-10" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_51" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-40.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "51")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "51")'
                      image_id="319"
                      image_key="51" alt="Ali-Matar-Construction-40" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_52" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-41.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "52")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "52")'
                      image_id="320"
                      image_key="52" alt="Ali-Matar-Construction-41" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_53" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-42.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "53")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "53")'
                      image_id="321"
                      image_key="53" alt="Ali-Matar-Construction-42" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_54" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:60px; margin-left: -1px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-43.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "54")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "54")'
                      image_id="322"
                      image_key="54" alt="Ali-Matar-Construction-43" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_55" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-44.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "55")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "55")'
                      image_id="323"
                      image_key="55" alt="Ali-Matar-Construction-44" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_56" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-45.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "56")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "56")'
                      image_id="324"
                      image_key="56" alt="Ali-Matar-Construction-45" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_57" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-46.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "57")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "57")'
                      image_id="325"
                      image_key="57" alt="Ali-Matar-Construction-46" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_58" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-47.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "58")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "58")'
                      image_id="326"
                      image_key="58" alt="Ali-Matar-Construction-47" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_59" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-48.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "59")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "59")'
                      image_id="327"
                      image_key="59" alt="Ali-Matar-Construction-48" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_60" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-49.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "60")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "60")'
                      image_id="328"
                      image_key="60" alt="Ali-Matar-Construction-49" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_61" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-5.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "61")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "61")'
                      image_id="329"
                      image_key="61" alt="Ali-Matar-Construction-5" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_62" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-50.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "62")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "62")'
                      image_id="330"
                      image_key="62" alt="Ali-Matar-Construction-50" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_63" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-51.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "63")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "63")'
                      image_id="331"
                      image_key="63" alt="Ali-Matar-Construction-51" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_64" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-52.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "64")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "64")'
                      image_id="332"
                      image_key="64" alt="Ali-Matar-Construction-52" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_65" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-53.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "65")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "65")'
                      image_id="333"
                      image_key="65" alt="Ali-Matar-Construction-53" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_66" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-54.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "66")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "66")'
                      image_id="334"
                      image_key="66" alt="Ali-Matar-Construction-54" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_67" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-55.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "67")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "67")'
                      image_id="335"
                      image_key="67" alt="Ali-Matar-Construction-55" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_68" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-56.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "68")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "68")'
                      image_id="336"
                      image_key="68" alt="Ali-Matar-Construction-56" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_69" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-57.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "69")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "69")'
                      image_id="337"
                      image_key="69" alt="Ali-Matar-Construction-57" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_70" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-58.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "70")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "70")'
                      image_id="338"
                      image_key="70" alt="Ali-Matar-Construction-58" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_71" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-59.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "71")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "71")'
                      image_id="339"
                      image_key="71" alt="Ali-Matar-Construction-59" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_72" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-6.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "72")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "72")'
                      image_id="340"
                      image_key="72" alt="Ali-Matar-Construction-6" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_73" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-60.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "73")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "73")'
                      image_id="341"
                      image_key="73" alt="Ali-Matar-Construction-60" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_74" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-61.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "74")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "74")'
                      image_id="342"
                      image_key="74" alt="Ali-Matar-Construction-61" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_75" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-62.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "75")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "75")'
                      image_id="343"
                      image_key="75" alt="Ali-Matar-Construction-62" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_76" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:60px; margin-left: -1px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-63.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "76")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "76")'
                      image_id="344"
                      image_key="76" alt="Ali-Matar-Construction-63" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_77" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-64.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "77")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "77")'
                      image_id="345"
                      image_key="77" alt="Ali-Matar-Construction-64" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_78" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-65.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "78")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "78")'
                      image_id="346"
                      image_key="78" alt="Ali-Matar-Construction-65" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_79" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-66.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "79")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "79")'
                      image_id="347"
                      image_key="79" alt="Ali-Matar-Construction-66" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_80" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-67.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "80")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "80")'
                      image_id="348"
                      image_key="80" alt="Ali-Matar-Construction-67" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_81" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-68.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "81")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "81")'
                      image_id="349"
                      image_key="81" alt="Ali-Matar-Construction-68" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_82" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-69.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "82")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "82")'
                      image_id="350"
                      image_key="82" alt="Ali-Matar-Construction-69" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_83" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-7.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "83")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "83")'
                      image_id="351"
                      image_key="83" alt="Ali-Matar-Construction-7" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_84" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-70.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "84")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "84")'
                      image_id="352"
                      image_key="84" alt="Ali-Matar-Construction-70" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_85" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-71.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "85")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "85")'
                      image_id="353"
                      image_key="85" alt="Ali-Matar-Construction-71" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_86" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-72.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "86")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "86")'
                      image_id="354"
                      image_key="86" alt="Ali-Matar-Construction-72" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_87" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-73.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "87")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "87")'
                      image_id="355"
                      image_key="87" alt="Ali-Matar-Construction-73" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_88" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-74.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "88")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "88")'
                      image_id="356"
                      image_key="88" alt="Ali-Matar-Construction-74" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_89" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-75.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "89")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "89")'
                      image_id="357"
                      image_key="89" alt="Ali-Matar-Construction-75" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_90" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:94.637223974763px; margin-left: -1px; margin-top: -17.318611987382px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-76.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "90")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "90")'
                      image_id="358"
                      image_key="90" alt="Ali-Matar-Construction-76" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_91" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:125px; height:60px; margin-left: -33.5px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-77.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "91")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "91")'
                      image_id="359"
                      image_key="91" alt="Ali-Matar-Construction-77" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_92" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-78.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "92")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "92")'
                      image_id="360"
                      image_key="92" alt="Ali-Matar-Construction-78" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_93" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-79.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "93")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "93")'
                      image_id="361"
                      image_key="93" alt="Ali-Matar-Construction-79" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_94" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-8.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "94")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "94")'
                      image_id="362"
                      image_key="94" alt="Ali-Matar-Construction-8" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_95" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-80.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "95")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "95")'
                      image_id="363"
                      image_key="95" alt="Ali-Matar-Construction-80" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_96" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-81.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "96")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "96")'
                      image_id="364"
                      image_key="96" alt="Ali-Matar-Construction-81" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_97" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-82.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "97")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "97")'
                      image_id="365"
                      image_key="97" alt="Ali-Matar-Construction-82" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_98" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-83.jpg?bwg=1695326405"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "98")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "98")'
                      image_id="366"
                      image_key="98" alt="Ali-Matar-Construction-83" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_99" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-84.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "99")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "99")'
                      image_id="367"
                      image_key="99" alt="Ali-Matar-Construction-84" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_100" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-85.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "100")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "100")'
                      image_id="368"
                      image_key="100" alt="Ali-Matar-Construction-85" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_101" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:100.6711409396px; height:60px; margin-left: -21.335570469799px; margin-top: 3.5527136788005E-15px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-86.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "101")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "101")'
                      image_id="369"
                      image_key="101" alt="Ali-Matar-Construction-86" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_102" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:75px; margin-left: -1px; margin-top: -7.5px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-87.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "102")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "102")'
                      image_id="370"
                      image_key="102" alt="Ali-Matar-Construction-87" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_103" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:60px; margin-left: -1px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-88.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "103")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "103")'
                      image_id="371"
                      image_key="103" alt="Ali-Matar-Construction-88" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_104" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-89.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "104")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "104")'
                      image_id="372"
                      image_key="104" alt="Ali-Matar-Construction-89" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_105" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80.428954423592px; margin-left: -1px; margin-top: -10.214477211796px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-9.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "105")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "105")'
                      image_id="373"
                      image_key="105" alt="Ali-Matar-Construction-9" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_106" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:60.362173038229px; margin-left: -1px; margin-top: -0.18108651911469px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-90.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "106")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "106")'
                      image_id="374"
                      image_key="106" alt="Ali-Matar-Construction-90" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_107" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-91.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "107")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "107")'
                      image_id="375"
                      image_key="107" alt="Ali-Matar-Construction-91" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_108" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-92.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "108")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "108")'
                      image_id="376"
                      image_key="108" alt="Ali-Matar-Construction-92" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_109" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-93.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "109")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "109")'
                      image_id="377"
                      image_key="109" alt="Ali-Matar-Construction-93" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_110" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-94.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "110")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "110")'
                      image_id="378"
                      image_key="110" alt="Ali-Matar-Construction-94" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_111" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-95.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "111")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "111")'
                      image_id="379"
                      image_key="111" alt="Ali-Matar-Construction-95" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_112" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:84.985835694051px; height:60px; margin-left: -13.492917847025px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-96.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "112")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "112")'
                      image_id="380"
                      image_key="112" alt="Ali-Matar-Construction-96" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_113" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-97.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "113")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "113")'
                      image_id="381"
                      image_key="113" alt="Ali-Matar-Construction-97" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_114" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:106.7615658363px; height:60px; margin-left: -24.380782918149px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-98.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "114")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "114")'
                      image_id="382"
                      image_key="114" alt="Ali-Matar-Construction-98" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_115" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/Ali-Matar-Construction-99.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "115")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "115")'
                      image_id="383"
                      image_key="115" alt="Ali-Matar-Construction-99" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_116" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-1.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "116")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "116")'
                      image_id="384"
                      image_key="116" alt="ZAliMatar-1" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_117" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-10.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "117")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "117")'
                      image_id="385"
                      image_key="117" alt="ZAliMatar-10" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_118" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-11.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "118")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "118")'
                      image_id="386"
                      image_key="118" alt="ZAliMatar-11" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_119" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-12.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "119")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "119")'
                      image_id="387"
                      image_key="119" alt="ZAliMatar-12" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_120" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-13.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "120")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "120")'
                      image_id="388"
                      image_key="120" alt="ZAliMatar-13" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_121" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-14.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "121")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "121")'
                      image_id="389"
                      image_key="121" alt="ZAliMatar-14" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_122" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-15.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "122")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "122")'
                      image_id="390"
                      image_key="122" alt="ZAliMatar-15" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_123" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-16.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "123")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "123")'
                      image_id="391"
                      image_key="123" alt="ZAliMatar-16" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_124" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-17.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "124")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "124")'
                      image_id="392"
                      image_key="124" alt="ZAliMatar-17" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_125" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-18.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "125")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "125")'
                      image_id="393"
                      image_key="125" alt="ZAliMatar-18" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_126" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-19.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "126")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "126")'
                      image_id="394"
                      image_key="126" alt="ZAliMatar-19" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_127" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-2.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "127")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "127")'
                      image_id="395"
                      image_key="127" alt="ZAliMatar-2" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_128" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-20.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "128")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "128")'
                      image_id="396"
                      image_key="128" alt="ZAliMatar-20" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_129" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:133.33333333333px; margin-left: -1px; margin-top: -36.666666666667px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-21.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "129")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "129")'
                      image_id="397"
                      image_key="129" alt="ZAliMatar-21" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_130" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-22.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "130")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "130")'
                      image_id="398"
                      image_key="130" alt="ZAliMatar-22" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_131" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-23.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "131")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "131")'
                      image_id="399"
                      image_key="131" alt="ZAliMatar-23" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_132" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-24.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "132")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "132")'
                      image_id="400"
                      image_key="132" alt="ZAliMatar-24" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_133" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-25.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "133")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "133")'
                      image_id="401"
                      image_key="133" alt="ZAliMatar-25" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_134" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-26.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "134")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "134")'
                      image_id="402"
                      image_key="134" alt="ZAliMatar-26" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_135" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-27.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "135")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "135")'
                      image_id="403"
                      image_key="135" alt="ZAliMatar-27" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_136" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-28.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "136")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "136")'
                      image_id="404"
                      image_key="136" alt="ZAliMatar-28" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_137" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:80px; margin-left: -1px; margin-top: -10px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-3.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "137")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "137")'
                      image_id="405"
                      image_key="137" alt="ZAliMatar-3" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_138" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-4.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "138")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "138")'
                      image_id="406"
                      image_key="138" alt="ZAliMatar-4" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_139" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:80px; height:60px; margin-left: -11px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-5.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "139")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "139")'
                      image_id="407"
                      image_key="139" alt="ZAliMatar-5" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_140" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-6.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "140")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "140")'
                      image_id="408"
                      image_key="140" alt="ZAliMatar-6" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_141" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:60px; margin-left: -1px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-7.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "141")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "141")'
                      image_id="409"
                      image_key="141" alt="ZAliMatar-7" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_142" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:60px; height:106.7615658363px; margin-left: -1px; margin-top: -23.380782918149px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-8.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "142")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "142")'
                      image_id="410"
                      image_key="142" alt="ZAliMatar-8" />
                  </div>
                </div>
                              <div id="bwg_filmstrip_thumbnail_143" class="bwg_filmstrip_thumbnail bwg_thumb_deactive">
                  <div class="bwg_filmstrip_thumbnail_img_wrap">
                    <img                       style="width:133.33333333333px; height:60px; margin-left: -37.666666666667px; margin-top: 0px;"                       class="bwg_filmstrip_thumbnail_img bwg-hidden"
                      data-url="/wp-content/uploads/photo-gallery/thumb/ZAliMatar-9.jpg?bwg=1695326406"
                      src=""
                      onclick='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "143")' ontouchend='bwg_change_image(parseInt(jQuery("#bwg_current_image_key").val()), "143")'
                      image_id="411"
                      image_key="143" alt="ZAliMatar-9" />
                  </div>
                </div>
                          </div>
          </div>
          <div class="bwg_filmstrip_right"><i class="bwg-icon-angle-right-sm"></i></div>
        </div>
              <div id="bwg_image_container" class="bwg_image_container" data-action="/wp-admin/admin-ajax.php?action=GalleryBox&#038;image_id=270&#038;gallery_id=2&#038;tag=0&#038;theme_id=1&#038;shortcode_id=6">
            <div class="bwg-loading bwg-hidden"></div>
            <div class="bwg_btn_container ">
        <div class="bwg_ctrl_btn_container">
					            <i title="Play" class="bwg-icon-play bwg_ctrl_btn bwg_play_pause"></i>
                        <i title="Fullscreen" class="bwg-icon-arrows-out bwg_ctrl_btn bwg_fullscreen"></i>
                        <i title="Show info" class="bwg-icon-info-circle bwg_ctrl_btn bwg_info"></i>
                          <a rel="noopener noreferrer" id="bwg_facebook_a" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.alimatarconstruction.com%2Fbwg_share%2Fimage%2F%3Fgallery_id%3D2%26image_id%3D270%26curr_url%3D%2Fproject%2Fprojectsgallery%2F" target="_blank" title="Share on Facebook">
                <i title="Share on Facebook" class="bwg-icon-facebook-square bwg_ctrl_btn bwg_facebook"></i>
              </a>
                            <a rel="noopener noreferrer" id="bwg_twitter_a" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.alimatarconstruction.com%2Fbwg_share%2Fimage%2F%3Fgallery_id%3D2%26image_id%3D270%26curr_url%3D%2Fproject%2Fprojectsgallery%2F" target="_blank" title="Share on Twitter">
                <i title="Share on Twitter" class="bwg-icon-twitter-square bwg_ctrl_btn bwg_twitter"></i>
              </a>
                        </div>
          <div class="bwg_toggle_container">
            <i class="bwg_toggle_btn bwg-icon-caret-down"></i>
          </div>
                </div>
        <div class="bwg_image_info_container1">
          <div class="bwg_image_info_container2">
            <span class="bwg_image_info_spun">
              <div class="bwg_image_info" >
                <div class="bwg_image_title">Ali-Matar-Construction-101</div>
                <div class="bwg_image_description"></div>
              </div>
            </span>
          </div>
        </div>
        <div class="bwg_image_hit_container1">
          <div class="bwg_image_hit_container2">
            <span class="bwg_image_hit_spun">
              <div class="bwg_image_hit">
                <div class="bwg_image_hits">Hits: <span>1</span></div>
              </div>
            </span>
          </div>
        </div>
        <input id="rate_ajax_task" name="ajax_task" type="hidden" value="" />
        <input id="rate_image_id" name="image_id" type="hidden" value="270" />
                <div class="bwg_slide_container">
          <div class="bwg_slide_bg">
            <div class="bwg_slider">
                        <span class="bwg_popup_image_spun" id="bwg_popup_image" image_id="270">
                <span class="bwg_popup_image_spun1" style="display: table;">
                  <span class="bwg_popup_image_spun2" style="display: table-cell; ">
                                            <img class="bwg_popup_image bwg_popup_watermark"
                             src="/wp-content/uploads/photo-gallery/Ali-Matar-Construction-101.jpg?bwg=1695326403"
                             alt="Ali-Matar-Construction-101"/>
                                          </span>
                </span>
              </span>
              <span class="bwg_popup_image_second_spun">
              </span>
              <input type="hidden" id="bwg_current_image_key" value="2" />
                          </div>
          </div>
        </div>
        <a id="spider_popup_left" ><span id="spider_popup_left-ico"><span><i class="bwg_prev_btn bwg-icon-angle-left"></i></span></span></a>
        <a id="spider_popup_right" ><span id="spider_popup_right-ico"><span><i class="bwg_next_btn bwg-icon-angle-right"></i></span></span></a>
      </div>
    </div>
        <a class="spider_popup_close" onclick="spider_destroypopup(1000); return false;" ontouchend="spider_destroypopup(1000); return false;"><span><i class="bwg-icon-times-sm bwg_close_btn"></i></span></a>
        <script>var gallery_box_data = JSON.parse('{"bwg":0,"bwg_current_key":2,"enable_loop":true,"ecommerceACtive":0,"enable_image_ecommerce":true,"lightbox_ctrl_btn_pos":"bottom","lightbox_info_pos":"bottom","lightbox_close_btn_top":-20,"lightbox_close_btn_right":-15,"popup_enable_rate":false,"popup_enable_zoom":false,"lightbox_filmstrip_thumb_border_width":"1","width_or_height":"width","preload_images":1,"preload_images_count":10,"bwg_image_effect":"fade","enable_image_filmstrip":true,"gallery_id":2,"site_url":"\/wp-content\/uploads\/photo-gallery","lightbox_comment_width":"350","watermark_width":90,"image_width":800,"image_height":500,"outerWidth_or_outerHeight":"outerWidth","left_or_top":"left","lightbox_comment_pos":"left","filmstrip_direction":"horizontal","image_filmstrip_width":60,"image_filmstrip_height":60,"lightbox_info_margin":"10px 10px -5px 10px","bwg_share_url":"https:\/\/www.alimatarconstruction.com\/bwg_share\/image\/?gallery_id=2&image_id&curr_url=\/project\/projectsgallery\/","bwg_share_image_url":"https%3A%2F%2Fwww.alimatarconstruction.com%2Fwp-content%2Fuploads%2Fphoto-gallery","slideshow_interval":2.5,"open_with_fullscreen":true,"open_with_autoplay":false,"event_stack":[],"bwg_playInterval":0,"data":[{"number":1,"id":"412","alt":"WhatsApp-Image-2023-09-07-at-19.20.25-Copy","description":"","image_width":960,"image_height":540,"pure_image_url":"\/WhatsApp-Image-2023-09-07-at-19.20.25-Copy.jpg","pure_thumb_url":"\/thumb\/WhatsApp-Image-2023-09-07-at-19.20.25-Copy.jpg","image_url":"\/WhatsApp-Image-2023-09-07-at-19.20.25-Copy.jpg?bwg=1697468508","thumb_url":"\/thumb\/WhatsApp-Image-2023-09-07-at-19.20.25-Copy.jpg?bwg=1697468508","date":"2023-10-16 15:00:38","comment_count":"0","filetype":"JPG","filename":"WhatsApp-Image-2023-09-07-at-19.20.25-Copy","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":2,"id":"269","alt":"Ali-Matar-Construction-100","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-100.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-100.jpg","image_url":"\/Ali-Matar-Construction-100.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-100.jpg?bwg=1695326403","date":"2023-09-21 19:57:47","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-100","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"63"},{"number":3,"id":"270","alt":"Ali-Matar-Construction-101","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-101.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-101.jpg","image_url":"\/Ali-Matar-Construction-101.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-101.jpg?bwg=1695326403","date":"2023-09-21 19:57:52","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-101","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"1"},{"number":4,"id":"271","alt":"Ali-Matar-Construction-102","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-102.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-102.jpg","image_url":"\/Ali-Matar-Construction-102.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-102.jpg?bwg=1695326403","date":"2023-09-21 19:57:49","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-102","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":5,"id":"273","alt":"Ali-Matar-Construction-104","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-104.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-104.jpg","image_url":"\/Ali-Matar-Construction-104.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-104.jpg?bwg=1695326403","date":"2023-09-21 19:57:51","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-104","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":6,"id":"275","alt":"Ali-Matar-Construction-106","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-106.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-106.jpg","image_url":"\/Ali-Matar-Construction-106.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-106.jpg?bwg=1695326403","date":"2023-09-21 19:57:55","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-106","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":7,"id":"274","alt":"Ali-Matar-Construction-105","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-105.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-105.jpg","image_url":"\/Ali-Matar-Construction-105.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-105.jpg?bwg=1695326403","date":"2023-09-21 19:57:51","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-105","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":8,"id":"276","alt":"Ali-Matar-Construction-107","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-107.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-107.jpg","image_url":"\/Ali-Matar-Construction-107.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-107.jpg?bwg=1695326403","date":"2023-09-21 19:58:01","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-107","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":9,"id":"277","alt":"Ali-Matar-Construction-108","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-108.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-108.jpg","image_url":"\/Ali-Matar-Construction-108.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-108.jpg?bwg=1695326403","date":"2023-09-21 19:57:54","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-108","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":10,"id":"278","alt":"Ali-Matar-Construction-109","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-109.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-109.jpg","image_url":"\/Ali-Matar-Construction-109.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-109.jpg?bwg=1695326403","date":"2023-09-21 19:57:56","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-109","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":11,"id":"279","alt":"Ali-Matar-Construction-11","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-11.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-11.jpg","image_url":"\/Ali-Matar-Construction-11.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-11.jpg?bwg=1695326403","date":"2023-09-21 19:54:37","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-11","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":12,"id":"280","alt":"Ali-Matar-Construction-110","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-110.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-110.jpg","image_url":"\/Ali-Matar-Construction-110.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-110.jpg?bwg=1695326403","date":"2023-09-21 19:57:57","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-110","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":13,"id":"281","alt":"Ali-Matar-Construction-111","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-111.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-111.jpg","image_url":"\/Ali-Matar-Construction-111.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-111.jpg?bwg=1695326403","date":"2023-09-21 19:57:59","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-111","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":14,"id":"282","alt":"Ali-Matar-Construction-112","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-112.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-112.jpg","image_url":"\/Ali-Matar-Construction-112.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-112.jpg?bwg=1695326403","date":"2023-09-21 19:58:00","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-112","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":15,"id":"283","alt":"Ali-Matar-Construction-113","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-113.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-113.jpg","image_url":"\/Ali-Matar-Construction-113.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-113.jpg?bwg=1695326403","date":"2023-09-21 19:58:02","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-113","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":16,"id":"284","alt":"Ali-Matar-Construction-114","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-114.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-114.jpg","image_url":"\/Ali-Matar-Construction-114.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-114.jpg?bwg=1695326403","date":"2023-09-21 19:58:01","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-114","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":17,"id":"285","alt":"Ali-Matar-Construction-115","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-115.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-115.jpg","image_url":"\/Ali-Matar-Construction-115.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-115.jpg?bwg=1695326403","date":"2023-09-21 19:58:06","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-115","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":18,"id":"286","alt":"Ali-Matar-Construction-116","description":"","image_width":896,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-116.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-116.jpg","image_url":"\/Ali-Matar-Construction-116.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-116.jpg?bwg=1695326403","date":"2023-09-21 19:58:05","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-116","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":19,"id":"287","alt":"Ali-Matar-Construction-117","description":"","image_width":1200,"image_height":896,"pure_image_url":"\/Ali-Matar-Construction-117.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-117.jpg","image_url":"\/Ali-Matar-Construction-117.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-117.jpg?bwg=1695326403","date":"2023-09-21 19:58:06","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-117","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":20,"id":"288","alt":"Ali-Matar-Construction-12","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-12.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-12.jpg","image_url":"\/Ali-Matar-Construction-12.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-12.jpg?bwg=1695326403","date":"2023-09-21 19:54:38","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-12","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":21,"id":"289","alt":"Ali-Matar-Construction-13","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-13.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-13.jpg","image_url":"\/Ali-Matar-Construction-13.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-13.jpg?bwg=1695326403","date":"2023-09-21 19:54:48","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-13","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":22,"id":"290","alt":"Ali-Matar-Construction-14","description":"","image_width":1152,"image_height":864,"pure_image_url":"\/Ali-Matar-Construction-14.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-14.jpg","image_url":"\/Ali-Matar-Construction-14.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-14.jpg?bwg=1695326403","date":"2023-09-21 19:54:47","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-14","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":23,"id":"291","alt":"Ali-Matar-Construction-15","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-15.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-15.jpg","image_url":"\/Ali-Matar-Construction-15.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-15.jpg?bwg=1695326403","date":"2023-09-21 19:54:54","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-15","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":24,"id":"292","alt":"Ali-Matar-Construction-16","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-16.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-16.jpg","image_url":"\/Ali-Matar-Construction-16.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-16.jpg?bwg=1695326403","date":"2023-09-21 19:54:54","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-16","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":25,"id":"293","alt":"Ali-Matar-Construction-17","description":"","image_width":750,"image_height":1000,"pure_image_url":"\/Ali-Matar-Construction-17.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-17.jpg","image_url":"\/Ali-Matar-Construction-17.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-17.jpg?bwg=1695326403","date":"2023-09-21 19:54:57","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-17","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":26,"id":"294","alt":"Ali-Matar-Construction-18","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-18.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-18.jpg","image_url":"\/Ali-Matar-Construction-18.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-18.jpg?bwg=1695326403","date":"2023-09-21 19:54:58","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-18","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":27,"id":"295","alt":"Ali-Matar-Construction-19","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-19.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-19.jpg","image_url":"\/Ali-Matar-Construction-19.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-19.jpg?bwg=1695326403","date":"2023-09-21 19:55:04","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-19","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":28,"id":"296","alt":"Ali-Matar-Construction-2","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-2.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-2.jpg","image_url":"\/Ali-Matar-Construction-2.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-2.jpg?bwg=1695326403","date":"2023-09-21 19:54:04","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-2","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":29,"id":"297","alt":"Ali-Matar-Construction-20","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-20.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-20.jpg","image_url":"\/Ali-Matar-Construction-20.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-20.jpg?bwg=1695326403","date":"2023-09-21 19:55:04","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-20","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":30,"id":"298","alt":"Ali-Matar-Construction-21","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-21.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-21.jpg","image_url":"\/Ali-Matar-Construction-21.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-21.jpg?bwg=1695326403","date":"2023-09-21 19:55:08","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-21","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"1"},{"number":31,"id":"299","alt":"Ali-Matar-Construction-22","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-22.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-22.jpg","image_url":"\/Ali-Matar-Construction-22.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-22.jpg?bwg=1695326403","date":"2023-09-21 19:55:09","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-22","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":32,"id":"300","alt":"Ali-Matar-Construction-23","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-23.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-23.jpg","image_url":"\/Ali-Matar-Construction-23.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-23.jpg?bwg=1695326403","date":"2023-09-21 19:55:14","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-23","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":33,"id":"301","alt":"Ali-Matar-Construction-24","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-24.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-24.jpg","image_url":"\/Ali-Matar-Construction-24.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-24.jpg?bwg=1695326403","date":"2023-09-21 19:55:15","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-24","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":34,"id":"302","alt":"Ali-Matar-Construction-25","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-25.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-25.jpg","image_url":"\/Ali-Matar-Construction-25.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-25.jpg?bwg=1695326403","date":"2023-09-21 19:55:18","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-25","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":35,"id":"303","alt":"Ali-Matar-Construction-26","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-26.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-26.jpg","image_url":"\/Ali-Matar-Construction-26.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-26.jpg?bwg=1695326403","date":"2023-09-21 19:55:25","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-26","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":36,"id":"304","alt":"Ali-Matar-Construction-27","description":"","image_width":562,"image_height":1000,"pure_image_url":"\/Ali-Matar-Construction-27.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-27.jpg","image_url":"\/Ali-Matar-Construction-27.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-27.jpg?bwg=1695326403","date":"2023-09-21 19:55:20","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-27","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":37,"id":"305","alt":"Ali-Matar-Construction-28","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-28.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-28.jpg","image_url":"\/Ali-Matar-Construction-28.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-28.jpg?bwg=1695326403","date":"2023-09-21 19:55:21","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-28","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":38,"id":"306","alt":"Ali-Matar-Construction-29","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-29.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-29.jpg","image_url":"\/Ali-Matar-Construction-29.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-29.jpg?bwg=1695326403","date":"2023-09-21 19:55:24","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-29","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":39,"id":"307","alt":"Ali-Matar-Construction-3","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-3.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-3.jpg","image_url":"\/Ali-Matar-Construction-3.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-3.jpg?bwg=1695326403","date":"2023-09-21 19:54:06","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-3","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":40,"id":"308","alt":"Ali-Matar-Construction-30","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-30.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-30.jpg","image_url":"\/Ali-Matar-Construction-30.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-30.jpg?bwg=1695326403","date":"2023-09-21 19:55:27","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-30","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":41,"id":"309","alt":"Ali-Matar-Construction-31","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-31.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-31.jpg","image_url":"\/Ali-Matar-Construction-31.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-31.jpg?bwg=1695326403","date":"2023-09-21 19:55:29","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-31","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":42,"id":"310","alt":"Ali-Matar-Construction-32","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-32.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-32.jpg","image_url":"\/Ali-Matar-Construction-32.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-32.jpg?bwg=1695326403","date":"2023-09-21 19:55:28","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-32","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":43,"id":"312","alt":"Ali-Matar-Construction-34","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-34.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-34.jpg","image_url":"\/Ali-Matar-Construction-34.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-34.jpg?bwg=1695326403","date":"2023-09-21 19:55:29","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-34","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":44,"id":"313","alt":"Ali-Matar-Construction-35","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-35.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-35.jpg","image_url":"\/Ali-Matar-Construction-35.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-35.jpg?bwg=1695326403","date":"2023-09-21 19:55:33","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-35","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":45,"id":"314","alt":"Ali-Matar-Construction-36","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-36.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-36.jpg","image_url":"\/Ali-Matar-Construction-36.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-36.jpg?bwg=1695326403","date":"2023-09-21 19:55:31","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-36","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":46,"id":"315","alt":"Ali-Matar-Construction-37","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-37.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-37.jpg","image_url":"\/Ali-Matar-Construction-37.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-37.jpg?bwg=1695326403","date":"2023-09-21 19:55:30","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-37","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":47,"id":"316","alt":"Ali-Matar-Construction-38","description":"","image_width":750,"image_height":1000,"pure_image_url":"\/Ali-Matar-Construction-38.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-38.jpg","image_url":"\/Ali-Matar-Construction-38.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-38.jpg?bwg=1695326403","date":"2023-09-21 19:55:32","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-38","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":48,"id":"317","alt":"Ali-Matar-Construction-39","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-39.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-39.jpg","image_url":"\/Ali-Matar-Construction-39.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-39.jpg?bwg=1695326405","date":"2023-09-21 19:55:36","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-39","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":49,"id":"267","alt":"Ali-Matar-Construction-1","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-1.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-1.jpg","image_url":"\/Ali-Matar-Construction-1.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-1.jpg?bwg=1695326403","date":"2023-09-21 19:54:03","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-1","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":50,"id":"318","alt":"Ali-Matar-Construction-4","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-4.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-4.jpg","image_url":"\/Ali-Matar-Construction-4.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-4.jpg?bwg=1695326405","date":"2023-09-21 19:54:13","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-4","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":51,"id":"268","alt":"Ali-Matar-Construction-10","description":"","image_width":896,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-10.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-10.jpg","image_url":"\/Ali-Matar-Construction-10.jpg?bwg=1695326403","thumb_url":"\/thumb\/Ali-Matar-Construction-10.jpg?bwg=1695326403","date":"2023-09-21 19:54:28","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-10","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":52,"id":"319","alt":"Ali-Matar-Construction-40","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-40.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-40.jpg","image_url":"\/Ali-Matar-Construction-40.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-40.jpg?bwg=1695326405","date":"2023-09-21 19:55:35","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-40","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":53,"id":"320","alt":"Ali-Matar-Construction-41","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-41.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-41.jpg","image_url":"\/Ali-Matar-Construction-41.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-41.jpg?bwg=1695326405","date":"2023-09-21 19:55:36","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-41","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":54,"id":"321","alt":"Ali-Matar-Construction-42","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-42.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-42.jpg","image_url":"\/Ali-Matar-Construction-42.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-42.jpg?bwg=1695326405","date":"2023-09-21 19:55:37","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-42","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":55,"id":"322","alt":"Ali-Matar-Construction-43","description":"","image_width":1200,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-43.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-43.jpg","image_url":"\/Ali-Matar-Construction-43.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-43.jpg?bwg=1695326405","date":"2023-09-21 19:55:39","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-43","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":56,"id":"323","alt":"Ali-Matar-Construction-44","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-44.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-44.jpg","image_url":"\/Ali-Matar-Construction-44.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-44.jpg?bwg=1695326405","date":"2023-09-21 19:55:38","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-44","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":57,"id":"324","alt":"Ali-Matar-Construction-45","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/Ali-Matar-Construction-45.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-45.jpg","image_url":"\/Ali-Matar-Construction-45.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-45.jpg?bwg=1695326405","date":"2023-09-21 19:55:40","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-45","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":58,"id":"325","alt":"Ali-Matar-Construction-46","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-46.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-46.jpg","image_url":"\/Ali-Matar-Construction-46.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-46.jpg?bwg=1695326405","date":"2023-09-21 19:55:46","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-46","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":59,"id":"326","alt":"Ali-Matar-Construction-47","description":"","image_width":750,"image_height":1000,"pure_image_url":"\/Ali-Matar-Construction-47.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-47.jpg","image_url":"\/Ali-Matar-Construction-47.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-47.jpg?bwg=1695326405","date":"2023-09-21 19:55:41","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-47","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":60,"id":"327","alt":"Ali-Matar-Construction-48","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-48.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-48.jpg","image_url":"\/Ali-Matar-Construction-48.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-48.jpg?bwg=1695326405","date":"2023-09-21 19:55:44","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-48","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":61,"id":"328","alt":"Ali-Matar-Construction-49","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-49.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-49.jpg","image_url":"\/Ali-Matar-Construction-49.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-49.jpg?bwg=1695326405","date":"2023-09-21 19:55:45","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-49","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":62,"id":"329","alt":"Ali-Matar-Construction-5","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-5.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-5.jpg","image_url":"\/Ali-Matar-Construction-5.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-5.jpg?bwg=1695326405","date":"2023-09-21 19:54:11","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-5","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":63,"id":"330","alt":"Ali-Matar-Construction-50","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-50.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-50.jpg","image_url":"\/Ali-Matar-Construction-50.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-50.jpg?bwg=1695326405","date":"2023-09-21 19:55:51","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-50","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":64,"id":"331","alt":"Ali-Matar-Construction-51","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-51.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-51.jpg","image_url":"\/Ali-Matar-Construction-51.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-51.jpg?bwg=1695326405","date":"2023-09-21 19:56:01","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-51","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":65,"id":"332","alt":"Ali-Matar-Construction-52","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-52.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-52.jpg","image_url":"\/Ali-Matar-Construction-52.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-52.jpg?bwg=1695326405","date":"2023-09-21 19:55:52","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-52","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":66,"id":"333","alt":"Ali-Matar-Construction-53","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-53.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-53.jpg","image_url":"\/Ali-Matar-Construction-53.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-53.jpg?bwg=1695326405","date":"2023-09-21 19:55:55","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-53","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":67,"id":"334","alt":"Ali-Matar-Construction-54","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-54.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-54.jpg","image_url":"\/Ali-Matar-Construction-54.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-54.jpg?bwg=1695326405","date":"2023-09-21 19:56:02","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-54","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":68,"id":"335","alt":"Ali-Matar-Construction-55","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-55.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-55.jpg","image_url":"\/Ali-Matar-Construction-55.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-55.jpg?bwg=1695326405","date":"2023-09-21 19:55:59","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-55","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":69,"id":"336","alt":"Ali-Matar-Construction-56","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-56.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-56.jpg","image_url":"\/Ali-Matar-Construction-56.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-56.jpg?bwg=1695326405","date":"2023-09-21 19:56:01","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-56","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":70,"id":"337","alt":"Ali-Matar-Construction-57","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-57.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-57.jpg","image_url":"\/Ali-Matar-Construction-57.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-57.jpg?bwg=1695326405","date":"2023-09-21 19:56:06","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-57","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":71,"id":"338","alt":"Ali-Matar-Construction-58","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-58.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-58.jpg","image_url":"\/Ali-Matar-Construction-58.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-58.jpg?bwg=1695326405","date":"2023-09-21 19:56:02","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-58","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":72,"id":"339","alt":"Ali-Matar-Construction-59","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-59.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-59.jpg","image_url":"\/Ali-Matar-Construction-59.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-59.jpg?bwg=1695326405","date":"2023-09-21 19:56:08","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-59","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":73,"id":"340","alt":"Ali-Matar-Construction-6","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-6.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-6.jpg","image_url":"\/Ali-Matar-Construction-6.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-6.jpg?bwg=1695326405","date":"2023-09-21 19:54:15","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-6","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":74,"id":"341","alt":"Ali-Matar-Construction-60","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-60.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-60.jpg","image_url":"\/Ali-Matar-Construction-60.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-60.jpg?bwg=1695326405","date":"2023-09-21 19:56:10","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-60","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":75,"id":"342","alt":"Ali-Matar-Construction-61","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-61.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-61.jpg","image_url":"\/Ali-Matar-Construction-61.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-61.jpg?bwg=1695326405","date":"2023-09-21 19:56:11","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-61","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":76,"id":"343","alt":"Ali-Matar-Construction-62","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-62.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-62.jpg","image_url":"\/Ali-Matar-Construction-62.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-62.jpg?bwg=1695326405","date":"2023-09-21 19:56:09","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-62","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":77,"id":"344","alt":"Ali-Matar-Construction-63","description":"","image_width":1200,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-63.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-63.jpg","image_url":"\/Ali-Matar-Construction-63.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-63.jpg?bwg=1695326405","date":"2023-09-21 19:56:13","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-63","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":78,"id":"345","alt":"Ali-Matar-Construction-64","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-64.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-64.jpg","image_url":"\/Ali-Matar-Construction-64.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-64.jpg?bwg=1695326405","date":"2023-09-21 19:56:12","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-64","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":79,"id":"346","alt":"Ali-Matar-Construction-65","description":"","image_width":541,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-65.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-65.jpg","image_url":"\/Ali-Matar-Construction-65.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-65.jpg?bwg=1695326405","date":"2023-09-21 19:56:20","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-65","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":80,"id":"347","alt":"Ali-Matar-Construction-66","description":"","image_width":1000,"image_height":750,"pure_image_url":"\/Ali-Matar-Construction-66.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-66.jpg","image_url":"\/Ali-Matar-Construction-66.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-66.jpg?bwg=1695326405","date":"2023-09-21 19:56:14","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-66","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":81,"id":"348","alt":"Ali-Matar-Construction-67","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-67.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-67.jpg","image_url":"\/Ali-Matar-Construction-67.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-67.jpg?bwg=1695326405","date":"2023-09-21 19:56:31","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-67","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":82,"id":"349","alt":"Ali-Matar-Construction-68","description":"","image_width":1200,"image_height":675,"pure_image_url":"\/Ali-Matar-Construction-68.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-68.jpg","image_url":"\/Ali-Matar-Construction-68.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-68.jpg?bwg=1695326405","date":"2023-09-21 19:56:39","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-68","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":83,"id":"350","alt":"Ali-Matar-Construction-69","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-69.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-69.jpg","image_url":"\/Ali-Matar-Construction-69.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-69.jpg?bwg=1695326405","date":"2023-09-21 19:56:37","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-69","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":84,"id":"351","alt":"Ali-Matar-Construction-7","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-7.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-7.jpg","image_url":"\/Ali-Matar-Construction-7.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-7.jpg?bwg=1695326405","date":"2023-09-21 19:54:24","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-7","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":85,"id":"352","alt":"Ali-Matar-Construction-70","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-70.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-70.jpg","image_url":"\/Ali-Matar-Construction-70.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-70.jpg?bwg=1695326405","date":"2023-09-21 19:56:41","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-70","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":86,"id":"353","alt":"Ali-Matar-Construction-71","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-71.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-71.jpg","image_url":"\/Ali-Matar-Construction-71.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-71.jpg?bwg=1695326405","date":"2023-09-21 19:56:42","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-71","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":87,"id":"354","alt":"Ali-Matar-Construction-72","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-72.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-72.jpg","image_url":"\/Ali-Matar-Construction-72.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-72.jpg?bwg=1695326405","date":"2023-09-21 19:56:45","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-72","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":88,"id":"355","alt":"Ali-Matar-Construction-73","description":"","image_width":1032,"image_height":774,"pure_image_url":"\/Ali-Matar-Construction-73.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-73.jpg","image_url":"\/Ali-Matar-Construction-73.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-73.jpg?bwg=1695326405","date":"2023-09-21 19:56:42","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-73","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":89,"id":"356","alt":"Ali-Matar-Construction-74","description":"","image_width":1032,"image_height":774,"pure_image_url":"\/Ali-Matar-Construction-74.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-74.jpg","image_url":"\/Ali-Matar-Construction-74.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-74.jpg?bwg=1695326405","date":"2023-09-21 19:56:43","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-74","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":90,"id":"357","alt":"Ali-Matar-Construction-75","description":"","image_width":1032,"image_height":774,"pure_image_url":"\/Ali-Matar-Construction-75.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-75.jpg","image_url":"\/Ali-Matar-Construction-75.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-75.jpg?bwg=1695326405","date":"2023-09-21 19:56:44","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-75","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":91,"id":"358","alt":"Ali-Matar-Construction-76","description":"Orientation: 1&lt;br \/&gt;","image_width":760,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-76.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-76.jpg","image_url":"\/Ali-Matar-Construction-76.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-76.jpg?bwg=1695326405","date":"2023-09-21 19:56:47","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-76","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":92,"id":"359","alt":"Ali-Matar-Construction-77","description":"Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":577,"pure_image_url":"\/Ali-Matar-Construction-77.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-77.jpg","image_url":"\/Ali-Matar-Construction-77.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-77.jpg?bwg=1695326405","date":"2023-09-21 19:56:52","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-77","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":93,"id":"360","alt":"Ali-Matar-Construction-78","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-78.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-78.jpg","image_url":"\/Ali-Matar-Construction-78.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-78.jpg?bwg=1695326405","date":"2023-09-21 19:56:46","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-78","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":94,"id":"361","alt":"Ali-Matar-Construction-79","description":"Aperture: 4&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-79.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-79.jpg","image_url":"\/Ali-Matar-Construction-79.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-79.jpg?bwg=1695326405","date":"2023-09-21 19:57:10","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-79","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":95,"id":"362","alt":"Ali-Matar-Construction-8","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-8.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-8.jpg","image_url":"\/Ali-Matar-Construction-8.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-8.jpg?bwg=1695326405","date":"2023-09-21 19:54:24","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-8","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":96,"id":"363","alt":"Ali-Matar-Construction-80","description":"Aperture: 5&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-80.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-80.jpg","image_url":"\/Ali-Matar-Construction-80.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-80.jpg?bwg=1695326405","date":"2023-09-21 19:57:11","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-80","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":97,"id":"364","alt":"Ali-Matar-Construction-81","description":"Aperture: 4&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-81.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-81.jpg","image_url":"\/Ali-Matar-Construction-81.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-81.jpg?bwg=1695326405","date":"2023-09-21 19:57:14","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-81","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":98,"id":"365","alt":"Ali-Matar-Construction-82","description":"Aperture: 4&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-82.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-82.jpg","image_url":"\/Ali-Matar-Construction-82.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-82.jpg?bwg=1695326405","date":"2023-09-21 19:57:44","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-82","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":99,"id":"366","alt":"Ali-Matar-Construction-83","description":"Aperture: 4&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-83.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-83.jpg","image_url":"\/Ali-Matar-Construction-83.jpg?bwg=1695326405","thumb_url":"\/thumb\/Ali-Matar-Construction-83.jpg?bwg=1695326405","date":"2023-09-21 19:57:49","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-83","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":100,"id":"367","alt":"Ali-Matar-Construction-84","description":"Aperture: 4&lt;br \/&gt;Camera: Canon PowerShot SX100 IS&lt;br \/&gt;Iso: 80&lt;br \/&gt;Orientation: 1&lt;br \/&gt;","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-84.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-84.jpg","image_url":"\/Ali-Matar-Construction-84.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-84.jpg?bwg=1695326406","date":"2023-09-21 19:58:25","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-84","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":101,"id":"368","alt":"Ali-Matar-Construction-85","description":"Orientation: 1&lt;br \/&gt;","image_width":480,"image_height":360,"pure_image_url":"\/Ali-Matar-Construction-85.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-85.jpg","image_url":"\/Ali-Matar-Construction-85.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-85.jpg?bwg=1695326406","date":"2023-09-21 19:57:13","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-85","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":102,"id":"369","alt":"Ali-Matar-Construction-86","description":"Copyright: steven elphick&lt;br \/&gt;","image_width":1200,"image_height":715,"pure_image_url":"\/Ali-Matar-Construction-86.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-86.jpg","image_url":"\/Ali-Matar-Construction-86.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-86.jpg?bwg=1695326406","date":"2023-09-21 19:57:38","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-86","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":103,"id":"370","alt":"Ali-Matar-Construction-87","description":"","image_width":864,"image_height":1081,"pure_image_url":"\/Ali-Matar-Construction-87.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-87.jpg","image_url":"\/Ali-Matar-Construction-87.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-87.jpg?bwg=1695326406","date":"2023-09-21 19:57:18","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-87","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":104,"id":"371","alt":"Ali-Matar-Construction-88","description":"","image_width":720,"image_height":720,"pure_image_url":"\/Ali-Matar-Construction-88.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-88.jpg","image_url":"\/Ali-Matar-Construction-88.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-88.jpg?bwg=1695326406","date":"2023-09-21 19:57:21","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-88","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":105,"id":"372","alt":"Ali-Matar-Construction-89","description":"","image_width":720,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-89.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-89.jpg","image_url":"\/Ali-Matar-Construction-89.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-89.jpg?bwg=1695326406","date":"2023-09-21 19:57:22","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-89","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":106,"id":"373","alt":"Ali-Matar-Construction-9","description":"","image_width":896,"image_height":1200,"pure_image_url":"\/Ali-Matar-Construction-9.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-9.jpg","image_url":"\/Ali-Matar-Construction-9.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-9.jpg?bwg=1695326406","date":"2023-09-21 19:54:27","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-9","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":107,"id":"374","alt":"Ali-Matar-Construction-90","description":"","image_width":720,"image_height":725,"pure_image_url":"\/Ali-Matar-Construction-90.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-90.jpg","image_url":"\/Ali-Matar-Construction-90.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-90.jpg?bwg=1695326406","date":"2023-09-21 19:57:25","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-90","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":108,"id":"375","alt":"Ali-Matar-Construction-91","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-91.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-91.jpg","image_url":"\/Ali-Matar-Construction-91.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-91.jpg?bwg=1695326406","date":"2023-09-21 19:57:32","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-91","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":109,"id":"376","alt":"Ali-Matar-Construction-92","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/Ali-Matar-Construction-92.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-92.jpg","image_url":"\/Ali-Matar-Construction-92.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-92.jpg?bwg=1695326406","date":"2023-09-21 19:57:38","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-92","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":110,"id":"377","alt":"Ali-Matar-Construction-93","description":"","image_width":1080,"image_height":810,"pure_image_url":"\/Ali-Matar-Construction-93.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-93.jpg","image_url":"\/Ali-Matar-Construction-93.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-93.jpg?bwg=1695326406","date":"2023-09-21 19:57:40","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-93","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":111,"id":"378","alt":"Ali-Matar-Construction-94","description":"","image_width":960,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-94.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-94.jpg","image_url":"\/Ali-Matar-Construction-94.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-94.jpg?bwg=1695326406","date":"2023-09-21 19:57:39","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-94","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":112,"id":"379","alt":"Ali-Matar-Construction-95","description":"","image_width":960,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-95.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-95.jpg","image_url":"\/Ali-Matar-Construction-95.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-95.jpg?bwg=1695326406","date":"2023-09-21 19:57:41","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-95","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":113,"id":"380","alt":"Ali-Matar-Construction-96","description":"","image_width":1080,"image_height":763,"pure_image_url":"\/Ali-Matar-Construction-96.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-96.jpg","image_url":"\/Ali-Matar-Construction-96.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-96.jpg?bwg=1695326406","date":"2023-09-21 19:57:42","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-96","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":114,"id":"381","alt":"Ali-Matar-Construction-97","description":"","image_width":960,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-97.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-97.jpg","image_url":"\/Ali-Matar-Construction-97.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-97.jpg?bwg=1695326406","date":"2023-09-21 19:57:43","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-97","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":115,"id":"382","alt":"Ali-Matar-Construction-98","description":"","image_width":960,"image_height":540,"pure_image_url":"\/Ali-Matar-Construction-98.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-98.jpg","image_url":"\/Ali-Matar-Construction-98.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-98.jpg?bwg=1695326406","date":"2023-09-21 19:57:45","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-98","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":116,"id":"383","alt":"Ali-Matar-Construction-99","description":"","image_width":1032,"image_height":774,"pure_image_url":"\/Ali-Matar-Construction-99.jpg","pure_thumb_url":"\/thumb\/Ali-Matar-Construction-99.jpg","image_url":"\/Ali-Matar-Construction-99.jpg?bwg=1695326406","thumb_url":"\/thumb\/Ali-Matar-Construction-99.jpg?bwg=1695326406","date":"2023-09-21 19:57:45","comment_count":"0","filetype":"jpg","filename":"Ali-Matar-Construction-99","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":117,"id":"384","alt":"ZAliMatar-1","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-1.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-1.jpg","image_url":"\/ZAliMatar-1.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-1.jpg?bwg=1695326406","date":"2023-09-21 19:58:11","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-1","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":118,"id":"385","alt":"ZAliMatar-10","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-10.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-10.jpg","image_url":"\/ZAliMatar-10.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-10.jpg?bwg=1695326406","date":"2023-09-21 19:58:30","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-10","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":119,"id":"386","alt":"ZAliMatar-11","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-11.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-11.jpg","image_url":"\/ZAliMatar-11.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-11.jpg?bwg=1695326406","date":"2023-09-21 19:58:36","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-11","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":120,"id":"387","alt":"ZAliMatar-12","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-12.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-12.jpg","image_url":"\/ZAliMatar-12.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-12.jpg?bwg=1695326406","date":"2023-09-21 19:58:35","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-12","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":121,"id":"388","alt":"ZAliMatar-13","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-13.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-13.jpg","image_url":"\/ZAliMatar-13.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-13.jpg?bwg=1695326406","date":"2023-09-21 19:58:36","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-13","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":122,"id":"389","alt":"ZAliMatar-14","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-14.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-14.jpg","image_url":"\/ZAliMatar-14.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-14.jpg?bwg=1695326406","date":"2023-09-21 19:58:36","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-14","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":123,"id":"390","alt":"ZAliMatar-15","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-15.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-15.jpg","image_url":"\/ZAliMatar-15.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-15.jpg?bwg=1695326406","date":"2023-09-21 19:58:35","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-15","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":124,"id":"391","alt":"ZAliMatar-16","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-16.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-16.jpg","image_url":"\/ZAliMatar-16.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-16.jpg?bwg=1695326406","date":"2023-09-21 19:58:40","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-16","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":125,"id":"392","alt":"ZAliMatar-17","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-17.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-17.jpg","image_url":"\/ZAliMatar-17.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-17.jpg?bwg=1695326406","date":"2023-09-21 19:58:41","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-17","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":126,"id":"393","alt":"ZAliMatar-18","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/ZAliMatar-18.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-18.jpg","image_url":"\/ZAliMatar-18.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-18.jpg?bwg=1695326406","date":"2023-09-21 19:58:42","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-18","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":127,"id":"394","alt":"ZAliMatar-19","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/ZAliMatar-19.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-19.jpg","image_url":"\/ZAliMatar-19.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-19.jpg?bwg=1695326406","date":"2023-09-21 19:58:43","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-19","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":128,"id":"395","alt":"ZAliMatar-2","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-2.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-2.jpg","image_url":"\/ZAliMatar-2.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-2.jpg?bwg=1695326406","date":"2023-09-21 19:58:11","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-2","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":129,"id":"396","alt":"ZAliMatar-20","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/ZAliMatar-20.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-20.jpg","image_url":"\/ZAliMatar-20.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-20.jpg?bwg=1695326406","date":"2023-09-21 19:58:40","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-20","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":130,"id":"397","alt":"ZAliMatar-21","description":"","image_width":540,"image_height":1200,"pure_image_url":"\/ZAliMatar-21.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-21.jpg","image_url":"\/ZAliMatar-21.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-21.jpg?bwg=1695326406","date":"2023-09-21 19:58:42","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-21","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":131,"id":"398","alt":"ZAliMatar-22","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/ZAliMatar-22.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-22.jpg","image_url":"\/ZAliMatar-22.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-22.jpg?bwg=1695326406","date":"2023-09-21 19:58:44","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-22","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":132,"id":"399","alt":"ZAliMatar-23","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/ZAliMatar-23.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-23.jpg","image_url":"\/ZAliMatar-23.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-23.jpg?bwg=1695326406","date":"2023-09-21 19:58:43","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-23","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":133,"id":"400","alt":"ZAliMatar-24","description":"","image_width":1200,"image_height":540,"pure_image_url":"\/ZAliMatar-24.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-24.jpg","image_url":"\/ZAliMatar-24.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-24.jpg?bwg=1695326406","date":"2023-09-21 19:58:44","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-24","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":134,"id":"401","alt":"ZAliMatar-25","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-25.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-25.jpg","image_url":"\/ZAliMatar-25.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-25.jpg?bwg=1695326406","date":"2023-09-21 19:58:51","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-25","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":135,"id":"402","alt":"ZAliMatar-26","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-26.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-26.jpg","image_url":"\/ZAliMatar-26.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-26.jpg?bwg=1695326406","date":"2023-09-21 19:58:49","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-26","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":136,"id":"403","alt":"ZAliMatar-27","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-27.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-27.jpg","image_url":"\/ZAliMatar-27.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-27.jpg?bwg=1695326406","date":"2023-09-21 19:58:50","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-27","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":137,"id":"404","alt":"ZAliMatar-28","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-28.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-28.jpg","image_url":"\/ZAliMatar-28.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-28.jpg?bwg=1695326406","date":"2023-09-21 19:58:49","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-28","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":138,"id":"405","alt":"ZAliMatar-3","description":"","image_width":900,"image_height":1200,"pure_image_url":"\/ZAliMatar-3.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-3.jpg","image_url":"\/ZAliMatar-3.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-3.jpg?bwg=1695326406","date":"2023-09-21 19:58:12","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-3","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":139,"id":"406","alt":"ZAliMatar-4","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-4.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-4.jpg","image_url":"\/ZAliMatar-4.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-4.jpg?bwg=1695326406","date":"2023-09-21 19:58:24","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-4","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":140,"id":"407","alt":"ZAliMatar-5","description":"","image_width":1200,"image_height":900,"pure_image_url":"\/ZAliMatar-5.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-5.jpg","image_url":"\/ZAliMatar-5.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-5.jpg?bwg=1695326406","date":"2023-09-21 19:58:28","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-5","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":141,"id":"408","alt":"ZAliMatar-6","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/ZAliMatar-6.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-6.jpg","image_url":"\/ZAliMatar-6.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-6.jpg?bwg=1695326406","date":"2023-09-21 19:58:22","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-6","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":142,"id":"409","alt":"ZAliMatar-7","description":"","image_width":1200,"image_height":1200,"pure_image_url":"\/ZAliMatar-7.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-7.jpg","image_url":"\/ZAliMatar-7.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-7.jpg?bwg=1695326406","date":"2023-09-21 19:58:30","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-7","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":143,"id":"410","alt":"ZAliMatar-8","description":"","image_width":675,"image_height":1200,"pure_image_url":"\/ZAliMatar-8.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-8.jpg","image_url":"\/ZAliMatar-8.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-8.jpg?bwg=1695326406","date":"2023-09-21 19:58:28","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-8","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"},{"number":144,"id":"411","alt":"ZAliMatar-9","description":"","image_width":1200,"image_height":541,"pure_image_url":"\/ZAliMatar-9.jpg","pure_thumb_url":"\/thumb\/ZAliMatar-9.jpg","image_url":"\/ZAliMatar-9.jpg?bwg=1695326406","thumb_url":"\/thumb\/ZAliMatar-9.jpg?bwg=1695326406","date":"2023-09-21 19:58:29","comment_count":"0","filetype":"jpg","filename":"ZAliMatar-9","avg_rating":"0","rate":0,"rate_count":"0","hit_count":"0"}],"is_pro":false,"enable_addthis":false,"addthis_profile_id":"","current_pos":124,"current_image_key":2,"slideshow_effect_duration":0.1,"current_image_id":270,"lightbox_rate_stars_count":"5","lightbox_rate_size":"20","lightbox_rate_icon":"star","bwg_ctrl_btn_container_height":40,"filmstrip_thumb_right_left_space":2,"all_images_right_left_space":288,"image_right_click":0,"open_comment":false,"open_ecommerce":false,"gdpr_compliance":false}');</script>
    