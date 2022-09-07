//core module
//untuk melihat core module pada node js, kita dapat lihat dengan mengakses nodejs.org pada bagian docs (dokumentasi)

//core module: file system
const fs = require("fs");
// console.log(fs); //unslash untuk mengetahui isi dari core modules fs

//writeFileSync : menuliskan file secara syncronous
//syntax: fs.writeFileSync('namadirektori(bisa dikosongkan jika satu folder)/namafile.format file', data yang diisikan ke file(bisa berupa string, dsb))
fs.writeFileSync("test.txt", "Hello world! secara syncronous");

//writeFile : menuliskan file secara asyncronous
// syntax: fs.writeFile("namadirektori(bisa dikosongkan jika satu folder")/namafile.formatfile",  "data yang diisikan ke file (bisa berupa string, dsb)", callbackfunction yang nantinya akan menampung error)
//syntax callbackfunction yang nantinya akan menampung error: (err) => {
//    if (err) { //jika error
//          throw err; //melakukan throw pada error
//    }
//    console.log(tampilan ke konsol jika file berhasil diisi)
// }

fs.writeFile("testAsync.txt", "Hello World! secara asyncronous", (error) => {
  if (error) {
    throw error;
  }
  console.log("FILE BERHASIL DIISI DAN DISIMPAN");
});

//readFileSync('namadirektoritempatfileberada(jika satu direktori tidak perlu ditulis)/nama file.format file') : menampilkan file secara synchronous
const isiFile = fs.readFileSync("test.txt");
console.log("isi dari file:");
console.log(isiFile);
console.log("cara mengubah tampilan file tersebut menjadi string");
console.log(isiFile.toString());
//atau dengan cara menggunakan backtick (`${}`)
console.log(`${isiFile}`);

// readFile('namadirektoritempatfileberada(jika satu direktori tidak perlu ditulis)/nama file.format file'): menampilkan file secara asyncronous

fs.readFile("testAsync.txt", (err, data) => {
  if (err) {
    throw err;
  } else {
    console.log(data.toString());
    return data.toString();
  }
});

//core module: readLine = sebuah modul yang digunakan nanti untuk membaca hal yang kita tulis diterminal (berupa jawaban dari suatu pertanyaan)
//syntax dapat dilihat pada contoh berikut

console.log("readLine");
const readLine = require("readline");
const rl = readLine.createInterface({
  input: process.stdin,
  output: process.stdout,
});
rl.question("Masukkan nama anda : ", (nama) => {
  rl.question("Masukkan no hp: ", (noHp) => {
    console.log(`nama: ${nama}
noHp: ${noHp}`);
    rl.close();
  });
});
