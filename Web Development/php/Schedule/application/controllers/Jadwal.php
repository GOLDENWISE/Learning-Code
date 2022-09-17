<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }

    public function index() {

        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        $data["title"] = "Jadwal";
        $data["Learnings"] = file_get_contents(FCPATH.'/Data/data.json');
        $data["Learnings"] = json_decode($data['Learnings'], true);
        $data["Learnings"] = $data["Learnings"][$userdata['namatable']];
        if( $data["Learnings"] ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $userdata);
            $this->load->view('templates/brand');
            $this->load->view('jadwal/index', $data);
            $this->load->view('templates/footer');

        } else {
            
            $this->session->set_flashdata('message', 'Jadwal tidak tersedia! Tambahkan jadwal terlebih dahulu');
            $this->session->set_flashdata('type', 'warning');
            redirect('index.php/Jadwal/tambah');

        } 

    }

    public function tambah() {

        $data["title"] = "Tambah Jadwal";
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('senin', 'Senin', 'required');
        $this->form_validation->set_rules('selasa', 'Selasa', 'required');
        $this->form_validation->set_rules('rabu', 'Rabu', 'required');
        $this->form_validation->set_rules('kamis', 'Kamis', 'required');
        $this->form_validation->set_rules('jumat', 'Jumat', 'required');

        $studyData = json_decode(file_get_contents(FCPATH.'/Data/data.json'), true);
        
        if( !isset($studyData[$userdata['namatable']]) ) {
            $data["Learnings"] = [
                'Senin'=>'',
                'Selasa'=>'',
                'Rabu'=>'',
                'Kamis'=>'',
                'Jumat'=>''
            ];
        } else {

            $data["Learnings"] = [
                'Senin'=> implode(',', $studyData[$userdata['namatable']]['Senin']),
                'Selasa'=> implode(',', $studyData[$userdata['namatable']]['Selasa']),
                'Rabu'=> implode(',', $studyData[$userdata['namatable']]['Rabu']),
                'Kamis'=> implode(',', $studyData[$userdata['namatable']]['Kamis']),
                'Jumat'=> implode(',', $studyData[$userdata['namatable']]['Jumat'])
            ];

        }
        
        if( !$this->form_validation->run() ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $userdata);
            $this->load->view('templates/brand');
            $this->load->view('jadwal/tambah', $data);
            $this->load->view('templates/footer');
        
        } else {


            $Senin = explode(',', $this->input->post('senin'));
            $Selasa = explode(',', $this->input->post('selasa'));
            $Rabu = explode(',', $this->input->post('rabu'));
            $Kamis = explode(',', $this->input->post('kamis'));
            $Jumat = explode(',', $this->input->post('jumat'));

            $studyData[$userdata['namatable']] = [
                'Senin'=>$Senin,
                'Selasa'=>$Selasa,
                'Rabu'=>$Rabu,
                'Kamis'=>$Kamis,
                'Jumat'=>$Jumat
            ];

            $studyData = json_encode($studyData, JSON_PRETTY_PRINT);
            file_put_contents(FCPATH.'/Data/data.json', $studyData);
            $this->session->set_flashdata('message', 'Jadwal berhasil ditambahkan atau diubah');
            $this->session->set_flashdata('type', 'success');
            redirect('index.php/Jadwal/index');
        }

    }

}