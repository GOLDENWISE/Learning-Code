const fs = require("fs");
const readLine = require("readline");
const read = JSON.parse(fs.readFileSync("contacts.json", "utf8"));
read.forEach((e, i) => {
  console.log(`${i + 1}. nama: ${e.nama}
   hp: ${e.Hp}
`);
});
const rl = readLine.createInterface({
  input: process.stdin,
  output: process.stdout,
});
rl.question("Masukkan nama anda: ", (nama) => {
  rl.question("Masukkan nomor Hp: ", (Hp) => {
    const contacts = fs.readFileSync("contacts.json");
    const data = JSON.parse(contacts.toString());
    const contact = {
      nama: nama,
      Hp: Hp,
    };
    data.push(contact);
    fs.writeFileSync("contacts.json", JSON.stringify(data));
    rl.close();
  });
});
//JSON.parse(namaVariabelyangmengambilfilejson): mengubah data yang awalnya bersifat json menjadi string di javascript
//JSON.string(namavariabelyangberasaldarijavascriptdanbersifatdata): mengubah data dari javascript yang berupa int, float, string, boolean, menjadi json
