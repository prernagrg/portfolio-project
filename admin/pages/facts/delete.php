<?php
require("../../config/config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM facts WHERE id = $id ";
    $result = $conn->query($query);
    
    if($result){
        header("Location:index.php?msg=delete");
    }
    else{
        header("Location:index.php?msg=error");
    }
}
?>