const http = require("http"); //modul node js yang digunakan untuk membuat web server
const fs = require("fs");
const renderHTML = (path, res) => {
  fs.readFile(path, (err, data) => {
    if (err) {
      res.writeHead(404);
      res.write("Error: File not Found");
    } else {
      res.write(data);
    }
    res.end();
  });
};
http
  .createServer((req, res) => {
    res.writeHead(200, {
      "Content-type": "text/html",
    });
    const url = req.url;
    if (url === "/about") {
      renderHTML("./about.html", res);
    } else if (url === "/contact") {
      renderHTML("./contact.html", res);
    } else {
      renderHTML("./index.html", res);
    }
  })
  .listen(3000, () => {
    console.log("Listening on port 3000");
  });

//penjelasan syntax
//namaVariabelrequiremodul.createServer((parameter untuk request, parameter yang digunakan sebagai respon) => {
//  res.write('text yang ingin ditampilkan di web') //res.write ini berguna untuk menampilkan tulisan pada web yang akan dibangun
//  res.end() : digunakan sebagai akhir dari perintah pada web server
//}).listen(code port, nama host, () => { *code port: jika code port dikosongkan, defaultnya adalah 3000, *nama host: merupakan nama host dari web server, jika dikosongkan defaultnya bernama local host
//function ini digunakan untuk menampilkan hal yang terjadi ke console, jika error atau gagal dibangun
//});
//untuk melihat webnya, gunakan link : namahost.codeport
//code port yang tidak digunakan juga dapat dilihat pada web : https://en.wikipedia.org/wiki/List_of_TCP_and_UDP_port_numbers
