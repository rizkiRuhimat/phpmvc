// $(document).ready(function() {
//     $('#myTable').DataTable();
// });

$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nip').val('');
        $('#email').val('');
        $('#telp').val('');
        $('#divisi').val('');
        $('#kota').val('');
        $('#provinsi').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {

        $('#ModalLabel').html('Ubah Data Pegawai');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/pegawai/ubah')

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/pegawai/getUbah',
            data: { id: id },
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nip').val(data.nip);
                $('#email').val(data.email);
                $('#telp').val(data.telp);
                $('#divisi').val(data.divisi);
                $('#kota').val(data.kota);
                $('#provinsi').val(data.provinsi);
                $('#id').val(data.id);
            }
        });
    });
});