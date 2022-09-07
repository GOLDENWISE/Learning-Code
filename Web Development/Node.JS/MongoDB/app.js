const { MongoClient } = require("mongodb");
const { emitWarning } = require("process");

const url = "mongodb://127.0.0.1:27017"; //mongodb://kodeport:27017
const dbName = "goldenwise"; //nama dari database pada mongoDB

//membangun client dengan mongoDB
const client = new MongoClient(url, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

// menambahkan satu data
client.connect((err, client) => {
  if (err) {
    return console.log("Koneksi gagal!");
  }
  //pilih database
  const db = client.db(dbName);

  //create data ke mongodb database goldenwise, collection test (satu data)
  //   db.collection("test").insertOne(
  //     {
  //       nama: "Windah Basudara",
  //       email: "bocilkematian@gmail.com",
  //     },
  //     (err, res) => {
  //       if (err) {
  //         return console.log("Gagal menambahkan data");
  //       }
  //       console.log(res);
  //     }
  //   );

  //create data ke mongodb database goldenwise, collection test (banyak data)
  //   db.collection("test").insertMany(
  //     [
  //       {
  //         nama: "GamersProEPEP",
  //         email: "gwplayerepepgengs@gmail.com",
  //       },
  //       {
  //         nama: "player game 4no",
  //         email: "waifugwyae@gmail.com",
  //       },
  //     ],
  //     (err, res) => {
  //       if (err) {
  //         return console.log("data gagal ditambahkan");
  //       }
  //       console.log(res);
  //     }
  //   );

  //   //menampilkan semua data pada collection test
  //   db.collection("test")
  //     .find()
  //     .toArray((err, res) => {
  //       console.log(res);
  //     });

  //menampilkan data sesuai kriteria-nama
  //.find({kriteria(berupa nama, id, dsb)})
  //   db.collection("test")
  //     .find({ nama: "GamersProEPEP" })
  //     .toArray((err, res) => {
  //       console.log(res);
  //     });
  //   //kriteria-id
  //   const ObjectID = require("mongodb").ObjectID;
  //   db.collection("test")
  //     .find({ _id: ObjectID("62fa393ab48b2e8b08dbdbcc") })
  //     .toArray((err, res) => {
  //       console.log(res);
  //     });

  //Mengubah data berdasarkan id
  //isi data awal--> nama: "golden wise", email:"goldenwise@gmail.com"
  //syntax--> db.collection("namacollection").updateOne/updateMany({kriteria objek yang akan diganti}, {data yang akan diganti pada object yang sesuai dengan kriteria})
  //   const ObjectID = require("mongodb").ObjectID;
  //   const updatePromise = db.collection("test").updateOne(
  //     {
  //       _id: ObjectID("62fa399bb48b2e8b08dbdbcd"),
  //     },
  //     {
  //       $set: {
  //         nama: "goldenWise",
  //         email: "GoldenWise@yahoo.com",
  //       },
  //     }
  //   );
  //   //data akhir --> nama: "goldenWise", email: "GoldenWise@yahoo.com"
  //   updatePromise.then((result) => console.log(result)).catch((error) => console.log(error));

  //menghapus suatu data
  //   db.collection("test")
  //     .deleteOne({
  //       nama: "player game 4no",
  //     })
  //     .then((result) => {
  //       console.log(result);
  //     })
  //     .catch((error) => {
  //       console.log(error);
  //     });
});
