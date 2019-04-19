<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN HIMPROTEKIM UNNES</title>
    <link rel="stylesheet" href="css/header.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/animate.js"></script>
</head>
</head>

<body>
    <div class="topnav">
        <ul>
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="list_berita.php">List Berita</a>
            <!-- <a class="nav-link" href="list_kategori.php">List Kategori</a> -->
            <a class="nav-link" href="list_slide.php">List Slide</a>
            <a class="nav-link" href="list_admin.php">List Admin</a>
            <a class="nav-link" href="list_alumni.php">List Alumni</a>
            <a class="nav-link" href="list_subberita.php">List Sub Berita</a>
            <a class="nav-link" href="list_pesan.php">List Pesan</a>
            <a class="nav-link" href="list_video.php">List Video</a>
        </ul>
    </div>
</body>

</html>

<script>
    $(".nav-link").each(function() {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('activeMenuItem');
        }
    });
</script> 