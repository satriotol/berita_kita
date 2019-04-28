<?php

include "layout/header.php";
require 'function.php';

if(isset($_POST["login"])){

    $user_admin = $_POST["user_admin"];
    $pass_admin = $_POST["pass_admin"];

    $result = mysqli_query($conn,"SELECT * FROM admin WHERE user_admin = '$user_admin'");

    //Cek user_admin
    if(mysqli_num_rows($result) === 1){

        // cek pass_admin
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass_admin,$row["pass_admin"])){
            header ("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
    <p style="color:red;font-style:italic;">user_admin / pass_admin salah</p>
    <?php endif; ?>

    <form action="" method="post">
    
        <ul>
            <li>
                <label for="user_admin">user_admin :</label>
                <input type="text" name="user_admin" id="user_admin">
            </li>
            <li>
                <label for="pass_admin">pass_admin :</label>
                <input type="password" name="pass_admin" id="pass_admin">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>