@extends('layout/layout_admin')
@section('content')
<div class="content" style=" font-family: 'Courier New', Courier, monospace; ">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
            <div class="card card-profile" >
            <div class="card-header card-header-primary load_user">
                <h4 class="card-title">List User</h4>
            </div>
            <div class="card-body rooms" style="height:550px;overflow: auto;">
            </div>
            </div>
        </div>

        <div class="col-md-8 form-chat-admin-user"  style="display:none; ">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title" style=" font-family: 'Courier New', Courier, monospace; ">User - <span class="selected_user " ></span></h4>
            </div>
            <div class="card-body ">
                <div class="content-chat-admin" style="overflow: auto;width:100%;height:470px;box-shadow:0px 0px 20px #CCC;border-top-left-radius: 20px;border-top-right-radius: 20px;padding: 20px">
                
                </div>
                <input type="hidden"  value="1" class="list_user" placeholder="">
                <input type="hidden" class="server-chat-with-user-client">
                <input class="admin_noidung_chat" type="text" style="width: 100%;height: 50px;box-shadow: 0px 0px 20px #CCC;border: none;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;padding-left:20px;font-size: 12px; " placeholder="Nhập nội dung chat ..."/>
            </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
@endsection
