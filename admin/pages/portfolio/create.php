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
                        if (isset($_POST['submit'])) {
                            $appi = $_POST['appi'];                           
                            $appii = $_POST['appii'];                           
                            $appiii = $_POST['appiii'];                           
                            $webi = $_POST['webi'];                           
                            $webii = $_POST['webii'];                           
                            $webiii = $_POST['webiii'];                           
                            $cardi = $_POST['cardi'];                           
                            $cardii = $_POST['cardii'];                           
                            $cardiii = $_POST['cardiii'];                           
                            if ($appi != "" && $appii != "" && $appiii != "" && $webi != "" && $webii != "" && $webiii != "" && $cardi != "" && $cardii != "" && $cardiii != "") {
                                $query = "INSERT INTO  portfolio(appi, appii, appiii, webi, webii, webiii, cardi, cardii, cardiii) VALUES('$appi', '$appii', '$appiii', '$webi', '$webii', '$webiii', '$cardi', '$cardii', '$cardiii') ";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                        ?>
                                    <div class="alert alert-warning alert-dismissible fade show text-success bg-light" role="alert">
                                        Sliders added successfully
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <script type="text/javascript">
                                        window.location.href = "index.php"
                                    </script>
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
                                <label class="form-label" for="basic-icon-default-fullname">App 1</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="appi" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const Modal = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">App2</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="appii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const my_Modal = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">App 3</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="appiii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const my = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Web 1</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="webi" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hi = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Web 2</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="webii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hy = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Web 3</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="webiii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hello = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Card 1</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="cardi" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hyy = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Card 2</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="cardii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hii = new bootstrap.Modal(
                                            document.getElementById("modalId"),
                                            options,
                                        );
                                    </script>

                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Card 3</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" id="image" readonly name="cardiii" aria-describedby="basic-icon-default-fullname2" />

                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
                                        select image
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
                                                    <style>
                                                        [type=radio]:checked+img{
                                                            outline: 2px solid red;
                                                        }
                                                    </style>
                                                    <?php
                                                    $select_query = "SELECT * FROM files";
                                                    $result = $conn->query($select_query);
                                                    $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                                    foreach($files as $file)
                                                    {
                                                    ?>
                                                    <label >
                                                        <input style="opacity: 0;" type="radio" name="img" value="<?= $file['img'];?>">
                                                        <img src="../../uploads/<?= $file['img'];?>" alt="" height="100px" width="100px" class="my-2">
                                                    </label>
                                                    <?php
                                                     }
                                                     ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="firstfunction()" >Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Optional: Place to the bottom of scripts -->
                                    <script>
                                        const hie = new bootstrap.Modal(
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
<script>
    function firstfunction(){
        var x = document.querySelector('input[name=img]:checked').value;
        document.getElementById('image').value = x;
    }
</script>
<!-- / Content -->

<?php require("../../inc/footer.php"); ?>