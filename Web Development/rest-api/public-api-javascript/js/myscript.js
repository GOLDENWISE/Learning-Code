function searchMovies() {
  $("#movie-list").html("");
  //mengambil data dengan ajax
  $.ajax({
    //url api
    url: "http://omdbapi.com",
    //tipe => get, post, put(update), delete
    type: "get",
    //tipe file api yang diterima
    dataType: "json",
    //parameter yang dikirimkan ke url
    data: {
      apikey: "3e26f049",
      s: $("#search-input").val(),
    },
    //response jika berhasil, response yang dikirimkan berupa data yang dibuat dengan function expression pada parameter
    success: (res) => {
      if (res.Response == "True") {
        let movies = res.Search;
        $.each(movies, (i, data) => {
          $("#movie-list").append(`
              <div class="col-md-4 mb-3">
                  <div class="card" style="width: 18rem;">
                      <img src="${data.Poster}" class="card-img-top">
                      <div class="card-body">
                          <h5 class="card-title">${data.Title}</h5>
                          <h6 class="card-text">${data.Type}</h6>
                          <h6 class="card-text text-muted">${data.Year}</h6>
                          <a class="card-link see-detail" data-toggle="modal" data-target="#exampleModal" data-id="${data.imdbID}">See More</a>
                      </div>
                  </div>
              </div>
              `);
        });
        $("#search-input").val("");
      } else {
        $("#movie-list").html(`
          <div class="col">
              <h1 class=''>${res.Error}</h1>
          </div>`);
      }
    },
  });
}

$("#search-button").on("click", () => {
  searchMovies();
});

$("#search-input").on("keyup", (e) => {
  //untuk melakukan hal spesifik
  if (e.keyCode === 13) {
    searchMovies();
  }
});

$("#movie-list").on("click", ".see-detail", function () {
  console.log($(this).data("id"));
});
