<!-- Start Header/Navigation -->
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
	<a class="navbar-brand" href="/">Furni<span>.</span></a>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsFurni">
		@yield('navbar')

		<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
			<li class="user">
				<a class="nav-link" href="#"><img src="../images/user.svg">
					<ul class="author">
						<li><a class="nav-link" href="">Đăng Ký</a></li>
						<li><a class="nav-link" href="">Đăng Nhập</a></li>
					</ul>
				</a>
			</li>
			<li><a class="nav-link" href="cart.html"><img src="../images/cart.svg"></a></li>
		</ul>
	</div>
</div>
	
</nav>
<!-- End Header/Navigation -->

