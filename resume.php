  <?php require("inc/header.php");?>
  <?php require("inc/navbar.php");?>
  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php
          $select_query = "SELECT * FROM sumary";
          $result = $conn->query($select_query);
          $sumary = $result->fetch_assoc();
          ?>
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?= $sumary['name'];?></h4>
              <p><em><?= $sumary['description'];?></em></p>
              <p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <?php
            $select_query ="SELECT * FROM education LIMIT 2";
            $result =$conn->query($select_query);
            $education = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($education as $education){
            ?>
            <div class="resume-item">
              <h4><?= $education['major'];?></h4>
              <h5><?= $education['date'];?></h5>
              <p><em><?= $education['college'];?></em></p>
              <p><?= $education['description'];?></p>
            </div>
            <?php }?>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <?php
            $select_query = "SELECT * FROM experience";
            $result = $conn->query($select_query);
            $experience = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach($experience as $exp)
            {
            ?>
            <div class="resume-item">
              <h4><?= $exp['profession'];?></h4>
              <h5><?= $exp['date'];?> Present</h5>
              <p><em><?= $exp['address'];?> </em></p>
              <p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
              </p>
            </div>
            <?php }?>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->
<?php require("inc/footer.php");?>