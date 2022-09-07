//dengan menggunakan es6 (ecmascript 6 atau sama dengan java script 6)
//kita bisa memberikan dan merubah nama object sesuai yang kita inginkan dengan menggunakan [...] pada nama object yang kita berikan
//contoh
console.log('Memberikan nama yang ada pada data object sesuai keinginan user');
let prop = 'name';
let id = '1234';
let mobile = '082119442067';

let userData = {
    [prop]: 'Abdullah Ahmad Hafiz',
    [`numberTelp_${id}`]: mobile
}
console.log(userData);

//kemudian, kita bisa mengombinasikan 2 object yang berbeda pada 1 variabel yang nantinya akan bersifat object
//hal tersebut dapat dilakukan dengan menggunakan syntax Object.assign({namaisiobjectyanginginditambahkan: defaultvalue, ...}, namaVariabelObject1, namaVariabelObject2, ..., namaVariabelObjectn);
//isi pada {} optional atau dibebaskan kepada programmer
//contoh
console.log('Menggabungkan 2 atau lebih data yang bersifat object menjadi satu object dengan menggunakan Object.assign({},...)');
let data1 = {
    nama: 'Abdullah Ahmad Hafiz',
    nim: 105221026,
    semester: 3
};
let data2 = {
    umur: 18,
    ttl: '13 Januari 2004'
};

let dataMhs = Object.assign({}, data1, data2);
console.log(dataMhs);
