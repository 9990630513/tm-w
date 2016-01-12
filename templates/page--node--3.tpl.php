
<!-- Sign Up Section -->
<div class="container sign_up">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="prev_arrow" href="<?php global $base_url; /*print $base_url;*/ print $_SERVER["HTTP_REFERER"] ?>#front"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/prev_arrow.png" alt="Show"></a>
            <div class="support">
               <p class="how-works">How it works</p>
                <ul class="app-icons">
                    <li><a href="https://itunes.apple.com/in/app/trulymadly/id964395424?mt=8" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/apple_logo.png" /></a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.trulymadly.android.app&referrer=utm_source%3Dwebsite_new" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/android_logo.png" /></a></li>
                    <li><a href="http://windowsphone.com/s?appId=45a2c781-52c3-4f72-a16d-79210a16cc68" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/window_logo.png" /></a></li>
                </ul>
                <div id="signup" class="signup">
                    <div id="cap0" class="signup-round-box1" data-loc="1">
                        <p>SIGN UP FOR FREE</p>
                        <!-- <div class="signup-cont signup-cont1">1</div> -->
                    </div>

                    <div id="cap1" class="signup-round signup-round-box2" data-loc="2">
                        <p>WE POKE AROUND TILL WE KNOW ABOUT YOU.</p>
                        <div class="signup-cont signup-cont2">1</div>
                    </div>

                    <div id="cap2" class="signup-round signup-round-box3" data-loc="3">
                        <p>WE SNIFF OUT THE PERFECT ONES FOR YOU.</p>
                        <div class="signup-cont signup-cont3">2</div>
                    </div>

                    <div id="cap3" class="signup-round signup-round-box4" data-loc="4">
                        <p>YOU 'LIKE' OR 'HIDE' THE MATCHES WITHOUT<br> THEM KNOWING IT.</p>
                        <div class="signup-cont signup-cont4">3</div>
                    </div>

                    <div id="cap4" class="signup-round signup-round-box5" data-loc="5">
                        <p>AND IF THEY <br> ALSO LIKE YOU <br> BACK, YOU START <br> TALKING. YAY!</p>
                        <div class="signup-cont signup-cont5">4</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end  -->

<!-- footer menu -->
<!-- <div class="footer footer_left">
        <ul>
          <li><a href="#">LEGAL</a></li>
        </ul> 
    </div> -->
<div class="footer footer_right">
    <a href="https://www.facebook.com/trulymadly/"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/fb_icon.png" alt=""></a>
    <a href="https://twitter.com/thetrulymadly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/tw_icon.png" alt=""></a>
    <a href="https://www.instagram.com/thetrulymadly/"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/insta_icon.png" alt=""></a>
    <a href="https://www.youtube.com/user/trulymadlycom"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/yt_icon.png" alt=""></a>
</div>
<!-- end -->
</div>

<?php print render($page['footer']);?>