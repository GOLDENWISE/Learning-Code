<?php

class Home extends CI_Controller {

    public function index($nama = '') {
        //untuk mengeluarkan view pada framework codeigniter, gunakan syntax $this->load->view("halaman yang diakses");
        $data["title"] = 'Home';
        $data["nama"] = $nama;
        $this->load->view("templates/header", $data);
        $this->load->view("home/index", $data);
        $this->load->view("templates/footer");
    }


}