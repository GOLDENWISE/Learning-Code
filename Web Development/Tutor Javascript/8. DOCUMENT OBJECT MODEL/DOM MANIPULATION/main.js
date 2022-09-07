//manipulasi element: elemen yang telah ditambahkan sebelumnya, element tersebut dapat diubah
//variabelElement.innerHTML = merubah isi dari tag yang diseleksi
var innerhtml = document.getElementById("judul");
innerhtml.innerHTML = "ini diubah oleh javascript"; //berbahaya karena parse as html. bisa diserang hacker
innerhtml.textContent = "ini diubah oleh javascript menggunakan textContent"; //lebih aman
//Hanya saja, textContent ini digunakan jika kita hanya menyisipkan sebuah text. jika kita ingin menambahkan sebuah elemen, maka lebih baik menggunakan innerHTML

//untuk mengetahui data pada suatu text pada html, kita dapat menambahkan .includes("data yang diinginkan") untuk memfilter tag html sesuai 'data yang diinginkan'"
var innerhtmL = document.querySelector("#a");
innerhtmL.innerHTML = "ini telah diubah oleh javascript";

//variabelElement.style.<property> = merubah style atau css dari element yang diseleksi
var Style = document.querySelector("section#b p");
Style.style.color = "blue";
Style.style.backgroundColor = "red";

//variabelElement.setAttribute('jenis attribut', 'isi attribut') = memanipulasi atribut pada sebuah element
var Attribute = document.getElementById("foot");
Attribute.setAttribute("name", "Attribut"); //menambahkan attribut pada suatu tag atau element
console.log(Attribute.getAttribute("name")); //melihat attribut yang digunakan
Attribute.removeAttribute("name"); //menghapus attribut yang digunakan pada suatu element. syntax : variabelElement.removeAttribute('jenis attribute')
console.log(Attribute.getAttribute("name"));

//variabelElement.classList = manipulasi class pada sebuah element
var kelas = document.getElementsByClassName("class")[0];
console.log(kelas.classList);
kelas.classList.add("label"); //menambahkan kelas baru pada sebuah elemen
console.log(kelas);
console.log(kelas.classList);
kelas.classList.remove("label"); //menghapus kelas pada sebuah elemen
console.log(kelas.classList);
kelas.classList.toggle("label"); //menambahkan kelas baru pada sebuah elemen jika class tersebut tidak ada pada sebuah elemen
console.log(kelas.classList);
kelas.classList.toggle("label"); //menghapus kelas pada sebuah elemen jika class tersebut ada pada suatu elemen
console.log(kelas.classList);
kelas.classList.toggle("satu");
kelas.classList.toggle("dua");
kelas.classList.toggle("tiga");
console.log("kelas.classList.item((index-0 hingga index-3))");
console.log(kelas.classList.item(0)); //menampilkan class pada sebuah elemen pada index yang diinginkan
console.log(kelas.classList.item(1));
console.log(kelas.classList.item(2));
console.log(kelas.classList.item(3));
console.log("kelas.classList.contains('nama kelas yang ingin dicari. true jika ada, false jika tidak')");
console.log(kelas.classList.contains("satu")); //mencari item class yang ingin ditemukan. jika true maka item class ditemukan. jika false, item class tidak ditemukan
console.log(kelas.classList.contains("empat"));
console.log("kelas.classList.replace('item class yang ingin diganti')");
console.log(kelas.classList.item(1));
kelas.classList.replace("satu", "utas"); //replace('nama class yang ingin diganti', 'nama class pengganti'), mengganti item class yang telah tersedia
console.log(kelas.classList.item(1));

//manipulasi node: menyisipkan element baru pada suatu halaman atau menghilangkan elemen pada suatu halaman atau mengganti sebuah elemen dengan elemen yang baru
var pBaru = document.createElement("p"); //membuat element baru
var teksPBaru = document.createTextNode("createTextNode --> appendChild"); //membuat sebuah teks baru
pBaru.appendChild(teksPBaru); //menyisipkan teks yang dibuat pada teksPBaru ke elemen yang dibuat di pBaru
var seksiB = document.getElementById("b");
seksiB.appendChild(pBaru); //menambahkan elemen yang diset pada pBaru ke elemen dengan id b di akhir elemen tersebut
var liBaru = document.createElement("li");
var textliBaru = document.createTextNode("createTextNode --> insertBefore");
liBaru.appendChild(textliBaru);
//untuk menambahkan elemen baru menggunakan insertBefore, ketahui terlebih dahulu elemen parentnya dan elemen saudara yang posisinya nanti setelah elemen baru
var parent = document.querySelector("section#b ul"); //parentnya adalah elemen ul pada id b
var afterElement = document.querySelector("section#b ul li:nth-child(2)"); // elemen saudara yang posisinya nanti setelah elemen baru, yaitu posisi dari elemen baru ini sebelum li yang berisikan text item 2
parent.insertBefore(liBaru, afterElement); //syntax insert before --> variabel Elemen Parent.insertBefore(variabel Elemen Baru, variabel Elemen Saudara yang posisinya setelah elemen baru)
//kegunaannya sama seperti appendChild, hanya saja kita bisa memposisikan elemen baru ini untuk diposisikan pada posisi yang diinginkan

//menghapus elemen
//ketahui terlebih dahulu elemen parentnya dan elemen yang akan dihapus
//dalam kasus ini, kita akan menggunakan elemen parent section#b ul yang telah diketahui sebelumnya
//var parent = document.querySelector('section#b ul');
var removeElemen = document.querySelector("section#b ul li:nth-child(4)"); //elemen yang akan dihapus
parent.removeChild(removeElemen); //syntax --> variabel elemen parent.removeChild(variabel dari elemen yang ingin dihapus)

//replace atau mengganti elemen
//ketahui terlebih dahulu elemen parentnya dan element yang ingin direplace
//dalam kasus ini, kita akan menggunakan elemen parent section#b ul yang telah diketahui sebelumnya
//var parent = document.querySelector('section#b ul');
var replaceElemen = document.querySelector("section#b ul li:nth-child(3)"); //variabel dari elemen yang akan diganti
//kemudian buat sebuah elemen pengganti
var elemenPengganti = document.createElement("li");
var textliPengganti = document.createTextNode("Ini elemen sudah diganti");
elemenPengganti.appendChild(textliPengganti); //variabel dari elemen yang akan pengganti
//lakukan replace
parent.replaceChild(elemenPengganti, replaceElemen); //syntax --> variabel elemen parent.replaceChild(variabel dari elemen pengganti, variabel dari elemen yang akan diganti)

//untuk mengetahui data pada tag html, kita dapat menggunakan syntax namaVariabelselection.dataset.(data yang ingin dilihat)
//(data yang diinginkan bisa berupa):
// duration: mengetahui durasi dari suatu video (data diambil dari tag date-duration)
