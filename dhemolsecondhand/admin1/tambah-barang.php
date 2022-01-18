<?php
include('cek-login.php');
include('../inc/koneksi.php');
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
    <title>ADD PRODUCT | DHEMOL SECONDHAND</title>
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
<?php
	//kode php ini kita gunakan untuk menampilkan pesan eror
	if (!empty($_GET['error'])) {
		if ($_GET['error'] == 1) {
			echo '<h3 align="center">Username dan Password belum diisi!</h3>';
		} else if ($_GET['error'] == 2) {
			echo '<h3 align="center">Username belum diisi!</h3>';
		} else if ($_GET['error'] == 3) {
			echo '<h3 align="center">Password belum diisi!</h3>';
		} else if ($_GET['error'] == 4) {
			echo '<h3 align="center">Username dan Password tidak terdaftar!</h3>';
		}
	}
	?>
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

	<!-- Start Login Area -->
	<section id="login" class="contact-us section">
		<div class="container" style="width:800px; height:3000px;" >
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="form-main">
								<div class="title" align="center">
									<h1>ADD PRODUCT</h1>
                                </div>
								<form name="input_barang" enctype="multipart/form-data" class="form" method="post" action="insert-produk.php">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="form-group">
												<label>ID PRODUCT<span>*</span></label>
												<input name="kdbarang" type="text" class="form-control" value="" placeholder=""><?php echo $data['id_brg']; ?>
											</div>
											</div>
											<div class="col-lg-12 col-12">
												<div class="form-group">
													<label>PRODUCT NAME<span>*</span></label>
													<input name="namabarang" type="text" class="form-control" placeholder="" value="<?php echo $data['nama_brg']; ?>">
												</div>	
                                            </div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
													<label>PRICE<span>*</span></label>
													<input name="hargabarang" type="text" class="form-control" placeholder="" value="<?php echo $data['harga_brg']; ?>">
												</div>	
                                            </div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
													<label>DESCRIPTION<span>*</span></label>
													<textarea name="descBrg" type="text" class="form-control" placeholder="" style="width: 670px; height: 200px"><?php echo $data['desc_brg']; ?></textarea>
												</div>	
                                            </div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
													<label>QUANTITY<span>*</span></label>
													<input name="jmlbarang" type="text" class="form-control" placeholder="" value="<?php echo $data['jml_brg']; ?>">
												</div>	
                                            </div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
													<label for="select01">CATEGORY<span>*</span></label>
													<select id="select01" class="chzn-select" name="kategoribarang" value="<?php echo $data['kategori']; ?>">
                                                        <option>Hoodie</option>
                                                        <option>Jacket</option>
                                                        <option>Roughneck</option>
                                                    </select>
												</div>	
                                            </div>
                                            <div class="col-lg-12 col-12">
												<div class="form-group">
                                                    <label for="fileInput">IMAGE<span>*</span></label>
                                                    
													<input name="gbarang" type="file" class="input-file uniform_on" id="fileInput"placeholder="" value="<?php echo '<img src="'.$data['gambar_brg'].'">'; ?>">
												</div>	
                                            </div>
											<div class="col-12">
												<div class="form-group button">
                                                    <button type="submit" class="btn btn-block" >Save Changes</button>
                                                    <button type="reset" class="btn btn-block">Reset</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
	</section>
	
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
							<p class="text" align="justify" >Dhemolsecondhand is a platform to make it easier for users to find good quality products such as hoodies, jackets, and sweaters at affordable prices to make it look more fashionable.</p>
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
								<img src="images/payments.png" alt="#">
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
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
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