//built-in function
//charAt(): untuk mengetahui jenis karakter pada suatu variabel
//dimulai dari 0,...,banyak karakter dalam kalimat-1
var nama = "Abdullah Ahmad Hafiz"; 
console.log(nama.charAt(0));
//sin(), cos(), tan(), random(), round(),
//floor(), ceil(), log()
var angka = 1;
console.log(Math.sin(angka));
console.log(Math.cos(angka));
console.log(Math.tan(angka));
//user-defined function
//function declaration
//memanggil function sebelum function declaration 
var c = jumlahDuaBilangan(2, 3);
console.log(c);
function jumlahDuaBilangan(a, b){
	var total;
	total = a + b;
	return total;
}
//memanggil function setelah function declaration
var d = jumlahDuaBilangan(2, 3);
console.log(d);
//function expression
d = function(b, a){
	var selisih;
	selisih = b - a;
	return selisih;
}
//memanggil function expression harus setelah function
console.log(d(3, 2));

//latihan: Menjumlahkan dua volume kubus
var total, kubus1, kubus2, sisi1, sisi2;
function volumeKubus(s){
	var volume;
	volume = s * s * s;
	return volume;
}
function totalVolumeKubus(a, b){
	var total = a + b;
	return total;
}
sisi1 = prompt('Masukkan sisi kubus 1');
sisi2 = prompt('Masukkan sisi kubus 2');
kubus1 = volumeKubus(sisi1);
kubus2 = volumeKubus(sisi2);
total = totalVolumeKubus(kubus1, kubus2);
console.log(total); //output = 539
//syntax diatas dapat juga ditulis seperti berikut
total = totalVolumeKubus(volumeKubus(sisi1), volumeKubus(sisi2));
console.log(total);
//arguments: variabel yang sudah dibuat pada javascript
//		     yang akan menampung nilai argument yang
//			 tidak ada pada suatu fungsi
//contoh:
function tampilkanData(){
	return arguments[3];//untuk melakukan pengecekan, ganti index arguments( dari 0 hingga banyak data yang berlebih - 1)
						//semisal ada 4 data yang berlebih, maka index = 0 hingga 3
						//semisal ingin mencari data pertama, maka index = 1-1 = 0
						//ingin mencari data kedua, maka index = 2 - 1 = 1
						//dst
}
var output = tampilkanData("Anda Wibu", 1, true, 1.2);
console.log(output);
//untuk mengetahui panjang array arguments
//dapat menggunakan syntax: arguments.length
//contoh penggunaannya
function banyakData(){
	return arguments.length;
}
var banyak = banyakData("Halo", 12, 1.2, true);
console.log(banyak);//berdasarkan contoh diatas, outputnya adalah 4
//hal tersebut juga dapat diimplementasikan kedalam perulangan for atau while
console.log("Variabel Scope");
//block scope : C, C++, Java, dan sejenisnya
//function scope : Javascript dan sejenisnya
var globalscope = 2; //ini adalah global scope atau pendeklarasian variabel secara global
//pendeklarasian variabel secara global ini akan membuat variabel bekerja pada semua function
var globalScope2 = 11;
console.log(globalScope2);
function functionScope(){
	//pendeklarasian dalam function, akan membuat variabel yang dideklarasikan hanya berlaku pada suatu function saja
	//dengan kata lain, dalam function lain, var yang dideklarasikan pada suatu function termasuk undefined
	var deklarasiLokal = 3;
	//name conflict
	var globalscope = 4; 
	console.log(deklarasiLokal);
	console.log(globalscope);//output akan menghasilkan 4
							 //karena, variabel yang dideklarasikan didalam function, walaupun memiliki nama variabel yang sama
							 //tetap saja merupakan variabel yang berbeda
	//agar var globalscope menghasilkan nilai yang sama dengan variabel global, gunakan syntax window.(nama variabel yang dideklarasikan secara global)
	console.log(window.globalscope);
	//namun, jika suatu variabel global tidak dideklarasikan ulang pada suatu function, maka variabel tersebut tetap dapat mengganti nilai variabel global
	globalScope2 = 13;
}
functionScope();
console.log(globalscope);
console.log(globalScope2);
//console.log(deklarasiLokal) //ini akan terjadi error

//Rekursif
console.log("Rekursif")
function tampilAngka(n){
	console.log(n);
	if(n === 0){
		return;
	}
	else{
		return tampilAngka(n-1);
	}
}
var tampilan = tampilAngka(10);

//untuk mengubah tipe data suatu data, kita dapat menggunakan syntax
//parseFloat() : mengubah semua tipe data menjadi float
//parseInt() : mengubah semua tipe data menjadi integer
