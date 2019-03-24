@extends('layout/layout_admin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title "><b>ĐƠN ĐẶT HÀNG</b></h4>
          <p class="card-category">Tất cả đơn hàng</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Tên Khách hàng</th>
                <th>Địa Chỉ</th>
                <th>Điện Thoại</th>
                <th>Email</th>
                <th>Ngày Đặt Hàng</th>
                <th>Tổng Tiền</th>
                <th></th>
              </thead>
              <tbody>
                <?php
                  foreach ($donhang as $key => $value) {
                  $id_donhang = $value['id_donhang'];
                  $tongthanhtien = 0;
                ?>
                  <tr>
                  <td><?php echo $value['id_donhang']?></td>
                  <td><?php echo $value['tenkhachhang']?></td>
                  <td><?php echo $value['diachi']?></td>
                  <td><?php echo $value['dienthoai']?></td>
                  <td><?php echo $value['email']?></td>
                  <td><?php echo $value['ngaydathang']?></td>
                  <td class="text-primary">$ <?php echo number_format($value['tongtien'])?></td>
                  <td>
                      <a class="text-primary show_chitiet" data-id="<?php echo $value['id_donhang']?>"><b>Chi tiết</b></a> 
                      | 
                      <a href="{{route('xoa_donhang',$id_donhang)}}" class="text-primary"><b>Xoá</b></a></td>
                </tr>
                <tr >
                  <td colspan="8">
                    <div class="chitiet_donhang<?php echo $value['id_donhang']?> chitiet_donhang" style="display: none;width: 90%; margin:auto;height: auto;border-radius: 5px;padding: 20px; background: white;box-shadow:0px 0px 5px blue;">

                     
                        <h2 class='card-title text-primary text-center'><b>ĐƠN HÀNG : <?php echo $id_donhang;?></b></h2>
                        <table class='table' style='background:white;text-align: center;'>
                          <thead class='text-primary'>
                            <th>ID Sản Phẩm</th>
                            <th>Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Color - Size</th>
                            <th>Số Lượng</th>
                            <th>Đơn Giá</th>
                            <th>Thành Tiền</th>
                          </thead>
                        <tbody>
                        <?php
                          $chitietdonhang = App\Chitietdonhang::where('id_donhang',$id_donhang)->get();
                          foreach ($chitietdonhang as $key => $value) {
                         ?>
                        <tr>
                          <td><?php echo $value['id_sanpham'] ?></td>
                          <td><img src='../images/<?php echo $value['hinh'] ?>' width='60px' height='70px' alt=''></td>
                          <td><?php echo $value['tensanpham'] ?></td>
                          <td><?php echo $value['style'] ?></td>
                          <td><?php echo $value['soluong'] ?></td>
                          <td><b><?php echo number_format($value['dongia']) ?></b></td>
                          <td><b>$ <?php echo number_format($value['thanhtien']) ?></b></td>
                        </tr>
                        <?php
                          $tongthanhtien += $value['thanhtien'];
                          } 
                        ?>
                        <tr>
                            <td colspan='5'></td>
                            <td><b><span style='color:red;font-weight: bold;'>Tổng tiền : $ <?php echo number_format($tongthanhtien)?></span></b></td>
                            <td><input type='button' data-id='<?php echo $id_donhang; ?>' class='btn_dong' value='Đóng'></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </td>
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