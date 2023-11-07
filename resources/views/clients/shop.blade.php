@extends('layouts.client');

@section('navbar')
<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
	<li class="nav-item ">
		<a class="nav-link" href="/">Home</a>
	</li>
	<li class="active"><a class="nav-link" href="shop">Shop</a></li>
	<li><a class="nav-link" href="about">About us</a></li>
	<li><a class="nav-link" href="services">Services</a></li>
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
					<h1>Shop</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
@endsection

@section('product')

<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="title-shop">Keyboard</div>
		<div class="row ">

			<!-- Start Column 1 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 pb-3 ">
				<a class="product-item" href="#">
					<img src="images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)
					</h3>
					<strong class="product-price">850.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 1 -->


			<!-- Start Column 2 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 mb-3">
				<a class="product-item" href="#">
					<img src="images/keyboard-AKKO-world-tour-gear.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Bàn phím cơ Akko Worldtour gear</h3>
					<strong class="product-price">1.000.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
				<a class="product-item" href="#">
					<img src="images/keyboard-AKKO-world-tour-pink.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Bàn phím cơ Akko 3068 Tokyo Worldtour – Mini Bluetooth</h3>
					<strong class="product-price">900.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
				<a class="product-item" href="#">
					<img src="images/keyboard-keychron-c1-0.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Bàn phím cơ Keychron C1 (87 Key, Wired, Hotswap)</h3>
					<strong class="product-price">1.290.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 4 -->


		</div>
		<div class="pagination">
			<button class="pagination-button "><i class="fa-solid fa-angle-left"></i></button>
			<ul class="pagination-list">
				<li class="pagination-item active">1</li>
				<li class="pagination-item">2</li>
				<li class="pagination-item">3</li>
			</ul>
			<button class="pagination-button "><i class="fa-solid fa-angle-right"></i></button>
		</div>
	</div>
</div>
<!-- End Product Section -->

<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="title-shop">MOUSE</div>
		<div class="row ">

			<!-- Start Column 1 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 pb-3 ">
				<a class="product-item" href="#">
					<img src="images/Chuột Gaming Có Dây T-WOLF V7 Led.jpg" class="img-fluid product-thumbnail">
					<h3 class="product-title">Mouse có dây T-WOLF V7 LED USB Gaming </h3>
					<strong class="product-price">750.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 1 -->


			<!-- Start Column 2 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 mb-3">
				<a class="product-item" href="#">
					<img src="images/Cooler Master MM310 Ergonomic Optical Gaming.jpg"
						class="img-fluid product-thumbnail">
					<h3 class="product-title">Cooler Master MM310 Ergonomic Optical Gaming Mouse - White - MM-310-WWOL1
					</h3>
					<strong class="product-price">400.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 2 -->

			<!-- Start Column 3 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
				<a class="product-item" href="#">
					<img src="images/mouse DareU EM901X RGB Superlight Wireless White Blue.png"
						class="img-fluid product-thumbnail">
					<h3 class="product-title">mouse DareU EM901X RGB Superlight Wireless White Blue</h3>
					<strong class="product-price">900.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 3 -->

			<!-- Start Column 4 -->
			<div class="product col-12 col-md-4 col-lg-3 mb-5 mb-md-0 ">
				<a class="product-item" href="#">

					<img src="images/Razer Ouroboros gaming mouse gets official_ fits both hands, changes shape.jpg"
						class="img-fluid product-thumbnail">
					<h3 class="product-title">Razer Ouroboros gaming mouse gets official_ fits both hands</h3>
					<strong class="product-price">790.000đ</strong>

					<span class="icon-cross">

						<img src="images/cross.svg" class="img-fluid">
					</span>

				</a>

			</div>
			<!-- End Column 4 -->


		</div>
		<div class="pagination">
			<button class="pagination-button "><i class="fa-solid fa-angle-left"></i></button>
			<ul class="pagination-list">
				<li class="pagination-item active">1</li>
				<li class="pagination-item">2</li>
				<li class="pagination-item">3</li>
			</ul>
			<button class="pagination-button "><i class="fa-solid fa-angle-right"></i></button>
		</div>
	</div>
</div>
<!-- End Product Section -->



@endsection