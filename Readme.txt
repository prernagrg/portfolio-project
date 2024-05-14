Thanks for downloading this template!

Template Name: Kelly
Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/

<?php include '../../inc/header.php' ?>
<?php include '../../inc/siderbar.php' ?>
<?php include '../../inc/nav.php' ?>



<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <!-- Basic Layout -->
    <div class="container">

        <div class="p-2">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Basic with Icons</h5>
                    <small class="text-muted float-end">Merged input group</small>
                </div>
                <div class="card-body">

                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-name">Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" class="form-control" name="name" id="basic-icon-default-name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-name2" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-title">description</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-title2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-img">Image</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-img2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" class="form-control" name="img" id="imagebox" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-img2" readonly />

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                    choose image
                                </button>

                                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    Modal title
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- selected img ko bhaira rato border aauni banauna -->
                                                <style>
                                                    [type=radio]:checked+img {
                                                        outline: 2px solid red;
                                                    }
                                                </style>
                                                <!-- select query file ko data tanna -->
                                                <?php
                                                $select = "SELECT * FROM files";
                                                $result = $conn->query($select);
                                                // same ho while loop jastai tara yesma thorai changes matra xa
                                                $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                                foreach ($files as $file) {
                                                ?>
                                                    <!-- label bhitra input rakhyo bhani press garda radio aathawa checbox ko range badxa tyo name or img click garda select hunxa -->
                                                    <label>
                                                        <!-- style opacity 0 ley radio ko dallo hatayo -->
                                                        <input type="radio" name="img" value="<?= $file['img'] ?>" style="opacity: 0;">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // save garda yo function run hunxa
    function firstfunction() {
        var x = document.querySelector('input[name=img]:checked').value;
        document.getElementById('imagebox').value = x;
    }
</script>

<?php include '../../inc/footer.php' ?>

<div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->