  <?php require("inc/header.php")?>
  <?php require("inc/navbar.php")?>

  <?php
  $select_query = "SELECT * FROM homes";
  $connection =  $conn->query($select_query);
  $home = $connection->fetch_assoc();
  ?>

  <section id="hero" class="d-flex align-items-center" style="background-image: url('<?= 'admin/uploads/' . $home['img']; ?>');background-repeat:no-repeat;
  background-size: cover;">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1> <?= $home['name'] ?> </h1>
      <h2> <?= $home['title'] ?> </h2>
      <a href="about.html" class="btn-about">About Me</a>
    </div>
  </section><!-- End Hero -->

 <?php require("inc/footer.php")?>