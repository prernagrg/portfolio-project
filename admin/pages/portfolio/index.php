<?php require("../../inc/header.php");?>
<?php require("../../inc/asidebar.php");?>
<?php require("../../inc/navbar.php");?>

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

    <?php
            $limit = 4;
            if (isset($_GET['page'])) {
             $page = $_GET['page'];
            } else {
                $page = 1;
            }

            $offset = ($page - 1) * $limit;
            $count_total_data = "SELECT * FROM portfolio";
            $count_total_result = mysqli_query($conn, $count_total_data);
            // print_r($count_total_result);
             $total_data = $count_total_result->num_rows;
            $total_pages = ceil($total_data / $limit);

            ?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">App 1</th>
                    <th scope="col">App 2</th>
                    <th scope="col">App 3</th>
                    <th scope="col">Web 1</th>
                    <th scope="col">Web 2</th>
                    <th scope="col">Web 3</th>
                    <th scope="col">Card 1</th>
                    <th scope="col">Card 2</th>
                    <th scope="col">Card 3</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM portfolio LIMIT $offset ,$limit";
                $result = mysqli_query($conn, $query);
                $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $i = 0;
                foreach ($files as $file) {
                ?>
                    <tr>
                        <td scope="row"><?php echo ++$i ?></td>
                        <td><a href="../../uploads/<?= $file['appi'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['appi'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['appii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['appii'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['appiii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['appiii'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['webi'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['webi'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['webii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['webii'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['webiii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['webiii'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['cardi'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['cardi'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['cardii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['cardii'] ?>" alt="image"></a></td>
                        <td><a href="../../uploads/<?= $file['cardiii'] ?>" target="_blank"> <img height="100" width="100" src="../../uploads/<?= $file['cardiii'] ?>" alt="image"></a></td>
                        <td>
                            <a class="btn btn-primary btn-sm " href="edit.php?id=<?= $file['id'] ?>" role="button">Edit </a>
                            <a class="btn btn-danger btn-sm " onclick="return confirm('Are you sure?')" href="delete.php?id=<?= $file['id'] ?>" role="button">Delete </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm">
            <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?> ">
                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">Previous</span>
                </a>
            </li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
            ?>
                <li class="page-item <?= $i == $page ? 'active' : '' ?> "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
            <?php
            }
            ?>
            <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">Next</span>
                </a>
            </li>
        </ul>
    </nav>


    </div>


<?php require("../../inc/footer.php");?>