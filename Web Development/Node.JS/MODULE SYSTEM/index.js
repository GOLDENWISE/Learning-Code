//MODULE SYSTEM
//TIPE MODULE: CORE MODULES: MODULES YANG SUDAH DIMILIKI NODE.JS PADA LIBRARY NYA
//             LOCAL MODULES: MODULES YANG KITA BIKIN (MENGGUNAKAN EXPORT PADA MODULE DAN REQUIRE MODULE YANG MENG EXPORT)
//             THIRD PARTY MODULES: MODULES YANG DIBUAT ORANG LAIN YANG BISA KITA PAKE (DIKENAL DENGAN NPM)
//require('./nama file jika satu folder) | require('../nama file, jika berada diluar folder utama) | require('./namafolder/nama file jika file berada didalam folder yang letaknya difolder utama')')
//require('../nama folder/nama file jika file berada folder yang letaknya diluar folder utama)

//local module
let data = require("./module");
console.log("isi data yang diambil dari module");
console.log(data);
console.log("cara mengambil data");
console.log(data.cetakNama("Hafiz"));
console.log(`nama: ${data.data.nama}
nim: ${data.data.nim}
semester: ${data.data.semester}`);

// let fs = require("fs"); //core module
// let moment = require("moment"); //third party module

//urutan pencarian: sistem akan mencari core module terlebih dahulu, jika tidak tersedia, maka akan lanjut ke third party module
//lokasi dari third party modules ini nanti akan diinstall, yang kemudian disimpan ke folder 'node_modules'
