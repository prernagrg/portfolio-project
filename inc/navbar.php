<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Kelly</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
      <?php
// Get the current page filename
$current_page = basename($_SERVER['PHP_SELF']);
?>

<ul>
    <li><a class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
    <li><a class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
    <li><a class="<?php echo ($current_page == 'resume.php') ? 'active' : ''; ?>" href="resume.php">Resume</a></li>
    <li><a class="<?php echo ($current_page == 'services.php') ? 'active' : ''; ?>" href="services.php">Services</a></li>
    <li><a class="<?php echo ($current_page == 'portfolio.php') ? 'active' : ''; ?>" href="portfolio.php">Portfolio</a></li>
    <li><a class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
</ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->