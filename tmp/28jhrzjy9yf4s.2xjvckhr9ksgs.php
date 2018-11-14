<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ui/images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/vendor/user/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="ui/css/main.css">
	<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<div class="topbar-child2">
					<span class="topbar-email">
						email@bukantokosebelah.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>IDR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="/" class="logo">
					<img src="ui/images/logo3.png" alt="IMG-LOGO">
				</a>

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
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="ui/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="ui/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					</div>
				</div>
			</div>
		</header>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!-- Product -->
				<div class="row">
					<?php foreach (($dataproduct?:[]) as $img): ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src=<?= (trim($img['image'])) ?> alt="IMG-PRODUCT">

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
									<span class="block2-name dis-block s-text3 p-b-5">
										<?= (trim($img['name']))."
" ?>
									</span>
									<span>
										<?= (trim($img['description']))."
" ?>
									</span>
								</br>
									<span class="block2-price m-text6 p-r-5">
										 IDR <?= (trim($img['price']))."
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

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>


<div class="hidden" id="signup-popup">
	<div>
		<h1>Login to Your Account</h1><br>
		<form>
			<input type="text" name="user" placeholder="Username"><br>
			<input type="password" name="pass" placeholder="Password">
			<input type="text" name="email" placeholder="E-mail"><br>
			<input type="number" name="phone" placeholder="Phone Number"><br>
			<input type="text" name="address" placeholder="Address"><br>
			<input type="submit" name="signup" class="login loginmodal-submit" value="Signup">
			<input type="button" value="Cancel" class="cancel-login">
		</form>

		<div class="login-help">
			<a href="#">Have an Account?</a>
		</div>
	</div>
</div>

<div class="hidden" id="login-popup">
	<div>
		<h1>Create Your Account</h1><br>
		<form>
			<input type="text" name="user" placeholder="Username"><br>
			<input type="password" name="pass" placeholder="Password">
			<input type="submit" name="login" class="login loginmodal-submit" value="Login">
			<input type="button" value="Cancel" class="cancel-login">
		</form>

		<div class="login-help">
			<a href="#">Register</a> - <a href="#">Forgot Password</a>
		</div>
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

$(".selection-2").select2({
	minimumResultsForSearch: 20,
	dropdownParent: $('#dropDownSelect2')
});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="ui/vendor/user/slick/slick.min.js"></script>
<script type="text/javascript" src="ui/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="ui/vendor/user/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
$(document).ready({

});
$('#form_signup').submit(function(){
	var form = $(this);
	var url = form.attr('action');
	$.ajax({
		url : url,
		type : 'POST',
		data : form.serialize();
		success : function(data){

		}
	});
});
$('.cancel-login').click(function(){
	$("#login-popup").addClass("hidden");
})
$('.block2-btn-addcart').click(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	console.log(nameProduct);
		$.ajax({
			url : "/e-commerce/addToCart",
			type : "POST",
			async : true,
			data : nameProduct,
			success : function(data){
				if (data == "No User Active") {
					console.log(data);
					$("#login-popup").removeClass("hidden");
				}
				else{
					swal(nameProduct, "is added to Cart !");
				}
			}
		});
});
$('.block2-btn-addwishlist').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
});
</script>
<!--===============================================================================================-->
<script src="ui/js/main.js"></script>

</body>
</html>
