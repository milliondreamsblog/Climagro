<?php
include("header.php");
include("navbar2.php");

?>


<!-- breadcrumb start -->
<section class="breadcrumb bg_img pos-rel" data-background="assest/img/bg/blog.png">
    <div class="container">
        <div class="breadcrumb__content">
            <h2 class="breadcrumb__title">Blogs</h2>
            <ul class="bread-crumb clearfix ul_li_center">
                <li class="breadcrumb-item"><a href="<?= site_url(); ?>">Home</a></li>
                <li class="breadcrumb-item">Blogs</li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- blog start -->
<section class="blog pt-130 pb-130">
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-lg-8 mt-30">
                <div class="blog-post-wrap mt-none-30">
                    <?php
                    foreach ($blog as $list) { ?>
                        <article class="blog__item mt-30">
                            <a class="thumb" href="<?php echo base_url('blogs/' . $list->page_url); ?>"><img src="<?php echo base_url() . '/assest/uploadfile/blogimages/' . $list->page_image; ?>" alt=""></a>
                            <div class="blog__inner">
                                <ul class="blog__meta ul_li mb-30">
                                    <!-- <li><a href="#!"><i class="far fa-user"></i>Colin Scotland</a></li> -->
                                    <li><i class="far fa-clock"></i><?php echo date('M j, Y', strtotime($list->date)); ?></li>
                                    <!-- <li><a href="#!"><i class="far fa-comment"></i>(04) Comments</a></li> -->
                                </ul>
                                <h2 class="title border_effect"><a href="<?php echo base_url('blogs/' . $list->page_url); ?>"><?= $list->page_title; ?></a></h2>
                                <p><?php echo substr($list->tagline, 0, 350); ?> </p>
                                <a class="blog-btn" href="<?php echo base_url('blogs/' . $list->page_url); ?>">Read More</a>
                            </div>
                        </article>
                    <?php } ?>
                </div>
                <!-- <div class="pagination_wrap pt-50">
                            <ul>
                                <li><a href="#"><i class="far fa-long-arrow-left"></i></a></li>
                                <li><a href="#" class="current_page">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#"><i class="fal fa-ellipsis-h"></i></a></li>
                                <li><a href="#">08</a></li>
                                <li><a href="#"><i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div> -->
            </div>
            <div class="col-lg-4 mt-30">
                <div class="sidebar-area mt-none-30">
                    <div class="widget mt-30">
                        <h3 class="widget__title">Search</h3>
                        <form class="widget__search" action="#!">
                            <input type="text" placeholder="Search your keyword">
                            <button><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <!-- <div class="widget mt-30">
                        <h3 class="widget__title">Categories</h3>
                        <ul class="widget__category list-unstyled">
                            <li><a href="#!">Blockchain </a></li>
                            <li><a href="#!">Web Development </a></li>
                            <li><a href="#!">Cryptocurrency </a></li>
                            <li><a href="#!">Branding Design </a></li>
                            <li><a href="#!">Uncategorized </a></li>
                            <li><a href="#!">UI/UX Design </a></li>
                            <li><a href="#!">Email Marketing </a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="widget mt-30">
                        <h3 class="widget__title">Recent Posts</h3>
                        <div class="widget__post">
                            <div class="widget__post-item ul_li">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/img/blog/post_01.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <span class="post-date">July 25,2023</span>
                                    <h4 class="post-title border-effect-2"><a href="blog-single.html">We Advocate Swapping Screen Time</a></h4>
                                </div>
                            </div>
                            <div class="widget__post-item ul_li">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/img/blog/w_02.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <span class="post-date">March 20,2023</span>
                                    <h4 class="post-title border-effect-2"><a href="blog-single.html">Utilizing mobile technology in the field</a></h4>
                                </div>
                            </div>
                            <div class="widget__post-item ul_li">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="assets/img/blog/w_03.jpg" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <span class="post-date">July 18,2023</span>
                                    <h4 class="post-title border-effect-2"><a href="blog-single.html">Building intelligent transportation systems</a></h4>
                                </div>
                            </div>

                        </div>
                    </div> -->
                    <div class="widget mt-30">
                        <h3 class="widget__title">Follow Us</h3>
                        <ul class="widget__social ul_li">
                            <li><a href="<?php echo $getCompany->facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $getCompany->linkedin; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?php echo $getCompany->twitter; ?>"><i class="fab fa-twitter"></i></a></li>
                            <?php
                            $insta = $getCompany->insta;
                            if ($insta != "") {
                                echo '<li><a href="<?php echo $getCompany->insta;?>"><i class="fab fa-instagram"></i></a></li>';
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog end -->


<?php include("footer.php"); ?>