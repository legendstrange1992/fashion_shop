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
<div class="colorlib-shop">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1" style="">
				<div class="process-wrap">
					<div class="process text-center active">
						<p><span>01</span></p>
						<h3>Shopping Cart</h3>
					</div>
					<div class="process text-center">
						<p><span>02</span></p>
						<h3>Checkout</h3>
					</div>
					<div class="process text-center">
						<p><span>03</span></p>
						<h3>Order Complete</h3>
					</div>
				</div>
			</div>
		</div>
		<script>
			function isNumberKey(evt)
			{
			var charCode = (evt.which) ? evt.which : event.keyCode;
			if(charCode == 59 || charCode == 46)
				return true;
			if (charCode > 31 && (charCode < 48 || charCode > 57))
				return false;
			return true;
			}
		</script>
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1 table_giohang">
				<div class="product-name">
					<div class="one-forth text-center">
						<span>Product Details</span>
					</div>
					<div class="one-eight text-center">
						<span>Price</span>
					</div>
					<div class="one-eight text-center">
						<span>Quantity</span>
					</div>
					<div class="one-eight text-center">
						<span>Total</span>
					</div>
					<div class="one-eight text-center">
						<span>Remove</span>
					</div>
                </div>
                <?php
				$tongtien = 0;
                if(isset($cart)){
                    foreach($cart as $key => $value){
                        foreach($value as $k => $v){
							$tongtien += $v['dongia']*$v['soluong'];
                ?>
                <div class="product-cart">
					<div class="one-forth" style="padding-left:2%">
						<div class="product-img" style="background-image: url({{asset('images')}}/<?php echo $v['hinh']?>);">
						</div>
						<div class="display-tc">
							<h3><?php echo $v['tensanpham'].' ('.$k.')'?></h3>
						</div>
					</div>
					<div class="one-eight text-center cot_giohang">
						<div class="display-tc">
							<span class="price"><?php echo '$'.$v['dongia']?></span>
						</div>
					</div>
					<div class="one-eight text-center">
						<div class="display-tc" style='text-align: center;'>
							<input type="button" id="quantity" name="quantity" class="form-control input-number text-center quantity soluong_<?php echo $v['id']?>_<?php echo $k?>"
							value="<?php echo $v['soluong']?>" data-id="<?php echo $v['id']?>" data-style="<?php echo $k; ?>" style="width:40px;">
                        </div>
					</div>
					<div class="one-eight text-center cot_giohang">
						<div class="display-tc">
							<span class="price thanhtien_<?php echo $v['id']?>_<?php echo $k?>">$<?php echo number_format($v['dongia']*$v['soluong'])?></span>
						</div>
					</div>
					<div class="one-eight text-center cot_giohang">
						<div class="display-tc">
							<a  class="closed delete_item_cart" data-id="<?php echo $v['id']?>" data-style="<?php echo $k; ?>"></a>
						</div>
					</div>
				</div>
				<!-- Modal Search -->
				<div class="modal-search-header flex-c-m trans-04 soluong_modal_<?php echo $v['id']?>_<?php echo $k?>">
					<div class="container-search-header">
						<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
							<img src="{{asset('images/icons/icon-close2.png')}}" alt="CLOSE">
						</button>

						<div class="wrap-search-header flex-w p-l-15">
							<input class="plh3 soluongmoi_modal_<?php echo $v['id']; ?>_<?php echo $k; ?>" type="text" name="search" placeholder="Mời nhập số lượng (tối đa 100)" autocomplete="off" maxlength="3" onkeypress="return isNumberKey(event)">
							<button class="flex-c-m trans-04 update_soluong" data-id="<?php echo $v['id']?>" data-style="<?php echo $k; ?>">
								<i class="fas fa-arrow-alt-circle-right"></i>
							</button>
						</div>
					</div>
				</div>
                <?php                                      
                        }
                    }
                } 
                ?>
				
			</div>
		</div>
		</script>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="total-wrap">
					<div class="row">
						
						<div class="col-md-3 col-md-push-1 text-center total_mobile">
							<div class="total" style='font-weight:bold;'>
								<div class="sub">
									<p><span>Subtotal:</span> <span>$0.00</span></p>
									<p><span>Delivery:</span> <span>$0.00</span></p>
									<p><span>Discount:</span> <span>$0.00</span></p>
								</div>
								<div class="grand-total">
									<p><span><strong>Total :</strong></span><span class="tongtien_giohang">$ <?php echo number_format($tongtien);?></span></p>
								</div>
							</div>
						</div>
						<div class="col-md-8" style='margin-bottom:20px;'>
							<div class="row form-group row_form_group">
								<div class="col-md-3">
									<a href="{{route('trangchu')}}"><input style='border-radius: 25px;' type="button" value="Continues" class="btn btn-primary"></a>
								</div>
							</div>
							<div class="row form-group" style='float:left;margin-left:20px;'>
								<div class="col-md-3">
									<a href="{{route('delete_cart')}}"><input style='border-radius: 25px;' type="button" value="Detele Cart" class="btn btn-primary"></a>
								</div>
							</div>
							<div class="row form-group" style='float:left;margin-left:20px;'>
								<div class="col-md-3">
									<a href="{{route('checkout')}}"><input style='border-radius: 25px;' type="button" value="Apply Cart" class="btn btn-primary"></a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
