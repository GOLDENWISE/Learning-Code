//object mampu menyimpan banyak data dengan nama variabel dan suatu function.
//variabel yang ada didalam object disebut dengan properti
//masing - masing properti dipisahkan dengan tanda koma
//function yang ada didalam object disebut dengan method
//dalam suatu object, juga bisa diberikan objek yang lain

//Membuat object
//dengan cara literal
console.log('literal');
let data = {
    nama: 'Abdullah Ahmad Hafiz',
    umur: 18,
    ips: [3.47, 3.58],
    ipk: 3.52,
    alamat: {
        jalan: 'Jalan Patimura no. 36',
        kota: 'Air Molek',
        Provinsi: 'Riau'
    },
    email: 'abdamadhafiz13@gmail.com',
    halo: function(){
        console.log(this); //object this mengembalikan function 'halo'
    }
};
console.log(data);
console.log(data.nama); //memanggil suatu data pada suatu objek
//dengan cara function declaration
console.log('function declaration');
function buatObjekData(nama, nrp, email, jurusan){
    console.log(this); //this mengembalikan object dalam skala global variabel
    let dataFunction = {
        nama: nama,
        nrp: nrp,
        email: email,
        jurusan: jurusan
    };
    return dataFunction;
}
let data2 = buatObjekData('Ucup dody salmandi', 105225378, 'UcupDody13@gmail.com', 'ilkom');
console.log(data2);
//dengan Constructor: function yang dikhususkan untuk membuat objek. nama function harus diawali dengan huruf besar
//Pemanggilannya harus menggunakan syntax 'new'
console.log('constructor')
function Buatobjek(nama, nrp, email, jurusan){
    console.log(this); //mengembalikan fungsi 'Buatobjek'
    this.nama = nama;
    this.nrp = nrp;
    this.email = email;
    this.jurusan = jurusan;
}
let data3 = new Buatobjek('Salmandi dody Ucup', 173513424, 'SalmandiUcup@icloud.com', 'ilhum'); //syntax new ini menandakan bahwa objek pada function ini ditujukan ke suatu variabel yang diinginkan 
console.log(data3);

//this: keyword special yang secara otomatis didefinisikan pada setiap function/objek
//this ini merupakan objek yang isinya data-data untuk window. sehingga, this==window
console.log('this' + '22' + '29' + '44');
console.log(this);
/*
berdasarkan hal tersebut, 'this' ini pada perlakuan object literal, akan mengembalikan function
pada objek literal tersebut. pada perlakuan function seperti biasanya, akan mengembalikan objek global.
pada perlakuan constructor, akan mengembalikan function dari constructor tersebut
*/