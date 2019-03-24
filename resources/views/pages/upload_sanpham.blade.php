@extends('layout/layout_admin')
@section('content')
<form action="{{route('upload_file')}}" method="post" enctype="multipart/form-data">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Thêm Mới Sản Phẩm</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" name="tensanpham">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Đơn Giá</label>
                    <input type="text" class="form-control" name="dongia">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Chi Tiết Sản Phẩm</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> thông tin nổi bật của sản phẩm</label>
                      <textarea class="form-control" rows="5" name="chitiet_sanpham"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Loại Sản Phẩm</label>
                    <div class="form-group">
                      <select class="form-control" name="id_theloai">
                        @foreach($loaisanpham as $lsp)
                          <option value="{!!$lsp->id_loaisanpham!!}">{!!$lsp->tenloaisanpham!!}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">THÊM</button>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile" style="text-align: center;padding: 20px 0px;">
          <input type="file" id="file_upload" name="file_upload" enctype="multipart/form-data" style="display:none;">
          <img id="img_temp"src="{{asset('images/no_images.jpg')}}" width="200px" height="220px" style="margin:auto;" alt="">
          <a id="chonanh" style="margin-top: 20px;background: #9900FF; color: white;display: inline-block; width: 100px;
          line-height: 40px;margin:auto;margin-top: 30px; margin-bottom: 30px;font-weight: bold;border-radius: 4px;">Chọn Ảnh</a>
          
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
