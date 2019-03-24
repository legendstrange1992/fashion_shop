$(function(){
    
    
    socket.on('server_send_cart_header',function(data){
        $('.soluong_header').attr('data-notify',data.length);
        $('.soluong_header_mobile').attr('data-notify',data.length);
        var s = '';
        var total = 0;
        const JPY = value => currency(value, { precision: 0, symbol: '¥'});
        for(var i=0 ; i<data.length ; i++){
            s += "<li class='header-cart-item flex-w flex-t m-b-12'>"+
            "<div class='header-cart-item-img'>"+
            "<img src='images/"+data[i].hinh+"' alt='IMG'>"+
            "</div>"+
            "<div class='header-cart-item-txt p-t-8'>"+
            "<a href='#' class='header-cart-item-name m-b-18 hov-cl1 trans-04'>"+ data[i].tensanpham+"</a>"+
            "<span class='header-cart-item-info'>$"+data[i].dongia+" x "+data[i].soluong+"</span>"+
            "</div>"+
            "</li>";
            total += data[i].dongia * data[i].soluong;
        }
        $('.header-cart-wrapitem ').html(s);
        total = JPY(total).format();
        $('.header-cart-total').html("Total: $"+total);
    });
});