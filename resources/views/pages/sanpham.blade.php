@extends('layout/layout_admin')
@section('content')
<div class="container-fluid ">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title "><b>SẢN PHẨM</b></h4>
          <p class="card-category">Tất cả sản phẩm</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table text-center" style="font-weight: bold;">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình</th>
                <th>Đơn Giá</th>
                <th>Thể Loại</th>
                <th></th>
              </thead>
              <tbody>
                <?php
                  foreach ($sanpham as $key => $value) {
                  $id = $value['id_sanpham'];
                ?>
                  <tr>
                  <td><?php echo $value['id_sanpham']?></td>
                  <td><?php echo $value['tensanpham']?></td>
                  <td><img src="{{asset('images')}}/<?php echo $value['hinh']?>" width="90" height="100"></td>
                  <td>$ <?php echo number_format($value['dongia'])?></td>
                  <?php $theloai = App\Loaisanpham::where('id_loaisanpham','=',$value['id_theloai'])->get(); ?>
                  <td><?php echo $theloai[0]->tenloaisanpham; ?></td>
                  <td>
                      <a class="text-primary show_chitiet" data-id="<?php echo $value['id_sanpham']?>"><b>Sửa</b></a> 
                      | 
                      <a href="{{route('delete_sanpham',$id)}}"  class="text-primary"><b>Xoá</b></a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection