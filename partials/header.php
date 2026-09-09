<?php $currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'); ?>
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.svg" alt="Logo">
                </a>

                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item<?php echo $currentPage === 'index.php' ? ' active' : ''; ?>"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item<?php echo $currentPage === 'about.php' ? ' active' : ''; ?>"><a class="nav-link" href="about.php">About Us</a></li>
                            <li class="nav-item<?php echo $currentPage === 'services.php' ? ' active' : ''; ?>"><a class="nav-link" href="services.php">Services</a></li>
                            <li class="nav-item<?php echo $currentPage === 'contact.php' ? ' active' : ''; ?>"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            <li class="nav-item<?php echo $currentPage === 'team.php' ? ' active' : ''; ?>"><a class="nav-link" href="team.php">Our Team</a></li>
                            <li class="nav-item<?php echo $currentPage === 'faqs.php' ? ' active' : ''; ?>"><a class="nav-link" href="faqs.php">FAQs</a></li>
                            <li class="nav-item highlighted-menu<?php echo $currentPage === 'book-appointment.php' ? ' active' : ''; ?>"><a class="nav-link" href="book-appointment.php">Book Appointment</a></li>
                        </ul>
                    </div>

                    <div class="header-btn">
                        <a href="book-appointment.php" class="btn-default btn-highlighted">Book Appointment</a>
                    </div>
                </div>

                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
