<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Hasil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>


<body>
	<!--/banner-w3layouts-sec-->
	<div class="banner-w3layouts two">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php">Opo jeneng e?</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Beranda
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item ml-xl-2">
							<a class="nav-link" href="contact.html">Tentang</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--banner-w3layouts-->
		<div class="banner-w3layouts-info two">
			<!--/search_form -->
			<div id="banner-w3layouts-info" class="search_top text-center">
				<p>Diisi Opo?</p>
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item active">Hasil</li>
				</ol>
			</div>
			<!--//banner-w3layouts-info -->
		</div>
		<!--//banner-w3layouts-->
	</div>
	<!--/main-->
	<!--/projects -->

	

	<section class="banner-w3layouts-bottom py-lg-5 py-3">
		<div class="container container-fluid py-lg-4 py-3">
			<h3 class="tittle text-left mx-auto mb-lg-4 mb-3">
			<?php 
				if(isset($_GET["cari"])){
					echo "Hasil cari : ".$_GET["cari"]; 
				}else{
					echo "tidak ada kata kunci";
				}
				
			?>
			</h3>
	   </div>
	   <div class="container py-lg-4 py-3">
			<div class="inner-sec-agileits-w3ls row">
				<?php
					include 'cari_data.php';
					foreach($array_data['statuses'] as $status){
				?>
					<div class="col-lg-4 news-gd" style="margin-bottom:20px">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">@<?php echo $status['user']['screen_name']."</br>"; ?></h5>
								<p class="card-text"><?php echo $status['text'] ?></p>
								<p class="card-text">
									<small class="text-muted"><?php echo date('d M Y H:i A', strtotime($status['created_at'])) ?></small>
								</p>
							</div>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	<!--//projects -->
	<!--footer-->
	<footer>
		<!-- footer -->
		<div class="footer-cpy p-lg-4 p-md-3 p-3 container-fluid">
			<div class="row">
				<div class="col-lg-6 copyrightbottom text-left">
					<h3>
						<a class="navbar-brand" href="index.html">Opo Jeneng E?</a>
					</h3>
					<p>© 2018 Jeneng E. All Rights Reserved | Design by
						<a href="http://w3layouts.com/">Kelompok 6</a>
					</p>

				</div>
				<div class="col-lg-6 copyrighttop mt-3 text-right">
					<ul>
						<li class="mx-3">
							<a class="facebook" href="#">
								<i class="fab fa-facebook-f"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a class="facebook" href="#">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!---->

	<!-- /.footer -->
	<script src="js/jquery-2.2.3.min.js"></script>
	
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<script src="js/bootstrap.js"></script>
	<!-- js file -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>