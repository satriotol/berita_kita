<?php
require 'admin/function.php';
include 'header.php';
$id = $_GET["id"];
$index= query("SELECT*FROM berita WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
	<body id="page-top">
		<!-- Navigation -->
		
		<div class="post-container-wrapper">
		<section class="post-container">
	<article class="post-wrapper">
		<div class="post-image">
			<img src="upload/<?=$index["gambar"];?>"height="100%">
		</div><br>
		<h3 class="post-title">
			<a href="lihat_berita.php?id=<?=$index["id"];?>"><?=$index["judul"];?></a>
		</h3>
		<div class="post-date">
			<p><?=$index["tanggal_berita"];?></p>
		</div>
		<div>
			<label class="post-message">
				<?= $index["isi"];?>
			</label>			
		</div>
	</div>

	<footer class="footer-container-wrapper">
			<div class="footer-container">
				<div class="footer-address">
					<p>Gd. PKM FT-Universitas Negeri Semarang, Sekaran, GunungPati</p>
					<p>himatekkimunnes@gmail.com</p>
				</div>
				<div class="footer-socmed-copyright">
					<div class="footer-socmed-container">
						<p class="footer-socmed-title">Social Media Kami</p>
						<div class="footer-socmed">
							<a class="fa fa-facebook" href=""></a>
							<a class="fa fa-instagram" href=""></a>
							<a class="fa fa-twitter"href=""></a>
							<a class="fa fa-youtube"href=""></a>
						</div>
					</div>
				</div>
				<p class="copyright-title">MADE BY <a target="_blank" href="instagram.com/profile/krotidesian.id">KROTIDESIAN</a></p>
			</div>
		</footer>
		</section>
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>


		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script src="js/theme-scripts.js"></script>
	</body>
</html>