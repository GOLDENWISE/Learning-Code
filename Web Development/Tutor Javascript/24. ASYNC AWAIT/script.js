//dalam asynchronous function, dapat memiliki syntax await didalamnya
//await digunakan untuk memberhentikan sementara eksekusi function hingga promise selesai
//contoh

//penerapan async await pada promise
//contoh promise
// let coba = new Promise((resolve, reject) => {
//   setTimeout(() => {
//     resolve("selesai");
//   }, 2000);
// });
// coba.then(() => {
//   console.log(coba);
// });

//penerapan
function cobaPromise() {
  return new Promise((resolve, reject) => {
    const waktu = 5000;
    if (waktu < 5000) {
      setTimeout(() => {
        resolve("Selesai");
      }, waktu);
    } else {
      reject("Lama alias ditolak");
    }
  });
}

async function cobaAsync() {
  try {
    const coba = await cobaPromise();
    console.log(coba);
  } catch (err) {
    console.log(err);
  }
}

cobaAsync();

//penjelasan syntax
//untuk membuat suatu function asyncronous, gunakan syntax async function namaFunction
//kemudian, pada function tersebut, cantumkan await, agar pada function yang asyncronous dapat menunggu operasi tersebut terlebih dahulu
//try digunakan ketika suatu operasi berjalan lancar atau tidak error
//catch terjadi ketika suatu operasi gagal atau terjadi error
