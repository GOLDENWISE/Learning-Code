<?php
class Mahasiswa extends Controller {
    public function index() {
        $data["title"] = "Mahasiswa";
        $this->view('templates/header', $data);
        $data["mhs"] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data["title"] = "Detail Mahasiswa";
        $this->view('templates/header', $data);
        $data["mhs"] = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if(  $this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        }
    }

    public function hapus($id) {
        if(  $this->model("Mahasiswa_model")->deleteMahasiswaById($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        }
    }

    public function getubah() {
        //json_encode(data yang ingin dioutput menjadi json);
        echo json_encode($this->model("Mahasiswa_model")->getMahasiswaById($_POST["id"]));
    }

    public function ubah() {
        if(  $this->model("Mahasiswa_model")->ubahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header("Location: http://localhost/phpmvc/public/Mahasiswa");
            exit;
        }
    }

    public function cari() {
        $data["title"] = "Mahasiswa";
        $this->view('templates/header', $data);
        $data["mhs"] = $this->model("Mahasiswa_model")->cariDataMahasiswa($_POST["keyword"]);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}