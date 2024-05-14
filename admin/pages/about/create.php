<?php require("../../inc/header.php"); ?>
<?php require("../../inc/asidebar.php"); ?>
<?php require("../../inc/navbar.php"); ?>
<?php require("../../middleware/secure.php");?>
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
            if (isset($_POST['submit'])) {
              $profession = $_POST['profession'];
              $birthday = $_POST['birthday'];
              $website = $_POST['website'];
              $phone = $_POST['phone'];
              $city = $_POST['city'];
              $age = $_POST['age'];
              $degree = $_POST['degree'];
              $email = $_POST['email'];
              $freelance = $_POST['freelance'];
              $description = $_POST['description'];
              $img = $_POST['img'];
              if ($profession != "" && $birthday != "" && $website != "" && $phone != "" && $city != "" && $age != "" && $degree != "" && $email != "" && $freelance != "" && $description != "" && $img != "") {

                $query = "INSERT INTO abouts(profession, birthday, website, phone, city, age, degree, email, freelance, description, img) VALUES ('$profession' , '$birthday' , '$website' , '$phone' , '$city' , '$age' , '$degree' , '$email' , '$freelance' , '$description', '$img') ";
                $result = mysqli_query($conn, $query);

                if ($result) {
            ?>
                  <div class="alert alert-warning alert-dismissible fade show bg-light text-success" role="alert">
                    added successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                } else {
                ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Error in adding
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                }
              } else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  All datas are required
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
              }
            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Profession</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Profession" aria-label="John Doe" name="profession" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Birthday</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="birthday" aria-label="John Doe" name="birthday" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Website</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder=" website" aria-label="John Doe" name="website" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Phone</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="tel" class="form-control" id="basic-icon-default-fullname" placeholder=" phone" aria-label="John Doe" name="phone" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">city</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder=" city" aria-label="John Doe" name="city" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Age</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Age" aria-label="John Doe" name="age" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Degree</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="degree" aria-label="John Doe" name="degree" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="basic-icon-default-fullname">Email</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="email" class="form-control" id="basic-icon-default-fullname" placeholder="Email" aria-label="John Doe" name="email" aria-describedby="basic-icon-default-fullname2" />
                </div>
              </div>
              <div class="mb-3">

                <label class="form-label" for="freelance">Freelance</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <select class="form-control" name="freelance" id="freelance">
                    <option value="availabe">Available</option>
                    <option value="unavailable">Unavailable</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-message">Description</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                  <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" name="description" aria-describedby="basic-icon-default-message2"></textarea>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Image</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                  <input type="text" id="imagebox" class="form-control" readonly name="img" aria-describedby="basic-icon-default-company2" />
                  <!-- Modal trigger button -->
                  <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                    Launch
                  </button>

                  <!-- Modal Body -->
                  <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                  <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="modalTitleId">
                            Modal title
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                          <style>
                            [type=radio]:checked+img {
                              outline: 2px solid red;
                            }
                          </style>
                          <?php
                          $select = "SELECT* FROM files";
                          $result = $conn->query($select);
                          $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                          foreach ($files as $file) {
                          ?>
                            <!-- label bhitra input rakhyo bhani press garda radio aathawa checbox ko range badxa tyo name or img click garda select hunxa -->
                            <label>
                              <!-- style opacity 0 garyo vane radio button hatxa -->
                              <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'] ?>">
                              <img src="../../uploads/<?= $file['img'] ?>" alt="" height="100px" width="100px" class="my-2">
                            </label>
                          <?php
                          }
                          ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                          </button>
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Optional: Place to the bottom of scripts -->
                  <script>
                    const myModal = new bootstrap.Modal(
                      document.getElementById("modalId"),
                      options,
                    );
                  </script>

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

<script>
  function firstfunction() {
    var x = document.querySelector('input[name=img]:checked').value;
    document.getElementById('imagebox').value = x;
  }
</script>

<?php require("../../inc/footer.php"); ?>