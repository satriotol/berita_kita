<?php
session_start();

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

// include "layout/header.php";
require 'function.php';
if(isset($_POST["login"])){

    $user_admin = $_POST["user_admin"];
    $pass_admin = $_POST["pass_admin"];

    $result = mysqli_query($conn,"SELECT * FROM admin WHERE user_admin = '$user_admin'");

    //Cek Username
    if(mysqli_num_rows($result) === 1){

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass_admin,$row["pass_admin"])){
            $_SESSION["login"] = true;

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
    <p style="color:red;font-style:italic;">username / password salah</p>
    <?php endif; ?>

    <form action="" method="post">
    
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="user_admin" id="user_admin">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="pass_admin" id="pass_admin">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>