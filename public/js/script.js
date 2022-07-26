$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('#nama').val('');
        $('#nim').val('');
        $('#prodi').val('');
        $('.modal-body form').attr('action', 'http://localhost/latihan-mvc/public/mahasiswa/tambah');
        $('.modal-footer button[type=submit').html('Tambah Data');
    });
    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/latihan-mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/latihan-mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType:'json',
            success:function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        });
    });
});