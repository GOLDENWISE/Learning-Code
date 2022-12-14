<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }

    public function index() {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');

    }

    public function role() {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role';

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');

    }

    public function roleaccess($role_id) {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Role Access';

        $data['role'] = $this->db->get_where('user_role', [
            'id' => $role_id
        ])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/footer');

    }

    public function changeaccess() {

        $role_id = $this->input->post('roleId');
        $menu_id = $this->input->post('menuId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if( $result->num_rows() < 1 ) {
            
            $this->db->insert('user_access_menu', $data);
        }
        else {
            
            $this->db->delete('user_access_menu', $data);

        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Access changed!</strong>
                                        </div>');

    }
}