function myfunc() {
  return "Iya deh iya";
}
var arr = ["Kalimat", "k", 1, 1.2, myfunc(), [4, 5, 8], true];
console.log(arr[0]);
console.log(arr[1]);
console.log(arr[2]);
console.log(arr[3]);

//memanggil function dalam array
console.log(arr[4]);

//array multidimensi
console.log(arr[5][0]);
console.log(arr[5][1]);
console.log(arr[5][2]);

//array boolean
console.log(arr[6]);
console.log(arr.length);

//berdasarkan hal tersebut, dapat disimpulkan bahwa array bisa menyimpan banyak data didalamnya

//manipulasi array
//menambah element pada array
console.log("Menambah Elemen Array");
var variabel1 = [];
variabel1[0] = "a";
variabel1[1] = 1;
variabel1[2] = true;
console.log(variabel1);
console.log(variabel1.length);

variabel1[3] = 1.2;
console.log(variabel1);
console.log(variabel1.length);

//menghapus isi array
console.log("Menghapus isi array");
var hapus = ["a", 1, true, 1.2];
hapus[1] = undefined;
console.log(hapus);

//menampilkan isi array
console.log("Menampilkan isi array yang tepat");
for (var i = 0; i < variabel1.length; i++) {
  console.log(variabel1[i]);
}
//method array pada javascript
//.length, contoh pengimplementasiannya seperti dibawah
//variabel1.length : mengetahui panjang array dalam suatu baris

//.join(): menggabungkan seluruh isi array dan menjadikannya sebuah string
//variabel1.join()
console.log("Penggunaan join");
console.log(variabel1.join()); //---> ()kurung kosong defaultnya adalah (,)
//---> ('-'), jika diisi suatu karakter pada kurung kosong tersebut
//---> secara otomatis pemisahnya bukan koma melainkan (-)
console.log(variabel1.join("-"));
console.log(variabel1.join(" - "));

//push, pop, shift, unshift: digunakan untuk menambah atau menghapus elemen array
//push: menambah elemen array diakhir array nya
console.log("push");
variabel1.push(false, "Nika");
console.log(variabel1.join(" - "));
//pop: menghapus elemen array pada bagian terakhir
console.log("pop");
variabel1.pop();
console.log(variabel1.join(" - "));
//unshift: menambahkan elemen array diawal arraynya
console.log("unshift");
variabel1.unshift("IMU SAMA", "Gorosei");
console.log(variabel1.join(" - "));
//shift: menghapus elemen array pada element pertamanya
console.log("shift");
variabel1.shift();
console.log(variabel1.join(" - "));
// shift dan pop ini benar - benar akan menghapus elemen arraynya. atau dengan kata lain, tidak diganti dengan undefined

//slice dan splice:
//splice: menyisipkan elemen ke array ditengah-tengah array
//nama variabel.splice(nomor index ke-berapa yang akan dijadikan awal dari element baru, mau dihapus berapa(optional), element baru-1, element baru-2, ...., element baru-n)
console.log("splice");
variabel1.splice(4, 0, "Akuto solo deck", "Sini pd klo ga percaya"); //menambah elemen pada index-4 tanpa menghapus element setelahnya
console.log(variabel1.join(" - "));
variabel1.splice(1, 2, "apakah"); //menghapus elemen pada index-1 dan setelahnya (2 mengidentifikasikan untuk menghapus elemen index-1 dan setelahnya yaitu 2. jika 3, maka index setelah 2 yaitu 3 juga dihapus(1,2,3))
//setelah dihapus, elemen pada index-1 akan diisi dengan data yang diinginkan
console.log(variabel1.join(" - "));
//slice: mengambil beberapa bagian array untuk dijadikan array yang baru
//var namavariabelbaru = namavariabelyangakandiambil.slice(index keberapa, hingga index berapa+1);
console.log("slice");
var variabel2 = variabel1.slice(1, 5); //mengambil data pada array di index ke 1 hingga index ke 4(4+1=5)
console.log(variabel1.join(" - "));
console.log(variabel2.join(" - "));

//foreach
console.log("forEach");
var angka = [1, 2, 3, 4, 5, 6, 7, 8];
angka.forEach(function (e) {
  console.log(e);
});
//syntax diatas juga dapat ditulis dengan
var cetak = function (e) {
  console.log(e);
};
angka.forEach(cetak);
//yang mana, forEach ini akan mengerjakan semua data pada array pada sebuah function
//forEach juga dapat diberikan index datanya dengan parameter function expressionnya adlaah (variabel yang berisi data, variabel yang berisi index)
angka.forEach(function (e, i) {
  console.log("data " + i + ": " + e);
});
//map
console.log("map");
var angka2 = angka.map(function (e) {
  return e * 2;
});
console.log(angka2.join(" - ")); //berbeda dengan forEach, dengan menggunakan method map, suatu array akan menerima kembalian dari function
//sehingga, data pada suatu array, dengan menggunakan map dapat dipindahkan dan dirubah ke variabel array yang lain
//sort
console.log("sort");
var angka3 = [1, 3, 10, 5, 2, 4, 7, 8, 6, 9];
angka3.sort(function (a, b) {
  return a - b;
});
console.log(angka3.join(" - "));

//filter:Mengembalikan banyak nilai
console.log("filter");
var angka4 = [1, 3, 10, 2, 5, 4, 7, 8, 6, 9];
var angka5 = angka4.filter(function (e) {
  //seperti contoh disamping, dapat dilihat bahwa var angka5 akan berisikan filter angka yang lebih besar dari 5 pada array var angka4
  return e > 5;
});
console.log(angka5.join(" - "));
//find: mengembalikan satu nilai
console.log("find");
var angka6 = [1, 3, 10, 2, 5, 4, 7, 8, 6, 9];
var angka7 = angka6.find(function (e) {
  //seperti contoh disamping, dapat dilihat bahwa var angka7 akan berisikan data find 6, yang mana 6 ini lebih besar dari 5 dan lebih kecil dari 7 pada array var angka6
  return e > 5 && e < 7;
});
console.log(angka7);

//syntax new Array
//selain menggunakan let namaVariabel = [];, kita juga bisa menggunakan syntax let namaVariabel = new Array(data-data pada array), untuk membuat sebuah array

console.log("syntax new Array");
let courses = new Array("HTML", "CSS", "JS");
console.log(courses);
console.log(courses[0]);
console.log(courses[1]);
console.log(courses[2]);

//konkatenasi dua atau lebih array
console.log("konkatenasi dua atau lebih array");
let array1 = new Array("Nama saya ", "Saya berumur ", "Saya berkuliah di ");
let array2 = new Array("Saya lahir pada ", "Hobi saya ", "Cita - cita saya ");
let stringKonkatenasi = array1.concat(array2);
console.log(stringKonkatenasi);

//assosiatif array: memungkinkan kita mengganti index yang awalnya berupa angka menjadi string
//syntax: variabelArray["NamaIndexBerupaString"] = ["data dari array"];
console.log("assosiatif array: memungkinkan kita mengganti index yang awalnya berupa angka menjadi string");
let array3 = [];
array3["Nama"] = ["Abdullah Ahmad Hafiz"];
array3["Umur"] = ["18 Tahun"];
console.log(array3);

//reduce: melakukan sesuatu terhadap seluruh element array
//penggunaan syntax nya =
//namaVariabelArray.reduce(function(accumulator, currentValue){
//      return (operasi yang diinginkan pada array tersebut)
//}, nilai awal);
//accumulator = angka awal dari suatu operasi hingga hasil dari operasi
//semisal, ingin menjumlahkan array berisi 3 data. maka accumulator awal = undefined yang kemudian akan diisi dengan nilai atau data pada index 0
//currentValue = data pada array.
//kembali ke permisalan sebelumnya, semisal accumulator = 0, currentValue atau data pada index 1 adalah 1, maka
//accumulator akan diisi dengan accumulator + currentValue, yaitu 0
//nilai awal: ini merupakan nilai awal dari suatu operasi yang ingin dijalankan pada suatu array
//defaultnya adalah 0
//jika user memberikan angka 1 sebagai nilai awal
//hal yang terjadi adalah, semisal array = [12, 41, 15], dan dilakukan operasi penjumlahan
//maka operasi yang dijalankan adalah 1 + 12 + 41 + 15
//contoh
console.log("reduce");
let multiply2 = new Array(12, 13, 11, 10);
let amount = multiply2.reduce(function (accumulator, curentValue) {
  return accumulator + curentValue;
}, 0);
let multiplyAll = multiply2.reduce(function (accumulator, curentValue) {
  return accumulator * curentValue;
}, 0);
console.log(`jumlahnya = ${amount}`);
console.log(`hasil kalinya adalah = ${multiplyAll}`);

//Array.from(objek/variabel/data non array)
//digunakan untuk mengubah data yang awalnya bukan array menjadi array
//.split('objek pemisah') dengan objek pemisah bisa berupa .,/\;:dsb
//.split ini merupakan hal yang berlawanan dengan join. jika join menggabungkan dengan objek pemisah, sedangkan split memecah dengan objek pemisah
