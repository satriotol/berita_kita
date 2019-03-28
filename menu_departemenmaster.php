<?php
require 'admin/function.php';
include 'header.php';
$index = query('SELECT * FROM departemen WHERE id_dept>0');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/HIMPRO-logo.png">
    <title>HIMPRO TEKNIK KIMIA UNNES</title>
    <title>HIMPRO TEKNIK KIMIA UNNES</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/baru.css" rel="stylesheet">
    <!-- Javascript for custom animation -->
    <script src="js/animate.js"></script>
    <script src=""></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>

<body>
    <section id="about" class="light-bg">
        <div class="row">
            <?php
            foreach ($index as $departemen) {
                ?>
            <div class="col-md-3 text-center">
                <a href="departemen.php?id=<?= $departemen["id_dept"] ?>" target="blank_">
                    <div class="mz-module">
                        <div>
                            <div class="mz-module-about">
                                <img src="images/departemen/<?=$departemen["id_dept"]?>.png">
                                <h3> <?=$departemen["nama_dept"] ?> </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php 
        } ?>
        </div>
    </section>
</body>
<?php include 'footer.php'; ?>

</html> 