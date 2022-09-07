const fs = require("fs");
const dataPath = "Database/data.json";

function checkData() {
  if (!fs.existsSync("Database")) {
    fs.mkdirSync("Database");
  }
  if (!fs.existsSync(dataPath)) {
    fs.writeFileSync(dataPath, "[]");
  }
}

function loadData() {
  checkData();
  const data = fs.readFileSync(dataPath);
  const convert = JSON.parse(data);
  return convert;
}

function findData(value) {
  const alldata = loadData();
  return alldata.find((e) => e.nama === value);
}

function saveData(matkul, deadline, deskripsi) {
  const data = { matkul, deadline, deskripsi };
  const oldData = loadData();
  oldData.push(data);
  fs.writeFileSync(dataPath, JSON.stringify(oldData));
}

function deleteData(index) {
  const data = loadData();
  data.splice(index, 1);
  fs.writeFileSync(dataPath, JSON.stringify(data));
}

function updateData(index, dataUpdate) {
  const data = loadData();
  data.splice(index, 1, dataUpdate);
  fs.writeFileSync(dataPath, JSON.stringify(data));
}
module.exports = { loadData, findData, saveData, deleteData, updateData };
