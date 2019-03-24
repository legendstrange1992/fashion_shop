<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\Donhang;
use App\Loaisanpham;
use App\Chitietdonhang;
use Carbon\Carbon;
class Cartcontroller extends Controller
{
    public function cart(){
        $loaisanpham = Loaisanpham::all();
        $cart = [];
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
        }
        return view('pages.giohang',compact('cart','loaisanpham'));
    }
    function addtocard($id,$sl,$color,$size)
    {
        $data = SanPham::where('id_sanpham',$id)->first();
        $style  = $color.'-'.$size;
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
            if(array_key_exists($id, $cart))
            {
                if(array_key_exists($style,$cart[$id])){
                    $cart[$id][$style]['soluong']+=$sl;
                    session()->put('giohang',$cart);
                }
                else{
                    $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
                }
            }
            else
            {
                $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
            }
        } 
        else{
            $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
            $cart[$id][$style] = $item;
            session()->put('giohang',$cart);
        }
        $cart = session()->get('giohang');
        $tongtien = 0;
        $s = "<ul class='header-cart-wrapitem w-full'>";
        foreach($cart as $key => $value){
            $tensanpham = '';
            $dongia = 0;
            $tongsoluong = 0;
            $hinh = '';
            foreach($value as $k => $v){
                $tensanpham = $v['tensanpham'];
                $dongia = (int)$v['dongia'];
                $hinh = $v['hinh'];

                $tongsoluong += (int)$v['soluong'];
            }
            $s .= "<li class='header-cart-item flex-w flex-t m-b-12'>".
                    "<div class='header-cart-item-img'>".
                        "<img src='images/".$hinh."' alt='IMG'>".
                    "</div>".
                    "<div class='header-cart-item-txt p-t-8'>".
                        "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>".
                            $tensanpham .
                        "</a>".
                        "<span class='header-cart-item-info'>".
                        $tongsoluong ." x $" . $dongia .
                        "</span>".
                    "</div>".
                "</li>";
            $tongtien += (int)$tongsoluong * (int)$dongia;
        }
        $s.="</ul>";
        $s.="<div class='w-full'>".
        "<div class='header-cart-total w-full p-tb-40'>".
        "Total: $ ".number_format($tongtien).
        "</div>".

        "<div class='header-cart-buttons flex-w w-full'>".
        "<a href='index.php/cart' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'>".
        " View Cart".
        "</a>".
        "</div>".
        "</div>";
        $count = count($cart);
        $data = ['cart'=>$s,'count'=>$count];
        return $data;
    }
    function search_product_addtocard($id,$sl,$color,$size)
    {
        $data = SanPham::where('id_sanpham',$id)->first();
        $style  = $color.'-'.$size;
        if(session()->has('giohang')){
            $cart = session()->get('giohang');
            if(array_key_exists($id, $cart))
            {
                if(array_key_exists($style,$cart[$id])){
                    $cart[$id][$style]['soluong']+=$sl;
                    session()->put('giohang',$cart);
                }
                else{
                    $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
                }
            }
            else
            {
                $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
                $cart[$id][$style] = $item;
                session()->put('giohang',$cart);
            }
        } 
        else{
            $item = array(
                    'id'=>$id,
                    'tensanpham'=>$data->tensanpham,
                    'dongia'=>$data->dongia,
                    'hinh'=>$data->hinh,
                    'soluong'=>$sl
                );
            $cart[$id][$style] = $item;
            session()->put('giohang',$cart);
        }
        $cart = session()->get('giohang');
        $tongtien = 0;
        $s = "<ul class='header-cart-wrapitem w-full'>";
        foreach($cart as $key => $value){
            $tensanpham = '';
            $dongia = 0;
            $tongsoluong = 0;
            $hinh = '';
            foreach($value as $k => $v){
                $tensanpham = $v['tensanpham'];
                $dongia = (int)$v['dongia'];
                $hinh = $v['hinh'];

                $tongsoluong += (int)$v['soluong'];
            }
            $s .= "<li class='header-cart-item flex-w flex-t m-b-12'>".
                    "<div class='header-cart-item-img'>".
                        "<img src='../images/".$hinh."' alt='IMG'>".
                    "</div>".
                    "<div class='header-cart-item-txt p-t-8'>".
                        "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>".
                            $tensanpham .
                        "</a>".
                        "<span class='header-cart-item-info'>".
                        $tongsoluong ." x $" . $dongia .
                        "</span>".
                    "</div>".
                "</li>";
            $tongtien += (int)$tongsoluong * (int)$dongia;
        }
        $s.="</ul>";
        $s.="<div class='w-full'>".
        "<div class='header-cart-total w-full p-tb-40'>".
        "Total: $ ".number_format($tongtien).
        "</div>".

        "<div class='header-cart-buttons flex-w w-full'>".
        "<a href='cart' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10'>".
        " View Cart".
        "</a>".

        "<a href='shoping-cart.html' class='flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10'>".
        "    Check Out".
        "</a>".
        "</div>".
        "</div>";
        $count = count($cart);
        $data = ['cart'=>$s,'count'=>$count];
        return $data;
    }
    public function update_soluong($id,$style,$soluongmoi){
        $cart = session()->get('giohang');
        $cart[$id][$style]["soluong"] = $soluongmoi;
        session()->put('giohang',$cart);
        $thanhtien = $cart[$id][$style]["soluong"] * $cart[$id][$style]["dongia"];
        $tongtien = 0;
        foreach($cart as $key => $value){
            foreach($value as $k => $v){
                $tongtien += $v['soluong']*$v['dongia']; 
            } 
        }
        $data = ['thanhtien'=>$thanhtien,'tongtien'=>$tongtien];
        return $data;
    }
    public function delete_cart(){
        session()->forget('giohang');
        return redirect()->route('trangchu');
    }
    public function delete_item_cart($id,$style){
        $cart = session()->get('giohang');
        if(count($cart[$id]) == 1){
            unset($cart[$id]);
            session()->put('giohang',$cart);
        }
        else{
            unset($cart[$id][$style]);
            session()->put('giohang',$cart);
        }
        $data = session()->get('giohang');
        if(count($data)==0){
            return "null";
        }
        $html = "<div class='product-name'>".
            "<div class='one-forth text-center'>".
                "<span>Product Details</span>".
            "</div>".
            "<div class='one-eight text-center'>".
               " <span>Price</span>".
            "</div>".
            "<div class='one-eight text-center'>".
                "<span>Quantity</span>".
            "</div>".
            "<div class='one-eight text-center'>".
                "<span>Total</span>".
            "</div>".
            "<div class='one-eight text-center'>".
               " <span>Remove</span>".
            "</div>".
        "</div>";
        foreach ($data as $key => $value) {
            foreach ($value as $k => $v) {
                $html.= "<div class='product-cart'>".
                    "<div class='one-forth' style='padding-left:2%;'>".
                        "<div class='product-img' style='background-image: url(../images/".$v['hinh'].");'>".
                        "</div>".
                        "<div class='display-tc'>".
                            "<h3>".$v['tensanpham']." (". ($k).")</h3>".
                        "</div>".
                    "</div>".
                    "<div class='one-eight text-center cot_giohang'>".
                        "<div class='display-tc'>".
                            "<span class='price'>$ ".$v['dongia']."</span>".
                        "</div>".
                    "</div>".
                    "<div class='one-eight text-center'>".
                        "<div class='display-tc' style='text-align: center;'>".
                            "<input type='button' id='quantity' name='quantity' class='form-control input-number text-center quantity soluong_".$v['id']."_".$k."'".
                            "value='".$v['soluong']."' data-id='".$v['id']."' data-style='".$k."' style='width:40px;'>".
                        "</div>".
                    "</div>".
                    "<div class='one-eight text-center cot_giohang'>".
                        "<div class='display-tc'>".
                            "<span class='price thanhtien_".$v['id']."_".$k."'>$ ".number_format($v['dongia']*$v['soluong'])."</span>
                        </div>".
                    "</div>".
                    "<div class='one-eight text-center cot_giohang'>".
                        "<div class='display-tc'>".
                            "<a  class='closed delete_item_cart' data-id='".$v['id']."' data-style='".$k."'></a>".
                        "</div>".
                    "</div>".
                "</div>".
                "<div class='modal-search-header flex-c-m trans-04 soluong_modal_".$v['id']."_".$k."'>".
                    "<div class='container-search-header'>".
                        "<button class='flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search'>".
                            "<img src='../images/icons/icon-close2.png' alt='CLOSE'>".
                        "</button>".
                        "<div class='wrap-search-header flex-w p-l-15'>".
                            "<input class='plh3 soluongmoi_modal_".$v['id']."_".$k."' type='text' name='search' placeholder='Mời nhập số lượng (tối đa 100)' autocomplete='off' maxlength='3' onkeypress='return isNumberKey(event)'>".
                            "<button class='flex-c-m trans-04 update_soluong' data-id='".$v['id']."' data-style='".$k."'>".
                                "<i class='fas fa-arrow-alt-circle-right'></i>".
                            "</button>".
                        "</div>".
                    "</div>".
                "</div>";
            }
        }
        return $html;
    }
    public function checkout(){
        $loaisanpham = Loaisanpham::all();
        return view('pages.thongtindathang',compact('loaisanpham'));
    }
    public function oder_complete(Request $req){
        $loaisanpham = Loaisanpham::all();
        $check = true;
        $error = array();
        if($req->fullname == ''){
            $check = false;
            $error[] = "Full name is not allowed to be empty" ; 
        }
        if($req->address == ''){
            $check = false;
            $error[] = "Address is not allowed to be empty" ; 
        }
        if($req->phonenumber == ''){
            $check = false;
            $error[] = "Phone number is not allowed to be empty" ; 
        }
        if($req->email == ''){
            $check = false;
            $error[] = "Email is not allowed to be empty" ; 
        }
        if($check==false){
            return view('pages.thongtindathang',compact('error','loaisanpham'));
        }
        else{
            $cart = session()->get('giohang');
            $tongtien = 0;
            foreach ($cart as $key => $value) {
                foreach ($value as $k => $v) {
                    $tongtien += $v['dongia']*$v['soluong'];
                }
            }
            $dt = Carbon::now('Asia/Ho_Chi_Minh');
            $donhang = new Donhang();
            $donhang->tenkhachhang = $req->fullname;
            $donhang->diachi = $req->address;
            $donhang->dienthoai = $req->phonenumber;
            $donhang->email = $req->email;
            $donhang->tongtien = $tongtien;
            $donhang->ngaydathang = $dt->toDateTimeString();
            $donhang->save();
            $dh = Donhang::orderBy('id_donhang','desc')->first();
            foreach ($cart as $key => $value) {
                foreach ($value as $k => $v) {
                    $Chitietdonhang = new Chitietdonhang();
                    $Chitietdonhang->id_donhang = $dh->id_donhang;
                    $Chitietdonhang->id_sanpham = $key;
                    $Chitietdonhang->style = $k;
                    $Chitietdonhang->tensanpham = $v['tensanpham'];
                    $Chitietdonhang->hinh = $v['hinh'];
                    $Chitietdonhang->soluong = $v['soluong'];
                    $Chitietdonhang->dongia = $v['dongia'];
                    $Chitietdonhang->thanhtien = $v['dongia'] * $v['soluong'];
                    $Chitietdonhang->save();
                }
            }
            session()->forget('giohang');
            return view('pages.dathangthanhcong',compact('loaisanpham'));
        }
        
    }
}
