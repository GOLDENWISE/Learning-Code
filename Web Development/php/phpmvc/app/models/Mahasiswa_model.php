<?php
class Mahasiswa_model {

    private $namaTable = "mahasiswa",
            $db; //properti yang nantinya akan digunakan untuk menampung isi dari Class Database

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query("SELECT * FROM {$this->namaTable}");
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        //jangan gunakan $id, gunakan =:id agar data yang dimasukkan nantinya dibinding
        $this->db->query("SELECT * FROM {$this->namaTable} WHERE ID=:id");
        //saat membinding value, syntax diatas->("SELECT * FROM namatabelyangdigunakan WHERE (namaidentitasyangakandigunakan(bisaberupanamaatausemacamnya)=:parameterdalambinding))
        
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) {
        $this->db->query("INSERT INTO {$this->namaTable} VALUES ('', :Nama, :NIM, :Email, :Jurusan, 'anehlo.jpg')");
        
        $this->db->bind('Nama', $data["Nama"]);
        $this->db->bind('NIM', $data["NIM"]);
        $this->db->bind('Email', $data["Email"]);
        $this->db->bind('Jurusan', $data["Jurusan"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMahasiswaById($id) {
        $this->db->query("DELETE FROM mahasiswa WHERE ID = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data) {
        $this->db->query("UPDATE mahasiswa SET
                            Nama=:Nama, NIM=:NIM, Email=:Email, Jurusan=:Jurusan WHERE ID=:ID");
        $this->db->bind("ID", $data["id"]);
        $this->db->bind('Nama', $data["Nama"]);
        $this->db->bind('NIM', $data["NIM"]);
        $this->db->bind('Email', $data["Email"]);
        $this->db->bind('Jurusan', $data["Jurusan"]);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa($keyword) {
        $this->db->query("SELECT * FROM mahasiswa WHERE Nama LIKE :keyword");
        $this->db->bind("keyword", "%$keyword%");
        return $this->db->resultSet();
    }
}