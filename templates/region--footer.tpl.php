
<!-- footer testimonials -->
<div class="footer_testimonials">
    <ul class="nav nav-tabs" style="margin-bottom:0px;">
        <li class="active toogle_tabs" id="footer_testi" title="Show">
            <a href="#home">What’s New <img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/toggle_btn_up.png" id="testi_arrow"></a>
        </li>
        <li class="toogle_tabs" id="footer_testi" title="Show">
            <a href="#menu1" > Testimonials <img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/toggle_btn_up.png" id="testi_arrow1"></a>
        </li>
    </ul>

    <div class="tab-content slideTogglebox" style="display:none;">
        <div id="home" class="tab-pane fade in active">
            <div class="slider1">
                <?php
                $youtube = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
                $i = 0;
                foreach($youtube as $video):
                    if(empty($video->field_show_this_video_on['und'][0]['value'] && $i = 7)) {
                        $title = text_summary($video->title, $format = NULL, $size = 40);
                        $you_url = $video->field_youtube_url['und'][0]['value'];
                        $likes = $video->field_likes['und'][0]['value'];
                        $views = $video->field_views['und'][0]['value']; ?>
                        <!--- slide 1 -->
                        <div class="slide">
                            <div class="footer_testi_video_thumb">
                                <img class="footer_video_thumb<?php echo $i; ?>"
                                     src="http://img.youtube.com/vi/<?php echo $you_url; ?>/0.jpg"
                                     style="cursor:pointer;"/>

                                <p><?php echo $title . '...'; ?></p>

                                <div class="testi_like">
                                    <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/like_icon.png" alt="like">
                                    </a><?php echo $likes; ?> <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/review_icon.png"
                                                                               alt="review"></a> <?php echo $views; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                endforeach; ?>
            </div>

        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="slider2">
                <?php
                $testimonials = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
                $i = 8;
                foreach($testimonials as $testimonial):
                    if(!empty($testimonial->field_show_this_video_on['und'][0]['value'])) {
                        $testi_title = text_summary($testimonial->title, $format = NULL, $size = 40);
                        $testi_you_url = $testimonial->field_youtube_url['und'][0]['value'];
                        $testi_likes = $testimonial->field_likes['und'][0]['value'];
                        $testi_views = $testimonial->field_views['und'][0]['value']; ?>
                        <!--- slide 1 -->
                        <div class="slide">
                            <div class="footer_testi_video_thumb">
                                <img class="footer_video_thumb<?php echo $i; ?>"
                                     src="http://img.youtube.com/vi/<?php echo $testi_you_url; ?>/0.jpg"
                                     style="cursor:pointer;"/>

                                <p><?php echo $testi_title . '...'; ?></p>

                                <div class="testi_like">
                                    <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/like_icon.png" alt="like">
                                    </a><?php echo $testi_likes; ?> <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/review_icon.png"
                                                                                     alt="review"></a> <?php echo $testi_views; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
<?php
$youtube = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
$i = 0;
foreach($youtube as $video):
    $title = text_summary($video->title, $format = NULL, $size = 50);
    $you_url = $video->field_youtube_url['und'][0]['value'];
    $likes = $video->field_likes['und'][0]['value'];
    $views = $video->field_views['und'][0]['value']; ?>
    <div class="thevideo" id="thevideo<?php echo $i; ?>"style="display:none;">
        <a href="#" class="videoclose">X</a>
        <iframe class="clearmySound" width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $you_url; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php
    $i++;
endforeach; ?>
<!-- include javascript -->
<style>
    .loader_div {
        width:100%;
        height: 100%;
        background-color: #fff;
        position:absolute;
        z-index:99999;
        top:0px;
    }

    .circle-loader {
        position: absolute;
        top: 50%;
        left: 50%;
        width:80px;
        height:80px;
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        background-color: #e6e9ee;
        border-radius: 50%;
        overflow: hidden;
        -webkit-transition: all 0.3s cubic-bezier(0.74, 0.35, 0, 0.99);
        transition: all 0.3s cubic-bezier(0.74, 0.35, 0, 0.99);
        opacity: 1;
    }
    .circle-loader.hidden {
        -webkit-transform: translate(-50%, -50%) scale(0);
        transform: translate(-50%, -50%) scale(0);
        opacity: 0;
    }
    .circle-loader:before {
        position: absolute;
        background-color: white;
        width: 90%;
        height: 90%;
        content: "";
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        border-radius: 50%;
        z-index: 2;
    }
    .circle-loader div {
        z-index: 1;
        width: 50%;
        height: 50%;
        position: absolute;
        left: 50%;
        top: 0;
        -webkit-transform-origin: bottom left;
        transform-origin: bottom left;
        overflow: hidden;
    }
    .circle-loader div:nth-of-type(1) {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    .circle-loader div:nth-of-type(2) {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .circle-loader div:nth-of-type(3) {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    .circle-loader div:nth-of-type(4) {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }
    .circle-loader div i {
        width: 142%;
        height: 142%;
        position: absolute;
        -webkit-transform-origin: bottom left;
        transform-origin: bottom left;
        background-color: #0397CD;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        bottom: 0;
        left: 0;
    }

</style>

<script type="text/javascript" src="<?php print $base_url;?>/sites/all/themes/tm/js/jquery.tinyscrollbar.js"></script>
<script>
   jQuery(document).ready(function($) {
       $('[data-toggle=tab]').click(function(){
         if ($(this).parent().hasClass('active')){
           $($(this).attr("href")).toggleClass('active');
            $('#scrollbar1').tinyscrollbar();
         }
       })

   $('[data-toggle=tab]').click(function(){
      $('#scrollbar1').addClass("active");
   });

    $('.videoclose').click(function(event) {
        var tmp = $(this).next().attr("src");
       $(this).next().attr('src','');
       $(this).next().attr('src',''+tmp+'');
       $(".thevideo").fadeOut();
    });

   });(jQuery);

</script>


<script>
    (function ($) {
        $('.slider1').bxSlider({
            slideWidth:400,
            minSlides:4,
            maxSlides:4,
            moveSlides:1,
            slideMargin:50,
            pager:false,
            startSlide:1,
            infiniteLoop:false,
            useCSS: false
        });
        $('.slider2').bxSlider({
            slideWidth:400,
            minSlides:4,
            maxSlides:4,
            moveSlides:1,
            slideMargin:50,
            pager:false,
            startSlide:0,
            infiniteLoop:false,
            useCSS: false
        });
        $('.bxslider').bxSlider({
            mode: 'fade',
            captions:true,
            auto:false
        });
        $('.bxslider2').bxSlider({
            captions:false,
            nextSelector:false,
            prevSelector:false,
            auto:false,
            pager:false
        });
    })(jQuery);
</script>