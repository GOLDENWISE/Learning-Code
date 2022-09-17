<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }

    public function index() {

        $data['title'] = 'Profile';
        $userdata = $this->db->get_where('datauser', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/brand');
        $this->load->view('Profile/index', $userdata);
        $this->load->view('templates/footer');

    }

    public function username( $id ) {

        $this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|is_unique[datauser.username]');
        if( $this->form_validation->run() ) {

            $this->load->dbforge();
            $this->dbforge->rename_table($this->db->get_where('datauser', ['id' => $id])->row_array()['namatable'], strtolower('nt'.$this->input->post('username')));
            $this->db->set([
                'username' => $this->input->post('username'),
                'namatable' => strtolower('nt'.$this->input->post('username'))
            ]);
            $this->db->where('id', $id);
            $this->db->update('datauser');

        } 
        redirect('index.php/Profile/index');
            
    }

    public function image( $id = -1 ) {

        $data = $this->db->get_where('datauser', ['id' => $id])->row_array();
        if( !$data ) redirect('index.php/Profile/index');
        $img = $_FILES;
        if( $img["img"]["name"] != "" ) {

            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $this->load->library('upload', $config);
            
            if( $this->upload->do_upload('img') ) {

                $old_image = $data['img'];
                if( $old_image != 'default.jpg' ) unlink( FCPATH . 'assets/img/' . $old_image ); //FCPATH merupakan variabel constant untuk mengetahui direktori folder web kita berada

                $new_image = $this->upload->data('file_name');
                $this->db->set('img', $new_image);
                $this->db->where('id', $id);
                $this->db->update('datauser');

            } else {

                echo $this->upload->display_errors();

            }

        }
        redirect('index.php/Profile/index');

    } 

}