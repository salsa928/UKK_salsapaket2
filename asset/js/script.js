$('.edit-level').on('click', function(){
    const id_admin = $(this).data('id');
    
    $.ajax({
        url : '/pengaduan/master/getPetugasId',
        data : {id : id_admin},
        method : 'POST',
        dataType : 'json',
        success : function(data){
            $('#id').val(data.id_admin);
            $('#nama').html(data.nama);
            $('#username').html(data.username);
            $('#level').val(data.level);
        }
    });

});