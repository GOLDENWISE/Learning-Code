function tampilkanSemuaMenu() {
  $.getJSON("data/pizza.json", (data) => {
    const menu = data.menu;

    //pada jquery, pengulangan dilakukan dengan syntax $.each(data yang akan diloop, function yang akan menjalankan operasi pada data)
    $.each(menu, (i, data) => {
      //.append(``): merupakan method dari jquery yang berguna untuk menggantikan fungsi appendChild atau innerHTML pada javascript
      $("#daftar-menu").append(`<div class="col-md-4">
        <div class="card mb-3" style="width: 18rem;">
          <img src="img/pizza/${data.gambar}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">${data.nama}</h5>
            <p class="card-text">${data.deskripsi}</p>
            <h5 class="card-title">Rp ${data.harga},-</h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>`);
    });
  });
}

tampilkanSemuaMenu();

$(".nav-link").on("click", function () {
  $(".nav-link").removeClass("active"); //method jquery untuk menghapus elemen class

  $(this).addClass("active"); //method jquery untuk menambahkan elemen class

  let kategori = $(this).html(); //method jquery untuk melihat isi text dari html

  $("h1").html(kategori); //jika method html diberikan parameter, maka method ini akan berguna untuk mengganti isi text dari elemen html yang diseleksi

  $.getJSON("data/pizza.json", function (data) {
    const menu = data.menu;
    let content = "";
    if (kategori == "All Menu") {
      $("#daftar-menu").html("");
      tampilkanSemuaMenu();
      return;
    }

    $.each(menu, (i, data) => {
      if (data.kategori == kategori.toLowerCase()) {
        //toLowerCase(), method pada javascript untuk mengubah suatu string memiliki huruf kecil semua
        content += `<div class="col-md-4">
            <div class="card mb-3" style="width: 18rem;">
              <img src="img/pizza/${data.gambar}" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">${data.nama}</h5>
                <p class="card-text">${data.deskripsi}</p>
                <h5 class="card-title">Rp ${data.harga},-</h5>
                <a href="#" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>`;
      }
    });

    $("#daftar-menu").html(content);
  });
});
