<?php
include("header.php");
include("navbar1.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Page</title>
    <?php include 'application/views/front/frontpagestyle.php'; ?>
</head>
<body>
    <!-- Your content -->
</body>
</html>

<style>
/* Slightly taller on mobile */
/* Industries Section Optimized Styles /
.industries-section {
width: 100%;
max-width: 100vw; / Ensure it doesn't exceed viewport width /
padding: 2rem 0;
box-sizing: border-box;
overflow-x: hidden;
margin: 0; / Remove any default margins /
text-align: center; / Center all text elements by default */
}
.industries-section h1,
.industries-section h2:not(.card-front h2) {
text-align: center;
color: #1f2937;
font-size: 2rem;
margin-bottom: 2.5rem;
font-weight: bold;
width: 100%; /* Ensure the header takes full width /
max-width: 100%; / Ensure no constraints limit the width */
}
/* Center the description paragraph */
.industries-section > p {
text-align: center;
max-width: 700px;
margin: 0 auto 2rem;
color: #4b5563;
margin-top: 4rem;
}
.industries-section {
  margin-top: 4rem; /* Or 2rem, depending on how much space you want */
}

.industries-section .card-grid {
display: flex;
flex-direction: column;
gap: 2rem;
width: 100%;
max-width: 1200px;
margin: 0 auto;
padding: 0 1rem; /* Small horizontal padding to prevent cards from touching edges on medium screens */
}
.industries-section .card-grid .row {
display: flex;
flex-wrap: wrap;
justify-content: center;
gap: 2rem;
width: 100%;
margin: 0; /* Remove any default margins */
}
.industries-section .card-grid .card-container {
width: 18rem;
height: 18rem;
perspective: 1000px;
margin: 0;
flex-shrink: 0; /* Prevent cards from shrinking */
}
.industries-section .card-grid .card-container:hover {
transform: scale(1.05);
transition: transform 0.3s ease-in-out;
}
.industries-section .card-grid .card-wrapper {
position: relative;
width: 100%;
height: 100%;
transition: transform 0.7s;
transform-style: preserve-3d;
}
.industries-section .card-grid .card-container:hover .card-wrapper {
transform: rotateY(180deg);
}
.industries-section .card-grid .card-front,
.industries-section .card-grid .card-back {
position: absolute;
width: 100%;
height: 100%;
backface-visibility: hidden;
border-radius: 0.75rem;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;
border: 1px solid #e5e7eb;
}
.industries-section .card-grid .card-container:hover .card-front,
.industries-section .card-grid .card-container:hover .card-back {
border: 3px solid #ef4444;
box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}
.industries-section .card-grid .card-front {
display: flex;
align-items: center;
justify-content: center;
background-size: cover;
background-position: center;
}
.industries-section .card-grid .card-front h2 {
color: white;
font-size: 1.5rem;
font-weight: bold;
text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
text-align: center;
padding: 1rem;
margin-bottom: 0; /* Override the margin for h2 inside card-front */
}
.industries-section .card-grid .card-back {
background: white;
transform: rotateY(180deg);
padding: 1.5rem;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}
.industries-section .card-grid .card-back h3 {
font-size: 1.25rem;
color: #1f2937;
margin-bottom: 1rem;
text-align: center;
}
.industries-section .card-grid .card-back p {
color: #4b5563;
text-align: center;
line-height: 1.5;
font-size: 0.95rem;
margin: 0; /* Remove default paragraph margins */
}
/* Text color classes */
.industries-section .text-white {
color: white !important;
}
.industries-section .text-Black,
.industries-section .text-Green {
color: #1f2937;
}
.industries-section .text-Green {
color: #10b981;
}
/* Improved responsive behavior */
@media (max-width: 1400px) {
.industries-section .card-grid {
max-width: 95%;
}
}
@media (max-width: 1200px) {
.industries-section .card-grid {
max-width: 90%;
}
.industries-section .card-grid .row {
gap: 1.5rem;
}
}
@media (max-width: 768px) {
.industries-section .card-grid .row {
flex-direction: column;
align-items: center;
gap: 1.5rem;
}
.industries-section .card-grid .card-container {
width: 100%;
max-width: 280px;
height: 320px;
}
}
/* Fix for potential overflow issues */
@media (max-width: 576px) {
.industries-section {
padding: 2rem 0.5rem;
margin-top: 4rem;
}
.industries-section .card-grid {
padding: 0 0.5rem;
}

}

.video-container {
    position: relative;
    height: 0;
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
    border-radius: 12px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    aspect-ratio: 16 / 9; /* Optional: modern browsers support this */
}

.video-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 600px;
    pointer-events: none;
    border-radius: 12px;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    aspect-ratio: 16 / 9; /* Keep it proportional */
}

/* Add a play button overlay as a fallback if autoplay doesn't work */
.video-container.with-overlay {
    cursor: pointer;
}

.video-container.with-overlay::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 50%;
    z-index: 2;
    transition: all 0.3s ease;
}

.video-container.with-overlay::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40%, -50%);
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    border-left: 30px solid var(--color-primary, #333);
    z-index: 3;
    transition: all 0.3s ease;
}

.video-container.with-overlay:hover::before {
    background-color: rgba(255, 255, 255, 0.9);
    width: 85px;
    height: 85px;
}

@media (max-width: 768px) {
    .video-container {
        padding-bottom: 75%; /* Slightly taller on mobile */
    }
    
    .video-container.with-overlay::before {
        width: 60px;
        height: 60px;
    }
    
    .video-container.with-overlay::after {
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 22px solid var(--color-primary, #333);
    }
}



</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add a class if we want to show the play button overlay initially
    // Uncomment the next line if you want to show the play button overlay
    // document.querySelector('.video-container').classList.add('with-overlay');
    
    // Function to handle click on video container if it has the overlay
    document.querySelector('.video-container').addEventListener('click', function() {
        if (this.classList.contains('with-overlay')) {
            // Get the iframe and update its src
            const iframe = this.querySelector('iframe');
            const src = iframe.src;
            
            // Remove any existing autoplay parameter and add it again
            if (src.includes('autoplay=0') || !src.includes('autoplay=')) {
                iframe.src = src.replace('autoplay=0', 'autoplay=1').replace('mute=0', 'mute=1');
                if (!src.includes('autoplay=')) {
                    iframe.src = iframe.src + '&autoplay=1&mute=1';
                }
            }
            
            // Remove the overlay
            this.classList.remove('with-overlay');
        }
    });
});
</script>

<!-- hero section start  -->
<section class="hero hero-two pos-rel pt-120 mb-160">
    <?php
    foreach ($sliderlist as $slider) { ?>
        <div class="hero-img" data-background="assest/img/bg/Bg2_croppng.png"></div>


        <div class="container pos-rel">
            <div class="hero__content-wrap hero-style-two text-center">
                <h2 class="title" style="color: #fff;;">We <span id="typed-text" style="color: var(--color-primary);"></span></h2>
                <div class="section-title hero--sec-titlt-two wow fadeInUp" data-wow-duration=".7s">

                    <h1 class="title text-white"><?php echo $slider->slide_title; ?></h1>
                </div>
                <p class="xb-item--content wow fadeInUp text-white" data-wow-duration=".7s" data-wow-delay="150ms"><?php echo $slider->content;
                                                                                                                    ?> </p>
                <div class="hero__btn btns pt-60 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms">
                    <a class="them-btn" href="<?php echo base_url('solutions').'#consult-us' ?>">
                        <span class="btn_label" data-text="Request Demo">Request Demo</span>
                        <span class="btn_icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="<?php echo base_url('solutions');?>" class="them-btn btn-transparent">
                        <span class="btn_label" data-text="Explore More">Explore More</span>
                        <span class="btn_icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="climate-section">
                <div class="container-video">
                    <div class="row align-items-center">
                        <!-- Video Column (Left Side) -->
                        <div class="col-lg-6">
                            <div class="video-container wow fadeInUp" data-wow-duration=".7s" data-wow-delay="350ms">
                                <iframe 
                                    src="https://www.youtube.com/embed/QbT29kVEjSw?si=ku83rM2VbOmTj81j&start=2&controls=1" 
                                    title="YouTube video player" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" 
                                    allowfullscreen
                                    autoplay>
                                </iframe>
                            </div>
                        </div>
            
            <!-- Content Column (Right Side) -->
            <div class="col-lg-6">
                <div class="climate-content wow fadeInUp" data-wow-duration=".7s" data-wow-delay="450ms">
                    <h4>At ClimAgro,</h4>
                    <h2> Digitizing Risk. </h2>
                    <h2> Designing Resilience.</h2>
                    <h2> Delivering Sustainability.</h2>
                    <p></p>
                    <br>

                    <a href="#" class="btn btn-primary">Request Demo</a>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>


<section class="partners z-1 pos-rel partners-two pt-100">
    <div class="section-title mt-100 pb-55 pt-55">
        <h1 class="title">Our top partners</h1>
    </div>

    <div class="partner-slider partner-slider-two ul_li">
        <div class="swiper-wrapper">

            <?php
            foreach ($servicelist as $client) {
            ?>
                <div class="swiper-slide" class="mx-3">
                    <div class="xb-item--partner-logo">
                        <img src="<?= base_url("assest/uploadfile/webimages/") . $client->services_image; ?>" alt="<?php echo $client->services_title; ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="feature z-1 pos-rel pt-110">
    <div class="container">
        <div class="section-title pb-55">
            <h1 class="title">What do we offer?</h1>
        </div>
        <div class="row mt-none-30">
            <?php
            foreach ($courselist as $list) { ?>
                <div class="col-xl-6 col-lg-6 col-md-6  mt-30">
                    <div class="xb-feature pos-rel">
                        <div class="xb-item--holder text-center bg-item-holder">
                            <h2 class="xb-item--title"><?= $list->page_title; ?></h2>
                            <p class="xb-item--content"><?php echo substr($list->page_content, 0, 350); ?>...</p>
                            <?php echo anchor('solutions', 'Read More', array('class'=>'f-right home-btn')); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- feature section end -->


<!-- Industries Section (Optimized) -->
<section class="industries-section">
  <h1 style="width: 100%; text-align: center; display: block;">INDUSTRIES COVERED</h1>
  <p style="text-align: center; max-width: 700px; margin: 0 auto 2rem; color: #4b5563;">
    We work with companies across a wide range of industries to build end-to-end climate resilience,
    from research and development to operations and supply chain.
  </p>
  <!-- Card Grid -->
  <div class="card-grid">
<!-- Row 1 -->
<div class="row">
  <!-- Card 1 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/18.png')">
        <h2>Banking and Financial Institutions</h2>
      </div>
      <div class="card-back">
        <h3 class="text-Black">Empowering Financial Decision-Making</h3>
        <p>ClimAgro equips institutions with yield predictions and risk insights for better loan and insurance decisions.</p>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/19.png')">
        <h2>Agribusiness</h2>
      </div>
      <div class="card-back">
         <h3 class="text-Green">Strategic Insights for Operational Excellence</h3>
        <p>Optimize your supply chain with pre-harvest insights, efficient logistics, and planning support.</p>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/20.png')">
        <h2>Supply Chain Industry</h2>
      </div>
      <div class="card-back">
        <h3 class="text-Green">Customized Solutions for Agricultural Excellence</h3>
        <p>Stay ahead with insights that help optimize logistics and planning, ensuring smooth supply chain operations.</p>
      </div>
    </div>
  </div>
</div>

<!-- Row 2 -->
<div class="row">
  <!-- Card 4 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/21.png')">
        <h2>Governments</h2>
      </div>
      <div class="card-back">
        <h3 class="text-Green">Informed Policy and Planning</h3>
        <p>Transform agricultural governance with data-driven insights that aid in strategic planning and risk mitigation.</p>
      </div>
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/Seed.png')">
        <h2>Seed Industries</h2>
      </div>
      <div class="card-back">
        <h3 class="text-Green">Innovative Seed Development</h3>
        <p>Support seed development with climate-smart insights for planting windows and yield predictions.</p>
      </div>
    </div>
  </div>

  <!-- Card 6 -->
  <div class="card-container">
    <div class="card-wrapper">
      <div class="card-front" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assest/img/feature/Corporate.png')">
        <h2>Corporate</h2>
      </div>
      <div class="card-back">
        <h3 class="text-Green">Strategic ESG Integration</h3>
        <p>Help corporates integrate sustainability and resilience into strategic business operations and ESG goals.</p>
      </div>
    </div>
  </div>
</div>
  </div>
</section>
<!-- testimonial section end-->

<section class="feature z-1 pos-rel pt-110">
    
   <div class="container">
       <div class="section-title pb-55">
            <h1 class="title">Resources</h1>
        </div>
        <div class="row">
            <div class="col-lg-4">
               <a href="<?php echo base_url().'blogs' ?>"><img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/uploadfile/img/Blog.png" alt=""></a>
            </div>
            <div class="col-lg-4">
               <a href="#<?php //echo base_url().'news' ?>"> <img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/uploadfile/img/News.png" alt=""></a>
            </div> 
            <div class="col-lg-4">
                <a href="#<?php //echo base_url().'articles' ?>"><img class="wow fadeInRight w-100" data-wow-duration=".7s" data-wow-delay="200ms" src="assest/uploadfile/img/Articles.png" alt=""></a>
            </div> 
        </div>
   </div>
</section>


<!-- faq start -->
<section class="faq pos-rel mt-130 pb-5">

    <div class="container">
        <div class="section-title pb-55">
            <h1 class="title">Frequently Asked Questions</h1>
        </div>
        <div class="faq__blockchain-two">
            <ul class="accordion_box clearfix">
                <?php
                $i = 1; // Initialize $i
                foreach ($faq as $faq) {
                ?>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <?php echo $faq->work_title; ?>
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <?php echo $faq->testimonial; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php
                    $i++; // Increment $i after each iteration
                }
                ?>
            </ul>
        </div>
    </div>
</section>

<!-- faq end -->



<div class="footer-contact sooter" data-background="assest/img/footer/footer-bg.png" style="background-size: cover; padding: 200px 0 0 0;">
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