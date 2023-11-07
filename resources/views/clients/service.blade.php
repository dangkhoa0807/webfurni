@extends('layouts.client')

@section('navbar')
<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
	<li class="nav-item ">
		<a class="nav-link" href="/">Home</a>
	</li>
	<li><a class="nav-link" href="shop">Shop</a></li>
	<li><a class="nav-link" href="about">About us</a></li>
	<li class=" active"><a class="nav-link" href="services">Services</a></li>
	<li><a class="nav-link" href="blog">Blog</a></li>
	<li><a class="nav-link" href="contact">Contact us</a></li>
</ul>

@endsection

@section('hero')
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Dịch vụ</h1>
					<p class="mb-4">Cửa hàng có nhiều dịch vụ và ưu đãi cho khách hàng</p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
							class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="images/Silver_X_Golden_LED_Mouse_and_Keyboard_Combo-removebg-preview.png"
						class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

@endsection

@section('whyChooseSection')

<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">


		<div class="row my-5">
			<div class="col-6 col-md-6 col-lg-3 mb-4">
				<div class="feature">
					<div class="icon">
						<img src="images/truck.svg" alt="Image" class="imf-fluid">
					</div>
					<h3>Fast &amp; Free Shipping</h3>
					<p>Mua sắm ở cửa hàng sẽ được freeship toàn quốc</p>
				</div>
			</div>

			<div class="col-6 col-md-6 col-lg-3 mb-4">
				<div class="feature">
					<div class="icon">
						<img src="images/bag.svg" alt="Image" class="imf-fluid">
					</div>
					<h3>Easy to Shop</h3>
					<p>Dễ dàng mua sắm </p>
				</div>
			</div>

			<div class="col-6 col-md-6 col-lg-3 mb-4">
				<div class="feature">
					<div class="icon">
						<img src="images/support.svg" alt="Image" class="imf-fluid">
					</div>
					<h3>24/7 Support</h3>
					<p>Được nhân viên cửa hàng hỗ trợ 24/7.</p>
				</div>
			</div>

			<div class="col-6 col-md-6 col-lg-3 mb-4">
				<div class="feature">
					<div class="icon">
						<img src="images/return.svg" alt="Image" class="imf-fluid">
					</div>
					<h3>Hassle Free Returns</h3>
					<p>Có thể đổi trả hàng nếu không vừa ý.</p>
				</div>
			</div>

		</div>

	</div>
</div>
<!-- End Why Choose Us Section -->

@endsection

@section('productservices')

<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="row">

			<!-- Start Column 1 -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title">Thế giới công nghệ.</h2>
				<p class="mb-4">Nhiều sản phẩm công nghệ hiện đại, của các thương hiệu lớn trên thế giới. </p>
				<p><a href="shop.html" class="btn">Khám phá</a></p>
			</div>
			<!-- End Column 1 -->

			<!-- Start Column 2 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
				<a class="product-item" href="cart.html">

					<img src="images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">

					<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)
					</h3>

					<strong class="product-price">850.000đ</strong>

					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black GrayBàn phím cơ gaming SPARTAN
						TC3218</h3>
					<strong class="product-price">1.000.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a class="product-item" href="cart.html">
					<img src="images/keyboard-AKKO-world-tour-gear.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">keyboard AKKO world tour gear</h3>
					<strong class="product-price">1.200.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 4 -->

		</div>
	</div>
</div>
<!-- End Product Section -->
@endsection