function tampilkanPesan() {
  console.log("Hello World");
}
tampilkanPesan();
//timing events: digunakan untuk mengatur kapan kode pada suatu program akan dijalankan
//setTimeout(): digunakan ketika kita ingin menjalankan kode kita, selama beberapa waktu tertentu
//syntax --> setTimeout(function expression atau function declaration, durasi menunggu dalam milisecond)
//function declaration
setTimeout(tampilkanPesan, 3000); //3000 milisecond = 3 second. 1 milisecond = 1/1000 second

//function Expression
setTimeout(function () {
  console.log("function expression, tampil setelah 5 detik");
}, 5000);

//setTimeout juga dapat dihentikan menggunakan clearTimeout(variabel dari set time out)
//contoh pengimplementasian
const tes = setTimeout(function () {
  console.log("dijalankan dalam 10 detik");
}, 10000);

const stop = document.querySelector("#stop");
stop.addEventListener("click", function () {
  clearTimeout(tes);
  console.log("selesai");
});

//setInterval(): digunakan ketika kita ingin menjalankan kode kita selama berulang - ulang dengan jeda beberapa waktu tertentu
const ulang = setInterval(function () {
  console.log("berulang-ulang dengan jeda 1 detik");
}, 1000);

const stopInterval = document.querySelector(".stop");
stopInterval.addEventListener("click", function () {
  clearInterval(ulang);
  console.log("pengulangan berhenti");
});
