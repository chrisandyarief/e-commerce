<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="images/png" href="ui/images/icontab.ico"/>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ui/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui//fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="ui/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<button class="btn btn-primary" id="signup">SIGNUP</button>
					<button class="btn btn-primary" id="login">LOGIN</button>
					<button class="btn btn-primary hidden" id="logout">LOGOUT</button>
				</div>

				<!-- Logo2 -->
				<a href="/" class="logo2">
					<img src="ui/images/logo3.png" alt="IMG-LOGO">
				</a>
				<div class="topbar-child2">
					<span class="topbar-email">
						email@bukantokosebelah.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>IDR</option>
						</select>
					</div>

					<!--  -->
					<a href="#" class="header-wrapicon1 dis-block m-l-30">
						<img src="ui/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="ui/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?= ($amount) ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php foreach (($datacart?:[]) as $barang): ?>
									<li class="header-cart-item">
										<div class="header-cart-item-img">
											<img src=<?= (trim($barang['image'])) ?> alt="IMG">
										</div>

										<div class="header-cart-item-txt">
											<a href="#" class="header-cart-item-name">
												<?= (trim($barang['name']))."
" ?>
											</a>

											<span class="header-cart-item-info">
												1 x <?= (trim($barang['price']))."
" ?>
											</span>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>

							<div class="header-cart-total">
								Total: <?= (trim($harga))."
" ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<button href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" id="checkout">
										Check Out
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="/">Home</a>
							</li>

							<li>
								<a href="/product">Shop</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>
	</header>

	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(ui/images/bag2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Casual Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="/product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
				<div class="item-slick1 item1-slick1" style="background-image: url(ui//images/bag3.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Teen Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							Coming Soon 2019
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="/product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
				<div class="item-slick1 item1-slick1" style="background-image: url(ui/images/bag4.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Leather Bags
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							Coming Soon 2019
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="/product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<?php foreach (($bestSeller?:[]) as $barangBest): ?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
											<img src=<?= (trim($barangBest['image'])) ?> alt="IMG-PRODUCT">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<!-- Button -->
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
												<?= (trim($barangBest['name']))."
" ?>
											</a>

											<span class="block2-price m-text6 p-r-5">
												IDR <?= (trim($barangBest['price']))."
" ?>
											</span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
							<?php foreach (($featured?:[]) as $barangFeatured): ?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
											<img src=<?= (trim($barangFeatured['image'])) ?> alt="IMG-PRODUCT">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="#" class="block2-name dis-block s-text3 p-b-5">
												<?= (trim($barangFeatured['name']))."
" ?>
											</a>

											<span class="block2-oldprice m-text7 p-r-5">
												IDR <?= (trim($barangFeatured['price']))."
" ?>
											</span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
							<?php foreach (($sale?:[]) as $barangSale): ?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
											<img src=<?= (trim($barangSale['image'])) ?> alt="IMG-PRODUCT">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
												<?= (trim($barangSale['name']))."
" ?>
											</a>

											<span class="block2-price m-text6 p-r-5">
												IDR <?= (trim($barangSale['price']))."
" ?>
											</span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="top-rate" role="tabpanel">
						<div class="row">
							<?php foreach (($topRate?:[]) as $barangTop): ?>
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
									<div class="block2">
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
											<img src=<?= (trim($barangTop['image'])) ?> alt="IMG-PRODUCT">

											<div class="block2-overlay trans-0-4">
												<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
													<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
													<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
												</a>

												<div class="block2-btn-addcart w-size1 trans-0-4">
													<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
														Add to Cart
													</button>
												</div>
											</div>
										</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
												<?= (trim($barangTop['name']))."
" ?>
											</a>

											<span class="block2-price m-text6 p-r-5">
												IDR <?= (trim($barangTop['price']))."
" ?>
											</span>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Cash On Delivery
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 123 Ciumbuleuit, Bandung, West Java or email us on email@bukatokosebelah.com
					</p>

					<div class="flex-m p-t-30">
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@bukantokosebelah.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="ui/images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="ui/images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="ui/images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="ui/images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="ui/images/icons/discover.png" alt="IMG-DISCOVER">
			</a>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<div class="hidden" id="checkout-popup">
		<div>
			<h1>Select Your Payment Method</h1><br>
			<form>
				<input type="radio" name="payment_method" value="cc" id="cc" checked><img src="ui/images/icons/visa.png">
				<input type="radio" name="payment_method" value="paypal" id="paypal"><img src="ui/images/icons/paypal.png">
				<input type="radio" name="payment_method" value="cod" id="cod"><img src="ui/images/icons/express.png">
				<input type="button" id="nextCheckout" value="Next">
			</form>
		</div>

	</div>

	<!-- Container Selection1 -->
	<div class="hidden" id="signup-popup">
		<div>
			<h1 class="s-text12 p-b-30">Create Your Account</h1><br>
			<form id="form_signup" action="/e-commerce/signup">
			  <div class="form-group">
			    <input type="text" class="form-control" id="signup-username" placeholder="Username" name="username" >
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="signup-password" placeholder="Password" name="password">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
			  </div>
			  <div class="form-group">
			    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phonenumber">
			  </div>
			  <div class="form-group">
			    <input type="text" class="form-control" id="address" placeholder="Address" name="address">
			  </div>
			  <input type="submit" class="btn btn-primary">
			  <input type="button" class="btn btn-primary" value="Cancel" id="cancel-signup">
			</form>
			<div class="login-help">
				<button class="btn btn-primary">Have an Account?</button></br>
			</div>
		</div>
	</div>

	<div class="hidden" id="login-popup">
		<div>
			<h1 class="s-text7">Login to Your Account</h1><br>
			<form id="form_login" action="/e-commerce/login">
			  <div class="form-group">
			    <input type="text" class="form-control" id="login-username" placeholder="Username" name="username" >
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="login-password" placeholder="Password" name="password">
			  </div>
			  <input type="submit" class="btn btn-primary">
			  <input type="button" class="btn btn-primary" value="Cancel" id="cancel">
			</form>
		</div>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="ui/vendor/user/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/slick/slick.min.js"></script>
	<script type="text/javascript" src="ui/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/user/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function($){
		$('#form_signup').submit(function(e){
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			console.log(form.serialize());
			$.ajax({
				url : url,
				type : 'POST',
				data : form.serialize(),
				success : function(data){
					if (data == "success") {
						swal("Sign Up Complete :)");
						location.reload();
					}
					else{
						swal("ERROR!");
					}
				}
			});
		});
		$('#form_login').submit(function(e){
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			console.log(form.serialize());
			$.ajax({
				url : url,
				type : 'POST',
				data : form.serialize(),
				success : function(data){
					if (data == "success") {
						swal("Login Complete :)");
						$('#login-popup').addClass("hidden");
						location.reload();
					}
					else{
						swal("ERROR!");
					}
				}
			});
		});
		$('#login').click(function(){
			$('#login-popup').removeClass("hidden");
		})
		$('#signup').click(function(){
			$('#signup-popup').removeClass("hidden");
		})
		$('#cancel').click(function(){
			$('#login-popup').addClass("hidden");
		})
		$('#cancel-signup').click(function(){
			$('#signup-popup').addClass("hidden");
		})
		$('.block2-btn-addcart').click(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
				$.ajax({
					url : "/e-commerce/addToCart",
					type : "POST",
					async : true,
					data : nameProduct,
					success : function(data){
						if (data == "No User Active") {
							swal("Please Login First :)");
						}
						else{
							swal(nameProduct, "is added to Cart !");
						}
					}
				});
		});
		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('#checkout').click(function(){
			console.log($(".header-cart"));
			$(".header-cart").removeClass("show-header-dropdown");

			$("#checkout-popup").removeClass("hidden");
		});

		$("#nextCheckout").click(function(event) {
			var cart = [];
			<?php foreach (($datacart?:[]) as $barang): ?>
				cart.push("<?= ($barang['name']) ?>")
				<?php endforeach; ?>

				var status;
				if($("input[type=radio]:checked").val()!="cod"){
					status="ok";
				}
				else{
					status="pending";
				}

				$.ajax({
					url : "/checkout",
					data : {data : cart, status : status},
					type : "POST",
					success : function(data){
						if (data == "success") {
							swal("Transaction Success");
							location.reload();
						}
						else{
							swal("Try Diffrent Method");
						}
					}
				});
		})
	});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="ui/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="ui/js/main.js"></script>

</body>
</html>
