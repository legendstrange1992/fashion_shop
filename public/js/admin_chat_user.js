$(function(){
    var socket = io('http://localhost:3000');
    socket.on('server-send-rooms',function(data){
        $('.list_user').val(data.length);
        console.log(data.length);
        $('.rooms').html('');
        for(var i = 0 ; i < data.length ; i++){
            $('.rooms').append("<p><span class='user_of_room' style='font-weight: bold;'>"+data[i]+"</span></p>");
        }
        click_room();
    })
    function click_room(){
        $('.user_of_room').on('click',function(){
            var user = $(this).text();
            $('.server-chat-with-user-client').val(user);
            $('.selected_user').addClass('selected_active');
            $('.admin_noidung_chat').html('');
            $('.selected_user').html(user);
            $('.content-chat-admin').html('');
            $('.form-chat-admin-user').slideUp(400);
            $('.form-chat-admin-user').slideDown(400);
            $(".content-chat-admin").scrollTop($(".content-chat-admin")[0].scrollHeight);
            socket.emit('admin_choose_room',user);
            $(".content-chat-admin").scrollTop($(".content-chat-admin")[0].scrollHeight);
        })
    }
    click_room();
    $('.admin_noidung_chat').on('keyup',function(e){
        var noidung = $(this).val();
        var room = $('.server-chat-with-user-client').val();
        var user = "Admin";
        if(e.which == 13){
            socket.emit('client-send-data-chat',{noidung,user,room})
            $('.admin_noidung_chat').val('');
        }
    })
    socket.on('server-send-data-chat-admin-choose-room',function(data){
        const user  = $('.server-chat-with-user-client').val();
        const count = data.length;
        $('.content-chat-admin').html('');
        for(let i = 0 ; i < count ; i++){
            if(data[i].user == user){
            $('.content-chat-admin').append("<p class='admin'><span style='font-weight: bold;'></span>"+data[i].noidung+"</p></br>");
            }
            else{
            $('.content-chat-admin').append("<p class='user'><span style='font-weight: bold;'></span>"+data[i].noidung+"</p></br>");
            }
        }
        $(".content-chat-admin").scrollTop($(".content-chat-admin")[0].scrollHeight);
    })
    socket.on('sever-send-data-chat',function(data){
        const user  = $('.server-chat-with-user-client').val();
        const count = data.data_chat.length;
        const result = data.data_chat;
        $('.content-chat-admin').html('');
        for(let i = 0 ; i < count ; i++){
            if(result[i].user == user){
            $('.content-chat-admin').append("<p class='admin'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
            }
            else{
            $('.content-chat-admin').append("<p class='user'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
            }
        }
        $(".content-chat-admin").scrollTop($(".content-chat-admin")[0].scrollHeight);
    })
    // setInterval(function(){
        
    //   $(".content-chat-admin").scrollTop($(".content-chat-admin")[0].scrollHeight);
    // },500);
    socket.emit('load-user');
})