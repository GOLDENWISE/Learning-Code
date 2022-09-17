<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }

    public function index() {

        $data["title"] = "Daftar Tugas";
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        $data['tugas'] = $this->db->get($userdata['namatable'])->result_array();
        if( !$data['tugas'] ) {

            if( $this->session->flashdata("type") == 'success' ) {

                redirect('index.php/Tugas/tambah');

            } else {
                
                $this->session->set_flashdata('message', 'Tidak ada tugas!');
                $this->session->set_flashdata('type', 'warning');
                redirect('index.php/Tugas/tambah');
            
            }

        } 
        $i = 0;
        foreach( $data['tugas'] as $d ) {

            $data['tugas'][$i]['sisa'] = ($d['deadline'] - time()) > 0 ? round(($d['deadline'] - time())/(60*60*24)).' hari lagi' : 'TERLAMBAT' ;
            $data['tugas'][$i]['deadline'] = date("l, d M Y", $d['deadline']);
            $i++;

        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $userdata);
        $this->load->view('templates/brand');
        $this->load->view('tugas/index', $data);
        $this->load->view('templates/footer');

    }
    
    public function tambah() {

        $data["title"] = "Tambah Tugas";
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();

        $studyData["Learnings"] = json_decode(file_get_contents(FCPATH.'Data/data.json'), true)[$userdata['namatable']];

        if( !$studyData["Learnings"] ) {

            $this->session->set_flashdata('message', 'Mata Pelajaran belum didaftarkan!');
            $this->session->set_flashdata('type', 'warning');
            redirect('index.php/Jadwal/tambah');
        } 

        $mapel = [];
        $i = 0;
        foreach( $studyData["Learnings"] as $studyData ) {
            
            foreach( $studyData as $study ) {

                $mapel[$i] = $study;
                $i++;

            }

        }

        $data['mapel'] = array_unique($mapel); //function untuk mengambil data array yang unik atau berbeda

        $this->form_validation->set_select('matapelajaran', 'Mata Pelajaran', 'required'); //rules validation untuk select
        $this->form_validation->set_select('tipe', 'Type', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required');
        $this->form_validation->set_rules('time', 'Waktu', 'required'); 

        if( !$this->form_validation->run() ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $userdata);
            $this->load->view('templates/brand');
            $this->load->view('tugas/tambah', $data);
            $this->load->view('templates/footer');

        } else {

            $time = explode('-', $this->input->post('deadline'));
            $deadline = mktime(0, 0, 0, $time[1], $time[2], $time[0]);

            $tugas = [
                'id' => '',
                'matapelajaran' => $this->input->post('matapelajaran'),
                'deadline' => $deadline,
                'description' => $this->input->post('description'),
                'tipe' => $this->input->post('tipe'),
                'time' => $this->input->post('time')
            ];

            $this->db->insert($userdata['namatable'], $tugas);
            $this->session->set_flashdata('message', 'Mata Pelajaran berhasil ditambahkan!');
            $this->session->set_flashdata('type', 'success');
            redirect('index.php/Tugas/index');

        }

    }

    public function delete( $id = -1 ) {

        $this->db->delete($this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array()['namatable'], ['id' => $id]);
        $this->session->set_flashdata('message', 'Mata Pelajaran berhasil dihapus');
        $this->session->set_flashdata('type', 'success');
        redirect('index.php/Tugas/index');

    }

    public function update( $id = -1 ) {
        
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        $data = $this->db->get_where($userdata['namatable'], ['id' => $id])->row_array();
        $data['deadline'] = date('Y-m-d', $data['deadline']);
        if( !$data ) redirect('index.php/Tugas/index');

        $studyData["Learnings"] = json_decode(file_get_contents(FCPATH.'Data/data.json'), true)[$userdata['namatable']];

        if( !$studyData["Learnings"] ) {

            $this->session->set_flashdata('message', 'Mata Pelajaran belum didaftarkan!');
            $this->session->set_flashdata('type', 'warning');
            redirect('index.php/Jadwal/tambah');
            
        } 

        $mapel = [];
        $i = 0;
        foreach( $studyData["Learnings"] as $studyData ) {
            
            foreach( $studyData as $study ) {

                $mapel[$i] = $study;
                $i++;

            }

        }

        $data['mapel'] = array_unique($mapel);
        $data['title'] = 'Update';

        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required');

        if( !$this->form_validation->run() ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $userdata);
            $this->load->view('templates/brand');
            $this->load->view('tugas/update', $data);
            $this->load->view('templates/footer');
            
        } else {

            $time = explode('-', $this->input->post('deadline'));
            $deadline = mktime(0, 0, 0, $time[1], $time[2], $time[0]);

            $this->db->where('id', $id);
            $this->db->update($userdata['namatable'], [
                'matapelajaran' => $this->input->post('matapelajaran'),
                'deadline' => $deadline,
                'description' => $this->input->post('description'),
                'tipe' => $this->input->post('tipe'),
                'time' => $this->input->post('time')
            ]);
            $this->session->set_flashdata('message', 'Mata Pelajaran berhasil diupdate!');
            $this->session->set_flashdata('type', 'success');
            redirect('index.php/Tugas/index');

        }

    }
}