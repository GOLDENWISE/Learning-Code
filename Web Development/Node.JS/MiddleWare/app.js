const express = require("express");
const app = express();
const port = 3000;

app.set("view engine", "ejs");

//built-in middleware syntax--> namavariabelyangmengandungfungsiexpress.use(namavariabelyangberisipackageexpress.static('namafolderyangakandiberiizinakses));
app.use(express.static("public"));

//application level middleware
app.use((req, res, next) => {
  console.log("Time: ", Date.now());
  next();
});

app.get("/", (req, res) => {
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
  res.render("index", { waktu: "siang", title: "home", dataMahasiswa }); //memanggil file index.ejs
});

app.get("/about", (req, res) => {
  res.render("about");
});

app.get("/product/:id/", (req, res) => {
  res.send(`Product ID : ${req.params.id} <br>Category : ${req.query.category}`);
});

app.get("/contact", (req, res) => {
  res.render("contact");
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
