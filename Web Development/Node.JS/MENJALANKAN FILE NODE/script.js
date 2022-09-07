console.log("Hello World"); //untuk menjalankan file ini di node.js, gunakan syntax 'node namafile.js' pada terminal git bash
const nama = "ini script";
const cetakNama = (nama) => `helo ${nama}`;
console.log(cetakNama(nama));
module.exports = cetakNama; //dengan menggunakan module.exports = nama function atau variabel, kita bisa mengirimkan function atau variabel yang kita kirimkan ke]
//file yang require module ini
