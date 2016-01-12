<?php
/**
 * Created by PhpStorm.
 * User: pp
 * Date: 02/12/15
 * Time: 2:56 PM
 */
?>
<div id="wrapper" class="about_bg">
    <!-- header Section -->
    <!-- end -->

    <!-- About Us Section -->
    <div class="container about_container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="introduction active"><a href="#introduction" data-toggle="tab"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/introduction_icon.png" alt=""></a>Introduction</li>
                    <li class="ourteam"><a href="#ourteam" data-toggle="tab"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/out_team_icon.png" alt=""></a>Our Team</li>
                    <li class="investors"><a href="#investors" data-toggle="tab"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/investors_icon.png" alt=""></a>Investors</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="introduction">
                        <h2>ABOUT US</h2>
                        <p>
                            Epic stories need epic beginnings. Not random introductions. No neighbourhood aunty finding you a girl who can cook or a boy who earns well. We are your virtual bestie who look to find someone who is in sync with you. We think of ourselves as those over-enthusiastic friends who always have someone great to introduce you to. And that is the power of inspiration drawn from a cheesy love song that got us started in the first place. </p>
                    </div>
                    <div class="tab-pane fade" id="ourteam">
                        <h2>OUR TEAM</h2>
                        <div class="ourteam_img" style="background-image:url(http://indiareputation.com/development/viru/tm/images/out_team_img.jpg);"></div>
                    </div>
                    <div class="tab-pane fade" id="investors">
                        <h2>investors</h2>
                        <div class="scroll">
                            <div id="scrollbar1">
                             <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                                <div class="viewport">
                                   <div class="overview">
                                        <p>
                                            <b>  Helion Venture Partners </b><br /><br />

                                            Founded in 2006, Helion venture has partnered with budding entrepreneurs through their journey

                                            in building world-class companies. Having associated with over sixty companies, Helion has

                                            invested in technology and technology-powered businesses such as eCommerce, Online services,

                                            Mobility, Enterprise Software and Outsourcing. <br /><br />

                                            <b>     Kae Capital</b><br /><br />

                                            Helping out early stage companies, Kae Capital looks for entrepreneurs who

                                            envision technology as a means to disrupt sectors such as Mobile, e-

                                            Commerce, Education, Healthcare, and so on. They believe technology holds

                                            the highest potential to shape lives in a new future and reach out to ideas that

                                            have potential to spark a new revolution. <br /><br />

                                            <b>  Deep Kalra   </b><br /><br />

                                            Deep is the Founder of India's leading online travel company, MakeMyTrip.com.  Deep steered

                                            MakeMyTrip as CEO since its inception in 2000, to a successful listing on NASDAQ in August

                                            2010. He is a founding member of “I am Gurgaon” - an NGO focused on improving the quality of

                                            life in Gurgaon. He is also closely involved with Udayan Care and GiveIndia. His interests include

                                            swimming, yoga, quizzing, adventure sports and of course, traveling.<br /><br />

                                            <b> Rajesh Magow   </b><br /><br />

                                            Rajesh is the Co-Founder and CEO-India of MakeMyTrip.com. He has over

                                            two decades of corporate financial and operating experience in the

                                            information technology and internet industries. He is a recipient several

                                            awards including the Bloomberg Award for the Best CFO in India. Within

                                            MakeMyTrip, he also mentors the senior management team and high-

                                            potentials.  His hobbies  include playing cricket and badminton. <br /><br />

                                            <b>Manish Vij  </b><br /><br />

                                            Founder & CEO of SVG (Smile Vun Group), Manish is a veteran of the digital media industry with

                                            over  12 years of experience in the internet domain. His entrepreneurial ventures include: Quasar,

                                            SVG Media, SeventyNine and Letsbuy.com. He is one of the youngest dotcom entrepreneurs in

                                            India and has represented the Indian digital industry in various domestic and international industry

                                            forums.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
</div>
    <!-- end  -->

<?php print render($page['footer']);?>