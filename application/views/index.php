<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopezy</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Flex Slider -->
	<link rel="stylesheet" href="<?php echo asset_url()?>css/flexslider.css" type="text/css" media="screen" />
	<!-- Owl Carousel Assets -->
    <link href="<?php echo asset_url()?>css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo asset_url()?>css/owl.theme.default.min.css" rel="stylesheet">
    <!-- MEGAMENU.CSS -->
    <link rel="stylesheet" href="<?php echo asset_url()?>css/megamenu.css">
    <!-- POPUP.CSS -->
    <link rel="stylesheet" href="<?php echo asset_url()?>css/login-popup.css">
	<!-- Wordpress Style.css -->
	<link rel="stylesheet" href="<?php echo asset_url()?>css/style.css">
</head>
<body>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="header-main">
				<h1 class="site-title"><a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/logo.png" alt=""></a></h1>
				<div class="right-header">
					<!-- <div class="shopping-cart">
						<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/cart.png" alt="">cart<span>(0)</span></a>
					</div> -->
					<div class="user-profile">
						<a href="javascript:void(0)" rel="popuprel" class="popup"><img src="<?php echo asset_url()?>images/profile.png" alt="">user</a>
						<a href="javascript:void(0)" rel="popuprel2" class="popup hide"><img src="<?php echo asset_url()?>images/profile.png" alt="">user</a>
					</div>
					<div class="popupbox" id="popuprel">
						<div id="intabdiv" class="flex-body">
							<div class="left-block">
								<h2>Login</h2>
						    	<p>login first to get your cashback for the purchese you are going to made</p>
						    </div> 
							<div class="right-block">
							    
							    <form>
								    <ul>
								    	<li>
											<input type="text" value="" placeholder="Email" />
								    	</li>
								    	<li>
											<input type="text" value="" placeholder="Password" />
								    	</li>
								    	<li>
								    		<input type="submit" value="Login" class="btn btn-blue">
								    		<span class="more">
										      <span>Forgot your password?</span>
										      <p id="enter-text">Enter your Email Address here to receive a link to change password.</p>
										      <ul>
											    <li>
													<input type="text" value="" placeholder="Email" />
											    </li>
											    <li>
											    	<label></label>
								    				<input type="submit" value="Send Email" class="btn btn-blue">
								    			</li>
											  </ul>
										    </span>
								    	</li>
								    	<li><p>Don't have an account? <a href="javascript:void(0)" class="signup-button">Create One!</a></p></li>
								    </ul>
							    </form>
						    </div>      
						</div>
						<div id="close"><a href="#"><img src="<?php echo asset_url()?>images/close_pop.png" alt="close-button"></a></div>
					</div>
					<div class="popupbox2" id="popuprel2">
						<div id="intabdiv2" class="flex-body">
							<div class="left-block">
								<h2>New User? Sign Up</h2>
						    	<p>login first to get your cashback for the purchese you are going to made</p>
						    </div> 
					        <div class="right-block">
							    <form>
							    <ul>
							    	<li>
										<input type="text" value="" placeholder="Email Address" />
							    	</li>
							    	<li>
										<input type="password" value="" placeholder="Password" />
							    	</li>
							    	<li>
										<input type="password" value="" placeholder="Reenter Password" />
							    	</li>
							    	<li>
							    		<input type="submit" value="Sign up Now!" class="btn btn-blue">
							    	</li>
							    	<li><p>Already have an account? <a href="javascript:void(0)" class="signup-button2">Login!</a></p></li>
							    </ul>
							    </form>
						    </div> 
					    </div>
					    <div id="close2"><a href="#"><img src="<?php echo asset_url()?>images/close_pop.png" alt="close-button"></a></div>
					</div>
					<div id="fade"></div>
					<div class="serch-and--select">
						<div class="custom-select">
							<select>
							    <option value="0">Select items:</option>
							    <option value="1">Mobile</option>
							    <option value="2">winder cloathes</option>
							    <option value="3">Citroen</option>
							    <option value="4">Ford</option>
							    <option value="5">Honda</option>
							    <option value="6">Jaguar</option>
							    <option value="7">Land Rover</option>
							    <option value="8">Mercedes</option>
							    <option value="9">Mini</option>
							    <option value="10">Nissan</option>
							    <option value="11">Toyota</option>
							    <option value="12">Volvo</option>
							  </select>
						</div>
						<div class="search">
							<input type="text" name="" id="" placeholder="Search products..">
							<input type="submit" value="">
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu">
				<div class="container">
					<div class="menu">
						<ul>
							<li><a href="javascript:void(0)">Electronics</a>
								<ul>
									<li><a href="javascript:void(0)">Mobiles</a>
										<ul>
											<li><a href="http://marioloncarek.com">Samsung</a></li>
											<li><a href="#">Lenovo</a></li>
											<li><a href="#">Mi</a></li>
											<li><a href="#">Motorola</a></li>
											<li><a href="http://marioloncarek.com">OPPO</a></li>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Vivo</a></li>
											<li><a href="#">Honor</a></li>
											<li><a href="http://marioloncarek.com">Panasonic</a></li>
											<li><a href="#">Moto X4 6GB</a></li>
											<li><a href="#">Google Pixel 2</a></li>
											<li><a href="#">Honor 9 Lite</a></li>
										</ul>
									</li>
									<li><a href="#">Mobile Accessories</a>
										<ul>
											<li><a href="#">Mobile Cases</a></li>
											<li><a href="#">Headphones &amp; Headsets</a></li>
											<li><a href="#">Power Banks</a></li>
											<li><a href="#">Screenguards</a></li>
											<li><a href="#">Memory Cards</a></li>
											<li><a href="#">Smart Headphones</a></li>
											<li><a href="#">Mobile Cables</a></li>
											<li><a href="#">Chargers</a></li>
											<li><a href="#">Selfie Sticks</a></li>
											<li class="bold"><a href="#">Smart Wearable Tech</a></li>
											<li><a href="#">Smart Watches</a></li>
											<li><a href="#">Smart Glasses (VR)</a></li>
											<li><a href="#">Smart Bands</a></li>
											<li class="bold"><a href="#">Health Care Appliances</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0)">Mobiles</a>
										<ul>
											<li><a href="http://marioloncarek.com">Samsung</a></li>
											<li><a href="#">Lenovo</a></li>
											<li><a href="#">Mi</a></li>
											<li><a href="#">Motorola</a></li>
											<li><a href="http://marioloncarek.com">OPPO</a></li>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Vivo</a></li>
											<li><a href="#">Honor</a></li>
											<li><a href="http://marioloncarek.com">Panasonic</a></li>
											<li><a href="#">Moto X4 6GB</a></li>
											<li><a href="#">Google Pixel 2</a></li>
											<li><a href="#">Honor 9 Lite</a></li>
										</ul>
									</li>
									<li><a href="#">Mobile Accessories</a>
										<ul>
											<li><a href="#">Mobile Cases</a></li>
											<li><a href="#">Headphones &amp; Headsets</a></li>
											<li><a href="#">Power Banks</a></li>
											<li><a href="#">Screenguards</a></li>
											<li><a href="#">Memory Cards</a></li>
											<li><a href="#">Smart Headphones</a></li>
											<li><a href="#">Mobile Cables</a></li>
											<li><a href="#">Chargers</a></li>
											<li><a href="#">Selfie Sticks</a></li>
											<li><a href="#">Smart Wearable Tech</a></li>
											<li><a href="#">Smart Watches</a></li>
											<li><a href="#">Smart Glasses (VR)</a></li>
											<li><a href="#">Smart Bands</a></li>
											<li><a href="#">Health Care Appliances</a></li>
										</ul>
									</li>
									<li><a href="#">Mobile Accessories</a>
										<ul>
											<li><a href="#">Mobile Cases</a></li>
											<li><a href="#">Headphones &amp; Headsets</a></li>
											<li><a href="#">Power Banks</a></li>
											<li><a href="#">Screenguards</a></li>
											<li><a href="#">Memory Cards</a></li>
											<li><a href="#">Smart Headphones</a></li>
											<li><a href="#">Mobile Cables</a></li>
											<li><a href="#">Chargers</a></li>
											<li><a href="#">Selfie Sticks</a></li>
											<li><a href="#">Smart Wearable Tech</a></li>
											<li><a href="#">Smart Watches</a></li>
											<li><a href="#">Smart Glasses (VR)</a></li>
											<li><a href="#">Smart Bands</a></li>
											<li><a href="#">Health Care Appliances</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">TVs &amp; Appliances</a>
								<ul>
									<li><a href="javascript:void(0)">School</a>
										<ul>
											<li><a href="http://marioloncarek.com">Lidership</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Locations</a></li>
											<li><a href="#">Careers</a></li>
										</ul>
									</li>
									<li><a href="#">Study</a>
										<ul>
											<li><a href="#">Undergraduate</a></li>
											<li><a href="#">Masters</a></li>
											<li><a href="#">International</a></li>
											<li><a href="#">Online</a></li>
										</ul>
									</li>
									<li><a href="#">Research</a>
										<ul>
											<li><a href="#">Undergraduate research</a></li>
											<li><a href="#">Masters research</a></li>
											<li><a href="#">Funding</a></li>
										</ul>
									</li>
									<li><a href="#">Something</a>
										<ul>
											<li><a href="#">Sub something</a></li>
											<li><a href="#">Sub something</a></li>
											<li><a href="#">Sub something</a></li>
											<li><a href="#">Sub something</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="http://marioloncarek.com">Men</a>
								<ul>
									<li><a href="http://marioloncarek.com">Today</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Sport</a></li>
								</ul>
							</li>
							<li><a href="http://marioloncarek.com">Women</a>
								<ul>
									<li><a href="#">School</a>
										<ul>
											<li><a href="#">Lidership</a></li>
											<li><a href="#">History</a></li>
											<li><a href="#">Locations</a></li>
											<li><a href="#">Careers</a></li>
										</ul>
									</li>
									<li><a href="#">Study</a>
										<ul>
											<li><a href="#">Undergraduate</a></li>
											<li><a href="#">Masters</a></li>
											<li><a href="#">International</a></li>
											<li><a href="#">Online</a></li>
										</ul>
									</li>
									<li><a href="#">Study</a>
										<ul>
											<li><a href="#">Undergraduate</a></li>
											<li><a href="#">Masters</a></li>
											<li><a href="#">International</a></li>
											<li><a href="#">Online</a></li>
										</ul>
									</li>
									<li><a href="#">Empty sub</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)">Baby &amp; Kids</a></li>
							<li><a href="javascript:void(0)">Home &amp; Furniture</a></li>
							<li><a href="javascript:void(0)">Sports, Books &amp; More</a></li>
							<li><a href="javascript:void(0)">Offer Zone</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div id="main" class="site-main">
			<!-- BANNER -->
			<div class="banner">
				<div class="flexslider">
					<ul class="slides">
						<li><a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/banner-1.jpg" alt=""></a></li>
						<li><a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/banner-2.jpg" alt=""></a></li>
						<li><a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/banner-1.jpg" alt=""></a></li>
						<li><a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/banner-2.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
			<!-- TOP SALE -->
			<div class="top-sale">
				<div class="container">
					<div class="block">
						<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/tranding-product-1.jpg" alt=""></a>
					</div>
					<div class="block">
						<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/tranding-product-2.jpg" alt=""></a>
					</div>
					<div class="block">
						<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/tranding-product-3.jpg" alt=""></a>
					</div>
				</div>
			</div>
			<!-- PRODUCT SECTION -->
			<div class="container">
				<div class="product-section">
					<h2>today's deal</h2>
					<div class="owl-carousel owl-theme four-item-slide">
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
								<span class="best-buy"><img src="<?php echo asset_url()?>images/amazon.png" alt=""></span>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
					</div>
				</div>
			</div>
			<!-- SUB BANNER -->
			<div class="sub-banner">
				<div class="container">
					<div class="block">
						<a href="javascript:void(0)" class="hero-img">
							<img src="<?php echo asset_url()?>images/Sub-Banner-01.jpg" alt="">
						</a>
						<div class="caption">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/amazon.png" alt=""></a>
							<h3><span>Surveillance</span><span>Camera</span></h3>
						</div>
					</div>
					<div class="block">
						<a href="javascript:void(0)" class="hero-img">
							<img src="<?php echo asset_url()?>images/Sub-Banner-02.jpg" alt="">
						</a>
						<div class="caption">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/amazon.png" alt=""></a>
							<h3><span>Surveillance</span><span>Camera</span></h3>
						</div>
					</div>
				</div>
			</div>
			<!-- PRODUCT SECTION -->
			<div class="container">
				<div class="product-section">
					<h2>Treding Products</h2>
					<div class="owl-carousel owl-theme four-item-slide">
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
						<div class="item">
							<figure>
								<img src="<?php echo asset_url()?>images/product-img-1.jpg" alt="">
								<div class="discount">5% off</div>
							</figure>
							<h6><a href="javascript:void(0)">hair treammer</a></h6>
							<div class="price">
								<ins>$80.00</ins>
								<del>$92.00</del>
							</div>
							<a href="javascript:void(0)" class="btn">add to cart</a>
						</div>
					</div>
				</div>
			</div>
			<!-- AD BANNER SPACE -->
			<div class="container">
				<div class="ad-banner--space">
					<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/Banner-Miracles.jpg" alt=""></a>
				</div>
			</div>
			<!-- PRODUCT SECTION -->
			<div class="container">
				<div class="product-section">
					<h2>Treding Products</h2>
					<div class="owl-carousel owl-theme half-show-slide">
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-1.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-2.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-1.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-2.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-1.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="javascript:void(0)"><img src="<?php echo asset_url()?>images/top-sale-2.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="block">
						<a href="javascript:void(0)" class="footer-logo"><img src="<?php echo asset_url()?>images/logo.png" alt=""></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus dolorem earum non voluptatum dicta magnam, nesciunt molestiae a at sit dignissimos fugit nam nisi, expedita. Delectus iusto odio fugit explicabo!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius vel esse nesciunt illum id ullam laboriosam eos sunt atque debitis, molestiae illo rem praesentium, laudantium dicta tempore maiores dolor et!</p>
					</div>
					<div class="block">
						<h3>Our Link</h3>
						<ul>
							<li><a href="javascript:void(0)">about us</a></li>
							<li><a href="javascript:void(0)">our offers</a></li>
							<li><a href="javascript:void(0)">Brands</a></li>
							<li><a href="javascript:void(0)">Gift Certificates</a></li>
							<li><a href="javascript:void(0)">Specials</a></li>
							<li><a href="javascript:void(0)">My Account</a></li>
							<li><a href="javascript:void(0)">Order History</a></li>
						</ul>
					</div>
					<div class="block">
						<h3>contact us</h3>
						<div class="contact-info">
							<figure><img src="<?php echo asset_url()?>images/icon-location.png" alt=""></figure>
							<p><span class="title">Office Location</span>2569 green park, lorem upsum</p>
						</div>
						<div class="contact-info">
							<figure><img src="<?php echo asset_url()?>images/icon-phone.png" alt=""></figure>
							<p><span class="title">Contact Number</span>00 353(1)6781600</p>
						</div>
					</div>
				</div>
				<p class="copyright">Copyright &copy; 2018 shopezy.in / <a href="javascript:void(0)">All Rights Reserved</a></p>
			</div>
		</footer>
	</div>
	<!-- Jquery Library -->
  	<script type="text/javascript" src="<?php echo asset_url()?>js/jquery-2.2.4.js"></script>
  	<!-- Wardpress Default functions.js -->
  	<script type="text/javascript" src="<?php echo asset_url()?>js/functions.js"></script>
  	<!-- FlexSlider -->
  	<script defer src="<?php echo asset_url()?>js/jquery.flexslider.js"></script>
  	<!-- SCRIPT FOR MEGAMENU -->
  	<script src="<?php echo asset_url()?>js/megamenu.js"></script>
  	<!-- SCRIPT FOR LOGIN POPUP -->
  	<script type="text/javascript" src="<?php echo asset_url()?>js/login-popup.js"></script>
  	<!-- Owl -->
  	<script src="<?php echo asset_url()?>js/owl.carousel.js"></script>

  	<script>
  		jQuery(document).ready(function() {
  			/* -----------------------------------
        	Script For Banner Flex Slider
        	----------------------------------- */
			$('.flexslider').flexslider({
		        animation: "slide",
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
		    });

			/* -----------------------------------
        	Script For Login Popup
        	----------------------------------- */
		    // Configure/customize these variables.
		    var showChar = 0;  // How many characters are shown by default
		    var ellipsestext = " ";
		    var moretext = "Forgot your password?";
		    var lesstext = "Forgot your password?";


		    $('.more').each(function() {
		        var content = $(this).html();
		        if(content.length > showChar) {
		            var c = content.substr(0, showChar);
		            var h = content.substr(showChar, content.length - showChar);
		            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
		 
		            $(this).html(html);
		        }
		 
		    });
		 
		    $(".morelink").click(function(){
		        if($(this).hasClass("less")) {
		            $(this).removeClass("less");
		            $(this).html(moretext);
		        } else {
		            $(this).addClass("less");
		            $(this).html(lesstext);
		        }
		        $(this).parent().prev().toggle();
		        $(this).prev().toggle();
		        return false;
		    });


		    $('.signup-button').click(function(){
		    	$('#close a img').click();
		    	$('a[rel=popuprel2]').click();
		    })
		    $('.signup-button2').click(function(){
		    	$('#close a img').click();
		    	$('a[rel=popuprel]').click();
		    })

		    /* -----------------------------------
        	Script For Owl Carousal
        	----------------------------------- */
		    $(".four-item-slide").owlCarousel({
		    	loop:true,
		    	navigation:true,
		    	items:5,
		    	autoplay:true,
		    	margin:10,
		    	smartSpeed:3000,
		    	responsive:{
		    		0:{
		    		items:4,
		    		margin:2,
		    		autoplay:true,
		    		autoplayTimeout:6000,
		    		},
		    		640:{
		    			items:4,
		    			margin:5,
		    			autoplay:true,
		    			autoplayTimeout:6000,
		    		},
		    		980:{
		    			items:5,
		    			margin:10,
		    			autoplay:false,
		    			autoplayTimeout:6000,
		    		}
		    	}
		    });
		    $('.half-show-slide').owlCarousel({
		        items:4,
		        loop:true,
		        margin:5,
		        lazyLoad:true,
		        center:true,
		        smartSpeed:4000,
		        responsive:{
		            0:{
		                items:2,
		            },
		            480:{
		                items:2,
		            },
		            600:{
		                items:4,
		            }
		        }
		    });
  		});
  	</script>
</body>
</html>