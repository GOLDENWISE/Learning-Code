//arrow function: bentuk lain yang lebih ringkas dari function expression
//syntax: 
//let namaVariabel = (parameter) => {
//    operasi dari data yang akan dikerjakan         
//}
// *parameter bersifat optional
//contoh function expression pada umumnya
let halo = function(){
    console.log('ini function expression');
}
halo();
//contoh arrow function tanpa parameter 1 operasi data pada 1 function yaitu return
let tanpaParameter = () => `arrow function tanpa parameter`;
console.log(tanpaParameter());
//contoh arrow function 1 parameter 1 operasi data pada 1 function yaitu return
let parameter1 = parameter => `ini arrow function dengan ${parameter}`;
console.log(parameter1('1 parameter, 1 operasi data pada suatu function yaitu return'));
//contoh arrow function dengan 1 parameter dan 2 atau lebih operasi data pada 1 function 
let dataOperation2 = parameter => {
    let halo = 'Halo';
    console.log(halo + ' arrow function dengan 2 atau lebih operasi');
    return `ini arrow function dengan ${parameter}`;
}
console.log(dataOperation2('1 parameter, 2 atau lebih operasi data pada suatu function'));
//contoh arrow function dengan 2 atau lebih parameter dan 2 atau lebih operasi data pada 1 function
console.log('ini arrow function dengan 2 atau lebih parameter dan 2 atau lebih operasi data pada 1 function')
let parameter2 = (nama, waktu) => {
    let selamat = 'selamat';
    return `${selamat} ${waktu} ${nama}`;
}
console.log(parameter2('Hafiz', 'pagi'));

//pengimplementasian array method map dengan arrow function
console.log('pengimplementasian array method map dengan arrow function');
let array = ['Hafiz', 'MySql', 'JS'];
//normal
/*
let jumlahHuruf = array.map(function(data){
    return data.length;
});
console.log(jumlahHuruf);
*/
//dengan arrow function
let jumlahHuruf = array.map((data) => data.length);
console.log(jumlahHuruf);

//pengimplementasian array method map dengan arrow function yangg berisi object
console.log('pengimplementasian array method map dengan arrow function yang berisi object');
//let array = ['Hafiz', 'MySql', 'JS'];
//normal
/*
let data = array.map(function(data){
    let hasil = {
        data: data,
        jmlHuruf: data.length
    };
    return hasil;
});
console.log(data);
*/
let data = array.map(data => ({ data: data, jmlHuruf: data.length}));
console.log(data)
console.log('untuk menampilkan data menjadi berbentuk tabel pada console, gunakan syntax console.table(variabelObjekdarisuatudata)');
console.table(data);

//konsep this pada arrow function
console.log("konsep this pada arrow function");
//arrow function pada this tidak mengacu kepada function pada dirinya, melainkan mengacu kepada function globalnya
//sehingga, jika saat kita membuat object dengan constructor menggunakan arrow function, this tidak akan bekerja pada function constructor tersebut, melainkan bekerja pada objek window
//namun, jika arrow function kita buat bekerja pada suatu function (function dalam function), maka konsep this akan bekerja pada function parentnya. dengan kata lain, konsep this akan bekerja pada arrow function didalam suatu function
//alasannya adalah, pada arrow function dalam suatu function, arrow function dengan konsep this tersebut akan mencari objek pada this di function parentnya
//jika ditemukan, maka arrow function akan menggunakan this.namaObjek pada function tersebut. jika tidak ditemukan, maka akan dilanjutkan ke function parentnya, dengan kata lain objek window
//contoh

const arrowFunction = function(){
    this.nama = 'Abdullah Ahmad Hafiz';
    this.umur = 18;
    this.sayHello = () => {
        console.log(`Halo, nama saya ${this.nama}, saya berumur ${this.umur} tahun`);
        return `Halo, nama saya ${this.nama}, saya berumur ${this.umur} tahun`;
    }
    //arrow function juga akan bekerja pada setInterval pada suatu function, karena setInterval pada suatu function akan mencari objek this yang ada pada function tersebut
    //contoh
    setInterval(() => {
        console.log(++this.umur)
    },10000);
}
const dataKu = new arrowFunction();
console.log(dataKu);
dataKu.sayHello();