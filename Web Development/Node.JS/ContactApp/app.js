const { fs, ...data } = require("./DATA/operation");
const express = require("express");
const app = express();
const port = 3000;
const { body, validationResult, check } = require("express-validator"); //package npm express-validator
const { render } = require("ejs");

//package npm validator dari express --> express-validator => key search package npm

app.set("view engine", "ejs");
app.use(express.urlencoded({ extended: true })); //built-in middleware yang berguna untuk mengambil data yang diinputkan di browser

app.get("/", (req, res) => {
  data.checkData();
  const tampil = JSON.parse(fs.readFileSync(data.dataPath));
  res.render("index", { tampil });
});

app.get("/Add", (req, res) => {
  res.render("Add");
});

//app.post("action form", (req, res) => {operasi pada funciton}) -> digunakan untuk mengambil data yang diinputkan oleh user pada form yang sesuai dengan action yang kita setting
app.post(
  "/",
  [
    body("nama").custom((value) => {
      const duplicate = (value) => {
        const cek = JSON.parse(fs.readFileSync(data.dataPath));
        return cek.find((e) => e.nama === value);
      };
      if (duplicate(value)) {
        throw new Error("Nama sudah digunakan, silahkan gunakan nama lain");
      }
      return true;
    }),
    check("Email", "Email anda tidak valid").isEmail(),
    check("noHp", "no HP yang dimasukkan tidak valid").isMobilePhone("id-ID"),
  ],
  (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      res.render("Add", { errors: errors.array() });
    } else {
      // gunakan req.body.nameyangadapadataginput untuk melihat isi data yang diinputkan oleh user pada form html
      data.simpanContact(req.body.nama, req.body.noHp, req.body.Email);
      res.redirect("/"); //redirect atau kembali halaman yang diinginkan. syntax res.redirect('link');
    }
  }
);

//hapus data
app.get("/delete/:nama", (req, res) => {
  const isiData = JSON.parse(fs.readFileSync(data.dataPath));
  const hapus = isiData.find((e) => e.nama === req.params.nama);
  if (!hapus) {
    res.status(404);
    res.send("<h1>404</h1>");
  } else {
    data.deleteContact(req.params.nama, isiData);
    res.redirect("/");
  }
});

//update data
app.get("/change/:nama", (req, res) => {
  const isiData = JSON.parse(fs.readFileSync(data.dataPath));
  const update = isiData.find((e) => e.nama === req.params.nama);
  res.render("edit", { update });
});

app.post(
  "/update",
  [
    body("nama").custom((value, { req }) => {
      const duplicate = (value) => {
        const cek = JSON.parse(fs.readFileSync(data.dataPath));
        return cek.find((e) => e.nama === value);
      };
      if (value !== req.body.oldNama && duplicate(value)) {
        throw new Error("Nama sudah digunakan, silahkan gunakan nama lain");
      }
      return true;
    }),
    check("Email", "Email anda tidak valid").isEmail(),
    check("noHp", "no HP yang dimasukkan tidak valid").isMobilePhone("id-ID"),
  ],
  (req, res) => {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      res.render("edit", { errors: errors.array(), update: req.body });
    } else {
      // gunakan req.body.nameyangadapadataginput untuk melihat isi data yang diinputkan oleh user pada form html
      data.updateContact(req.body);
      res.redirect("/"); //redirect atau kembali halaman yang diinginkan. syntax res.redirect('link');
    }
  }
);

app.get("/:nama", (req, res) => {
  const tampil = JSON.parse(fs.readFileSync(data.dataPath));
  const object = tampil.find((e) => {
    return e.nama === req.params.nama;
  });
  res.render("detail", { object });
});
app.listen(port, () => {
  console.log(`Example app listening on http://localhost:${port}`);
});

//JSON.parse(namaVariabelyangmengambilfilejson): mengubah data yang awalnya bersifat json menjadi string di javascript
//JSON.string(namavariabelyangberasaldarijavascriptdanbersifatdata): mengubah data dari javascript yang berupa int, float, string, boolean, menjadi json
