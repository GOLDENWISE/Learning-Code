//NPM atau disebut sebagai third Party package modul
//untuk menginisiasi npm pada suatu folder, ketikan 'npm init' diterminal
//setelah melakukan inisisasi, terdapat output entry point (file utama yang akan dijalankan)
//git repository: tempat penyimpanan git
//keywords: kata ganti atau kata kunci dari repository kita di git
//author: optional, merupakan nama pengguna yang memiliki repository

//kemudian, kita dapat memulai perintah npm dengan membuka fule yang bernama package.json
//dengan membuka file package.json, dibagian script merupakan bagian yang bisa kita operasikan di npm
//semisal, pada object scripts, terdapat kata kunci test yang isinya adalah error, no test specified
//dengan mengetikkan npm test, maka secara otomatis kata kunci akan dijalankan diterminal yang menampilkan isi dari test itu diterminal'
//atau kita menambahkan data start di object script kemudian memberikan data yang merupakan syntax untuk menjalankan file js dengan node
//maka dengan mengetikkan npm start, terminal akan secara otomatis menjalankan file.js yang kita jalankan
//selain start dan test, kita juga bisa menambahkan data lain yang nantinya bisa dijalankan diterminal
//hanya saja, pada terminal nantinya harus ditambahkan syntax run setelah npm
//semisal, kita menambahkan data pada object script dengan nama 'data' yang isinya akan memberikan perintah kepada terminal untuk memberikan output data file yang ada pada directori
//kemudian, dengan mengetikkan npm run dev, terminal secara otomatis akan menjalankan perintah yang diberikan pada dev untuk melihat file atau folder yang ada pada directori
console.log("Ketikkan diterminal npm start, lihat yang terjadi");
console.log("kemudian ketikkan diterminal npm run dev, lihat yang terjadi");
console.log("coba juga ketikkan npm test, lihat yang terjadi");

//cara install package pada npm
//pergi ke website NPM --> npmjs.com
//cari package yang ingin dicari di search packages
//setelah package yang dicari ditemukan, lihat petunjuk penginstallan (biasanya disuruh ketikkan suatu syntax diterminal)
//jika ingin menghapus suatu package pada npm, kita cukup ketikkan syntax npm uninstall (nama package)
//kita juga bisa menginstall suatu package dengan versi yang kita inginkan, dengan menambahkan @(versi yang diinstall berupa angka) pada syntax yang dianjurkan oleh web
//misal, menginstall validator, petunjuknya adalah, gunakan syntax npm i validator, dengan versi 13.7.0, maka tambahkan @13.7.0 setelah npm i validator
//npm i validator@13.7.0

//cara menggunakan package yang kita install, kita dapat melihat petunjuknya pada package tersebut, tepatnya diweb npmjs.org
//contoh cara menggunakan package npm validator
const validator = require("validator");
//kegunaan dari package ini adalah, untuk memvalidasi string yang ditemukan

console.log("validasi email");
console.log(`string ini merupakan ${validator.isEmail("abdamadhafiz@gmail.com") ? "Email" : "bukan email"}`); //jika string merupakan email, akan mengembalikan true, jika bukan akan mengembalikan false
console.log(`string ini merupakan ${validator.isEmail("abdamadhafizgmail.com") ? "Email" : "bukan email"}`);

console.log("validasi no HP");
console.log(`string ini merupakan ${validator.isMobilePhone("082119442067", "id-ID") ? "no HP indonesia" : "bukan no HP Indonesia"}`);
console.log(`string ini merupakan ${validator.isMobilePhone("08012345678", "id-ID") ? "no HP indonesia" : "bukan no HP Indonesia"}`);

console.log("validasi angka");
console.log(`string ini merupakan ${validator.isNumeric("08012345678") ? "angka" : "bukan angka"}`);
console.log(`string ini merupakan ${validator.isNumeric("08012345678a") ? "angka" : "bukan angka"}`);

//contoh package berikutnya adalah chalk: mewarnai terminal kita pada text yang kita inginkan
console.log("pewarnaan kata di terminal");
const chalk = require("chalk");
console.log(chalk.red("Ini sudah diwarnai"));
console.log(chalk.bgBlue("Ini sudah diberikan background berwarna biru"));
const pesan = chalk`Ini berwarna {bgBlue.red background biru berwarna merah} dan ini {bgWhite.red berwarna merah dengan background putih}   `;
console.log(pesan);

//contoh package sebelumnya adalah nodemon: memonitor perubahan pada script, sehingga kita tidak perlu melakukan save dsb untuk melihat hasil perubahan pada script
