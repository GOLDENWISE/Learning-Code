var penumpang = [];
var namaPenumpang, konfirmasi, opsi, uang = 0;
var Ucup, Dodi, Bambang;
function Angkot(nama, trayek, kas){
    this.nama = nama;
    this.trayek = trayek;
    this.kas = kas;
}
var namaAngkot = prompt('Silahkan pilih trayek yang ingin anda lihat:\n1. Ucup\n2. Dodi\n3.Bambang');
while(true){
    konfirmasi = confirm('Ingin dioperasikan?');
    if(konfirmasi === false){
        break;
    }
    opsi = confirm('Ok jika ada tambahan penumpang, cancel jika penumpang telah sampai tujuan');
    if(opsi){
        namaPenumpang = prompt('Masukkan nama');
        tambahPenumpang(namaPenumpang, penumpang);
    }
    else{
        namaPenumpang = prompt('Masukkan nama');
        hapusPenumpang(namaPenumpang, penumpang);
    }
}
function hapusPenumpang(namaPenumpang, penumpang){
    if(penumpang.length != 0 && penumpang.length <= 15){
        for(var i = 0; i < penumpang.length; i++){
            if(penumpang[i] === namaPenumpang){
                penumpang[i] = undefined;
                uang = uang + 10000;
                break;
            }
        }
        console.log(penumpang.join(', '));
    }else{
        console.log('Tidak ada penumpang');
    }
}
function tambahPenumpang(namaPenumpang, penumpang){
    var i;
    if(penumpang.length === 0){
        penumpang.unshift(namaPenumpang);
        console.log(penumpang.join(', '));
    }else{
        for(i = 0; i < penumpang.length; i++){
            if(penumpang[i] === undefined){
                penumpang[i] = namaPenumpang;
                console.log(penumpang.join(', '));
                break;
            }
        }
        if(i === penumpang.length){
            if(penumpang.length < 15){
                penumpang.push(namaPenumpang);
                console.log(penumpang.join(', '))
            }else if(penumpang.length === 15){
                console.log('Angkot penuh');
            }
        }
    }
}
if(namaAngkot === 'Ucup'){
    Ucup = new Angkot('Ucup', ['Rengat', 'Tembilahan'], uang);
    console.log(Ucup); 
}else if(namaAngkot == 'Dodi'){
    Dodi = new Angkot('Dodi', ['Pematang Reba', 'Air Molek'], uang);
    console.log(Dodi);
}else if(namaAngkot == 'Bambang'){
    Bambang = new Angkot('Bambang', ['Rengat, Pematang Reba'], uang);
    console.log(Bambang);
}