//spread operator dan rest parameter direpresentasikan dengan karakter 3 titik (...)
//spread operator: sebuah operator yang memecah atau unpack variabel yang iterable menjadi single element
//jenis - jenis iterable variabel dapat dilihat pada folder for of dan for in
//contoh spread operator
console.log('Spread Operator Array')
const namaLengkap = ['Abdullah', 'Ahmad', 'Hafiz'];
console.log(namaLengkap);
console.log(...namaLengkap);

//contoh spread operator string
console.log('Spread Operator String');
const nickElegant = 'GOLDENWISE';
console.log(nickElegant);
console.log(`ini contoh spread operator string:  `, ...nickElegant);

//spread operator ini sendiri implementasinya nanti akan digunakan ketika kita ingin menggabungkan dua buah array
//contoh
console.log('Menggabungkan 2 array');
const semester1 = ['MatDis', 'Kalkulus 1', 'OrKom', 'BIndo', 'BIng', 'Berpikir Komputasi', 'Berpikir Kritis'];
const semester2 = ['TBA', 'Daspro', 'Sisop', 'CPS', 'BIng2', 'PTBE', 'Kalkulus 2', 'Prak Daspro', 'Prak Sisop'];
console.log(semester1);
console.log(semester2);
const mataKuliah2Semester = [...semester1, ...semester2];
console.log(mataKuliah2Semester);
//implementasi spread operator yang selanjutnya adalah saat menyalin array
// const hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
// const bulan = hari;
// bulan[0] = 'Januari';
// console.log(hari);
// console.log(bulan);
//Masalah yang terjadi jika kita menyalin array dengan metode seperti diatas
//adalah, saat kita mengubah variabel bulan pada index ke 0, secara otomatis isi dari variabel hari index ke 0 juga ikut berubah
//namun, dengan menggunakan spread operator, variabel baru yang merupakan salinan dari variabel lama
//jika salah satu data pada index pada variabel baru kita ubah, data pada variabel lama tidak akan ikut berubah
console.log('Menyalin array');
const hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
const bulan = [...hari];
bulan [0] = 'Januari';
console.log(hari);
console.log(bulan);

//implementasi selanjutnya adalah, mengubah nodelist menjadi array
console.log('Mengubah nodelist menjadi array');
const li = document.querySelectorAll('li');
console.log(li);
const liSem = [...li].map(e => e.textContent);
console.log(liSem);
//berdasarkan hal diatas, kita dapat lihat bahwa variabel li yang bersifat nodelist, dengan menggunakan 
//spread operator, kita dapat mengubah tipenya menjadi array

//implementasi selanjutnya adalah, dalam membuat animasi atau transisi pada sebuah text
const nama = document.querySelector('h1');
const Nama = [...nama.textContent].map(el => `<span>${el}</span>`).join('');
nama.innerHTML = Nama;

//rest parameter: merepresentasikan argumen yang ada pada function dengan jumlah yang tidak terbatas menjadi sebuah array
//rest parameter harus diposisikan pada sebuah function, tepat diakhir argumen. (argument1, argument2, ...argumentn) *argumentn = rest parameter
//contoh 
console.log('rest parameter');
function myFunc(a, b, ...c){
    return `nilai a = ${a}, nilai b = ${b}, sisanya adalah ${c}`;
}
console.log(myFunc(1,2,3,4));

//pada dasarnya, suatu function telah memiliki rest parameternya sendiri
//hanya saja, rest parameter dari function tersebut (arguments) bersifat bukan array
//sedangkan rest parameter yang programmer buat itu bersifat array
//namun, kita juga bisa mengubah rest parameter dari javascript ini menjadi bertipe array
//hal tersebut dapat dilihat pada contoh berikut
console.log('convert arguments non array to array');
function returnThat(){
    console.log('rest parameter function dari javascript, non array')
    console.log(arguments);
    console.log('mengubah tipe data non array menjadi array');
    // return Array.from(arguments);
    // selain menggunakan syntax diatas, kita juga dapat menggunakan spread operator untuk mengubahnya
    return [...arguments];
}
console.log(returnThat(1,2,3,4,5));

//contoh kasus rest parameter selanjutnya: filter
console.log('filter');
function filterBy(type, ...data){
    return data.filter(v => typeof v === type);
}
console.log()
console.log(`data tipe string: ${filterBy('string', 1, 2, 'Hafiz', true, 'Ahmad', 10)}`);
console.log(`data tipe number: ${filterBy('number', 1, 2, 'Hafiz', true, 'Ahmad', 10)}`);
console.log(`data tipe boolean: ${filterBy('boolean', 1, 2, 'Hafiz', true, 'Ahmad', 10)}`);
