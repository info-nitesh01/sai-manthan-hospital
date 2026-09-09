<?php
$pageTitle = 'Page Not Found';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/preloader.php';
include __DIR__ . '/partials/header.php';
?>
<div class="page-header dark-section parallaxie">
    <div class="container">
        <div class="page-header-box">
            <h1>Page Not Found</h1>
            <nav><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">404</li></ol></nav>
        </div>
    </div>
</div>
<div class="error-page section-padding">
    <div class="container">
        <div class="error-page-content">
            <div class="section-title section-title-center">
                <span class="section-sub-title">404 Error</span>
                <h2>Sorry, we couldn't find that page.</h2>
                <p>The page you requested may have moved or no longer exists.</p>
            </div>
            <a href="index.php" class="btn-default btn-highlighted">Back to Home</a>
        </div>
    </div>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>

