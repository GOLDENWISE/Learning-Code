//templating engine
//EJS: embedded javascript templating engine
//syntax,setup: simple
//speed execution: cepat
//cara mencari kesalahan / error : mudah
//pengembangannya aktif
//dibuat oleh express
//EJS ini merupakan salah satu package npm, sehingga perlu diinstall terlebih dahulu
//untuk documentasi, dapat dilihat di npm, expressJS templating engine ejs (akan dihubungkan ke github) atau melalui web ejs.co
const express = require("express");
const expressLayouts = require("express-ejs-layouts"); //package yang digunakan untuk menyambungkan layout yang dapat digunakan pada banyak browser
const app = express();
const port = 3000;

//menggunakan ejs
app.set("view engine", "ejs");
//pastikan folder tempat file disimpan ada di folder views
//untuk nama file yang digunakan, diharuskan menggunakan format ejs
//untuk melihat syntax ejs, dapat dilihat pada file index.ejs pada folder views

//menggunakan layouts
app.use(expressLayouts);

app.get("/", (req, res) => {
  //untuk mengirimkan data dari javascript ke ejs (data dapat diambil dari json atau variabel dari javascript itu sendiri)
  //gunakan syntax : res.render('namafileejs', {data yang dikirimkan ke web})
  const dataMahasiswa = [
    {
      nama: "Agil sandik",
      nim: "1371340479",
      semester: 4,
    },
    {
      nama: "Sandikage",
      nim: "13213414",
      semester: 5,
    },
  ];
  res.render("index", {
    waktu: "siang",
    title: "home",
    dataMahasiswa,
    layout: "layout/main-layouts",
  }); //memanggil file index.ejs
});

app.get("/about", (req, res) => {
  res.render("about", {
    layout: "layout/main-layouts",
    title: "Halaman about",
  });
});

app.get("/product/:id/", (req, res) => {
  res.send(`Product ID : ${req.params.id} <br>Category : ${req.query.category}`);
});

app.get("/contact", (req, res) => {
  res.render("contact", {
    layout: "layout/main-layouts",
    title: "Halaman contact",
  });
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
  });
});

app.use("/", (req, res) => {
  res.status(404);
  res.send("404");
});
app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
