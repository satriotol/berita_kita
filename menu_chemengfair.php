<?php 
    require 'admin/function.php';
    include 'header.php';
    $index = query ("SELECT * FROM chemengfair WHERE id_chemeng>0");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>CHEMENGFAIR</title>
</head>
<body id="page-top">
	<section id="about" class="light-bg">
		<div class="row">
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about" href="#">
						<i class="fa fa-briefcase color1 ot-circle"></i>
						<h3>SEMINAR NASIONAL</h3>
					</div>
					<a href="semnas.php" class="mz-module-button">read more</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-photo color2 ot-circle"></i>
						<h3>ISO</h3>
					</div>
					<a href="iso.php" class="mz-module-button">read more</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-camera-retro color3 ot-circle"></i>
						<h3>CESA</h3>
					</div>
					<a href="cesa.php" class="mz-module-button">read more</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-cube color4 ot-circle"></i>
						<h3>SCC</h3>
					</div>
					<a href="scc.php" class="mz-module-button">read more</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-cube color4 ot-circle"></i>
						<h3>CEPTION</h3>
					</div>
					<a href="#" class="mz-module-button">read more</a>
				</div>
			</div>
			<!-- end about module -->
			<!-- about module -->
			<div class="col-md-3 text-center">
				<div class="mz-module">
					<div class="mz-module-about">
						<i class="fa fa-cube color4 ot-circle"></i>
						<h3>MACHEMENG AWARDS</h3>
					</div>
					<a href="#" class="mz-module-button">read more</a>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'?>
</body>
</html>