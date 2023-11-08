@extends('layouts.client')

@section('navbar')
<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
	<li class="nav-item ">
		<a class="nav-link" href="">Home</a>
	</li>
	<li><a class="nav-link" href="shop">Shop</a></li>
	<li class=" active"><a class="nav-link" href="about">About us</a></li>
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
					<h1>Về chúng tôi</h1>
					
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
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Tại sao chọn chúng tôi?</h2>
						<p>Miễn phí ship, hỗ trợ 24/7, có thể đổi trả hàng, dễ dàng mua sắm</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Mua sắm ở cửa hàng sẽ được freeship toàn quốc</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Dễ dàng mua sắm </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Được nhân viên cửa hàng hỗ trợ 24/7.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
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

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/19286c1f-272a-4207-a1db-5cf7310f5d59.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

@endsection
