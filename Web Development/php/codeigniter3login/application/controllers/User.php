<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {

        parent::__construct();
        is_logged_in();

    }

    public function index() {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'My Profile';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');

    }

    public function edit() {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Profile';

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if( !$this->form_validation->run() ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');

        } else {

            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek jika terdapat gambar yang diupload
            $upload_image = $_FILES['image']['name'];
            
            if( $upload_image ) {

                $config['upload_path'] = './assets/img';//tempat file yang diupload akan ditempatkan (. = routes dari localhost/folderweb)
                $config['allowed_types'] = 'gif|jpg|png'; //tipe file yang akan diupload
                $config['max_size']     = '2048';//satuan kb
                // $config['max_width'] = '1024'; //max-width khusus file photo yang diizinkan (px)
                // $config['max_height'] = '768'; //max-height khusus file photo yang diizinkan (px)
                $this->load->library('upload', $config);

                //$this->upload->do_upload('image'): merupakan method yang digunakan oleh Code Igniter untuk mengirimkan file sesuai config
                if( $this->upload->do_upload('image') ) {

                    $old_image = $data['user']['image'];
                    //unlink(pathdatayangakandihapus): merupakan method dari Code Igniter yang berguna untuk menghapus data pada direktori
                    if( $old_image != 'default.jpg' ) unlink( FCPATH . 'assets/img/' . $old_image ); //FCPATH merupakan variabel constant untuk mengetahui direktori folder web kita berada

                    //jika data berhasil dikirim, nama file yang dikirimkan tadi dikirim ke database
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);

                } else {

                    //jika gagal, error ditampilkan
                    echo $this->upload->display_errors();

                }

            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Your profile has been updated!</strong>
                                        </div>');
            redirect('user');

        }

    }

    public function changepassword() {

        //mengambil data dari user berdasarkan emailnya dari database
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Change Password';

        $this->form_validation->set_rules('current_password', 'Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'Password', 'required|trim|min_length[3]|matches[confirm_password]', ['matches' => "password don't match!", 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|matches[confirm_password]', ['matches' => "password don't match!"]);

        if( !$this->form_validation->run() ) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        
        } else {

            $current_password = $this->input->post('current_password');
            if( !password_verify($current_password, $data['user']['password']) ) {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Wrong Password!</strong>
                                        </div>');
                redirect('user/changepassword');

            } else {

                $new_password = $this->input->post('new_password');
                if( $current_password == $new_password ) {

                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                                            <strong>Your Old password and New password is same!</strong>
                                        </div>');
                    redirect('user/changepassword');

                } else {

                    $passwordHash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $passwordHash);
                    $this->db->where('email', $data['user']['email']);
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Password has been change!</strong>
                                        </div>');
                    redirect('user/changepassword');

                }

            }

        }


    }
}