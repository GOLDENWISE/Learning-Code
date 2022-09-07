<?php

class Database {

    //koneksi ke database menggunakan metode PDO (metode database : mysqli, mysql, pdo)

    private $db = DB_HOST,
            $username = DB_USER,
            $password = DB_PASS,
            $dbname = DB_NAME,
            $dbh, //database handler: menampung koneksi ke database
            $stmt; //statement: untuk menyimpan query
    
    public function __construct() {
        $dsn = "mysql:host={$this->db};dbname={$this->dbname}"; // identitas database. syntax=> "mysql:host=localhost;dbname=namadatabaseyangdigunakan"
        
        //buat sebuah variabel yang nantinya akan membuat database bekerja dengan optimal
        //isi dari variabel ini berupa konfigurasi untuk database 

        $option = [
            PDO::ATTR_PERSISTENT => true, //gunakan syntax ini untuk membuat database yang akan dijalankan koneksinya terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //digunakan untuk menampilkan error pada database jika terjadi
        ];

        try {
            //syntax untuk koneksi ke PDO --> dbh = new PDO(namavariabelidentitasdatabase, username, password, option(variabel yang berisi hal - hal yang dapat kita manfaatkan untuk mengoptimasi database));
            $this->dbh = new PDO($dsn, $this->username, $this->password, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    //method query: nantinya akan digunakan untuk mengelola database (mengisi, menghapus, mengambil, mengubah)
    public function query($query) {
        
        //gunakan syntax dibawah untuk mengelola database
        $this->stmt = $this->dbh->prepare($query);
        //penjelasan syntax: $this->stmt : variabel yang akan mengambil data yang diambil
                        //   $this->dbh: object dari pdo, yang mana sebelumnya dbh ini diinstantiasi ke class PDO dari php ini sendiri
                        //               yang mana hasil dari instantiasinya adalah hasil koneksi dari php ini ke database
                        //   prepare(): method pada PDO yang nantinya akan digunakan untuk menjalankan operasi untuk mengelola database sesuai perintah mysql
                        //   $query : berisi syntax mysql yang nantinya akan digunakan untuk mengisi, mengupdate, menghapus, melihat
        
    }

    //buat function yang akan melakukan binding data: syntax yang diinginkan user dibinding (INSERT INTO values=...) dan sejenisnya
    //hal ini dilakukan agar programmer terhindar dari sql injection
    public function bind($param, $value, $type = null) {
        if( is_null($type) ) {
            //lakukan pengecekan type data suatu value dengan mendeteksi tipe data dari value terlebih dahulu, untuk menyaring parameter yang dikirimkan
            //tipe data dari suatu value akan dikirimkan ke variabel type
            switch( true ) {
                case is_int($value) : 
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default : $type = PDO::PARAM_STR;
            }
        }

        //lakukan bind pada query yang akan dikirimkan
        //bindValue ini juga sama dengan membersihkan string yang akan dikirimkan (string ini bertindak sebagai syntax mysql atau disebut sebagai query)
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        //setelah diolah sebelumnya dengan menggunakan PDO, data yang diolah tersebut harus dieksekusi terlebih dahulu
        $this->stmt->execute();
    }

    //jika data yang ingin dikeluarkan banyak, maka jalankan method berikut
    public function resultSet() {
        $this->execute();
        
        //jalankan data yang diolah lebih dari satu
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //jika data yang ingin dikeluarkan hanya satu, maka jalankan method berikut
    public function single() {
        $this->execute();

        //jalankan data yang diolah hanya satu
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    //gunakan method ini untuk mengetahui baris yang berubah (bertambah atau tetap)
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}