//Alur hoisting
//jika ditemukan deklarasi var pada suatu variabel
//variabel tersebut akan di definisikan sebagai undefined terlebih dahulu pada suatu objek window
//setelah didefinisikan undefined, maka program akan melihat apakah ada data pada variabel tersebut
//jika terdapat data pada variabel tersebut, maka variabel yang sebelumnya undefined ini kemudian diganti dengan data yang telah ditemukan tersebut
/* 
contoh alur hoisting
program:
    console.log(a) --> output undefined
    var a = 12
    console.log(a) --> output 12
alur:
    a = undefined --> dihosting
    a = 12
*/
//hal yang sama juga terjadi pada function dengan argumen atau variabel lokal pada suatu function
//yang mana, variabel tersebut akan diisi undefined terlebih dahulu untuk kemudian diisi dengan data yang diberikan pada variabel
//function akan memprioritaskan variabel lokal atau argumen yang ada pada function tersebut
//sehingga, jika pada variabel global terdapat misalkan var a = 12, kemudian pada function terdapat a = 4
//maka secara otomatis, nilai a pada function tersebut akan bernilai 4.

//closure: function yang menggunakan lexical scope dan ada pada suatu function (function didalam function)
//lexical scope: function didalam suatu function akan mencari variabel pada function itu sendiri
//               jika tidak ditemukan, function tersebut akan mencari pada function parentnya
//               jika tidak ditemukan, ia akan terus mencari hingga sampai pada objek window
//lexical scope adalah function yang menggunakan variabel pada function parentnya
function init(){
    let nama = 'hafiz';
    let umur = 18
    function tampilNama(){
        console.log(`nama saya ${nama}, saya berumur ${umur} tahun`);
    }
    tampilNama();
    console.dir(tampilNama); //menampilkan objek pada suatu function ke console
}
init();

//contoh penggunaan closure: function factories
//contoh 1
console.log('contoh penggunaan closure');
function tini(){
    return function(nama){
        console.log(nama);
    }
}
let siapa = tini();
siapa('HAH?');

//contoh 2
function ucapkanSalam(waktu){
    return function(nama){
        console.log(`selamat ${waktu} ${nama}. semoga harimu menyenangkan`);
    }
}
let selamatPagi = ucapkanSalam('pagi'); //menginisalisasi waktu
selamatPagi('Hafiz'); //menginisialisasi nama
let selamatSiang = ucapkanSalam('siang');
selamatSiang('Hafiz');
let selamatMalam = ucapkanSalam('malam');
selamatMalam('Hafiz');

//contoh private method closure

let add = function(){
    let counter = 0;
    return function(){
        return ++counter;
    }
}
counter = 100; //
let a = add();
console.log(a()); //outputnya tetap dimulai dari 0, karena counter yang bernilai 100 merupakan variabel global
console.log(a());
console.log(a());
console.log(a());

//syntax diatas juga dapat ditulis lebih simple seperti berikut

console.log('\n\n');
let addValue = (function(){
    let counter = 0;
    return function(){
        return ++counter;
    }
})();

counter = 200;

console.log(addValue());
console.log(addValue());
console.log(addValue());
console.log(addValue());