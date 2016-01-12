<?php global $base_url; ?>
<div class="container about_container awards_container">
    <div class="row">
        <h2><?php echo $node->title; ?></h2>
        <?php
        $awards = node_load_multiple(array(), array('type' => 'awards'));
        foreach($awards as $award):
            $img = file_create_url($award->field_award_image['und'][0]['uri']);
        ?>
        <div class="col-xs-6 col-sm-4 col-md-4">
            <img src="<?php echo $img; ?>" alt="">
        </div>
       <?php endforeach;?>
    </div>
</div>

<!-- <div class="footer footer_left">
    <ul>
        <li><a href="#">LEGAL</a></li>
    </ul>
</div> -->
<div class="footer footer_right">
    <a href="https://www.facebook.com/trulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/fb_icon.png" alt=""></a>
    <a href="https://twitter.com/thetrulymadly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/tw_icon.png" alt=""></a>
    <a href="https://www.instagram.com/thetrulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/insta_icon.png" alt=""></a>
    <a href="https://www.youtube.com/user/trulymadlycom" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/yt_icon.png" alt=""></a>
</div>
<!-- end -->
</div> <!-- add by me -->
<?php print render($page['footer']);?>