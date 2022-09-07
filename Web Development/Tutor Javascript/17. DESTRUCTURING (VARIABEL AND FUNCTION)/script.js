//Destructuring Assignment: memungkinkan kita untuk membongkar nilai dari suatu data array atau object
//contoh

//membuat array
console.log('destructuring array');
const angka = [0, 1, 2, 3];
console.log(angka);
//destructuring. syntax, untuk array --> (let|const) [namaVariabeluntukmasing-masingIndexarray] = namavariabelarray
const [nol, satu, dua, tiga] = angka;
console.log(nol);
console.log(satu);
console.log(dua);
console.log(tiga);

//skip data array, dapat dilakukan dengan mengosongkan nama variabel diantara tanda koma. contoh nya seperti dibawah
console.log('skip data');
const string = ['Halo', 'saya', 'Upin'];
console.log(string);
const [Salam, , Name] = string;
console.log(`${Salam} ${Name}`);

//swap data
console.log("swap data")
let a = 1;
let b = 2;
console.log(`nilai a = ${a}, nilai b = ${b}`);
[a, b] = [b, a];
console.log(`nilai a = ${a}, nilai b = ${b}`);

//destructuring array yang direturn sebuah function
console.log('Destructuring array yang direturn sebuah function')
function destructThisValue(){
    return [1, 2];
}
const [c, d] = destructThisValue()
console.log(destructThisValue());
console.log(`nilai c = ${c}, nilai d = ${d}`);

//destructing array menjadi satu atau lebih variabel dan satu array (hal ini terjadi, jika kita tidak mengetahui berapa banyak data yang ditambahkan pada suatu array)
console.log('destructuring array menjadi satu atau lebih variabel dan satu array');
const destruct = [1,3,0,4,2,5];
console.log(destruct);
const [e,f, ...values] = destruct;
console.log(`nilai e = ${e}, nilai f = ${f}. sisanya adalah nilai values, seperti dibawah`);
console.log(values);

//membuat object
console.log('destructuring objek');
const identitas = {
    Nama: "Abdullah Ahmad Hafiz",
    TanggalLahir: "13 Januari 2004",
    TempatLahir: "Rengat",
    Umur: 18
}
console.log(identitas);
//destructuring. syntax, untuk object --> (let|const) {namaVariabeldarisuatuobjek(pastikan nama variabel tersebut sama dengan nama object)} = namavariabelobject
const {Nama, TanggalLahir, TempatLahir, Umur} = identitas;
console.log(Nama);
console.log(TanggalLahir);
console.log(TempatLahir);
console.log(Umur);

//kita juga dapat membuat object tanpa mendeklarasikan objek
//syntax nya adalah --> ({namaObject1,..., namaObjectn} =  {namaObject1: data pada object 1, ..., namaObjectn: data pada object n});
console.log('membuat object tanpa dideklarasikan');
({nama, nim, semester} = {
    nama: 'Abdullah Ahmad Hafiz', 
    nim: 105221026, 
    semester: 3
});
console.log(nama);
console.log(nim);
console.log(semester);

//berdasarkan hal diatas, kita juga dapat assign nama object tersebut kesebuah variabel baru
//syntax nya adalah --> ({namaObject1: namaVariabelbaruyang diinginkan ,..., namaObjectn: namavariabelbaruyangdiinginkan} =  {namaObject1: data pada object 1, ..., namaObjectn: data pada object n});
console.log('membuat nama variabel baru yang kita inginkan pada suatu objek');
({prodi: p, IPK: i} = {
    prodi: 'ilmu komputer',
    IPK: 3.58
});
console.log(`data prodi pada variabel p = ${p}, data IPK pada variabel i = ${i}`);

//memberikan default value (nilai default)
//dengan memberikan default value, data yang tidak ada pada objek akan diberikan nilai sesuai defaultnya
console.log('memberikan nilai default');
const Value = {
    nilaisatu: 1,
    nilaidua: 2,
    nilaitiga: 3
};
//selain memberikan nilai default, kita juga dapat megnganti nama variabel nya sesuai yang kita inginkan secara bersamaan
//syntax --> (let|const) {namaObject1: namavariabelbaruyangdiinginkan = defaultvalue, .... namaObjectn: namavariabelbaruyangdiinginkan = defaultvalue} = variabelobjek
const {nilaisatu: Satu, nilaidua: Dua, nilaitiga: Tiga, nilaiempat: Empat = 4} = Value;
console.log(Value);
console.log(`nilaisatu: ${Satu}`);
console.log(`nilaidua: ${Dua}`);
console.log(`nilaitiga: ${Tiga}`);
console.log(`nilaiempat: ${Empat}`);

//selain itu kita juga bisa memberikan rest parameter (...namavariabelbaru) pada object
//syntax --> (let|const) {namaObject1, ...namavariabelbaru} = namavariabelobjek
//yang mana, nantinya namavariabelbaru ini akan diisi data sisa pada object namavariabelobjek yang belum dimasukkan ke variabel lain
//namavariabelbaru ini akan bersifat object
console.log('rest parameter pada object');
const Values = {
    nilaiSatu: 1,
    nilaiDua: 2,
    nilaiTiga: 3
};
const {nilaiSatu: satu1, ...args } = Values;
console.log(Values);
console.log(satu1);
console.log(args);

//kita juga bisa menggunakan function untuk mendapatkan data - data yang ada pada function
//contoh
// const Values = {
//     nilaiSatu: 1,
//     nilaiDua: 2,
//     nilaiTiga: 3
// };
console.log('Mengambil data pada suatu object dengan menggunakan function');
function getNilaisatu({nilaiSatu}){
    return nilaiSatu;
}
console.log(getNilaisatu(Values));
//perbedaan destructuring pada array dan object adalah, pada array, kita harus meletakkan nama variabel sesuai urutan index array.
//hanya saja, kita sebagai programmer bebas menentukan nama variabel pada destructuring array
//berbeda dengan array, pada object, kita harus mendefinisikan nama variabel sesuai dengan nama object pada suatu variabel
//namun, kita sebagai programmer tidak harus memposisikan nama variabel tersebut berurutan
//semisal:
//var obj = {
//    nama: 'andi'
//    umur: 13
//}
//var {umur, nama} = obj
//output nama adalah andi, bukan 13
//begitu juga umur adalah 13, bukan andi
//berbeda dengan array
//var arr = ['andi', 13];
// var [umur, nama];
//output yang keluar pada umur adalah andi, sedangkan nama adalah 13.

//kita juga bisa melakukan destructuring bersarang pada sebuah function
//contoh
console.log('contoh destructuring bersarang')
const mhs = {
    nama: 'Abdullah Ahmad Hafiz',
    nim: 105221026,
    nilai:{
        tugas: 80,
        UTS: 85,
        UAS: 75
    }
}
console.log(mhs);
//contoh destructuring bersarang
function kalimat({nama, nim, nilai:{tugas, UTS, UAS}}){
    return `halo, nama saya ${nama} dengan NIM ${nim}. nilai tugas saya ${tugas}, nilai uts saya ${UTS} dan nilai uas saya ${UAS}`;
}
console.log(kalimat(mhs));