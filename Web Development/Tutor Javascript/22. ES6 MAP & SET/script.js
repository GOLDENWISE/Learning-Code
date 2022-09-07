//map
//object map digunakan untuk menyimpan key/value
//dengan kata lain, map ini merupakan versi terbaru array pada ecmascript 6 atau javascript versi terbaru
//key/value dapat berupa tipe data apapun

//syntax new Map([iterable])
let map = new Map([['k1', 'v1'], ['k2', 'v2']]);
console.log('map:');
console.log(map);
//untuk mengetahui ukuran map
console.log(`ukuran map: ${map.size}`);

//namaVariabelMap.set(key, value): menambahkan pasangan key dan nilai nya ke variabel
console.log('menambahkan pasangan key dan nilai nya ke variabel');
map.set('k3', 'v3');
console.log(map);

//namaVariabelMap.get(key): melihat value dari key yang ingin dilihat
console.log('melihat value dari key yang ingin dilihat');
console.log(map.get('k1'));
console.log(map.get('k2'));
console.log(map.get('k3'));

//namaVariabelMap.has(key): melihat apakah key yang dicari ada pada variabel tipe map. jika ada maka true, jika tidak maka false
console.log('melihat apakah key yang dicari ada pada variabel tipe map');
console.log(`${map.has('k1') ? `${'k1'} tersedia` : `${'k1'} tidak tersedia`}`);
console.log(`${map.has('k2') ? `${'k2'} tersedia` : `${'k2'} tidak tersedia`}`);
console.log(`${map.has('k3') ? `${'k3'} tersedia` : `${'k3'} tidak tersedia`}`);
console.log(`${map.has('k4') ? `${'k4'} tersedia` : `${'k4'} tidak tersedia`}`);

//namaVariabelMap.delete(key): menghapus key beserta value nya
console.log('menghapus key beserta value nya');
map.delete('k2');
console.log(map);

//namaVariabelMap.entries(): mengembalikan index atau iterator setiap key / values pada variabel map
console.log('penerapan namaVariabelMap.entries()');
for(const e of map.entries()){
    console.log(`${e[0]} : ${e[1]}`);
}

//namaVariabelMap.values(): mengembalikan nilai atau value dari setiap key pada variabel map
console.log('penerapan namaVariabelMap.values()');
for(const e of map.values()){
    console.log(e);
}

//namaVariabelMap.keys(): mengembalikan key dari setiap value pada variabel map
console.log('penerapan namaVariabelMap.keys()');
for(const e of map.keys()){
    console.log(e);
}

//namaVariabelMap.clear(): menghapus semua key dan map yang ada pada variabel map
console.log('menghapus semua isi variabel map');
map.clear();
console.log(map);

//Set
//set merupakan syntax yang digunakan untuk membuat variabel memegang nilai unik, nilai yang sama tidak diterima
console.log('set:');
let set = new Set([1, 2, 3, 4, 5, 6]);
console.log(set);
console.log(`ukuran set: ${set.size}`);

//namaVariabelSet.add(nilai atau data yang ingin ditambahkan):menambah nilai atau data ke variabel set
console.log('menambah nilai atau data ke variabel set');
set.add(7).add(true).add('ini string');
console.log(set);

//namaVariabelSet.delete(nilai atau data yang ingin dihapus): menghapus nilai atau data dari variabel set
console.log('menghapus nilai atau data dari variabel set');
set.delete(true);
console.log(set);

//namaVariabelSet.has(nilai atau data yang ingin dicari): mengembalikan nilai true jika nilai atau data tersedia, begitu sebaliknya
console.log('mengembalikan nilai true jika nilai atau data tersedia, begitu sebaliknya');
console.log(set.has(1) ? '1 tersedia' : '1 tidak tersedia');
console.log(set.has(2) ? '2 tersedia' : '2 tidak tersedia');
console.log(set.has(3) ? '3 tersedia' : '3 tidak tersedia');
console.log(set.has(4) ? '4 tersedia' : '4 tidak tersedia');
console.log(set.has(5) ? '5 tersedia' : '5 tidak tersedia');
console.log(set.has(6) ? '6 tersedia' : '6 tidak tersedia');
console.log(set.has(7) ? '7 tersedia' : '7 tidak tersedia');
console.log(set.has(true) ? 'true tersedia' : 'true tidak tersedia');
console.log(set.has('ini string')  ? 'ini string tersedia' : 'ini string tidak tersedia');

//namaVariabelSet.values(): mengembalikan nilai atau data pada set
console.log('Penerapan namaVariabelSet.values()');
for(const v of set.values()) {
    console.log(v);
}

//namaVariabelSet.clear(): menghapus semua nilai atau data pada set
console.log('menghapus semua nilai atau data pada set');
set.clear();
console.log(set);