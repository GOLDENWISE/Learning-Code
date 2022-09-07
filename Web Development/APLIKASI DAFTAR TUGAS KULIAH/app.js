const data = require("./subprog/function");
const express = require("express");
const expressLayouts = require("express-ejs-layouts");
const app = express();
const port = 3000;
const IPAddress = "192.168.1.6";

app.set("view engine", "ejs");
app.use(expressLayouts);
app.use(express.urlencoded({ extended: true }));
app.use(express.static("public"));

app.get("/", (req, res) => {
  const daftarTugas = data.loadData();
  res.render("index", {
    layout: "main-layouts/main-layout",
    title: "Home",
    daftarTugas,
  });
});

app.get("/seemore/:index", (req, res) => {
  const daftarTugas = data.loadData();
  const obj = daftarTugas[req.params.index];
  const i = req.params.index;
  res.render("more.ejs", {
    title: "More",
    layout: "main-layouts/layout-kosong",
    obj,
    i,
  });
});

app.get("/add", (req, res) => {
  res.render("form", {
    title: "Tugas Baru",
    layout: "main-layouts/main-layout",
  });
});

app.post("/", (req, res) => {
  data.saveData(req.body.matkul, req.body.deadline, req.body.deskripsi);
  res.redirect("/");
});

app.get("/done/:index", (req, res) => {
  data.deleteData(req.params.index);
  res.redirect("/");
});

app.get("/update/:index", (req, res) => {
  const daftarTugas = data.loadData();
  const obj = daftarTugas[req.params.index];
  const index = req.params.index;
  res.render("update", {
    title: "Update",
    layout: "main-layouts/main-layout",
    obj,
    index,
  });
});

app.post("/update", (req, res) => {
  const updateData = {
    matkul: req.body.matkul,
    deadline: req.body.deadline,
    deskripsi: req.body.deskripsi,
  };
  const index = req.body.index;
  data.updateData(index, updateData);
  res.redirect("/");
});

app.get("/jadwal", (req, res) => {
  res.render("jadwal", {
    title: "Jadwal Kuliah",
    layout: "main-layouts/main-layout",
  });
});
app.listen(port, () => {
  console.log(`Open Schedulling App in http://${IPAddress}:${port}`);
});
