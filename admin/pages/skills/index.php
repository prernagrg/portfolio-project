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
            $count_total_data = "SELECT * FROM skills";
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
                    <th scope="col">Languages</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM skills LIMIT $offset ,$limit";
                $result = mysqli_query($conn, $query);
                $files = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $i = 0;
                foreach ($files as $file) {
                ?>
                    <tr>
                        <td scope="row"><?php echo ++$i ?></td>
                        <td><?php echo $file['language'] ?></td>
                        <td><?php echo $file['percent'] ?></td>
              
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
