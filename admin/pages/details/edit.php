<?php require("../../inc/header.php"); ?>
<?php require("../../inc/asidebar.php"); ?>
<?php require("../../inc/navbar.php"); ?>

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
            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                $select_query = "SELECT* FROM details WHERE id = $id";
                $result = $conn->query($select_query);
                $receive_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            ?>
            <?php
            if (isset($_POST['submit'])) {
              $category = $_POST['category'];
              $client = $_POST['client'];
              $date = $_POST['date'];
              $url = $_POST['url'];
              $description = $_POST['description'];

              if ($category != "" && $date != "" && $description != "") {
                $query = "UPDATE details SET category = '$category', client = '$client', date = '$date', url = '$url', description = '$description' ";
                $result = mysqli_query($conn, $query);
                if ($result) {
            ?>
                  <div class="alert alert-warning alert-dismissible fade show text-success bg-light" role="alert">
                    Sliders added successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                } else {
                ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Error in adding sliders
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  All fields are required.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
              }
            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Category</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="e.g Web design" name="category" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Client</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="xyz Company" name="client" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Date</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="2020/03/12"  name="date" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">URL</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="www.example.com" name="url" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Description</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="description" name="description" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Send</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- / Content -->

<?php require("../../inc/footer.php"); ?>