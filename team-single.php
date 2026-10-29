<?php
$pageTitle = 'Team Details';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/preloader.php';
include __DIR__ . '/partials/header.php';

$teamData = require __DIR__ . '/data/common-team.php';
$memberName = $_GET['name'] ?? array_key_first($teamData['members_detail']);
if (!isset($teamData['members_detail'][$memberName])) {
    $memberName = array_key_first($teamData['members_detail']);
}
$member = $teamData['members_detail'][$memberName];
?>
    <!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque"><?php echo htmlspecialchars($member['name'] ?? ''); ?></h1>
                        <nav class="wow fadeInUp" >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="team.php">Team</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($memberName); ?></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Team Single Start -->
    <div class="page-team-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Team Single Image Start -->
                        <div class="team-single-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo $member['image'] ?? ''; ?>" alt="">
                            </figure>
                        </div>
                        <!-- Team Single Image End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="team-single-content">
                        <!-- Team Member About Start -->
                        <div class="team-member-about">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">About me</h2>
                                <p class="wow fadeInUp"><?php echo htmlspecialchars($member['about'] ?? ''); ?></p>
                            </div>
                            <!-- Section Title End -->

                            <!-- About Item List Start -->
                            <div class="member-about-item-list">
                                <?php foreach ($member['about_items'] as $item): ?>
                                    <!-- About Item Start -->
                                    <div class="member-about-item wow fadeInUp">
                                        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                                        <p><?php echo htmlspecialchars($item['desc']); ?></p>
                                        <ul>
                                            <?php foreach ($item['list'] as $listItem): ?>
                                                <li><?php echo htmlspecialchars($listItem); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- About Item End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- About Item List End -->
                        </div>
                        <!-- Team Member About End -->

                        <!-- Team Member Education Start -->
                        <div class="team-member-education">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Education & qualifications</h2>
                                <p class="wow fadeInUp">With years of experience and deep medical knowledge, I specialize in providing accurate diagnosis, advanced treatment, and personalized care.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Member Education List Start -->
                            <div class="member-education-list">
                                <?php foreach ($member['education'] as $edu): ?>
                                    <!-- Member Education Item Start -->
                                    <div class="member-education-item wow fadeInUp">
                                        <div class="icon-box">
                                            <img src="images/icons/icon-member-education-1.svg" alt="">
                                        </div>
                                        <div class="member-education-item-content">
                                            <h3><?php echo htmlspecialchars($edu['title']); ?></h3>
                                            <p><?php echo htmlspecialchars($edu['desc']); ?></p>
                                        </div>
                                    </div>
                                    <!-- Member Education Item End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- Member Education List End -->
                        </div>
                        <!-- Team Member Education End -->

                        <!-- Team Member Expertise Start -->
                        <div class="team-member-expertise">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-3" data-cursor="-opaque">Areas of expertise</h2>
                                <p class="wow fadeInUp">With extensive experience in the medical field, I have developed strong clinical and diagnostic skills to provide accurate treatment and high-quality patient care.</p>
                            </div>
                            <!-- Section Title End -->

                             <!-- Member Skills List Start -->
                            <div class="member-skill-list">
                                <?php foreach ($member['skills'] as $skill): ?>
                                    <!-- Skills Progress Bar Start -->
                                    <div class="skills-progress-bar">
                                        <!-- Skill Item Start -->
                                        <div class="skillbar" data-percent="<?php echo $skill['percent']; ?>">
                                            <div class="skill-data">
                                                <div class="skill-title"><?php echo htmlspecialchars($skill['title']); ?></div>
                                                <div class="skill-no"><?php echo $skill['percent']; ?></div>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="count-bar"></div>
                                            </div>
                                        </div>
                                        <!-- Skill Item End -->
                                    </div>
                                    <!-- Skills Progress Bar End -->
                                <?php endforeach; ?>
                            </div>
                            <!-- Member Skills List End -->
                        </div>
                        <!-- Team Member Expertise End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Team Single End -->
<?php include __DIR__ . '/partials/footer.php'; ?>
