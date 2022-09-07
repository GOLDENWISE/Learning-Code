$(() => {
  $(".tampilModalUbah").on("click", function () {
    //mengubah isi html dengan menggunakan jquery
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Update");
    //untuk mengubah/menambahkan atribut dengan jquery, gunakan syntax .attr('attribut yang ingin diubah', 'isi dari attribut')
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/Mahasiswa/ubah");
    //this = tombol apapun yang diklik dan ada pada function
    const id = $(this).data("id");

    $.ajax({
      //tentukan isi url tempat data akan dikirim
      url: "http://localhost/phpmvc/public/Mahasiswa/getubah",
      //data:{namadatayangdikirim:datayangakandikirim}
      data: { id: id },
      //method yang diinginkan
      method: "post",
      //tipe data yang dikembalikan berupa apa
      dataType: "json",
      //jika berhasil, apa yang ingin dilakukan
      success: (data) => {
        //untuk menempatkan value pada suatu data form, gunakan syntax .val
        $("#Email").val(data.Email);
        $("#Nama").val(data.Nama);
        $("#NIM").val(data.NIM);
        $("#Jurusan").val(data.Jurusan);
        $("#id").val(data.ID);
      },
    });
  });

  $(".tambah").on("click", () => {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/Mahasiswa/tambah");
    $("#Email").val("");
    $("#Nama").val("");
    $("#NIM").val("");
    $("#Jurusan").val("");
    $("#id").val("");
  });
});
