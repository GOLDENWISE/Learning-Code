<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        
        is_logged_in();

        $data["title"] = "Home";
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $userdata);

    }

}