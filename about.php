<?php require("inc/header.php");?>
<?php require("inc/navbar.php") ?>

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
      <?php 
            $select_query = "SELECT * FROM abouts";
            $result = $conn->query($select_query);
            $about = $result->fetch_assoc();
            ?>
        <div class="col-lg-4">
          <img src="./admin/uploads/<?= $about['img'];?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3><?= $about['profession'];?></h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <?php 
            $select_query = "SELECT * FROM abouts";
            $result = $conn->query($select_query);
            $about = $result->fetch_assoc();
            ?>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong><?= $about['birthday'];?> </li>
                <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong><?= $about['website'];?> </li>
                <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong><?= $about['phone'];?></li>
                <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?= $about['city'];?></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> <?= $about['age'];?></li>
                <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong><?= $about['degree'];?> </li>
                <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong><?= $about['email'];?> </li>
                <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> <?= $about['freelance'];?></li>
              </ul>
            </div>
          </div>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row skills-content">
        <?php
        $select_query = "SELECT * FROM skills LIMIT 6";
        $result = $conn->query($select_query);
        $skills = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($skills as $skill) {
        ?>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill"><?= $skill['language'] ?><i class="val"><?= $skill['percent'] ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['percent'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Facts Section ======= -->
  <section id="facts" class="facts">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Facts</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row counters">
          <?php
          $select_query = "SELECT * from facts LIMIT 4";
          $result = $conn->query($select_query);
          $facts = mysqli_fetch_all($result, MYSQLI_ASSOC);

          foreach($facts as $fact)
          {
          ?>
        <div class="col-lg-3 col-6 text-center">
          <span><?= $fact['number'];?></span>
          <p><?= $fact['title'];?></p>
        </div>
            <?php }?>
      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <?php 
            $select_query = "SELECT * FROM testimonials LIMIT 4";
            $result = $conn->query($select_query);
            $testimonials = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach($testimonials as $testimonial)
            {
            ?>
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="./admin/uploads/<?= $testimonial['img'];?>" class="testimonial-img" alt="">
              <h3><?= $testimonial['name'];?></h3>
              <h4><?php $testimonial['position'];?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $testimonial['description'];?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->
              <?php }?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<?php require("inc/footer.php") ?>