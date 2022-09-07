//for..of: membuat loop yang bisa menelusuri object yang iterable (iterable object)
/*
iterable object : string, array, arguments/Nodelist, typedarray, map, set, user-defined iterable
*/
const namaLengkap = ['Abdullah', 'Ahmad', 'Hafiz'];

//array

//memakai for biasa
// for(let i = 0; i < namaLengkap.length; i++){
//     console.log(namaLengkap[i]);
// }
//memakai forEach
// namaLengkap.forEach(e => {
//     console.log(e);
// });
//kita dapat mengetahui index berapa suatu data dengan menggunakan forEach
//sedangkan menggunakan for of tidak. for of hanya bisa melakukan operasi data pada suatu iterable object (mengeluarkan output, menjumlahkan index, dsb selain mengetahui index array / string)
//cara mengatasi hal tersebut, kita bisa menggunakan destructor dan menambahkan method entries() pada variabel array yang ingin diiterasi
//memakai for..of
console.log('for of array')
for(const [i, m] of namaLengkap.entries()){
    console.log(`${m} adalah bagian dari nama lengkap pada kata ke ${i+1}`);
}

//perbedaan for..of dengan forEach adalah, forEach tidak dapat digunakan untuk tipe data string  melainkan khusus untuk array
//sedangkan for..of bisa, selama data tersebut bersifat iterable
//seperti contoh berikut: 

//string
console.log('for of string')
const Nama = 'Hafiz';
for(const n of Nama){
    console.log(n);
}

//node list
console.log('for of node list')
const li = document.querySelectorAll('ul li');
//menggunakan forEach
// li.forEach(e => console.log(e.outerText));
//menggunakan for of
for(const el of li){
    console.log(el.outerText);
}

//for of arguments
//arguments bukan tipe array
//sehingga, arguments tidak bisa kita lakukan loop dengan menggunakan forEach atau reduce
//namun, kita bisa melakukan loop pada arguments dengan menggunakan for..of
console.log('for of arguments');
function jumlahkanSemua(){
    let jumlah = 0;
    for(a of arguments){ //arguments : variabel default jika pada suatu function tidak memiliki arguments namum menerima arguments
        jumlah += a;
    }
    return jumlah;
}
console.log(jumlahkanSemua(1,2,3,4,5));

//for..in
//membuat loop untuk bilangan yang enumerable (properti pada object)
console.log('for..in')
const gameML = {
    nick: 'goldenwise',
    highestRank: 'Mythic V',
    highestMCL: 'GrandMaster IV'
}
for(m in gameML){
    console.log(`${m}: ${gameML[m]}`); //m atau namavariabel lain pada for in (penamaan bebas) = nama variabel pada object: nick, highestRank, highestMCL
                                       //sehingga, untuk mengeluarkan isi dari object, gunakan syntax--> namaVariabeltipeobject[m]
}