<?php 
    require 'admin/function.php';
    include 'header.php';
    $index = query ("SELECT * FROM chemengfair WHERE id_chemeng>0");
?>

<!DOCTYPE html>
<html>
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
					<a href="chem_semnas.php" class="mz-module-button">read more</a>
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