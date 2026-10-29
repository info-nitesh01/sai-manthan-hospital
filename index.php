<?php
$pageTitle = 'Sai Manthan Hospital Pratapgarh | 24/7 Multispecialty Care';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/preloader.php';
include __DIR__ . '/partials/header.php';
$hero = require __DIR__ . '/data/home-hero.php';
$about = require __DIR__ . '/data/common-about.php';
$services = require __DIR__ . '/data/home-services.php';
$why = require __DIR__ . '/data/home-why-choose-us.php';
$features = require __DIR__ . '/data/home-core-features.php';
$team = require __DIR__ . '/data/common-team.php';
$testimonials = require __DIR__ . '/data/home-testimonials.php';
$support = require __DIR__ . '/data/home-support.php';
$appointment = require __DIR__ . '/data/home-appointment.php';
?>
    <!-- Hero Section Start -->
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($hero['sub_title']); ?></span>
                            <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($hero['title']); ?></h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($hero['description']); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Content Body Start -->
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Hero Button Start -->
                            <div class="hero-btn">
                                <a href="<?php echo $hero['button_link']; ?>" class="btn-default btn-highlighted"><?php echo htmlspecialchars($hero['button_text']); ?></a>
                            </div>
                            <!-- Hero Button End -->

                            <!-- Hero Client Box Start -->
                            <div class="hero-client-box">
                                <!-- Satisfy Client Image Start -->
                                <div class="satisfy-client-images">
                                    <?php foreach ($hero['client_images'] as $img): ?>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $img; ?>" alt="">
                                            </figure>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Satisfy Client Image End -->

                                <!-- Hero Client Content Start -->
                                <div class="hero-client-content">
                                    <h2><span class="counter"><?php echo $siteData['home_rating']; ?></span>/5<i class="fa fa-solid fa-star"></i></h2>
                                    <p>More Than <?php echo $siteData['home_reviews']; ?> Reviews</p>
                                </div>
                                <!-- Hero Client Content End -->
                            </div>
                            <!-- Hero Client Box End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- About Us Image Box Start -->
                    <div class="about-us-image-box wow fadeInUp">
                        <!-- About Image Title Start -->
                        <div class="about-image-title">
                            <h2>Healthcare</h2>
                        </div>
                        <!-- About Image Title End -->

                        <!-- About Image Box 1 Start -->
                        <div class="about-image-box-1">
                            <!-- About Us Image Start -->
                            <div class="about-us-image">
                                <figure>
                                    <img src="images/backgrounds/about-us-image.jpg" alt="">
                                </figure>
                            </div>
                            <!-- About Us Image End -->
                            
                            <!-- About Review Box Start -->
                            <div class="about-review-box hero-client-box">
                                <!-- Satisfy Client Image Start -->
                                <div class="satisfy-client-images">
                                    <?php foreach ($about['client_images'] as $img): ?>
                                        <div class="satisfy-client-image">
                                            <figure class="image-anime">
                                                <img src="<?php echo $img; ?>" alt="">
                                            </figure>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- Satisfy Client Image End -->

                                <!-- Hero Client Content Start -->
                                <div class="hero-client-content">
                                    <h2><span class="counter"><?php echo $siteData['home_rating']; ?></span>/5<i class="fa fa-solid fa-star"></i></h2>
                                    <p>More Than <?php echo $siteData['home_reviews']; ?> Reviews</p>
                                </div>
                                <!-- Hero Client Content End -->
                            </div>
                            <!-- About Review Box End -->
                        </div>
                        <!-- About Image Box 1 End -->
                    </div>
                    <!-- About Us Image Box End -->
                </div>

                <div class="col-xl-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($about['sub_title']); ?></span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($about['title']); ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($about['description']); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Item List Start -->
                        <div class="about-us-item-list wow fadeInUp" data-wow-delay="0.4s">
                            <?php foreach ($about['items'] as $item): ?>
                                <!-- About Us Item Start -->
                                <div class="about-us-item">
                                    <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($item['desc']); ?></p>
                                </div>
                                <!-- About Us Item End -->
                            <?php endforeach; ?>
                        </div>
                        <!-- About Us Item List End -->

                        <!-- About Content Footer Start -->
                        <div class="about-content-footer wow fadeInUp" data-wow-delay="0.6s">
                            <!-- About Us Button Start -->
                            <div class="about-us-btn">
                                <a href="<?php echo $about['button_link']; ?>" class="btn-default"><?php echo htmlspecialchars($about['button_text']); ?></a>
                            </div>
                            <!-- About Us Button End -->

                            <!-- About Us Author Box Start -->
                            <div class="about-us-author-box">
                                <!-- About Author Image Start -->
                                <div class="about-us-author-image">
                                    <figure class="image-anime">
                                        <img src="<?php echo $about['author_image']; ?>" alt="">
                                    </figure>
                                </div>
                                <!-- About Author Image End -->

                                <!-- About Author Content Start -->
                                <div class="about-us-author-content">
                                    <h3><?php echo htmlspecialchars($about['author_name']); ?></h3>
                                    <p><?php echo htmlspecialchars($about['author_role']); ?></p>
                                </div>
                                <!-- About Author Content End -->
                            </div>
                            <!-- About Us Author Box End -->
                        </div>
                        <!-- About Content Footer End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Service Section Start -->
    <div class="our-service bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($services['sub_title']); ?></span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($services['title']); ?></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <?php foreach ($services['services'] as $svc): ?>
                    <div class="col-xl-3 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icons/<?php echo $svc['icon']; ?>" alt="">
                            </div>
                            <div class="service-item-body">
                                <div class="service-item-content">
                                    <h2><a href="<?php echo $svc['link']; ?>"><?php echo htmlspecialchars($svc['title']); ?></a></h2>
                                    <p><?php echo htmlspecialchars($svc['desc']); ?></p>
                                </div>
                                <div class="service-item-btn">
                                    <a href="<?php echo $svc['link']; ?>" class="readmore-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                <?php endforeach; ?>

                <div class="col-xl-3 col-md-6">
                    <!-- Service Cta Box Start -->
                    <div class="service-item service-cta-box wow fadeInUp">
                        <!-- Service Cta Box Title Start -->
                        <div class="service-cta-box-title">
                            <h3><?php echo htmlspecialchars($services['cta_title']); ?></h3>
                        </div>
                        <!-- Service Cta Box Title End -->

                        <!-- Service Cta Box Image Start -->
                        <div class="service-cta-box-image">
                            <figure>
                                <img src="<?php echo $services['cta_image']; ?>" alt="">
                            </figure>
                        </div>
                        <!-- Service Cta Box  Image End -->
                    </div>
                    <!-- Service Cta Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                        <p><?php echo htmlspecialchars($services['footer_text']); ?></p>
                        <ul>
                            <li class="section-footer-content">Trusted By <b><?php echo $siteData['trusted_patients']; ?>+</b> Patients</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li><span class="counter"><?php echo $siteData['home_rating']; ?></span>/5</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <!-- Why Choose Us Content Start -->
                    <div class="why-choose-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($why['sub_title']); ?></span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($why['title']); ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($why['description']); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Us Body Start -->
                        <div class="why-choose-us-body">
                            <!-- Why Choose Counter Box Start -->
                            <div class="why-choose-counter-box wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Why choose Counter Item List Start -->
                                <div class="why-choose-counter-item-list">
                                    <!-- Why choose Counter Item Start -->
                                    <div class="why-choose-counter-item">
                                        <h2><span class="counter"><?php echo $siteData['experience_years']; ?></span>+</h2>
                                        <p>Years Experience</p>
                                    </div>
                                    <!-- Why choose Counter Item End -->

                                    <!-- Why choose Counter Item Start -->
                                    <div class="why-choose-counter-item">
                                        <h2><span class="counter"><?php echo $siteData['emergency_hours']; ?></span>/7</h2>
                                        <p>Emergency Support</p>
                                    </div>
                                    <!-- Why choose Counter Item End -->
                                </div>
                                <!-- Why Choose Counter Item List End -->

                                <!-- Why Choose Counter Image Start -->
                                <div class="why-choose-counter-image">
                                    <figure class="image-anime">
                                        <img src="images/services/why-choose-counter-image.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Why Choose Counter Image End -->
                            </div>
                            <!-- Why Choose Counter Box End -->

                            <!-- Why Choose Body Image Start -->
                            <div class="why-choose-body-image">
                                <figure class="image-anime reveal">
                                    <img src="images/misc/why-choose-body-image.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose Body Image End -->
                        </div>
                        <!-- Why Choose Us Body End -->
                    </div>
                    <!-- Why Choose Us Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Why choose Us Image Box Start -->
                    <div class="why-choose-us-image-box wow fadeInUp">
                        <!-- Why Choose Experience Circle Start -->
                        <div class="years-experience-circle">
                            <figure>
                                <img src="images/brand/years-experience-circle-white.svg" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Experience Circle End -->

                        <!-- Why Choose Us Image Start -->
                        <div class="why-choose-us-image">
                            <figure>
                                <img src="images/services/why-choose-us-image.png" alt="">
                            </figure>
                        </div>
                        <!-- Why Choose Us Image End -->

                        <!-- Why Choose Cta Box Start -->
                        <div class="why-choose-cta-box">
                            <div class="icon-box">
                                <img src="images/icons/icon-why-choose-cta-box.svg" alt="">
                            </div>
                            <div class="why-choose-cta-content">
                                <h2><span class="counter"><?php echo $siteData['trusted_patients']; ?></span>+</h2>
                                <p>Satisfied Patients</p>
                            </div>
                        </div>
                        <!-- Why Choose Counter Box End -->
                    </div>
                    <!-- Why choose Us Image Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Core Features Section Start -->
    <div class="core-features bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <!-- Core Features Content Start -->
                    <div class="core-features-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($features['sub_title']); ?></span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($features['title']); ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($features['description']); ?></p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Core Features Content Button Start -->
                        <div class="core-features-content-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="<?php echo $features['button_link']; ?>" class="btn-default btn-highlighted"><?php echo htmlspecialchars($features['button_text']); ?></a>
                        </div>
                        <!-- Core Features Content Button End -->
                    </div>
                    <!-- Core Features Content End -->
                </div>

                <div class="col-xl-7">
                    <!-- Core Features Item List Start -->
                    <div class="core-features-item-list">
                        <?php $delay = 0; foreach ($features['features'] as $feat): ?>
                            <!-- Core Features Item Start -->
                            <div class="core-features-item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                <div class="icon-box">
                                    <img src="images/icons/icon-core-features-item-<?php echo ($delay === 0 ? 1 : (int)($delay / 0.2) + 1); ?>.svg" alt="">
                                </div>
                                <div class="core-features-item-content">
                                    <h3><?php echo htmlspecialchars($feat); ?></h3>
                                </div>
                            </div>
                            <!-- Core Features Item End -->
                            <?php $delay += 0.2; endforeach; ?>
                    </div>
                    <!-- Core Features Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Core Features Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($team['sub_title']); ?></span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($team['title']); ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $delay = 0; foreach (array_slice($team['members'], 0, 3) as $member): ?>
                    <div class="col-xl-4 col-md-6">
                        <!-- Team Item Start -->
                        <div class="team-item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <!-- Team Item Iamage Start -->
                            <div class="team-item-image">
                                <a href="team-single.php?name=<?php echo urlencode($member['name']); ?>" data-cursor-text="View">
                                    <figure>
                                        <img src="<?php echo $member['image']; ?>" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- Team Item Iamage End -->

                            <!-- Team Item Body Start -->
                            <div class="team-item-body">
                                <!-- Team Item Content Start -->
                                <div class="team-item-content">
                                    <h2><a href="team-single.php?name=<?php echo urlencode($member['name']); ?>"><?php echo htmlspecialchars($member['name']); ?></a></h2>
                                    <p><?php echo htmlspecialchars($member['role']); ?></p>
                                </div>
                                <!-- Team Item Content End -->
                            </div>
                            <!-- Team Item Body End -->
                        </div>
                        <!-- Team Item End -->
                    </div>
                <?php $delay += 0.2; endforeach; ?>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="images/people/author-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="images/icons/icon-phone-white.svg" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p>Helping You Move from Concern to Confidence with Expert Medical Care. - <a href="contact.php"> Contact Us Today!</a></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($testimonials['sub_title']); ?></span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($testimonials['title']); ?></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($testimonials['description']); ?></p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider wow fadeInUp">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <?php foreach ($testimonials['testimonials'] as $t): ?>
                                    <!-- Swiper Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <div class="testimonial-item-header">
                                                <div class="testimonial-item-quote">
                                                    <img src="images/brand/testimonial-quote.svg" alt="">
                                                </div>
                                                <div class="testimonial-item-content">
                                                    <p><?php echo htmlspecialchars($t['quote']); ?></p>
                                                </div>
                                            </div>
                                            <div class="testimonial-item-author">
                                                <div class="testimonial-author-image">
                                                    <figure class="image-anime">
                                                        <img src="<?php echo $t['image']; ?>" alt="">
                                                    </figure>
                                                </div>
                                                <div class="testimonial-author-content">
                                                    <h2><?php echo htmlspecialchars($t['author']); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Swiper Slide End -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Satisfy Client Images Start -->
                        <div class="satisfy-client-images">
                            <div class="satisfy-client-image">
                                <figure class="image-anime">
                                    <img src="images/people/author-1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image add-more">
                                <img src="images/icons/icon-phone-white.svg" alt="">
                            </div>
                        </div>
                        <!-- Satisfy Client Images End -->    
                        <p><?php echo $testimonials['footer_text']; ?></p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->

    <!-- Our Support Section Start -->
    <div class="our-support">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($support['sub_title']); ?></span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($support['title']); ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo htmlspecialchars($support['description']); ?></p>
                        </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Support Video Image Box Start -->
                    <div class="support-video-image-box wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Support CTA Box Start -->
                        <div class="support-cta-box">
                            <!-- Support CTA Header Start -->
                            <div class="support-cta-header">
                                <div class="icon-box">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="support-cta-title">
                                    <h3>Schedule a hours:</h3>
                                </div>
                            </div>
                            <!-- Support CTA Header End -->

                            <!-- Support CTA Body Start -->
                            <div class="support-cta-body">
                                <!-- Support CTA List Start -->
                                <div class="support-cta-list">
                                    <ul>
                                        <?php foreach ($support['hours'] as $hour): ?>
                                            <li><span><?php echo htmlspecialchars($hour['day']); ?></span><?php echo htmlspecialchars($hour['time']); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- Support CTA List End -->

                                <!-- Support CTA Button Start -->
                                <div class="support-cta-btn">
                                    <a href="<?php echo $support['button_link']; ?>" class="btn-default"><?php echo htmlspecialchars($support['button_text']); ?></a>
                                </div>
                                <!-- Support CTA Button End -->
                            </div>
                            <!-- Support CTA Body End -->
                        </div>
                        <!-- Support CTA Box End -->

                        <!-- Support Video Box Start -->
                        <div class="support-video-box">
                            <!-- Support Video Image Start -->
                            <div class="support-video-image">
                                <figure>
                                    <img src="images/misc/support-video-image.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Support Video Image End -->

                            <!-- Video Play Button Start -->
                            <div class="video-play-button">
                                <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                    <span class="bg-effect"><i class="fa-solid fa-play"></i></span>
                                </a>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Support Video Box End -->
                    </div>
                    <!-- Support Video Image Box End -->
                </div>

                <div class="col-lg-12">
                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                        <p><?php echo htmlspecialchars($support['footer_text']); ?></p>
                        <ul>
                            <li class="section-footer-content">Trusted By <b><?php echo $siteData['trusted_patients']; ?>+</b> Patients</li>
                            <li>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </li>
                            <li><span class="counter"><?php echo $siteData['home_rating']; ?></span>/5</li>
                        </ul>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Support Section End -->

    <!-- Book Appointment Section Start -->
    <div class="book-appointment bg-section dark-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <!-- Appointment Content Start -->
                    <div class="our-appointment-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($appointment['sub_title']); ?></span>
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($appointment['title']); ?></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Google Map Start -->
                        <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.2s">
                            <iframe src="<?php echo $siteData['map']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                        <!-- Google Map End -->
                    </div>
                    <!-- Appointment Content End -->
                </div>

                <div class="col-xl-6">
                    <!-- Appointment Form Start -->
                    <div class="appointment-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($appointment['form_title']); ?></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Appointment Form Start -->
                        <form id="appointmentForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <select name="service" class="form-control form-select" id="service" required>
                                        <option value="" disabled selected>Select Service</option>
                                        <option value="beginner_driving_course">Beginner Driving Course</option>
                                        <option value="license_test_preparation">License Test Preparation</option>
                                        <option value="automatic_car_driving">Automatic Car Driving</option>
                                        <option value="defensive_training">Defensive Training</option>
                                        <option value="refresher_driving_courses">Refresher Driving Courses</option>
                                        <option value="night_driving_lessons">Night Driving Lessons</option>
                                        <option value="highway_driving_sessions">Highway Driving Sessions</option>
                                        <option value="road_safety_workshops">Road Safety Workshops</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Write Message Here..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default btn-highlighted"><?php echo htmlspecialchars($appointment['button_text']); ?></button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                        <!-- Appointment Form End -->
                    </div>
                    <!-- Appointment Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Appointment Section End -->

<?php include __DIR__ . '/partials/footer.php'; ?>

