<?php
require("../config/config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if($name != "" && $email != "" && $password !=""){

        $check = "SELECT* FROM users WHERE name = '$name' AND email = '$email' ";
        $result = $conn->query($check);

        if($result->num_rows>0){
            ?>
            <div class="alert alert-danger" role="alert">
            Email already exists
            </div>
             <?php
             header("Location:../../register.php?msg=error");
        }
        else{
            $query = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password') ";
            $result = $conn->query($query);
            if($result){
                header("Location:../index.php?msg=register");
            }
            else{
                header("Location:../register.php?msg=error");
            }
        }
    }
    else{
        ?>
       <div class="alert alert-danger" role="alert">
        All datas are required
       </div>
        <?php
        header("Location:../../register.php");
    }
}
?>