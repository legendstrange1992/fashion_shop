<?php
Auth::routes([
  'register' => true,
  'verify' => true,
  'reset' => false
]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','Mycontroller@index')->name('trangchu');




Route::get('add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@addtocard');
Route::get('search-product-add-to-cart/{id}/{sl}/{color}/{size}','Cartcontroller@search_product_addtocard');
Route::get('cart',['as'=>'cart','uses'=>'Cartcontroller@cart']);
Route::get('update-quantity/{id}/{style}/{soluongmoi}','Cartcontroller@update_soluong');
Route::get('delete-cart',['as'=>'delete_cart','uses'=>'Cartcontroller@delete_cart']);
Route::get('delete-item-cart/{id}/{style}','Cartcontroller@delete_item_cart');


Route::get('check-out','Cartcontroller@checkout')->name('checkout');
Route::post('oder-complete','Cartcontroller@oder_complete')->name('ordercomplete');

Route::get('MEN','Mycontroller@men')->name('MEN');
Route::get('WOMEN','Mycontroller@women')->name('WOMEN');
Route::get('BAG','Mycontroller@bag')->name('BAG');

Route::post('search','Mycontroller@search')->name('search');

Route::get('index','Admin_Controller@admin')->name('admin');
Route::get('product','Admin_Controller@product')->name('product');
Route::post('login-admin','Mycontroller@login_admin')->name('login_admin');
Route::get('sign-up','Mycontroller@sign_up')->name('sign_up');
Route::get('logout','Admin_Controller@logout')->name('logout');
Route::get('logout-user','Mycontroller@logout_user')->name('logout_user');
Route::get('xoa-don-hang/{id_donhang}','Admin_Controller@xoa_donhang')->name('xoa_donhang');
Route::get('upload-san-pham','Admin_Controller@upload_sanpham')->name('upload_sanpham');

Route::post('upload-file-temp','Admin_Controller@upload_file_temp');
Route::post('upload-file','Admin_Controller@upload_file')->name('upload_file');
Route::get('delete-sanpham/{id}','Admin_Controller@delete_sanpham')->name('delete_sanpham');


Route::group(['prefix'=>'api'],function(){
    Route::get('test','API_controller@index');
    Route::get('test/{id}','API_controller@show');
    Route::delete('test/{id}','API_controller@destroy');
});



?>
