<?php
session_start();
include('inc/koneksi.php');

//Tambah Barang//
if(isset($_GET['add'])){
	$id = $_GET['add'];
	$qt = mysqli_query($con,"SELECT id_brg, jml_brg FROM barang WHERE id_brg='$id'");
	while($qt_row = mysqli_fetch_assoc($qt)){
		if($qt_row['jml_brg'] != $_SESSION['cart_'.$_GET['add']] && $qt_row['jml_brg'] > 0){
			$_SESSION['cart_'.$_GET['add']]+='1';
			header("Location: cart.php");
		} else {
			echo '<script language="javascript">alert("Stok produk tidak mencukupi!"); document.location="index.php";</script>';
		}
	}
}

//Hapus 1 Barang//
if(isset($_GET['remove'])){
	$_SESSION['cart_'.$_GET['remove']]--;
	header("Location: cart.php");
}

//Hapus Barang//
if(isset($_GET['delete'])){
	$_SESSION['cart_'.$_GET['delete']]='0';
	header("Location: cart.php");
}
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
							<a href="index.php"><img src="images/logo.png" style="max-size=10px" alt="logo"></a>
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
								<form name="search" method="get" action="index.php">
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
													<li class="active"><a href="index.php">Home</a></li>
													<li><a href="product.php">Product</a></li>												
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

	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="hoodie.php" role="tab">Hoodie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="jacket.php" role="tab">Jacket</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="roughneck.php" role="tab">Roughneck</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="Trending" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
												<?php
													$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 0,1");
											
													while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
													<div class="product-img">
														<a href="product-details.php?id=<?= $data1['id_brg']?>">
															<img class="default-img" src="admin/<?= $data1['gambar_brg']?>">
															<img class="hover-img" src="admin/<?= $data1['gambar_brg']?>">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-id="<?=$id?>" data-target="#1" title="Quick View" href="#1"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
														<div class="product-price">
															<span>Rp<?= number_format($data1['harga_brg']); ?></span>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
												<?php
													$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 1,1");
											
													while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
													<div class="product-img">
														<a href="product-details.php?id=<?= $data1['id_brg']?>">
															<img class="default-img" src="admin/<?= $data1['gambar_brg']?>">
															<img class="hover-img" src="admin/<?= $data1['gambar_brg']?>">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#2" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
														<div class="product-price">
															<span>Rp<?= number_format($data1['harga_brg']); ?></span>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
												<?php
													$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 2,1");
											
													while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
													<div class="product-img">
														<a href="product-details.php?id=<?= $data1['id_brg']?>">
															<img class="default-img" src="admin/<?= $data1['gambar_brg']?>">
															<img class="hover-img" src="admin/<?= $data1['gambar_brg']?>">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#3" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
														<div class="product-price">
															<span>Rp<?= number_format($data1['harga_brg']); ?></span>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
												<?php
													$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 3,1");
											
													while ($data1 = mysqli_fetch_assoc($query1)) {
										?>	
													<div class="product-img">
														<a href="product-details.php?id=<?= $data1['id_brg']?>">
															<img class="default-img" src="admin/<?= $data1['gambar_brg']?>">
															<img class="hover-img" src="admin/<?= $data1['gambar_brg']?>">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#4" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
														<div class="product-price">
															<span>Rp<?= number_format($data1['harga_brg']); ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php } ?>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 4,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
							<div class="product-img">
								<a href="product-details.php?id=<?= $data1['id_brg']?>">
									<img class="default-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<img class="hover-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#5" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
								<div class="product-price">
									<span class="old">Rp600.000</span>
									<span>Rp<?= number_format($data1['harga_brg']); ?></span>
								</div>
							</div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 5,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
                            <div class="product-img">
							<a href="product-details.php?id=<?= $data1['id_brg']?>">
                                    <img class="default-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
                                    <img class="hover-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#6" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
                                <div class="product-price">
                                    <span>Rp<?= number_format($data1['harga_brg']); ?></span>
                                </div>
                            </div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 6,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
                            <div class="product-img">
							<a href="product-details.php?id=<?= $data1['id_brg']?>">
                                    <img class="default-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
                                    <img class="hover-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<span class="new">New</span>
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#7" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
									<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
                                <div class="product-price">
                                    <span>Rp<?= number_format($data1['harga_brg']); ?></span>
                                </div>
                            </div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
						<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 7,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
                            <div class="product-img">
							<a href="product-details.php?id=<?= $data1['id_brg']?>">
                                    <img class="default-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
                                    <img class="hover-img" src="admin/<?= $data1['gambar_brg']?>" alt="#">
                                </a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#8" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="wishlist.php"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="compare.php"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<?='<a title="Add to cart" href="cart.php?add='.$data1['id_brg'].'">Add to cart</a>';?>
									</div>
								</div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h3>
                                <div class="product-price">
                                    <span>Rp<?= number_format($data1['harga_brg']); ?></span>
                                </div>
                            </div>
						</div>
						<?php } ?>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 8,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h4>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 9,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 10,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 11,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 12,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 13,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 14,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 15,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
					<?php
							$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 16,1");
					
							while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
									<?='<a href="cart.php?add='.$data1['id_brg'].'" class="buy"><i class="fa fa-shopping-bag"></i></a>';?>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5> <a href="product-details.php?id=<?=$data1['id_brg']?>" class="title"><?= $data1['nama_brg'] ?></a></h5>
									<p class="price with-discount">Rp<?= number_format($data1['harga_brg']); ?></p>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
		<!-- Start Cowndown Area -->
		<section class="cown-down">
	<div class="section-inner ">
		<div class="container">
			<div class="row">
			<?php
						$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 18,1");
				
						while ($data1 = mysqli_fetch_assoc($query1)) {
					?>	
				<div class="col-lg-6 col-12 padding-right">
					<div class="image">
						<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
					</div>	
				</div>	
				<div class="col-lg-6 col-12 padding-left">
					<div class="content">
						<div class="heading-block">
							<p class="small-title"><h1>Deal of day</h1></p>
							<h3><a href="product-details.php?id=<?= $data1['id_brg']?>"class="title"><?= $data1['nama_brg'] ?></a></h3>
							<p class="text"><?= $data1['desc_brg']?></p>
							<h1 class="price">Rp<?= number_format($data1['harga_brg']); ?></h1>
							<p class="small-title">Special Promo</p>
							<div class="coming-time">
								<div class="clearfix" data-countdown="2021/02/30"></div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
			<?php } ?>
		</div>
	</div>
	</section>
	<!-- /End Cowndown Area -->

	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
			<?php
				$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 17,1");
		
				while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
				<div class="col-lg-6 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
					<a href="product-details.php?id=<?= $data1['id_brg']?>">
						<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
						<div class="content">
							<p class="date"><?= date('d M y,l');?></p>
							<a href="blog-single-sidebar.php" class="title">Look so Good yeah, Look so SWEET.</a>
							<a href="blog-single-sidebar.php" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<?php } ?>
				<?php
				$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 18,1");
		
				while ($data1 = mysqli_fetch_assoc($query1)) {
						?>	
				<div class="col-lg-6 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
					<a href="product-details.php?id=<?= $data1['id_brg']?>">
						<img src="admin/<?= $data1['gambar_brg']?>" alt="#">
						<div class="content">
							<p class="date"><?= date('d M y,l');?></p>
							<a href="blog-single-sidebar.php" class="title">Look at You, Now Look At Me.</a>
							<a href="blog-single-sidebar.php" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 0,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 0,1");
						
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
	</div>
	<div class="modal fade" id="2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 1,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 1,1");
						
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
	</div>
	<div class="modal fade" id="3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 2,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 2,1");
						
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
	</div>
	<div class="modal fade" id="4" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 3,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 3,1");
						
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
	</div>
	<div class="modal fade" id="5" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 4,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 4,1");
						
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
	</div>
	<div class="modal fade" id="6" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 5,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 5,1");
						
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
	</div>
	<div class="modal fade" id="7" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 6,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 6,1");
						
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
	</div>
	<div class="modal fade" id="8" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 7,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 7,1");
						
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
	</div>
	<div class="modal fade" id="9" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 8,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 8,1");
						
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
	</div>
	<div class="modal fade" id="10" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
									<?php
											$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 9,1");
									
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
								$query1 = mysqli_query($con, "SELECT * FROM barang LIMIT 9,1");
						
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
	</div>
    <!-- Modal end -->
	
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