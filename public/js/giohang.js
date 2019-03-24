$(function(){
    
    $('.giam_soluong_modal').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        if (sl>1) sl--; else sl = 1;
        $('.soluong_modal'+id).val(sl);
    });
    $('.tang_soluong_modal').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        if(sl<10)  sl++; else sl=10;
        $('.soluong_modal'+id).val(sl);
    });
    $('.addtocart').on('click',function(){
        var id = $(this).attr('data-id');
        var sl = $('.soluong_modal'+id).val();
        var color = $('.color_'+id).val();
        var size  = $('.size_'+id).val();
        $.ajax({
            url:'index.php/add-to-cart/'+id+'/'+sl+'/'+color+'/'+size,
            success:function(data){
                $('.header-cart-content').html(data['cart']);
                $('.soluong_cart').attr('data-notify',data['count']);
                $('.soluong_cart_mobile').attr('data-notify',data['count']);
                $('.soluong_modal'+id).val(1);
            }
        });
    });
    
    function update_soluong(){
        $('.update_soluong').on('click',function(){
        const JPY = value => currency(value, { precision: 0, symbol: '¥' });
        var id = $(this).attr('data-id');
        var style = $(this).attr('data-style');
        var soluongcu = $('.soluong_'+id+'_'+style).val();
        var soluongmoi = $('.soluongmoi_modal_'+id+'_'+style).val();
        if(soluongmoi == ''){
            soluongmoi = soluongcu;
        }
        if(soluongmoi > 100){ soluongmoi=100; }
        if(soluongmoi < 1) { soluongcu = 1; }

        $('.soluong_'+id+'_'+style).val(soluongmoi);
        $('.soluong_modal_'+id+'_'+style).removeClass('show-modal-search');
        $.ajax({
            url:'update-quantity/'+id+'/'+style+'/'+soluongmoi,
            success:function(data){
                $('.thanhtien_'+id+'_'+style).text('$ '+JPY(data.thanhtien).format());
                $('.tongtien_giohang').text('$ '+ JPY(data.tongtien).format());
            }
        });
    });
    }

    function quantity_new(){
        $('.quantity').on('click',function(){
            var id = $(this).attr('data-id');
            var style = $(this).attr('data-style');
            $('.soluongmoi_modal_'+id+'_'+style).focus();
            $('.soluongmoi_modal_'+id+'_'+style).val('');
            $('.soluong_modal_'+id+'_'+style).addClass('show-modal-search');
        });
    }
    function delete_item_cart(){
        $('.delete_item_cart').on('click',function(){
        var id = $(this).attr('data-id');
        var style = $(this).attr('data-style');
        $.ajax({
            url:'delete-item-cart/'+id+'/'+style,
            success:function(data){
                    if(data=='null'){
                        window.location = './';
                    }
                    else{
                        $('.table_giohang').html(data);
                        quantity_new();
                        delete_item_cart();
                        update_soluong();
                    }
                }
            });
        });
    }
    delete_item_cart();
    quantity_new();
    update_soluong();
    
});