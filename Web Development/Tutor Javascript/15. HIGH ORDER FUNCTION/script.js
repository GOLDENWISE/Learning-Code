//contoh high order function
function selesai(){
    alert('Selesai mengerjakan tugas');
}
function kerjakanTugas(matakuliah, selesai){
    console.log(`Mulai mengerjakan tugas ${matakuliah}`);
    selesai();
}
// function kerjakanTugas disebut sebagai high order function
// parameter selesai pada function kerjakan tugas, disebut dengan Callback
kerjakanTugas('Matdis', selesai);
// pada contoh setTimeout((function), (milisecond)), setTimeout ini disebut sebagai high order function
// sedangkan function yang menjadi parameter dari setTimeout ini sendiri disebut sebagai Callback
//function yang mengembalikan nilai dari suatu function, disebut juga sebagai high order function

//alasan kita harus menggunakan high order function adalah agar kode yang kita bangun bisa lebih sederhana
//contoh high order function:    
//filter, map, reduce (tipe data array)

//filter
//      menggunakan for(secara manual)
const angka = [-1, 8, 9, 1, 4, -5, -4, 3, 2, 9];
// let j = 0;
// let bigfrom3 = new Array();
// for(let i = 0; i < angka.length; i++){
//     if(angka[i] >= 3){
//         bigfrom3[j] = angka[i];
//         j++;
//     }
// }

//     menggunakan filter
// let bigfrom3 = angka.filter(function(e){
//     return e >= 3;
// });

//     lebih sederhana lagi, bisa menggunakan arrow function
let bigfrom3 = angka.filter((e) => e >= 3);
console.log(bigfrom3);

//map
let multiply2 = bigfrom3.map((e) => e*2);
console.log(multiply2);

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

let amount = multiply2.reduce((accumulator, curentValue) => (accumulator+curentValue));
let multiplyAll = multiply2.reduce((accumulator, curentValue) => (accumulator*curentValue));
console.log(`jumlahnya = ${amount}`);
console.log(`hasil kalinya adalah = ${multiplyAll}`); 
let multiplyAllwithnumber2asstarted = multiply2.reduce((accumulator, currentValue) => (accumulator*currentValue), 2);
console.log(`hasil kalinya (dimulai dari angka 2) adalah = ${multiplyAllwithnumber2asstarted}`); 

//chaining: memungkinkan kita melakukan operasi - operasi pada array, tanpa harus menggunakan variabel yang banyak
//hal ini bisa dilakukan, dengan menambahkan tanda titik setelah operasi yang dilakukan
//semisal ingin melakukan filter, kemudian map, terakhir reduce, maka: namavariabel.filter().map().reduce()
//atau ingin melakukan map, kemudian filter, terakhir reduce, maka: namavariabel.map().filter().reduce()
//contoh
// const angka = [-1, 8, 9, 1, 4, -5, -4, 3, 2, 9];
const hasil = angka.filter((e) => e > 5).map((e) => e*3).reduce((accumulator, currentValue) => (accumulator+currentValue), 0);
console.log("hasil dari penjumlahan array berikut");
console.log(angka);
console.log(`secara sekaligus, dengan bilangan yang diinginkan lebih besar dari 5, dan semuanya dikalikan 3, kemudian dijumlahkan adalah ${hasil}`);