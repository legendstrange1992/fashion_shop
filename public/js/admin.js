$(function(){
	function show_chitiet_donhang(){
		$('.show_chitiet').on('click',function(){
			var id_donhang = $(this).attr('data-id');
			$('.chitiet_donhang').slideUp();
			$('.chitiet_donhang'+id_donhang).slideDown();
		});
	}
	function btn_dong(){
		$('.btn_dong').on('click',function(){
		var id = $(this).attr('data-id');
		$('.chitiet_donhang'+id).slideUp();
		});
	}
	show_chitiet_donhang();
	btn_dong();
});