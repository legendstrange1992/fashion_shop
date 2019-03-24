<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kỳ Smile Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/chat.css')}}">
	<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('js/currency.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('login_v1/css/main.css')}}">
	<script src="http://localhost:3000/socket.io/socket.io.js"></script>

<!--===============================================================================================-->
</head>
<body class="animsition">
	<!-- Header -->
	@yield('header')

	<!-- Sidebar -->
	<aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					<li class="p-b-13">
						<a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
							Home
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							My Wishlist
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							My Account
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Track Oder
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Refunds
						</a>
					</li>

					<li class="p-b-13">
						<a href="#" class="stext-102 cl2 hov-cl1 trans-04">
							Help & FAQs
						</a>
					</li>
				</ul>

				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						@ CozaStore
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-01.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-01.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-02.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-03.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-03.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-04.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-04.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-05.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-05.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-06.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-06.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-07.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-07.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-08.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-08.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="{{asset('images')}}/gallery-09.jpg" data-lightbox="gallery" 
							style="background-image: url('{{asset('images')}}/gallery-09.jpg');"></a>
						</div>
					</div>
				</div>

				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						About Us
					</span>

					<p class="stext-108 cl6 p-t-27">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
					</p>
				</div>
			</div>
		</div>
	</aside>


	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<?php
						$cart = [];
						if(session()->has('giohang')){
							$cart = session()->get('giohang');
							$tongtien = 0;
							foreach ($cart as $key) {
								$tensanpham = '';
								$dongia = 0;
								$hinh = '';
								$soluong = 0;
								foreach ($key as $k => $v) {
									$tensanpham = $v['tensanpham'];
									$dongia = $v['dongia'];
									$hinh = $v['hinh'];
									$soluong += $v['soluong'];
								}
					 		?>
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="{{asset('images')}}/<?php echo $hinh;?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										<?php echo $tensanpham ?>
									</a>

									<span class="header-cart-item-info">
										<?php echo $soluong.' x $'.$dongia ?>
									</span>
								</div>
							</li>
						<?php  
							$tongtien += $soluong * $dongia;
							} 
						}
						?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: <?php if(isset($tongtien)) echo '$'.number_format($tongtien) ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="{{route('cart')}}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>
						
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Slider -->
	<section class="section-slide">
		@yield('slider')
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0">
		@yield('banner')
	</div>


	<!-- Product -->
	<section class="sec-product bg0 p-t-100 p-b-50">
	@yield('product')
	</section>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{route('WOMEN')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{route('MEN')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{route('BAG')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Bags
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Account
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{route('sign_up')}}" class="stext-107 cl7 hov-cl1 trans-04">
								Sign Up
							</a>
						</li>

						<li class="p-b-10">
							<a class="stext-107 cl7 hov-cl1 trans-04 login">
								<span style="color:#CCC;">Login</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						ADDRESS
					</h4>

					<p class="stext-107 cl7 size-201">
						12 Trịnh Đình Thảo, Hòa Thạnh, Tân Phú, TP.HCM
					</p>
					<p class="stext-107 cl7 size-201">
						Hotline: 0908456325
					</p>

					<div class="p-t-27">
						<a href="https://www.facebook.com/groups/DienDanSinhVienITC/" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a class="m-all-1">
						<img src="{{asset('images')}}/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a  class="m-all-1">
						<img src="{{asset('images')}}/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a  class="m-all-1">
						<img src="{{asset('images')}}/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a  class="m-all-1">
						<img src="{{asset('images')}}/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a  class="m-all-1">
						<img src="{{asset('images')}}/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
 	Địa Chỉ : <a href="http://itc.edu.vn/" target="_blank">12 Trịnh Đình Thảo, Hòa Thạnh, Tân Phú, TP.HCM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
	<!-- Login Modal -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search login_modal" style="width: 100%;">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
			</button>

			<form class="flex-w p-l-15" style="height: auto;border-radius: 10px;padding: 20px;" action="{{route('login_admin')}}" method='post'>
				{{  csrf_field() }}
				
				<div class="wrap-login100" style="box-shadow: 1px 1px 10px black;">
					<div class="login_trai">
						<div class="login100-pic js-tilt" data-tilt>
							<img src="{{asset('login_v1')}}/images/img-01.png" alt="IMG">
						</div>
					</div>
					<div class="login_phai">
						<div class="login100-form validate-form">
							<span class="login100-form-title">
								Admin Login
							</span>

							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<input class="input100" autocomplete="off" type="text" name="email" placeholder="Username">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fas fa-user"></i>
								</span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Password is required">
								<input class="input100" autocomplete="off" type="password" name="password" placeholder="Password">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
							</div>
							
							<div class="container-login100-form-btn">
								<input type="submit" class="login100-form-btn" value="Login">
							</div>

							<div class="text-center p-t-12">
								<span class="txt1">
									Forgot
								</span>
								<a class="txt2" href="#">
									Username / Password?
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="chat">
		<img class="icon_chat" src="{{asset('images')}}/chat.png" width="60" height="60" alt="" style="float:right;margin-top:-60px;">
		<div>
			<input class="user_client_chat" value="{{ Auth::user()->name ?? '' }}" maxlength="19" type="text" placeholder="nhập tên">
		</div>
		<div class="content_chat">
		</div>
		<input class="text_noidung" type="text" placeholder="Nhập nội dung chat ...." />
	</div>
	
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<script>
	$(function(){
		$('.js-show-modal-search').on('click', function(){
        	$('.ip_gh').focus();
    	});
	});
</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js') }}"></script>
	<script src="{{asset('js/chat_realtime.js') }}"></script>
	<script src="{{asset('js/giohang.js') }}"></script>
	<script src="{{asset('js/search_add_to_card.js') }}"></script>
</body>
</html>