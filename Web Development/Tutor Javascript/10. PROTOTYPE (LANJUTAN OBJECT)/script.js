//dalam pembuatan objek sebelumnya. hal tersebut kurang efektif dalam manajemen memori
//untuk memperbaiki hal tersebut, kita dapat melakukan hal berikut

console.log('function declaration dengan manajemen memori yang efektif');
const Selamat = {
    ucapanSelamat: function(nama){

        return 'ini data ' + nama;
    }
};
function buatObjekData(nama, nrp, email, jurusan){
    let dataFunction = {};
    dataFunction.nama = nama;
    dataFunction.nrp = nrp;
    dataFunction.email = email;
    dataFunction.jurusan = jurusan;
    dataFunction.ucapanSelamat = Selamat.ucapanSelamat(nama);
    return dataFunction;
}
let data2 = buatObjekData('Ucup dody salmandi', 105225378, 'UcupDody13@gmail.com', 'ilkom');
console.log(data2);

//hanya saja, kelemahan dari method diatas adalah, programmer harus dapat mengelola secara penuh 
//suatu objek yang dibuat (objek yang baru dibuat atau objek yang dihapus)
//yang mana, hal ini akan menjadi kurang efektif

//untuk mengatasi hal tersebut, maka kita dapat melakukan:
//membuat objek dengan Object.create()

console.log('function declaration dengan manajemen memori yang efektif dengan objek create');
const Selamat1 = {
    ucapanSelamat: function(nama1){
        this.ucapanSelamat1 = 'ini data ' + nama1; 
    }
};
function buatObjekData1(nama1, nrp1, email1, jurusan1){
    let dataFunction1 = Object.create(Selamat1); 
    dataFunction1.nama1 = nama1;
    dataFunction1.nrp1 = nrp1;
    dataFunction1.email1 = email1;
    dataFunction1.jurusan1= jurusan1;
    dataFunction1.ucapanSelamat1;
    return dataFunction1;
}
let data3 = buatObjekData1('anak hebat', 1025372238, 'anakhebat12@gmail.com', 'ilkom');
data3.ucapanSelamat(data3.nama1);
console.log(data3);

//prototype. syntax --> nama function.prototype.nama objek = function yang ingin dijalankan
                                                        //   atau value atau data yang ingin dimasukkan
//tujuan dari prototype ini adalah untuk membuat objek yang dibuat dengan Object.create() menjadi lebih efektif lagi

console.log('function declaration dengan manajemen memori yang efektif dengan prototype (lebih efektif dari Object.create)');
function buatObjekData2(nama2, nrp2, email2, jurusan2){
    this.nama2 = nama2;
    this.nrp2 = nrp2;
    this.email2 = email2;
    this.jurusan2 = jurusan2;
    this.ucapanSelamat2;
}
buatObjekData2.prototype.ucapanSelamat = function(nama2){
    this.ucapanSelamat2 = 'ini data ' + nama2;
    return 'berhasil';
}
let data4 = new buatObjekData2('anak malas', 102537212138, 'anakmalas11@gmail.com', 'ilmun');
console.log(data4.ucapanSelamat(data4.nama2));
console.log(data4);

//versi class: versi ini juga menjalankan prototype, hanya saja penulisannya jadi lebih mudah untuk
//dipahami

console.log('versi class');
class buatObjekData3 {
    constructor(nama3, nrp3, email3, jurusan3){
        this.nama3 = nama3;
        this.nrp3 = nrp3;
        this.email3 = email3;
        this.jurusan3 = jurusan3;
    }

    ucapanSelamat(nama){
        this.ucapanSelamat3 = 'ini data ' + nama;
        return 'berhasil';
    }
}
let data5 = new buatObjekData3('anak epep', 1029742704, 'ffwibuprotzy@gmail.com', 'youtuber');
console.log(data5.ucapanSelamat(data5.nama3));
console.log(data5);

//class inheritance atau pewarisan
class Animal {
    constructor(name){
        this.name = name;
    }
    speak() {
        console.log(`${this.name} makes a noise`);
    }
}
//class inheritance atau pewarisan
class Dog extends Animal {
    speak() {
        super.speak(); //dengan menggunakan syntax (super.namafunctionclassyangmewarisi), maka class yang diwarisi oleh class pewaris dapat mengakses function pada class pewaris
        return `${this.name} barks.`
    }
}
let dog = new Dog('Zhongli');
console.log(dog.speak());
//berdasarkan hal tersebut, dapat dilihat bahwa,
//dengan menggunakan syntax --> class (nama class) extends (nama class constructornya ingin ditiru) {
//function pada class
//}
//secara otomatis, constructor pada class yang mewarisi dan diwarisi akan sama
