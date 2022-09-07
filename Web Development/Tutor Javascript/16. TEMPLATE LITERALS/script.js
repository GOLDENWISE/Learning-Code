//Template literal memungkinkan kita memberikan sebuah expression pada suatu string
//expression bisa berupa variabel
//untuk membuat template literal, kita harus menggunakan back tick (`string yang akan kita masukkan`) pada string tersebut

//contoh penerapan template literal

console.log(`string dengan satu baris`);
console.log(`string dengan banyak baris atau multiline
baris 1
baris 2`);
let expression = "ini expression"
console.log(`string dengan embedded expression = ${expression}`);

//expression interpolation
console.log(`1 + 2 = ${1 + 2}`);
//expression interpolation dengan ternary operation (if else versi singkat)
//syntax ternary operation -> condition ? (operasi yang ingin dijalankan jika condition true) : (operasi yang ingin dijalankan jika condition false); 
let angkaRandom = parseInt((Math.random()*10) + 1);
console.log(`${angkaRandom} adalah angka ${(angkaRandom % 2 == 0 ? 'genap' : 'ganjil')}`);

//HTML Fragments
//contoh 1
let el;
// const mhs = {
//     Nama: 'Abdullah Ahmad Hafiz',
//     NIM: 105221026,
//     Prodi: 'Ilmu Komputer',
//     Fakultas: 'Sains dan Teknologi',
//     Umur: '18 Tahun',
//     Email: 'abdamadhafiz13@gmail.com'
// };
// el = `<div class="mhs">
//     <div class="Nama">Nama: ${mhs.Nama}</div>
//     <div class="NIM">NIM: ${mhs.NIM}</div>
//     <div class="Prodi">Prodi: ${mhs.Prodi}</div>
//     <div class="Fakultas">Fakultas: ${mhs.Fakultas}</div>
//     <div class="Umur">Umur: ${mhs.Umur}</div>
//     <div class="Email">Email: ${mhs.Email}</div>
// </div>`;
// document.body.innerHTML = el;

//contoh 2

// const member = [
//     {
//         Nama: 'Abdullah Ahmad Hafiz',
//         Email: 'abdamadhafiz13@gmail.com'
//     },
//     {
//         Nama: 'Gayus Tambunan',
//         Email: 'Kangkorupsi@gmail.com'
//     }
// ];

// el = `<div class="member">
// <h2>Daftar Member</h2>
// ${member.map(m => `<ul>
//     <li>${m.Nama}</li>
//     <li>${m.Email}</li>
// </ul>`).join('')}
// </div>`;

// document.body.innerHTML = el;

// contoh 3

// const lagu = {
//     judul: 'Lugowo',
//     penyanyi: 'Lord Lugowo',
//     feat: 'Anak tiktok gaje T_T'
// }

// el = `<div class="lagu">
//     <ul>
//         <li>judul: ${lagu.judul}</li>
//         <li>penyanyi: ${lagu.penyanyi}</li>
//         ${lagu.feat ? `<li>feat: ${lagu.feat}</li>` : ''}
//     </ul>
// </div>`;

// document.body.innerHTML = el;

// contoh 4

// const mhs = {
//     Nama: 'Abdullah Ahmad Hafiz',
//     NIM: 105221026,
//     Prodi: 'Ilmu Komputer',
//     Fakultas: 'Sains dan Teknologi',
//     Email: 'abdamadhafiz13@gmail.com',
//     Semester: 2,
//     mataKuliah: ['Daspro', 'Sisop', 'TBA', 'Kalkulus', 'CPS', 'Bahasa Inggris', 'PTBE']
// };
// function cetakMataKuliah(matakuliah){
//     return `<ol>
//         ${matakuliah.map(e => `<li>${e}</li>`).join('')}
//     </ol>`;
// }
// el = `<div class="mhs">
//     <div class="Nama">Nama: ${mhs.Nama}</div>
//     <div class="NIM">NIM: ${mhs.NIM}</div>
//     <div class="Prodi">Prodi: ${mhs.Prodi}</div>
//     <div class="Fakultas">Fakultas: ${mhs.Fakultas}</div>
//     <div class="Email">Email: ${mhs.Email}</div>
//     <div class="Semester">Semester: ${mhs.Semester}</div>
//     <div class="Matkul">
//         <h4>Mata Kuliah:</h4>
//         ${cetakMataKuliah(mhs.mataKuliah)}
//     </div>
// </div>`;
// document.body.innerHTML = el;

// tagged templates: tujuannya adalah 

//contoh penerapan (membuat sebuah highlight pada nama dan umur)

const nama = 'Abdullah Ahmad Hafiz';
const umur = 18;
//...namaParameter = digunakan agar sistem mengetahui berapa banyak parameter yang disimpan ke dalam parameter tersebut. yang mana, kita sebagai programmer belum tentu tahu berapa banyak parameternya
function cetakString(tempStr, ...args){
    return `<div class="text">
${tempStr.reduce((accumulator, currentValue, i) => `${accumulator}${currentValue}<span class="hl">${args[i] ? args[i] : ''}</span>` ,'')}
</div>`;
}
const str = cetakString`Halo, nama saya ${nama}, saya berumur ${umur} tahun`;
//syntax diatas akan mengirimkan parameter string template literal (index 0 = Halo, nama saya, index 1 = , saya berumur, index 2 = tahun)
// dan parameter nama dan umur ke function cetakString
console.log(str);
const title = `<h1>CONTOH PENERAPAN TAGGED TEMPLATES (HIGHLIGHT)</h1>`
document.body.innerHTML = title + str;

//contoh penerapan lain adalah dalam melakukan translation. translation ini dapat dilakukan dengan menggunakan
//library i18n
//syntax -> (let | const) namaVariabel = i18n`lihat contoh 125`;

//contoh penerapan selanjutnya adalah dalam styled components
//syntax -> (let | const) namaVariabel = styled.(tag html yang diseleksi)`style yang diberikan pada tag`;
//contoh styled components ini ada pada react.js'