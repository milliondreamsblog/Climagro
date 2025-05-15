</main>
<!-- main area end  -->

<!-- footer strt -->

<footer class="footer z-1 pos-rel" style="background: var(--primary-color)">

    <div class="container pt-65">
        <div class="xb-footer">
            <div class="xb-contact_info ul_li_between pb-50">
                        <div class="contact-method">

                    <?= anchor(base_url(), img(array('src' => 'assest/uploadfile/' . $getCompany->comp_logo, 'title' => $getCompany->comp_name, 'alt' => $getCompany->comp_name, 'style' => 'max-width: 150px;'))) ?>


                </div>
                <div>
                    <div class="contact-method">
                    <span><img src="assest/img/footer/footer-msg-icon.png" alt=""></span>
                    <?php echo $getCompany->comp_email; ?>
                </div>
                <div class="contact-method">
                    <span><img src="assest/img/footer/footer-call-icon.png" alt=""></span><?php echo $getCompany->comp_mobile; ?>
                    
                </div>
                </div>
                        
                 <div class="contact-method" style="width: 400px;">
                    <span style="margin-left:20px"><img src="assest/img/footer/footer-loc-icon.png" alt=""></span>
                    <?php echo $getCompany->comp_address; ?>
                </div> 
            </div>
            <div class="xb-footer-widget ul_li_between">
                <ul class="xb-item--footer_nav ul_li">

                    <li>
                        <?php echo anchor(base_url(), 'Home'); ?>
                    </li>
                    <li>
                        <?php echo anchor('about-us', 'About Us'); ?>
                       
                    </li>
                    <li>
                        <?php echo anchor('solutions', 'Offerings'); ?>
                    </li>
                    <li>
                        <?php echo anchor('blog', 'Blogs'); ?>
                    </li>

                    <li>
                        <?php echo anchor('contact-us', 'Contact Us'); ?>
                    </li>
                </ul>
                <div class="xb-item--footer_eamil">
                    <span><img src="assest/img/footer/sms-tracking.png" alt=""></span>
                    <input type="email" placeholder="Enter your email">
                    <button>Subscribe</button>
                </div>
            </div>
            <div class="footer-copyright ul_li_between pt-40 pb-40">
            Startup India Certificate Number - DIPP129220 
                <ul class="footer-link ul_li">
                    <li><a href="<?php echo $getCompany->facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?php echo $getCompany->linkedin;?>"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="<?php echo $getCompany->twitter;?>"><i class="fab fa-twitter"></i></a></li>
                    <?php 
                    $insta = $getCompany->insta;
                        if($insta != ""){
                            echo '<li><a href="<?php echo $getCompany->insta;?>"><i class="fab fa-instagram"></i></a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>



</footer>
<!-- footer end -->

</div>

<!-- jquery include -->
<script src="<?php echo base_url('assest/js/jquery-3.7.1.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/swiper.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/wow.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/appear.js');?>"></script>
<script src="<?php echo base_url('assest/js/odometer.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/jquery.magnific-popup.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/easing.min.js');?>"></script>
<script src="<?php echo base_url('assest/js/scrollspy.js');?>"></script>
<script src="<?php echo base_url('assest/js/countdown.js');?>"></script>
<script src="<?php echo base_url('assest/js/parallax-scroll.js');?>"></script>
<script src="<?php echo base_url('assest/js/main.js');?>"></script>

</body>

</html>