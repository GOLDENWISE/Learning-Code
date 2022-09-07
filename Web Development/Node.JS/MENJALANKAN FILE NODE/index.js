const cetakNama = require("./script"); //require('./nama file jika satu folder) | require('../nama file, jika berada diluar folder utama) | require('./namafolder/nama file jika file berada didalam folder yang letaknya difolder utama')
console.log("Hello ini index");
//require ini berfungsi untuk mengeksekusi file lain bersamaan dengan file utama
//jika file yang kita require ini terdapat syntax module.exports = nama function atau nama variabel, kita juga dapat mengakses function dan variabel yang diexport tersebut
console.log(cetakNama("Menjalankan function di script.js melalui index.js"));
