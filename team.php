<?php
$pageTitle = 'Our Team';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/preloader.php';
include __DIR__ . '/partials/header.php';
$team = require __DIR__ . '/data/common-team.php';
?>
<!-- Page Header Section Start -->
    <div class="page-header dark-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Our team</h1>
                        <nav class="wow fadeInUp" >
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Team Start -->
    <div class="page-team">
        <div class="container">
            <div class="row">
                <?php $delay = 0; foreach ($team['members'] as $member): ?>
                    <div class="col-xl-4 col-md-6">
                        <!-- Team Item Start -->
                        <div class="team-item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="team-item-image">
                                <a href="team-single.php?name=<?php echo urlencode($member['name']); ?>" data-cursor-text="View">
                                    <figure>
                                        <img src="<?php echo $member['image']; ?>" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="team-item-body">
                                <div class="team-item-content">
                                    <h2><a href="team-single.php?name=<?php echo urlencode($member['name']); ?>"><?php echo htmlspecialchars($member['name']); ?></a></h2>
                                    <p><?php echo htmlspecialchars($member['role']); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Team Item End -->
                    </div>
                    <?php $delay += 0.2; endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Page Team End -->

<?php include __DIR__ . '/partials/footer.php'; ?>



