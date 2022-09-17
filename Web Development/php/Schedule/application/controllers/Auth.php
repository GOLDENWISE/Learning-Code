<?php

class Auth extends CI_Controller {

    private function _sendEmail( $token, $type ) {

        $config = [
            'protocol' => 'smtp', 
            'smtp_host' => 'ssl://smtp.googlemail.com', 
            'smtp_user' => 'scheduleapp123@gmail.com', 
            'smtp_pass' => 'esefzmwjcwhruaeg', 
            'smtp_port' => 465,
            'mailtype' => 'html', 
            'charset' => 'utf-8', 
            'newline' => "\r\n" 
        ];

        $this->email->initialize($config);
        $this->email->from('scheduleapp123@gmail.com', 'Admin Schedule App');
        $this->email->to($this->input->post('email'));

        if( $type == 'verify' ) {

            $this->email->subject('Account Verification');
            $this->email->message('
                <h1>Verify Your Account</h1>
                <p> Thanks for registration your account in my website. Before you login, please
                    <a href="'. base_url('index.php/Auth/verify?email=').$this->input->post('email').'&token='.urlencode($token).'">
                        Click Here
                    </a>
                to activate your account. expired in 1 day (24 hours).</p>
            ');

        } else if( $type == 'reset' ) {

            $this->email->subject('Reset Password');
            $this->email->message('
                <h1>Reset Password</h1>
                <p> If you have click forgot password,
                    <a href="'. base_url('index.php/Auth/reset?email=').$this->input->post('email').'&token='.urlencode($token).'">
                        Click Here
                    </a>
                to reset your password. always use this link if you want to reset your password again or you can get new link in Schedule App Login Form</p>
            ');

        }

        if( $this->email->send() ) return TRUE;
        else {

            echo $this->email->print_debugger();
            die;

        }

    }

    public function index() {
        
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required|min_length[5]|max_length[20]');
        if( !$this->form_validation->run() ) {

            $data["title"] = "LOGIN";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/authfooter', $data);

        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $data = $this->db->get_where('datauser', ['email' => $email])->row_array();
            if ( $data ) {

                if( password_verify($password, $data['password']) ) {

                    if( $data['is_active'] == 1 ) {

                        $this->session->set_userdata(['email' => $email]);
                        redirect('index.php/Home');

                    } else {

                        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Login failed!</strong> Your account not activated!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
                        $this->session->set_userdata('email', $email);
                        redirect('index.php/Auth');

                    }

                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Login failed!</strong> Wrong password!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                    $this->session->set_userdata('email', $email);
                    redirect('index.php/Auth');

                }

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login failed!</strong> Wrong email!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                $this->session->set_userdata('email', $email);
                redirect('index.php/auth');

            }

        }

    }

    public function register() {

        $this->form_validation->set_rules('username', 'Username', 'required|max_length[10]|is_unique[datauser.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[datauser.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]|matches[confirmpassword]');
        $this->form_validation->set_rules('confirmpassword', 'Password', 'required|min_length[5]|max_length[20]|matches[password]');

        if( !$this->form_validation->run() ) {
            
            $data["title"] = "REGISTRATION";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/authfooter');

        } else {

            $namatable = 'NT'.$this->input->post('username');
            $token = base64_encode(random_bytes(32));
            $inputdata = [

                "id" => "",
                "username" => htmlspecialchars($this->input->post('username', true)),
                "email" => htmlspecialchars($this->input->post('email', true)),
                "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                "namatable" => strtolower($namatable),
                "is_active" => 0,
                "img" => "default.jpg",
                "date_created" => time(),
                "token" => $token

            ];
            $this->db->insert('datauser', $inputdata);
            $this->_sendEmail($token, 'verify'); 
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registration Sucess!</strong> Check email untuk verifikasi!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('index.php/Auth');

        }
        
    }

    public function verify() {

        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $data = $this->db->get_where('datauser', ['email' => $email])->row_array();
        if( $data ) {

            if( $data['token'] == $token ) {

                if( time() - $data['date_created'] <= (60*60*24) && $data['is_active'] != 1 ) {

                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('datauser');
                    $this->load->dbforge();
                    $fields = [
                        'id' => [
                            'type' => 'INT',
                            'auto_increment' => TRUE
                        ],
                        'matapelajaran' => [
                            'type' => 'VARCHAR',
                            'constraint' => '100' 
                        ],
                        'deadline' => [
                            'type' => 'VARCHAR',
                            'constraint' => '100' 
                        ],
                        'description' => [
                            'type' => 'VARCHAR',
                            'constraint' => '200' 
                        ],
                        'tipe' => [
                            'type' => 'VARCHAR',
                            'constraint' => '10'
                        ],
                        'time' => [
                            'type' => 'VARCHAR',
                            'constraint' => '6' 
                        ]
                    ];
                    $namatable = $data['namatable'];
                    $this->dbforge->add_field($fields);
                    $this->dbforge->add_key('id', TRUE);
                    $this->dbforge->create_table($namatable);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Activation Success! Login now if you want</strong>
                                        </div>');
                    redirect('index.php/Auth');

                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Token Expired. Registration again</strong>
                                            <strong>Or, you already activation. try to login</strong>
                                        </div>');
                    redirect('index.php/Auth');

                }

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Wrong Token</strong>
                                        </div>');
                redirect('index.php/Auth');

            } 

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Activation failed! Email not found. Registration again</strong>
                                        </div>');
            redirect('index.php/Auth');

        }

    }

    public function logout() {

        redirect('index.php/Auth');

    }

    public function forgot() {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if( !$this->form_validation->run() ) {

            $data['title'] = 'Forgot Password';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/forgot', $data);
            $this->load->view('templates/authfooter', $data);

        } else {

            $token = base64_encode(random_bytes(32));
            $this->db->set('token', $token);
            $this->db->where('email', $this->input->post('email'));
            $this->db->update('datauser');
            $this->_sendEmail($token, 'reset');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Your reset password link already send! Check your email</strong>
                                        </div>');
            redirect('index.php/Auth');
        }

    }

    public function reset() {

        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $data = $this->db->get_where('datauser', ['email'=>$email]);
        if( $data ) {

            $data = $data->row_array();
            if( $token == $data['token'] ) {

                $this->form_validation->set_rules('password', 'Password', 'required|matches[confirmpassword]');
                $this->form_validation->set_rules('confirmpassword', 'Password', 'required|matches[password]');
                if( !$this->form_validation->run() ) {

                    $data['title'] = 'Reset Password';
                    $this->load->view('templates/header', $data);
                    $this->load->view('auth/reset');
                    $this->load->view('templates/authfooter');

                } else {

                    $password = $this->input->post('password');
                    $this->db->set('password', $password);
                    $this->db->where('email', $email);
                    $this->db->update('datauser');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                                            <strong>Reset Password Success! Try to login</strong>
                                        </div>');
                    redirect('index.php/Auth');

                }

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Reset failed! Token false. Try again</strong>
                                        </div>');
                redirect('index.php/Auth');

            }

        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                                            <strong>Reset failed! Email not found. Please do registration</strong>
                                        </div>');
            redirect('index.php/Auth');

        }

    }

}