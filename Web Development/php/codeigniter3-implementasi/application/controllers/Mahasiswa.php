<?php
//config folder: routes: untuk set routing controller, autoload: untuk set suatu hal secara otomatis (salah satunya database), database: mengatur konfigurasi database
//untuk controller, extends CI_Controller
class Mahasiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //untuk load model
        $this->load->model("Mahasiswa_model");
        //module form validation
        $this->load->library('form_validation');
    }
    
    public function index() {
        $data["title"] = "Data Mahasiswa";
        $data["students"] = $this->Mahasiswa_model->getAllMahasiswa();

        if( $this->input->post('keyword') ) {
            $data["students"] = $this->Mahasiswa_model->cariDataMahasiswa();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data["title"] = "Tambah Data";

        //set rules form validation
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('NIM', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_emails');
        $this->form_validation->set_rules('Jurusan', 'Jurusan', 'required');

        //hal yang akan dilakukan jika validation form tidak valid atau sebaliknya
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');

        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            redirect('mahasiswa');
        }
    }

    public function hapus($id) {

        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        redirect('mahasiswa');
    }

    public function detail($id) {
        $data["title"] = "Detail Data Mahasiswa";
        $data["detail"] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id) {
        $data["title"] = "Update Data";
        $data["student"] = $this->Mahasiswa_model->getMahasiswaById($id);

        //set rules form validation
        $this->form_validation->set_rules('Nama', 'Nama', 'required');
        $this->form_validation->set_rules('NIM', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('Email', 'Email', 'required|valid_emails');
        $this->form_validation->set_rules('Jurusan', 'Jurusan', 'required');

        //hal yang akan dilakukan jika validation form tidak valid atau sebaliknya
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');

        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            redirect('mahasiswa');
        }
    }
}