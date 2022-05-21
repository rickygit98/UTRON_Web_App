$(function(){

    $('.btnModalAdd').on('click',function(){
        // Change Text according to button clicked
        $('.modal-content form').attr('action','http://127.0.0.1:8080/private/kuliah/PW/Tugas2/public/user/add');
        $('#formModalLabel').html('Daftar Baru');
        $('.modal-footer button[type=submit]').html('Add');

        // Empty all input field
        $('#id').val("");
        $('#nama').val("");
        $('#nik').val("");
        $('#jk').val("null");
        $('#tgl_lahir').val("");
        $('#alamat').val("");
        $('#no_telp').val("");
    });
    
    $('.btnModalUpdate').on('click',function(){
        // Change Text according to button clicked
        $('.modal-content form').attr('action','http://127.0.0.1:8080/private/kuliah/PW/Tugas2/public/user/update');
        $('#formModalLabel').html('Update Data');
        $('.modal-footer button[type=submit]').html('Update');

        const id = $(this).data('id');

        // Fill all input field with ajax request
        $.ajax({
            url: 'http://127.0.0.1:8080/private/kuliah/PW/Tugas2/public/user/fillForm',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success:function(data){
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nik').val(data.nik);
                $('#jk').val(data.jenis_kelamin);
                $('#tgl_lahir').val(data.tgl_lahir);
                $('#alamat').val(data.alamat);
                $('#no_telp').val(data.no_telp);
            }
        });

    });


});