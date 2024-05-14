<?php require("../../inc/header.php");?>
<?php require("../../inc/asidebar.php");?>
<?php require("../../inc/navbar.php");?>

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

                            $select_data = " SELECT * FROM education WHERE id=$id ";
                            $result = $conn->query($select_data);

                            $receive_data = mysqli_fetch_assoc($result);
                        }
                        ?>
                      <?php
                      if(isset($_POST['submit'])){
                        $major = $_POST['major'];
                        $date = $_POST['date'];
                        $college = $_POST['college'];
                        $description = $_POST['description'];
                        

                        if($major != "" && $date != "" && $college != "" && $description != ""  ){
                           $query = "UPDATE  education SET major = '$major', date = '$date', college = '$college', description = '$description' ";
                           $result = mysqli_query($conn, $query);
                           if($result){
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show text-success bg-light" role="alert">
                             Sliders added successfully
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                           }
                           else{
                            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              Error in adding sliders
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                           }
                        }
                        else{
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
                          <label class="form-label" for="basic-icon-default-fullname">Major</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="basic-icon-default-fullname"
                              placeholder="eg. Arts"
                              aria-label="John Doe"
                              name="major"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Date</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="basic-icon-default-fullname"
                              placeholder="2020/03/12"
                              aria-label="John Doe"
                              name="date"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">College</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="basic-icon-default-fullname"
                              placeholder="ABC college"
                              aria-label="John Doe"
                              name="college"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Description</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                           <textarea name="description" placeholder="About and experiences" id="description" class="form-control" rows="1"></textarea>
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

<?php require("../../inc/footer.php");?>