<?php
include("header.php");
include("navbar2.php");

?>

<!-- breadcrumb start -->
<section class="breadcrumb bg_img pos-rel" data-background="assest/img/bg/offering.png">
    <div class="container">
        <div class="breadcrumb__content">
            <h2 class="breadcrumb__title">Solutions</h2>
            <ul class="bread-crumb clearfix ul_li_center">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                <li class="breadcrumb-item">Solutions</li>
            </ul>
        </div>
    </div>
</section>
<!-- breadcrumb end -->


<!-- about section start-->
<section class="about pos-rel bg-gradient-quartz-white pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-wrap pt-70 wow fadeInLeft" data-wow-duration=".7s">
                    <h2 class="xb-item--title" style="color:var(--primary-color)">Agriculture Risk Intelligence </h2>
                    <p class="xb-item--content " style="color: #353535;">
                        AgRI is a crop-location-specific risk estimator that uses AI and machine learning to analyze crop-climate interactions through historical data. Integrating diverse datasets. AgRI provides historical, short-, medium-, and long-term risk assessments. Whether you’re a financial institution seeking risk intelligence for crop loans and insurance or an agribusiness optimizing operational strategies, AgRI AI delivers the critical insights you need for informed decision-making. By utilizing advanced machine learning algorithms, the AgRI enables agricultural and allied sector businesses to anticipate potential risks, improve resource allocation, maximise opportunity and enhance the business resilience to climate change. 
                    </p>
                    <div class="header-btn ul_li pb-10">
                        <a class="login-btn" href="#consult-us">Request Demo</a>
                        <div class="header-bar-mobile side-menu d-lg-none">
                            <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/img/about/about-img.png" alt="">
            </div>
        </div>
        </div>
        
        <div>
            <video width="100%" loop muted autoplay>
    <source src="assest/video/offering-vid.mp4" type="video/mp4">
    <source src="assest/video/offering-vid.mp4" type="video/ogg">
</video>
        </div>
<div class="container">
        <div class="row">
            <!-- <div class="col-lg-6">
                <img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/img/about/about-img.png" alt="">
            </div> -->
            <div class="col-lg-12">
                <div class="about-wrap pt-70 wow fadeInLeft" data-wow-duration=".7s">
                    <h2 class="xb-item--title" style="color:var(--primary-color)">Climate Risk Data</h2>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6  mt-30">
                            <div class="cardBox">
                                <div class="card">
                                    <span><img src="assest/img/feature/climate-data.png" alt="Card image cap" ></span>
                                    <h2 class="text-sm">Climate Data Services</h2>
                                    <div class="content">
                                        <h3 class="text-white">Climate Data Services</h3>
                                        <p>Access detailed historical climate data, including variables such as temperature, precipitation, and wind across various spatial and temporal scales. Our processed climate data is transformed into impact-relevant metrics, enabling clients to estimate risks and understand potential climate impacts. We also obtain climate projection data for different scenarios and experiments to aid in future planning and risk assessment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6  mt-30">
                            <div class="cardBox">
                                <div class="card">
                                    <span><img src="assest/img/feature/Agri-data.png" alt="Card image cap"></span>
                                    <h2 class="text-sm">Agricultural Data Services</h2>
                                    <div class="content">
                                        <h3 class="text-white">Agricultural Data Services</h3>
                                        <p>Enhance agricultural planning and decision-making with historical and projected crop yield data. Access soil types and land use patterns to support sustainable practices, urban planning, environmental management, and resource allocation. Benefit from digitized crop management data for easy access and improved usability in planning and analysis. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6  mt-30">
                            <div class="cardBox">
                                <div class="card">
                                    <span><img src="assest/img/feature/Socio-demographic.png" alt="Card image cap"></span>
                                    <h2 class="text-sm">Socio-Demographic Data Services</h2>
                                    <div class="content">
                                        <h3 class="text-white">Socio-Demographic Data Services</h3>
                                        <p>We offer comprehensive information on various socio-economic indicators for policy formulation and social research. We provide access to future population projections across different spatial scales, assisting planners and policymakers in preparing for demographic changes. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- about section end-->


<div class="footer-contact sooter" id="consult-us">
    <!-- <div class="footer-bg bg_img" data-background="assest/img/footer/footer-bg.png"></div> -->
    <div class="container">
        <div class="xb-contact-form">
            <div class="row g-0 mt-none-30">
                <div class="col-lg-7 mt-30">
                    <div class="xb-inner">
                        <h5 class="xb-item--sub-title text-white"><span><img src="assest/img/footer/contact.svg" alt=""></span> Contact Us</h5>
                        <h2 class="xb-item--title text-white">Do you have questions or went more information?</h2>
                        <form class="xb-item--form" action="#!">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assest/img/footer/contact-user.svg" alt=""></span>
                                        <input type="text" placeholder="Steven Kevin">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assest/img/footer/contact-email.svg" alt=""></span>
                                        <input type="email" placeholder="example@cryco.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <span><img src="assest/img/footer/contact-call.svg" alt=""></span>
                                        <input type="text" placeholder="+91 081 0256 023">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xb-item--field">
                                        <!-- <span><img src="assest/img/footer/contact-call.svg" alt=""></span> -->
                                        <select style="height: 57px;padding: 8px;border-radius: 10px;">
                                            <option value="Climate Data">Climate Data</option>
                                            <option value="Agricultural Data">Agricultural Data</option>
                                            <option value="Socio-Demographic Data">Socio-Demographic Data</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 xb-item--text-msg">
                                    <span><img src="assest/img/footer/contact-massage.svg" alt=""></span>
                                    <textarea class="xb-item--massage" name="message" id="message" cols="30" rows="10" placeholder="Simultaneously we had a problem..."></textarea>
                                </div>
                                <div class="col-lg-12 xb-item--contact-btn">
                                    <button class="them-btn" type="submit">
                                        <span class="btn_label" data-text="Send Message">Send Message</span>
                                        <span class="btn_icon">
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mt-30">
                    <div class="footer-apps">
                        <div class="xb-item--holder">
                            <h2 class="xb-item--title text-white">Discover Future of Climate Risk Management </h2>
                            <p class="xb-item--content text-white">Unlock the power of advanced climate risk intelligence with a personalized demo! See firsthand how our cutting- edge solutions can help you navigate climate uncertainties. </p>
                            <h2 class="xb-item--title text-white">What You’ll Experience:</h2>
                            <ol>
                                <li>Climate-Induced Agricultural Risks  </li>
                                <li>
                                    Crop-Specific Vulnerability </li>
                                <li>Integration of Climate, Agricultural, and Management Data: </li>
                                <li>Localized Risk Estimation </li>
                                <li>Adaptation and Mitigation Strategies </li>
                                <li>Expert Guidance: Engage with our specialists who will answer your questions and show how our solutions can address your specific challenges. </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>