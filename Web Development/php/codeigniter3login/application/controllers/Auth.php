<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('form_validation');
    
    }

    private function _login() {

        //mengambil inputan email dan password di login dari user
        $email = $this->input->post('Email');
        $password = $this->input->post('Password');

        //mengambil data email di database berdasarkan inputan user
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if( $user ) {

            if( $user['is_active'] == 1 ) {

                if( password_verify( $password, $user['password'] ) ) {
                    
                    //memasukkan data ke session jika email tersedia dan telah diaktivasi, dan password yang dimasukkan benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    //lakukan seleksi, jika user role id nya 1, maka masuk ke admin, jika tidak melainkan 2, maka masuk keuser
                    if( $user['role_id'] == 1 ) redirect('admin');
                    else redirect('user');

                } else {

                    //membuat flash data jika password yang dimasukkan salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Password is wrong</strong>
                                        </div>');
                    redirect('auth');

                }

            } else {

                //membuat flash data jika email belum diaktivasi
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                                            <strong>This email has not been activated</strong>
                                        </div>');
                redirect('auth');

            }
        } else {

            //membuat flash data jika email tidak tersedia
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Email isnt registered!</strong>
                                        </div>');
            redirect('auth');

        }

    }

    public function index() {

        is_logout();

        //menetapkan rules untuk form validation
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('Password', 'Password', 'required|trim');

        if( $this->form_validation->run() ) {

            //hal yang terjadi jika rules sesuai
            $this->_login();

        } else {

            //hal yang terjadi jika rules tidak sesuai
            $data["Title"] = "Login";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');

        }
    }
    
    public function registration() {

        is_logout();

        //set rules untuk form validation
        $this->form_validation->set_rules('Name', 'Name', 'required|trim');
        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email has already registered']);
        $this->form_validation->set_rules('Password', 'Password', 'required|trim|min_length[3]|matches[confirmPassword]', ['matches' => "password don't match!", 'min_length' => 'password too short!']);
        $this->form_validation->set_rules('confirmPassword', 'Password', 'required|trim|matches[Password]', ['matches' => "password don't match!"]);

        if( $this->form_validation->run() ) {

            //hal yang terjadi jika rules sesuai
            $data = [
                'name' => htmlspecialchars($this->input->post('Name', true)),
                'email' => htmlspecialchars($this->input->post('Email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time() 
            ];

            //siapkan token untuk aktivasi akun user
            //random_bytes(banyakkarakteryangdiinginkan): membangkitkan karakter random yang dibentuk oleh sistem
            //random_bytes ini nantinya akan mengembalikan karakter dalam bentuk bytes, yang tentunya saat ditampilkan, karakter tersebut tidak dapat dibaca oleh user
            //gunakan base64_encode(karakterrandom) untuk menerjemahkan karakter random tersebut
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $data['email'], //data email yang akan dikirim ke user 
                'token' => $token,  //data token yang akan digunakan user untuk aktivasi
                'date_created' => $data['date_created'] //data ini berguna jika kita ingin kode aktivasi yang diberikan terdapat expired nya
            ];
            
            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify'); 
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Account has been created! Check email to activate your account</strong>
                                        </div>');
            redirect('auth');

        } else {

            //hal yang terjadi jika rules yang ditetapkan tidak sesuai
            $data["Title"] = "Registration";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');

        }
    }

    private function _sendEmail( $token, $type ) {

        //buat konfigurasinya terlebih dahulu
        $config = [
            'protocol' => 'smtp', //protocol yang digunakan untuk mengirim email (disarankan smtp (simple mail transfer protocol))
            'smtp_host' => 'ssl://smtp.googlemail.com', //smtp host yang akan digunakan
            'smtp_user' => 'goldenwise24434@gmail.com', //email user yang akan dikirimkan 
            'smtp_pass' => 'tpifuggqtznwkhxp', //password: didapatkan dengan mengklik profil google, kemudian klik kelola akun google anda, klik keamanan, di bagian login ke google, klik sandi aplikasi (pastikan verifikasi 2 langkah telah dilakukan), masukkan sandi email, kemudian pilih aplikasi, dan terakhir pilih buat, google akan mengirimkan sandi aplikasi, salin dan gunakan itu sebagai password
            'smtp_port' => 465, //port
            'mailtype' => 'html', //type mail
            'charset' => 'utf-8', //set char yang digunakan (disarankan utf-8)
            'newline' => "\r\n" //new line
        ];

        //load library email
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('goldenwise24434@gmail.com', 'admin codeigniter');
        $this->email->to($this->input->post('Email'));

        if( $type == 'verify' ) {

            $this->email->subject('Account Verification');
            $this->email->message('<a href="'.base_url('auth/verify?email=').$this->input->post('Email').'&token='.urlencode($token).'">Click here to activate your account!</a>');

        } else if( $type == 'forgot' ) {

            $this->email->subject('Reset Password');
            $this->email->message('<a href="'.base_url('auth/resetPassword?email=').$this->input->post('Email').'&token='.urlencode($token).'">Click here to reset your password!</a>');

        }

        if( $this->email->send() ) return true;
        else {

            echo $this->email->print_debugger();
            die;

        }

    }

    public function resetPassword() {

        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if( $user ) {

            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if( $user_token ) {

                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Reset Password failed! Invalid Token</strong>
                                        </div>');
                redirect('auth');

            }

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Reset Password failed! Wrong Email</strong>
                                        </div>');
            redirect('auth');

        }
    }

    public function changePassword() {

        if(!$this->session->userdata('reset_email') ) redirect('auth');

        $this->form_validation->set_rules('new_password', 'Password', 'required|trim|min_length[3]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Password', 'required|trim|matches[new_password]');
        
        if( !$this->form_validation->run() ) {

            $data["Title"] = "Change Password";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change_password');
            $this->load->view('templates/auth_footer');

        } else {

            $password = password_hash($this->input->post('new_password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Password has been change! Try to login</strong>
                                        </div>');
            redirect('auth');
            
        }

    }

    public function verify() {

        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if( $user ) {

            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
            if( $user_token ) {

                if( time() - $user_token['date_created'] < (60 * 60 * 24) ) {

                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Activation Success! Login now if you want</strong>
                                        </div>');
                    redirect('auth');

                } else {

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Token Expired. Registration again to get activation</strong>
                                        </div>');
                    redirect('auth');
                
                }

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Token Invalid</strong>
                                        </div>');
                redirect('auth');
            }

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Email not registered first</strong>
                                        </div>');
            redirect('auth');

        }
    }

    public function logout() {
        
        //menghilangkan session
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>You have been logged out!</strong>
                                        </div>');
        redirect('auth');
    }

    public function blocked() {

        $this->load->view('auth/blocked');

    }

    public function forgotPassword() {

        $this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email');

        if( !$this->form_validation->run() ) {

            $data["Title"] = "Forgot Password";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgot_password');
            $this->load->view('templates/auth_footer');

        } else {

            $email = $this->input->post('Email');
            if( $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array() ) {

                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email, 
                    'token' => $token, 
                    'date_created' => time()
                ];
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Check your email to reset your password (expired in 24 hours)</strong>
                                        </div>');
                redirect('auth/forgotPassword');
                
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Email is not activated or not registered yet</strong>
                                        </div>');
                redirect('auth/forgotPassword');

            }

        }
        
    }
}