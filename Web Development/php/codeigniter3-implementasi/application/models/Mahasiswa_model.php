<?php

//untuk model, extends CI_model
class Mahasiswa_model extends CI_model {

    //pada dokumentasi, petunjuk lebih lanjut untuk mengambil data pada database dapat dilihat pada Query Builder
    //setelah data diambil, untuk mendapatkan data, pada dokumentasi dapat dilihat petunjuk syntax nya di Generating query results
    public function getAllMahasiswa() {

        //mengambil data dan mendapatkan data dalam bentuk array
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa() {
        //untuk keamanan, pada CodeIgniter, gunakan pemasukan input seperti dibawah
        $data = [
            "Nama" => $this->input->post('Nama', true),
            "NIM" => $this->input->post('NIM', true),
            "Email" => $this->input->post('Email', true),
            "Jurusan" => $this->input->post('Jurusan', true),
            "gambar" => 'anehlo.jpg',
        ];

        //syntax tambah data => $this->db->insert('namatabel', datayangdiinput)
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id) {

        //$this->db->where('namarowtableid', valueid); untuk menjalankan syntax where
        // $this->db->where('ID', $id);

        //$this->db->delete('namatable', isi syntax where); menjalankan syntax hapus data berdasarkan where
        $this->db->delete('mahasiswa', ['ID' => $id]);
    }

    public function getMahasiswaById($id) {

        //$this->db->get_where('namatable', [isi dari syntax where])->row_array(); mengambil data berdasarkan where
        return $this->db->get_where('mahasiswa', ['ID' => $id])->row_array();
    }
    
    public function ubahDataMahasiswa() {
        //untuk keamanan, pada CodeIgniter, gunakan pemasukan input seperti dibawah
        $data = [
            "Nama" => $this->input->post('Nama', true),
            "NIM" => $this->input->post('NIM', true),
            "Email" => $this->input->post('Email', true),
            "Jurusan" => $this->input->post('Jurusan', true),
            "gambar" => 'anehlo.jpg',
        ];

        $this->db->where('ID', $this->input->post('ID'));
        
        //syntax update data => $this->db->update('namatabel', dataterbaru)
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa() {
        $keyword = $this->input->post('keyword', true);

        //$this->db->like('namarowtable', katakunci) = mengambil data yang sama persis seperti katakunci pada suatu rowtable
        //$this->db->or_like("namarowtable", katakunci) = mengambil data yang sama persis seperti katakunci pada suatu rowtable, namun tidak ditemukan pada pencarian di rowtable sebelumnya
        $this->db->like('Nama', $keyword);
        $this->db->or_like('NIM', $keyword);
        $this->db->or_like('Jurusan', $keyword);
        $this->db->or_like('Email', $keyword);

        return $this->db->get('mahasiswa')->result_array();
    }
}