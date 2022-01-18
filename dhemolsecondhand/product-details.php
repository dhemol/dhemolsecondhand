<?php
session_start();
include('inc/koneksi.php');
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>DHEMOL SECONDHAND</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
		
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> <a href="https://api.whatsapp.com/send?phone=6285157740434">+6285157740434</li>
								<li><i class="ti-email"> </i> <a href="mailto:dhemol@hotmail.com">dhemol@hotmail.com</a></li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
						<ul class="list-main">
								<?php
									if (isset($_SESSION['username'])) : ?>
									<li><a href="logout.php">Logout</a></li>
									<li><?= $_SESSION['username']?></li>
								<?php else : ?>
								<li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
								<?php endif; ?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<option>Hoodie</option>
									<option>Jacket</option>
									<option>Roughneck</option>
								</select>
								<form>
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
					<!-- Search Form -->
					<div class="sinlge-bar shopping">
								<a href="wishlist.php" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar"> 
								<a href="login.php" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="cart.php" class="single-icon"><i class="ti-bag"></i></a>
							</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li><a href="index.php">Home</a></li>
													<li class="active"><a href="product.php">Product</a></li>												
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.php">Checkout</a></li>
														</ul>
													</li>								
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.php">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                                <li><a href="product.php">Product<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="product-details.php">Product Detail</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
				<?php
					$id = $_GET['id'];
					$query = mysqli_query($con,"SELECT * FROM barang WHERE id_brg='$id'") or die(mysqli_error());
					$data = mysqli_fetch_array($query);
				?>
					<div class="col-lg-6 col-12">
						<!-- Product Slider -->
						<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang WHERE id_brg='$id'");
									
											while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_brg']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_brg']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_brg']?>">
											</div>
											<div class="single-slider">
												<img src="admin/<?= $data1['gambar_brg']?>">
											</div>
										</div>
									</div>
									<?php } ?>
								<!-- End Product slider -->
							</div>
							<?php
								$query1 = mysqli_query($con, "SELECT * FROM barang WHERE id_brg='$id'");
						
								while ($data1 = mysqli_fetch_assoc($query1)) {
							?>	
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
									<h2><?= $data1['nama_brg']?></h2>
									<h5><?= $data1['id_brg']?></h5>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (199.990 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> <?= $data1['jml_brg']?></span>
                                        </div>
                                    </div>
                                    <h3>Rp <?= number_format($data1['harga_brg']); ?></h3>
                                    <div class="quickview-peragraph">
                                        <p><?= $data1['desc_brg']?></p>
                                    </div>
									<br>
									<div class="add-to-cart">
										<?php
											echo '<a href="cart.php?add='.$data1['id_brg'].'" class="btn">Add to cart</a>'; ?>
										<a href="wishlist.php" alt="#" class="btn min"><i class="ti-heart"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
										<li><a href="http://facebook.com/dhemolalalala"><i class="ti-facebook"></i></a></li>
										<li><a href="http://twitter.com/dhemol"><i class="ti-twitter"></i></a></li>
										<li><a href="https://dhemol.tumblr.com/"><i class="ti-tumblr"></i></a></li>
										<li><a href="http://instagram.com/dhemol"><i class="ti-instagram"></i></a></li>
										<li><a href="https://linktr.ee/dhemol"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
							</div>
							<?php } ?>
                        </div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
		
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.php"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Dhemolsecondhand is a platform to make it easier for users to find good quality products such as hoodies, jackets, and sweaters at affordable prices to make it look more fashionable.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="https://api.whatsapp.com/send?phone=6285157740434">+62 8515 7740 434</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Touch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Jl. H. Nawi Malik No.14 RT02/02 Serua, Bojongsari, Depok.</li>
									<li>Jawa Barat, Indonesia.</li>
									<li>dhemol@hotmail.com</li>
									<li>+62 851 5774 0434>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="http://facebook.com/dhemolalalala"><i class="ti-facebook"></i></a></li>
								<li><a href="http://twitter.com/dhemol"><i class="ti-twitter"></i></a></li>
								<li><a href="https://dhemol.tumblr.com/"><i class="ti-tumblr"></i></a></li>
								<li><a href="http://instagram.com/dhemol"><i class="ti-instagram"></i></a></li>
								<li><a href="https://linktr.ee/dhemol"><i class="ti-link"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="https://linktr.ee/dhemol" target="_blank">DHEMOL</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
							<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Touch</h4>
							<!-- Single Widget -->
							<div class="contact">
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="http://facebook.com/dhemolalalala"><i class="ti-facebook"></i></a></li>
								<li><a href="http://twitter.com/dhemol"><i class="ti-twitter"></i></a></li>
								<li><a href="https://dhemol.tumblr.com/"><i class="ti-tumblr"></i></a></li>
								<li><a href="http://instagram.com/dhemol"><i class="ti-instagram"></i></a></li>
								<li><a href="https://linktr.ee/dhemol"><i class="ti-link"></i></a></li>
							</ul>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
	
	
    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>