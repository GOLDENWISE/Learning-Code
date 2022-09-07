function cetakNama(nama) {
  return `Halo ${nama}`;
}
let data = {
  nama: "Abdullah Ahmad Hafiz",
  nim: 105221026,
  semester: 3,
};
//exports module
//cara export data --> module.export.namaVariabel(bebas) = nama function/variable/array/object
// module.exports.cetakNama = cetakNama;
// module.exports.data = data;

//syntax diatas akan lebih efektif jika dibuat dalam object seperti berikut
// module.exports = {
//   cetakNama: cetakNama,
//   data: data,
// };

//atau, dalam es6 (ecma script 6 / javascript modern), kita bisa menggunakan syntax berikut untuk lebih sederhana
module.exports = { cetakNama, data };
