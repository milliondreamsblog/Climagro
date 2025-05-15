<?php
include("header.php");
include("navbar2.php");

?>

<!-- breadcrumb start -->
<section class="breadcrumb bg_img pos-rel" data-background="assest/img/bg/about-header.png">
    <div class="container">
        <div class="breadcrumb__content">
            <h2 class="breadcrumb__title">About Us</h2>
            <ul class="bread-crumb clearfix ul_li_center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- about section start-->
<section class="about pos-rel bg-gradient-quartz-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-wrap pt-100 wow fadeInLeft" data-wow-duration=".7s">
                    <h2 class="xb-item--title pb-0" style="color:var(--primary-color)">ClimAgro Analytics  </h2>
                    <h3 class="pb-4 pt-3">Maximizing by Minimizing Losses</h3>
                    <p class="xb-item--content">
                        ClimAgro Analytics is a data-driven risk intelligence startup specializing in transforming raw climate, agricultural, and socio-demographic data into actionable insights as per IPCC AR5 framework. Our expertise lies in providing climate risk projections and tailored datasets at various spatial and temporal scales.  Our focus is on delivering crop-specific yield predictions and climate risk projections to businesses, helping them effectively manage their climate risks.
                    </p>
                    <h4 style="color:var(--primary-color)">Our Mission</h4>
                    <p class="xb-item--content xb-item--content1">
                        To monitor, digitize and manage every farm
                    </p>
                    <h4 style="color:var(--primary-color)">Our Vission</h4>
                    <p class="xb-item--content xb-item--content1">
                        To foster agricultural system by achieving higher yield with minimum input cost through informed decision making
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/img/about/about-img.png" alt="">
            </div>
        </div>
        
    </div>

</section>
<!-- about section end-->




<!-- team section start -->
<section class="team pt-140 pb-80">
    <div class="container">
        <div class="section-title pb-35">
            <h1 class="title">Meet our team member</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row xb-team-right">
                    <?php foreach ($teamlist as $team) { ?>
                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="xb-team text-center">
                                <div class="xb-item--img pos-rel">
                                    <img src="<?= base_url() ?>assest/uploadfile/webimages/<?php echo $team->image; ?>" alt="">
                                </div>
                                <div class="xb-item--holder" style="padding: 0 30px;">
                                    <a class="xb-item--link" href="<?php echo $team->linkdine; ?>"  target="blank"><i class="fab fa-linkedin-in"></i></a>
                                    <h2 class="xb-item--title" style="color:#000;"><?php echo $team->name; ?></h2>
                                    <span class="xb-item--sub-title"><?php echo $team->designation; ?></span><br>
                                    <span class="xb-item--sub-title">
                                        <?php echo $team->content; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team pt-140 pb-80">
    <div class="container">
        <div class="section-title pb-35">
            <h1 class="title">our Mentor</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row xb-team-right">
                    <?php foreach ($aluminilist as $alumini) { ?>
                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="xb-team text-center">
                                <div class="xb-item--img pos-rel">
                                    <img src="<?= base_url() ?>assest/uploadfile/webimages/<?php echo $alumini->image; ?>" alt="">
                                </div>
                                <div class="xb-item--holder" style="padding: 0 30px;">
                                    <a class="xb-item--link" href="<?php echo $alumini->linkdine; ?>" target="blank"><i class="fab fa-linkedin-in"></i></a>
                                    <h2 class="xb-item--title" style="color:#000;"><?php echo $alumini->name; ?></h2>
                                    <span class="xb-item--sub-title"><?php echo $alumini->designation; ?></span><br>
                                    <span class="xb-item--sub-title">
                                        <?php echo $alumini->content; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team section end -->





<?php include("footer.php"); ?>