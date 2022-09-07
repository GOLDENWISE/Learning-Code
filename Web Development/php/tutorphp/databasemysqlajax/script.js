//livesearch dengan ajax
//ambil element yang dibutuhkan
const keyword = document.getElementById("pencarian");
const cari = document.getElementById("cari");
const container = document.getElementById("container");

//tambahkan event pada
keyword.addEventListener("keyup", () => {
  //buat object ajax
  let xhr = new XMLHttpRequest();

  //cek kesiapan object ajax
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      //state ini akan dikerjakan jika file statenya berhasil
      container.innerHTML = xhr.responseText;
    }
  };

  //eksekusi ajax
  //variabelobjectajax.open('method(GET/POST)', 'asal sumber data', (true=asyncronous | false=syncronous));
  xhr.open("GET", "ajax/data.php?pencarian=" + keyword.value, true);
  xhr.send();
});
