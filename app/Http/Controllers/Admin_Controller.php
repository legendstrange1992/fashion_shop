<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use DB;
use App\Donhang;
use App\SanPham;
use App\Loaisanpham;
use App\Chitietdonhang;
class Admin_Controller extends Controller
{
    public function admin(){
    	$donhang = Donhang::all();
    	$active_admin = 'active_admin';
    	return view('pages/admin',compact('donhang','active_admin'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('trangchu');
    }
    public function xoa_donhang($id_donhang){
        DB::table('donhang')->where('id_donhang',$id_donhang)->delete();
        
    	return redirect()->route('admin');
    }
    public function upload_sanpham(){
        $active_upload_sanpham = 'active_upload_sanpham';
        $loaisanpham = Loaisanpham::all();
    	return view('pages.upload_sanpham',compact('active_upload_sanpham','loaisanpham'));
    }
    public function product(){
        $active_sanpham= 'active_sannpham';
        $sanpham = SanPham::all();
        return view('pages.sanpham',compact('active_sanpham','sanpham'));
    }
    public function chat_user(){
        $active_chat= 'active';
        return view('pages.chat_user',compact('active_chat'));
    }
    public function upload_file_temp(Request $request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file_tyle = $file->getClientOriginalExtension();
            $file_name = $file->getClientOriginalName();
            if($file_tyle == 'jpg' || $file_tyle == 'png' || $file_tyle == 'jpeg'){
                $file->move('images_temp',$file_name);
                return $file_name;
            }
        }
    }
    public function upload_file(Request $request){
        $file_name = '';
        if($request->hasFile('file_upload')){
            $file = $request->file('file_upload');
            $file_tyle = $file->getClientOriginalExtension();
            $file_name = $file->getClientOriginalName();
            if($file_tyle == 'jpg' || $file_tyle == 'png' || $file_tyle == 'jpeg'){
                $file->move('images',$file_name);
            }
        }
        $file = $request->file('file_upload');
        $file_name = $file->getClientOriginalName();
        $sanpham =  new SanPham();
        $sanpham->tensanpham =  $request->tensanpham;
        $sanpham->tensanpham_khongdau =  'aaaa';
        $sanpham->hinh =  $file_name;
        $sanpham->dongia =  $request->dongia;
        $sanpham->id_theloai =  $request->id_theloai;
        $sanpham->chitiet_sanpham =  $request->chitiet_sanpham;
        $sanpham->save();
        return redirect()->route('admin');
    }
    public function delete_sanpham($id){
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect()->route('product');
    }
}
