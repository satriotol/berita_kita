<?php
require 'function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/admin.css" rel="stylesheet" type="text/css" media="screen"" />
    <script src="main.js"></script>
</head>
<body>
    <section class="container">
        <form action="" method="post">
            <label for="username">Username :</label>
            <br>
            <input type="text">
            <br>
            <label for="password">Password :</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Login</button>
        </form>
    </section>
</body>
</html>