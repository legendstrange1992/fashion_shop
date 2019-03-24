
const socket = io('http://localhost:3000');

$('.icon_chat').on('click',function(){
    var user =  $('.user_client_chat').val();
    if(user == ''){
      $('.login_modal').addClass('show-modal-search');
    }
    else{
      $('.text_noidung').slideToggle(200);
      $('.content_chat').slideToggle(500);
      socket.emit('user_client_room',user);
    }
  });
  
  $('.user_client_chat').on('keyup',function(e){
    var user = $(this).val();
    $('.user_client_chat').val(user);
    if(e.which == 13){
      $('.text_noidung').show();
      $('.user_client_chat').fadeOut();
      $('.content_chat').slideDown();
      socket.emit('user_client_room',user);
    }
  });
  $('.text_noidung').on('keyup',function(e){
    var noidung = $(this).val();
    var room = $('.user_client_chat').val();
    var user = $('.user_client_chat').val();
    if(e.which == 13 ){
      $('.text_noidung').val('');
      socket.emit('client-send-data-chat',{noidung,user,room});
    }
  })
  socket.on('server-send-data-load-noidung-chat',function(data){
    const count = data.data_chat.length;
    var result = data.data_chat;
    var user = $('.user_client_chat').val();
    $('.content_chat').html('');
    for(let i = 0 ; i< count; i++){
      if(result[i].user == user){
        $('.content_chat').append("<p class='user'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
      }
      else{
        $('.content_chat').append("<p class='admin'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
      }
    }
  })
  socket.on('sever-send-data-chat',function(data){
    var user = $('.user_client_chat').val();
    const count = data.data_chat.length;
    const result = data.data_chat;
    $('.content_chat').html('');
    for(let i = 0 ; i < count ; i++){
      if(result[i].user == user){
        $('.content_chat').append("<p class='user'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
      }
      else{
        $('.content_chat').append("<p class='admin'><span style='font-weight: bold;'></span>"+result[i].noidung+"</p></br>");
      }
    }
  })
  setInterval(function(){
    $(".content_chat").scrollTop($(".content_chat")[0].scrollHeight);
    // var user = $('.user_client_chat').val();
    // if(user != ''){
    //   socket.emit('load_noidung_chat',user);
    // }
  },500);