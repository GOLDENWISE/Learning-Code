//untuk menggunakan jquery, dapat digunakan dengan $ atau jQuery
//$(document).ready() memungkinkan suatu web diload terlebih dahulu, untuk kemudian isi dari javascript dieksekusi
$(document).ready(() => {
  //buat event ketike keyword ditulis
  //$('elementyangakandiberievent').on('eventyangakandijalankan', function yang akan menjalankan suatu hal jika event terjadi)
  //$('elementyangdiseleksi').load('lokasi file yang akan diload atau dimuat pada elemen yang diseleksi). methode yang dijalankan hanya GET, tidak ada POST
  //$('elementyangdiseleksi').val() : nilai atau data dari suatu element yang diinputkan

  //ajax dengan menggunakan load
  $("#pencarian").on("keyup", () => {
    $("#container").load("ajax/data.php?pencarian=" + $("#pencarian").val());
  });

  //menggunakan get
  // $.get("ajax/data.php?pencarian=" + $("#pencarian").val(), (data) => {
  //   $("#container").html(data);
  //   operasi data lain yang akan dilakukan jika data telah didapatkan
  // });
});
