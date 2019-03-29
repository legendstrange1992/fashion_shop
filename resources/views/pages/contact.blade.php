@extends('layout.master')
@section('header')
<header class="header-v2" style='border-bottom: 0.5px solid #DDDDDD;'>
	<!-- Header desktop -->
	<div class="container-menu-desktop trans-03">
		<div class="wrap-menu-desktop">
			<nav class="limiter-menu-desktop p-l-45">
				
				<!-- Logo desktop -->		
				<a href="{{route('trangchu')}}" class="logo">
					<img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO">
				</a>

				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li>
							<a href="{{route('trangchu')}}">HOME</a>
						</li>
						<?php $i = 0;?>
						@foreach($loaisanpham as $lsp)
						<li>
							<a href="{{$lsp->tenloaisanpham}}">{{$lsp->tenloaisanpham}}</a>
						</li>
						@endforeach
					</ul>
				</div>	

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m h-full">
					<div class="flex-c-m h-full p-r-24">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
					</div>
						
					<div class="flex-c-m h-full p-lr-19">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
							<i class="zmdi zmdi-menu"></i>
						</div>
					</div>
				</div>
			</nav>
		</div>	
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->		
		<div class="logo-mobile">
			<a href="{{route('trangchu')}}"><img src="{{asset('images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
			<div class="flex-c-m h-full p-r-10">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>
			</div>

		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="main-menu-m">
			<li>
				<a href="{{route('trangchu')}}">Home</a>
			</li>
			<li>
				<a href="index.html">Category</a>
				<ul class="sub-menu-m">
					<?php $i = 0;?>
					@foreach($loaisanpham as $lsp)
					<li>
						<a href="{{$lsp->tenloaisanpham}}">{{$lsp->tenloaisanpham}}</a>
					</li>
					@endforeach
				</ul>
				<span class="arrow-main-menu-m">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
			</li>

			<li>
				<a>Contact</a>
			</li>
		</ul>
	</div>

	<!-- Modal Search -->
	<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search search_product">
		<div class="container-search-header">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
			</button>

			<form class="wrap-search-header flex-w p-l-15" action="{{route('search')}}" method='post'>
				{{csrf_field()}}
				<input class="plh3 ip_gh" autocomplete="off" type="text" name="search" placeholder="Search...">
				<input type="submit" value="">
			</form>
		</div>
	</div>
</header>
@endsection
@section('product')
<!-- Content page -->
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Contact
    </h2>
</section>	
<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="{{route('post_contact')}}" method="POST">
                        {{ csrf_field()  }}
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Send Us A Message
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input autocomplete="off" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="email" name="email" placeholder="Your Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
                        <div class="bor8 m-b-20 how-pos4-parent">
							<input autocomplete="off" class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="title_mail" placeholder="Titile Email">
							<img class="how-pos4 pointer-none" src="images/icons/icon-titile.png" width="20" height="20" alt="ICON">
						</div>
						<div class="bor8 m-b-30">
							<textarea autocomplete="off" class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="How Can We Help?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
                                12 Trịnh Đình Thảo, Hòa Thạnh, Tân Phú, TP.HCM
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+1 800 1236879
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								contact@example.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

@endsection
