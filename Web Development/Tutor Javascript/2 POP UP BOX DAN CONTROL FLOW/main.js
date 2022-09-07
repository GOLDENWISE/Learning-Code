alert('Hello World'); //alert: menampilkan pop up box pada web
alert('ini salah satu contoh penulisan alert dalam dua kali penulisan');
alert('Tekan ok untuk melihat contoh prompt!')
prompt('Bagus ga?:');//prompt: menampilkan pop up yang dapat diisi oleh pengguna
//penulisan prompt juga bisa dilakukan dengan menggunakan variabel. contoh:
var nama = prompt('Masukkan nama: ');
//kemudian, nama tersebut dapat ditampilkan kembali menggunakan alert
alert("Welcome " + nama);
//confirm: meminta konfirmasi ke user. nilai yang ditampilkan berupa boolean
confirm('Kamu yakin? ');
var konfirmasi = confirm('Yakin deck???');
//contoh percabangan if else
if(konfirmasi === true){
    alert('YOI, VALID');
}else{
    alert('SINI PD, bagi link discord anda');
}

//contoh pengulangan while
var harus = true;
alert('kali ini lu harus setuju atau gw kasih genjutsu lu!')
while(konfirmasi === harus){
    konfirmasi = confirm('setuju ga kalo akuto ga bisa solo verse?');
}
var angka = prompt('Masukkan angka');
alert('Angka yang anda masukkan : ' + angka);

//contoh pengulangan for
//menampilkan angka 0 hingga 5
var angka = 5;
for(var i = 0; i <= angka; i++){
    alert(i);
}

//kondisi switch case
var option = prompt('Apa yang kamu inginklan?');
switch (option) {
    case 'Membahagiakan ortu':
        alert('Tujuan yang mulia');
        break;
    case 'Sukses':
        alert('Jika kamu yakin, kamu pasti bisa');
        break;
    default: 
        alert('Jadi kamu tidak menginginkan apa - apa ya? yaudah deh');
}
