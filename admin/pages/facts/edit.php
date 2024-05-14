<?php require("../../inc/header.php");?>
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

                $select_query = "SELECT * FROM facts WHERE id = $id ";
                $result = $conn->query($select_query);
                $receive_data = mysqli_fetch_assoc($result);
            }
            ?>
                    <?php
                    if(isset($_POST['submit'])){
                      $number = $_POST['number'];
                      $title = $_POST['title'];

                    if($number != "" && $title != ""){
                      $query = "UPDATE facts SET number ='$number', title ='$title' ";
                      $result = mysqli_query($conn, $query);

                      if($result){
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show bg-light text-success" role="alert">
                         Facts Updated successfully
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                      }
                      else{
                         ?>
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          Error in updating datas
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                         <?php
                      }
                    }
                    else{
                      ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      All fields are required
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <?php
                    }
                    }
            
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Number</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="number" class="form-control" id="basic-icon-default-fullname" placeholder="1234" aria-label="HTML" name="number" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Title</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" min="0" max="100" class="form-control" id="basic-icon-default-fullname" placeholder="projects" name="title" aria-describedby="basic-icon-default-fullname2" />
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