$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tambah Data Mahasiswa');
    $('.modal fade button[type=submit]').html('Tambah Data');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#formModalLabel').html('Ubah Data Mahasiswa');
    $('.modal fade button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/PraktikumWeb2024_223040059/Prakweb2024_A_223040059_PW/MVC/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/PraktikumWeb2024_223040059/Prakweb2024_A_223040059_PW/MVC/public/mahasiswa/getubah',
      data: {
        id: id,
      },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#nrp').val(data.nrp);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);
      },
    });
  });
});
