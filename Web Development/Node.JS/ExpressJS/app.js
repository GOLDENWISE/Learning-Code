//syntax pada folder WEB SERVER
// const http = require("http"); //modul node js yang digunakan untuk membuat web server
// const fs = require("fs");
// const renderHTML = (path, res) => {
//   fs.readFile(path, (err, data) => {
//     if (err) {
//       res.writeHead(404);
//       res.write("Error: File not Found");
//     } else {
//       res.write(data);
//     }
//     res.end();
//   });
// };
// http
//   .createServer((req, res) => {
//     res.writeHead(200, {
//       "Content-type": "text/html",
//     });
//     const url = req.url;
//     if (url === "/about") {
//       renderHTML("./about.html", res);
//     } else if (url === "/contact") {
//       renderHTML("./contact.html", res);
//     } else {
//       renderHTML("./index.html", res);
//     }
//   })
//   .listen(3000, () => {
//     console.log("Listening on port 3000");
//   });

//penjelasan syntax
//namaVariabelrequiremodul.createServer((parameter untuk request, parameter yang digunakan sebagai respon) => {
//  res.write('text yang ingin ditampilkan di web') //res.write ini berguna untuk menampilkan tulisan pada web yang akan dibangun
//  res.end() : digunakan sebagai akhir dari perintah pada web server
//}).listen(code port, nama host, () => { *code port: jika code port dikosongkan, defaultnya adalah 3000, *nama host: merupakan nama host dari web server, jika dikosongkan defaultnya bernama local host
//function ini digunakan untuk menampilkan hal yang terjadi ke console, jika error atau gagal dibangun
//});
//untuk melihat webnya, gunakan link : namahost.codeport
//code port yang tidak digunakan juga dapat dilihat pada web : https://en.wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers

//expressJS: package npm yang membuat nodejs berinteraksi dengan website

//implementasi Express JS
//untuk dokumentasi express JS dapat dilihat di npm, atau expressjs.com
const express = require("express");
const app = express();
const port = 3000;
// '/' : route home
// '/about': route about
app.get("/", (req, res) => {
  res.sendFile("./index.html", { root: __dirname });
  //res.sendFile('lokasi dan nama file yang diambil', {root: __dirname}): mengirimkan file yang kita inginkan ke web untuk ditampilkan
});

app.get("/about", (req, res) => {
  res.send("MyHello World! in about");
});

app.get("/product/:id/", (req, res) => {
  res.send(`Product ID : ${req.params.id} <br>Category : ${req.query.category}`);
});

//req.params.id = menampilkan laman web /namaweb/id yang diberikan. dengan tampilannya adalah nama web itu sendiri
//req.query.namaVariabel = menampilkan laman web /namaweb/id?namaVariabel=isivariabel, dengan nilainya adalah isivariabel

app.get("/contact", (req, res) => {
  res.send("MyHello World! in contact");
});

app.get("/MyAPI", (req, res) => {
  res.json({
    nama: "GoldenWise",
    rank: "Mythic V",
    AR: "59",
    Game: {
      game1: "MobileLegends",
      game2: "GenshinImpact",
    },
  }); //res.json({object json}): digunakan untuk menampilkan data yang dikirim ke website dalam bentuk json
});

app.use("/", (req, res) => {
  //digunakan untuk menjalankan segala operasi yang berkaitan dengan root, selain menggunakan get
  res.status(404); //mengirimkan status 404 (not found)
  res.send("404"); //mengirimkan tulisan di web (404)
});
app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
