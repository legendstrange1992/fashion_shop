<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\SanPham;
use App\Loaisanpham;
use App\User;
use Mail;

class Mycontroller extends Controller
{
    public function index()
    {
        $sanpham = SanPham::all();
        $loaisanpham  = Loaisanpham::all();
        return view('index',compact('sanpham','loaisanpham'));
    }
    public function men(){
    	$sanpham = SanPham::where('id_theloai',1)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'MEN';
        $active_menu = 1;
    	return view('pages/search_category',compact('sanpham','category','loaisanpham','active_menu'));
    }
    public function women(){
    	$sanpham = SanPham::where('id_theloai',2)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'WOMEN';
        $active_menu = 2;
    	return view('pages/search_category',compact('sanpham','category','loaisanpham','active_menu'));
    }
    public function bag(){
    	$sanpham = SanPham::where('id_theloai',3)->get();
        $loaisanpham  = Loaisanpham::all();
    	$category = 'BAG';
        $active_menu = 3;
    	return view('pages/search_category',compact('sanpham','category','loaisanpham','active_menu'));
    }
    public function search(Request $req){
        $key =  $req->search;
        $sanpham = SanPham::where('tensanpham_khongdau','like',"%$key%")->get();
        $loaisanpham  = Loaisanpham::all();
        $active_menu = 4;
        return view('pages/search_product',compact('sanpham','loaisanpham','active_menu'));
          
    }
    public function login_admin(Request $req){
        $email = $req->email;
        $password = $req->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            if(Auth::user()->level == 1){
                return redirect()->route('admin');
            }
            else{
                return redirect()->route('trangchu');
            }
            
        }
        else{
            return redirect()->route('trangchu');
        }
    }
    public function sign_up(){
        return view('auth.register');
    }
    public function logout_user(){
        Auth::logout();
        session()->forget('avatar');
        return redirect()->route('trangchu');
    }
    public function contact(){
        $loaisanpham  = Loaisanpham::all();
        return view('pages/contact',compact('loaisanpham'));
    }
    public function post_contact(Request $req){
        $data = ["noidung" => $req->msg];
        Mail::send('pages.giaodien_gui_mail',$data,function($mess){
            $mess->from(\Request::input('email'),\Request::input('email'));
            $mess->to('thoaiky1992@gmail.com',"Kỳ Smile")->subject(\Request::input('title_mail'));
        });
        return redirect()->route('trangchu'); 
    }
}
