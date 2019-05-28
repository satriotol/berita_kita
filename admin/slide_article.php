<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/csslistslide.css">
</head>

<body>

    <h2>Article Slide</h2>
    <div class="button_all">
        <a href="" class="button">PRESS RELEASE</a>
        <a href="" class="button">EVENT</a>
        <a href="" class="button">CHEMIST</a>
        <a href="" class="button">ADVOKASI</a>
        <a href="" class="button">OPREC</a>
        <a href="" class="button">MATERI</a>
        <a href="" class="button">CERC</a>
        <a href="" class="button">STORE</a>
    </div>

</body>

</html>
<script>
    $(".button").each(function() {
        if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
            $(this).addClass('active');
        }
    });
</script>