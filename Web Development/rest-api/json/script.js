let mahasiswa = {
  nama: "Hafiz",
  nim: "105221026",
  email: "abdamadhafiz13@gmail.com",
};

//JSON.stringify(data) = mengubah data yang format javascript berbentuk object menjadi JSON
console.log(JSON.stringify(mahasiswa));

//menggunakan ajax
// let xhr = new XMLHttpRequest();

// //syntax ajax yang menunjukkan jika xhr.onreadystatechange dijalankan
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     //JSON.parse(data) = mengubah data yang memiliki format json, menjadi format javascript
//     const mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };

// //mengambil file coba.json menggunakan javascript
// xhr.open("method", "file", asyncronous atau syncronous)
// method => GET untuk mengambil data dari file
//   POST untuk mengirim data ke file
//   PUT untuk mengupdate data pada file
//   DELETE untuk menghapus data pada file

//asyncronous = true, syncronous = false

// xhr.open("GET", "coba.json", true);

// //menjalankan xhr.onreadystatechange
// xhr.send();

//menggunakan jquery
// syntax $.getJSON("namafilejsonyangdiambil", (parameter yang memuat data json) => {
// console.log(data);
// })

//dengan menggunakan jquery, secara otomatis data yang diambil akan diubah menjadi format javascript
$.getJSON("coba.json", (data) => {
  console.log(data);
});
