const fs = require("fs");
const readLine = require("readline");
const rl = readLine.createInterface({
  input: process.stdin,
  output: process.stdout,
});
const dataPath = "DATA/contact.json";
const checkData = () => {
  if (!fs.existsSync(dataPath)) {
    fs.writeFileSync(dataPath, "[]", "utf-8");
  }
};
function pertanyaan(tanya) {
  return new Promise((resolve) => {
    rl.question(tanya, (jawab) => {
      resolve(jawab);
    });
  });
}
const simpanContact = (nama, noHp, Email) => {
  const contact = { nama, noHp, Email };
  const contacts = fs.readFileSync(dataPath);
  const data = JSON.parse(contacts.toString());
  data.push(contact);
  fs.writeFileSync(dataPath, JSON.stringify(data));

  rl.close();
};
const deleteContact = (nama, isiData) => {
  const filtered = isiData.filter((e) => e.nama !== nama);
  fs.writeFileSync(dataPath, JSON.stringify(filtered));
};

const updateContact = (data) => {
  const oldData = fs.readFileSync(dataPath);
  const contacts = JSON.parse(oldData.toString());
  const filtered = contacts.filter((e) => e.nama !== data.oldNama);
  delete data.oldNama;
  filtered.push(data);

  fs.writeFileSync(dataPath, JSON.stringify(filtered));
};
module.exports = { fs, dataPath, pertanyaan, checkData, simpanContact, deleteContact, updateContact };
