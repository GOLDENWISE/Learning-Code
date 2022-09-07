//Date(): function yang digunakan untuk mengetahui jam berapa saat ini
let d = new Date(); 
console.log(d);

//Fri Jan 02 1970 00:00:00
let d1 = new Date(86400000); 
console.log(d1);

//Fri Jan 02 2015 10:42:00
let d2 = new Date("January 2, 2015 10:42:00");//syntax ("(nama bulan dalam bahasa inggris) (tanggal), (tahun) (jam:menit:detik)")
console.log(d2);

//Sat Jun 12 1988 11:42:00
let d3 = new Date(88,5,12,11,42,0,0); //syntax ((2 angka tahun dibelakang, semisal 2020, maka 20), (bulan, january = 0 hingga desember = 11), (tanggal), (jam), (menit), (detik(puluhan)), (detik(satuan)))
console.log(d3);

//date methods
//getFullYear() = mendefinisikan tahun pada real time
let def = new Date();
let fullYear = def.getFullYear();
console.log(`sekarang tahun ${fullYear}`);
//getMonth() = mendefinisikan bulan pada real time (januari = 0, desember = 11)
let month = def.getMonth();
console.log(`sekarang bulan ${month + 1}`);
//getDate() = menampilkan tanggal pada real time
let date = def.getDate();
console.log(`sekarang tanggal ${date}`);
//getDay() = menampilkan hari pada real time (senin = 1, selasa = 2, rabu = 3, kamis = 4, jumat = 5, sabtu = 6, minggu = 0)
let day = def.getDay();
console.log(`sekarang hari ${day}`); 
//getHours() = menampilkan jam pada real time (jam 12 malam = 00, jam 11 malam = 23)
let hours = def.getHours();
console.log(`sekarang jam ${hours}`);
//getMinutes() = menampilkan menit pada real time
let minutes = def.getMinutes();
console.log(`menit ke- ${minutes}`);
//getSeconds() = menampilkan detik pada real time
let seconds = def.getSeconds();
console.log(`detik ke- ${seconds}`);
//getMilliseconds() = menampilkan mili detik pada real time
let Miliseconds = def.getMilliseconds();
console.log(`${Miliseconds} mili detik`);

//secara default, peletakan function pada Date() adalah Date((tahun), (bulan), (hari(minggu = 0, sabtu = 6)));
