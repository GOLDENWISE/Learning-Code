//promises: metode asycronous terbaik jika dibandingkan dengan setTimeout()
//contoh 1
function asyncFunc(work) {
    return new Promise((resolve, reject) => {
        if(work === "") {
            reject(Error("Nothing"));
        } else {
            setTimeout(function() {
                resolve(work);
            }, 1000);
        }
    });
    //syntax membuat promise : new Promise(function(resolve(terpenuhi), reject(ingkar / tidak terpenuhi) {
        //hal - hal yang dilakukan
        //kondisi yang menyebabkan ingkar atau tidak terpenuhi
        //operasi yang dijalankan jika terpenuhi
    //}))
}
asyncFunc("Work 1") 
.then(result => { //nama parameter bebas, yang mana, isi dari parameter ini adalah hasil dari function
    console.log(result);
    return asyncFunc("Work 2");}, error => {console.log(error);}) 
.then(result => {console.log(result);}, error => {console.log(error);});
console.log("End");
//syntax promise
//namafunction('isi parameter').then(function yang dijalankan jika work, function yang dijalankan jika error).then(function jika work, function jika error).then lagi jika function jika work sebelumnya mengembalikan namafunction 
//jika terpenuhi, gunakan .then, jika tidak , gunakan .catch, jika kita menggunakan .finally, maka setiap promise selesai dieksekusi (ditepati atau diingkari), .finally akan dieksekusi terlebih dahulu, baru kemudian .then atau .catch

//contoh 2

let accept = true;
let janji = new Promise ((resolve, reject) => {
    if ( accept ) {
        setTimeout(() => resolve('Janji dipenuhi'), 3000);
    } else {
        setTimeout(() => reject('Janji diingkari'), 5000);
    }
});

janji.finally(() => console.log('selesai menunggu')).then(result => console.log(result)).catch(result => console.log(result));

//kita juga bisa menjalankan banyak promise secara bersamaan, dengan menggunakan syntax Promise.all(namaFunction/variabelyangmembuatpromise).then(operasi yang dijalankan pada then).catch(operasi yang dijalankan pada catch)

//iterators & generators
//iterators : dengan menggunakan syntax seperti dibawah, kita dapat membuat sebuah variabel dengan tipe data symbol iterator
//yang mana, isi dari symbol iterator itu nantinya adalah data atau angka yang kita tuliskan pada yield

//contoh 1

console.log('Iterators')
let myObj = {
    [Symbol.iterator]: function* () {
        yield 'Abdullah'; 
        yield 'Ahmad';
        yield 'Hafiz';
    }
}
console.log(...myObj);

//contoh 2
console.log('contoh 2')
function* idMaker() {
    let index = 0;
    while (index < 5)
      yield index++;
}
var gen = idMaker();
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);
console.log(gen.next().value);

//contoh 3

console.log('contoh 3');
const arr = ['0', '1', '4', 'a', '9', 'c', '16'];
const my_obj = {
  [Symbol.iterator]: function*() {
    for(let index of arr) {
      yield `${index}`;
    }
  }
};

const all = [...my_obj] /* Here you can replace the '[...my_obj]' with 'arr'. */
  .map(i => parseInt(i))
  .map(i => Math.sqrt(i))
  .filter((i) => i < 5) /* try changing the value of 5 to 4 see what happens.*/
  .reduce((i, d) => i + d); /* comment this line while you are changing the value of the line above */

console.log(all);

//modules = menggunakan library yang isinya beberapa function yang mungkin kita bisa gunakan untuk beberapa hal
//untuk mengirim variabel atau function ke module, gunakan export
//untuk mengambil function atau variabel ke script, gunakan import * as namafile/namamodule from "lokasi module"

