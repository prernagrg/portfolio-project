<?php require("../../inc/header.php"); ?>
<?php require("../../inc/asidebar.php"); ?>
<?php require("../../inc/navbar.php"); ?>


<?php
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $img = $_FILES['img'];

  if ($title != "") {
    $imgName = $img['name'];
    $imgSize = $img['size'];

    if ($imgName != "") {
      $exploded_data = explode(".", $imgName);
      $ext = strtolower(end($exploded_data));

      if ($ext == "png" || $ext == "jpg" || $ext == "jpeg") {
        if ($imgSize > 0 && $imgSize < 2097152) {
          $name = strtolower(str_replace(" ", "", substr($title, 0, 10)) . "-" . time() . "." . $ext);

          if (move_uploaded_file($img['tmp_name'], "../../uploads/" . $name)) {
            $query = "INSERT INTO files(title,img) VALUES ('$title','$name')";
            $result = mysqli_query($conn, $query);
            if ($result) {
?>
              <script type="text/javascript">
                window.location.href = "index.php"
              </script>
            <?php
            }
          } else {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Data is not uploaded in uploads folder
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php
          }
        } else {
          ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data size must be less than 2mb.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
        }
      } else {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          Use Suitable Extension like png, jpg, jpeg.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
      }
    } else {
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Image name is empty
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    }
  } else {
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      Title is empty
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
  }
}
?>

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Basic with Icons</h5>
            <small class="text-muted float-end">Merged input group</small>
          </div>
          <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input name="title" type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Image</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                  <input type="file" id="basic-icon-default-company" class="form-control" placeholder="" aria-label="" name="img" aria-describedby="basic-icon-default-company2" />
                </div>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->

  <?php require("../../inc/footer.php"); ?>