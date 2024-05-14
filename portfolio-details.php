<?php require("inc/header.php")?>
<?php require("inc/navbar.php")?>
  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <?php
            $select_query = "SELECT* FROM details";
            $result = $conn->query($select_query);
            $detail = $result->fetch_assoc();
            ?>
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?= $detail['category']?></li>
                <li><strong>Client</strong>: <?= $detail['client']?></li>
                <li><strong>Project date</strong>:<?= $detail['date']?></li>
                <li><strong>Project URL</strong>: <a href="#"><?= $detail['url']?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
              <?= $detail['description']?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>