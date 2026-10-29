<!-- Our Fact Section Start -->
<div class="our-facts bg-section dark-section">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp"><?php echo htmlspecialchars($facts['sub_title']); ?></span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($facts['title']); ?></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <?php $delay = 0; foreach ($facts['items'] as $item): ?>
                <div class="col-xl-4 col-md-6">
                    <!-- Fact Item Start -->
                    <div class="fact-item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="fact-item-header">
                            <div class="fact-item-counter-content">
                                <h2><span class="counter"><?php echo $siteData[$item['site_key']]; ?></span><?php echo $item['suffix']; ?></h2>
                                <ul>
                                    <li><?php echo htmlspecialchars($item['label']); ?></li>
                                </ul>
                            </div>
                            <div class="icon-box">
                                <img src="images/icons/<?php echo $item['icon']; ?>" alt="">
                            </div>
                        </div>
                        <div class="fact-item-content">
                            <p><?php echo htmlspecialchars($item['desc']); ?></p>
                        </div>
                    </div>
                    <!-- Fact Item End -->
                </div>
                <?php $delay += 0.2; endforeach; ?>

            <div class="col-lg-12">
                <!-- Section Footer Text Start -->
                <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
                    <p><?php echo htmlspecialchars($facts['footer_text']); ?></p>
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
<!-- Our Fact Section End -->
