$(function(){
    $('#chonanh').on('click',function(){
        $('#file_upload').trigger('click');
    });
    $('#file_upload').change(function(){
        // lấy dữ liệu trên file upload
        var FileUpload = $('#file_upload').get(0);
        var files = FileUpload.files;
        // tạo đối tượng form data
        var form_data = new FormData();
        // đưa dữ liệu vào form
        form_data.append('file',files[0]);
        var url = window.location.href;
        var vitri = url.indexOf('public');
        var url_img_temp = url.substring(0,vitri);
        var img_old = $('#img_temp').attr('src');
        var vitri = url.indexOf('public');
        var url_img_temp = url.substring(0,vitri);

        var img_old = $('#img_temp').attr('src');
        //console.log(url);
        console.log(url_img_temp);
        $.ajax({
            type:'POST',
            url:'upload-file-temp',
            contentType: false, // kô đưa dữ liệu vào header
            processData: false, // không xử lý dữ liệu
            data : form_data,
            success:function(data){
                console.log(data);
                if(data!=''){
                    $('#img_temp').attr('src',url_img_temp+"public/images_temp/"+data);
                    $('#img_temp').attr('src',url_img_temp+"public/images_temp/"+data);
                }
                else{
                    $('#img_temp').attr('src',img_old);
                }
            
                
            }
        })
    });
});