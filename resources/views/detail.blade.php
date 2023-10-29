<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="/Black Gold Illustration Gear Logo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="../css/tiny-slider.css" rel="stylesheet">
		<link href="../css/app.css" rel="stylesheet">
		<title>Furni Technology </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li><a class="nav-link" href="shop.html">Shop</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="blog.html">Blog</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="../images/user.svg"></a></li>
						<li><a class="nav-link" href="cart.html"><img src="../images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Header/Navigation -->

		<!-- start hero	section -->
		<div class="hero">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<div class="intro-excerpt">
							<h1>DETAIL PRODUCT</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end hero section -->

		<!-- start detail section -->
		<form class="detail-section">
			<div class="container mt-5">
				<div class="row justify-content-between">
					<div class="col-md-6 col-sm-12">
						<div class="detail-imgmain col-12  ">
							<img src="../images/ban-phim-co-cao-cap.jpg" alt="" class="" id="imgmain">
						</div>
						<div class=" col-12 mt-2 mb-3">
							<div class=" d-flex justify-content-between align-items-center">
								<i class="fa-solid fa-angle-left fs-2  m-2" id="prev"></i>
								<div class="detail-img col-11 ">
									<img src="../images/ban-gaming-fufutech-k27-9154.jpg" alt="" class="imgsub ">
									<img src="../images/ban-phim-co-cao-cap.jpg" alt="" class="imgsub ">
									<img src="../images/keyboard-AKKO-world-tour-pink.jpg" alt="" class="imgsub ">
									<img src="../images/ban-phim-co-cao-cap.jpg" alt="" class="imgsub ">
									<img src="../images/keyboard-fuhlen-D87S.jpg" alt="" class="imgsub ">
									<img src="../images/mouseLogitech G502 Hero Gaming.jpg" alt="" class="imgsub ">
								</div>
								<i class="fa-solid fa-angle-right fs-2 " id="next"></i>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="detail-text">
							<h5 class="text-black pb-3 border-bottom border-2 border-dark">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)</h5>
							<span class="fs-3 text-danger me-2">1.890.000đ</span>
							<del class="fs-5">2.290.000đ</del>
							<div class="mt-2">
								<div class="detail-parameter">
									<h5>Thông số sản phẩm</h5>
									<ul>
										<li>Sử dụng Blue Switch của Fuhlen</li>
										<li>Vỏ làm bằng kim loại siêu bền.</li>
										<li>Led 7 màu với nhiều hiệu ứng đẹp mắt</li>
										<li>Thiết kế Layout chuẩn 104 phím</li>
										<li>Vỏ nhôm cao cấp</li>
									</ul>
								</div>
							</div>
							<button class="btn btn-outline-dark " type="submit">
								<img src="./images/cart.svg" class="" alt=""> Thêm vào giỏ hàng
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end detail section -->
		<script>
			
			var next=document.getElementById('next');
	var prev=document.getElementById('prev');
	var subImgs=document.getElementsByClassName('imgsub');
	var mainImg=document.getElementById('imgmain');
	var carousel=document.querySelector('.detail-img');
	var fistImg=document.getElementsByClassName('imgsub')[0];
	let fistImgWith= fistImg.offsetWidth +10;
	
	var currentImageIndex = 0; // Chỉ mục của ảnh hiện tại

	// Hàm hiển thị ảnh theo chỉ mục
	function showImage(index) {
		prev.style.display = index==0 ? 'none' : 'block';
		next.style.display = index==subImgs.length-1 ? 'none' : 'block';
	// Ẩn tất cả các ảnh
	for (let i = 0; i < subImgs.length; i++) {
		subImgs[i].classList.remove("active");
	}
	subImgs[index].classList.add("active");

	mainImg.setAttribute('src',subImgs[index].getAttribute('src'));
	
	
	}

	// Bắt sự kiện khi click vào nút "Next"
	next.addEventListener('click', (e) =>{
		currentImageIndex ++;
		if(currentImageIndex == subImgs.length-1){
			currentImageIndex = subImgs.length-1;
		}
		e.preventDefault();
		carousel.scrollLeft +=  fistImgWith;
		
		showImage(currentImageIndex);
		
		
	});

	// Bắt sự kiện khi click vào nút "Prev"
	prev.addEventListener('click', function (e) {
	currentImageIndex --;
	if(currentImageIndex == 0){
		prev.style.display="none";
	}
	e.preventDefault();
	carousel.scrollLeft -= fistImgWith;
	
	showImage(currentImageIndex);
	});

	// Hiển thị ảnh đầu tiên khi trang web được tải
	showImage(currentImageIndex);

		</script>
		
		<!-- start information product section -->
		<div class="inforProduct">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mt-4 border-top border-1 border-dark">
						<div class="inforProduct-text ">
							<a class="description mt-2 text-black " id="collapse1"  >Thông tin sản phẩm</a>
							<a class="description mt-2 " id="collapse2"  >Riview(0)</a>
						</div>
						<div class="collapse show " id="collapseExample1">
							<h6 class="card card-body col-12 col-md-10 ">
								Bàn phím cơ gaming Logitech G512 GX (Linear) có được vẻ ngoài hiện đại, kết hợp cùng cổng kết nối USB 2.0 đem lại tiện ích to lớn. Đồng thời, bàn phím còn được trang bị đèn LED RGB độc đáo, đem lại cá tính riêng cho người dùng. Sản phẩm vô cùng hữu ích đối với những người phải làm việc, giải trí xuyên suốt trên máy tính.		
							</h6>
						</div>
						<div class="collapse " id="collapseExample2">
							<h6 class="card card-body col-12 col-md-10 ">
								Bàn phím cơ gaming Logitech G512 GX (Linear) có được vẻ ngoài hiện đại, kết hợp cùng cổng kết nối USB 2.0 đem lại tiện ích to lớn. Đồng thời, bàn phím còn được trang bị đèn LED RGB độc đáo, đem lại cá tính riêng cho người dùng. Sản phẩm vô cùng hữu ích đối với những người phải làm việc, giải trí xuyên suốt trên máy tính.		sdhadjkadkk
							</h6>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<script>
			var collapse1 = document.getElementById('collapse1');
			var collapse2 = document.getElementById('collapse2');
			var collapseExample1 = document.getElementById('collapseExample1');
			var collapseExample2 = document.getElementById('collapseExample2');

			collapse1.addEventListener('click', function() {
			collapseExample1.classList.add('show');
			collapse1.classList.add('text-black'); 
			collapseExample2.classList.remove('show');
			collapse2.classList.remove('text-black'); 
			});
			collapse2.addEventListener('click', function() {
			collapseExample2.classList.add('show');
			collapse2.classList.add('text-black'); 
			collapseExample1.classList.remove('show');
			collapse1.classList.remove('text-black'); 
			});
		</script>
		<!-- end information product section -->

		<!-- start Relation procduct section -->
		<div class="relationProduct">
			<div class="container">
				<div class="row mt-5 mb-5">
					<h3 class="mb-3 text-black">Sản phẩm liên quan</h3>

					
					<div class="row ">
						<!-- Start Column 1 -->
						<div class="product col-12 col-md-6 col-lg-3 mb-5 mb-md-0 pb-3">
							<a class="product-item" href="cart.html">
								
								<img src="../images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">
								
								<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)</h3>
								
								<strong class="product-price">$50.00</strong>
								
								<span class="icon-cross">
									<img src="../images/cross.svg" class="img-fluid">
								</span>
								<a href="" class="button-detail ">Xem chi tiết</a>
							</a>
						</div>
						<!-- end Column 1 -->
						<!-- Start Column 2 -->
						<div class="product col-12 col-md-6 col-lg-3 mb-5 mb-md-0 pb-3">
							<a class="product-item" href="cart.html">
								
								<img src="../images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">
								
								<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 </h3>
								
								<strong class="product-price">$50.00</strong>
								
								<span class="icon-cross">
									<img src="../images/cross.svg" class="img-fluid">
								</span>
								<a href="" class="button-detail">Xem chi tiết</a>
							</a>
						</div>
						<!-- end Column 2 -->
						<!-- Start Column 3 -->
						<div class="product col-12 col-md-6 col-lg-3 mb-5 mb-md-0 pb-3">
							<a class="product-item" href="cart.html">
								
								<img src="../images/ban-phim-co-cao-cap.jpg" class="img-fluid product-thumbnail">
								
								<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)</h3>
								
								<strong class="product-price">$50.00</strong>
								
								<span class="icon-cross">
									<img src="../images/cross.svg" class="img-fluid">
								</span>
								<a href="" class="button-detail">Xem chi tiết</a>
							</a>
						</div>
						<!-- end Column 3 -->
						<!-- Start Column 4 -->
						<div class="product col-12 col-md-6 col-lg-3 mb-5 mb-md-0 pb-3">
							<a class="product-item" href="cart.html">
								
								<img src="../images/ban-gaming-fufutech-k27-9154.jpg" class="img-fluid product-thumbnail">
								
								<h3 class="product-title">Bàn phím cơ gaming SPARTAN TC3218 Black Gray (Blue Switch LED Rainbow)</h3>
								
								<strong class="product-price">$50.00</strong>
								
								<span class="icon-cross">
									<img src="../images/cross.svg" class="img-fluid">
								</span>
								<a href="" class="button-detail">Xem chi tiết</a>
							</a>
						</div>
						<!-- end Column 4 -->
					</div> 
				</div>
			</div>
		</div>
		<!-- end Relation procduct section -->
		

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="../images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="../images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Gửi thư cho shop</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						
						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">Cửa hàng
									<li><a href="#">Về Chúng tôi</a></li>
									<li><a href="#">Dịch vụ</a></li>
									<li><a href="#">Bản tin</a></li>
									<li><a href="#">Liên hệ</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">Chính sách chung
									<li><a href="#">Hỗ trợ</a></li>
									<li><a href="#">Chính sách vận chuyển</a></li>
									<li><a href="#">Chính sách bảo hành</a></li>
									<li><a href="#">Chính sách kiểm hàng</a></li>
									<li><a href="#">Bảo mật thông tin khách hàng</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">Danh sách sản phẩm
									<li><a href="#">Bàm phím</a></li>
									<li><a href="#">Chuột</a></li>
									<li><a href="#">Tai nghe</a></li>
									<li><a href="#">Bàn-ghế</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
			</p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src=".js/bootstrap.bundle.min.js"></script>
		<script src=".js/tiny-slider.js"></script>
		<script src=".js/custom.js"></script>
	</body>

</html>
