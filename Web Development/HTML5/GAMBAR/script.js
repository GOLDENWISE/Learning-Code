//ambil elemen kotak
const kotak = document.querySelector("#kotak");

//atur ukuran kotak
kotak.width = window.innerWidth; //lebar kotak mengikuti ukuran dari kotak
kotak.height = window.innerHeight; //tinggi kotak mengikuti ukuran dari kotak

//tentukan context(2D atau 3D)
const ctx = kotak.getContext("2d"); //2D atau 2 dimensi atau bangun datar

//Manipulasi kotak
//Rectangle / kotak
ctx.fillStyle = "#dc3545"; //warna rectangle atau kotak
ctx.strokeStyle = "#0d6efd"; //warna border
ctx.lineWidth = "5"; //tebal dari border dalam pixel (px)
ctx.rect(50, 50, 300, 300); //menentukan tempat kotak berada dan ukurannya .rect(kordinat sumbu x, kordinat sumbu y, lebar(width), tinggi(height))
ctx.fill(); //menetapkan konfigurasi dari fillStyle atau warna
ctx.stroke(); //menetapkan konfigurasi dari strokeStyle atau border

//lingkaran
ctx.fillStyle = "#ffc107";
ctx.strokeStyle = "#0dcaf0";
ctx.beginPath(); //menandakan bahwa dimulainya dari sebuah jalur (tujuannya agar saat membuat dua bangun datar, warna yang dihasilkan bisa berbeda)
ctx.arc(550, 200, 150, 0, 2 * Math.PI); //syntax membuat lingkaran: .arc(kordinat sumbu pusat x, kordinat sumbu pusat y, jari - jari, sudut awal, sudut akhir)
ctx.fill();
ctx.stroke();

//Membuat path (contohnya segitiga)
ctx.fillStyle = "#198754";
ctx.strokeStyle = "#fd7e14";
ctx.beginPath();
ctx.moveTo(200, 370); //tentukan kordinat awal. syntax: .moveTo(kordinat x, kordinat y)
ctx.lineTo(350, 670); //tentukan arah dari garis dari titik yagn ditentukan dikordinat awal atau kordinat sebelumnya. syntax: lineTo(kordinat x, kordinat y)
ctx.lineTo(50, 670);
ctx.closePath(); //menutup garis atau menyambungkan titik awal ke titik akhir sebelum syntax ini dibuat menjadi sebuah garis
ctx.fill();
ctx.stroke();

//membuat animasi
let x = 200;
speed = 1;
function draw() {
  window.requestAnimationFrame(draw); //menjalankan sebuah animasi berdasarkan function. syntax: requestAnimationFrame(functionyangmenjalankananimasi)
  ctx.clearRect(550 - 155, 0, innerWidth, innerHeight); //menghapus bangun datar yang ditemukan. syntax clearRect(sumbu x, sumbu y, lebar, tinggi) *sumbu x dan sumbu y = kordinat dari area suatu bangun datar yang akan dihapus
  ctx.fillStyle = "#ffc107";
  ctx.strokeStyle = "#0dcaf0";
  ctx.beginPath();
  ctx.arc(550, x, 150, 0, 2 * Math.PI);
  ctx.fill();
  ctx.stroke();
  if (x + 150 > innerHeight || x - 150 < 0) {
    speed = -speed;
  }
  x += speed;
}
draw();
